// Renders an animation page to PNG frames and encodes MP4 (H.264, 30 fps).
// Usage: node render.js <page.html> [width] [height] [out.mp4] [blurSamples]
//   node render.js moya-planeta-logo-3d.html 1920 1080 moya-planeta-3d-1920x1080.mp4 3
const { chromium } = require("playwright");
const fs = require("fs"), os = require("os"), path = require("path"), { execFileSync } = require("child_process");
(async () => {
  const page_ = process.argv[2] || "moya-planeta-logo-3d.html";
  const W = +process.argv[3] || 1920, H = +process.argv[4] || 1080;
  const out = path.resolve(process.argv[5] || `${path.basename(page_, ".html")}-${W}x${H}.mp4`);
  const samples = +process.argv[6] || 3;
  const dir = fs.mkdtempSync(path.join(os.tmpdir(), "mp-frames-"));
  // WebGL in headless Chromium runs on SwiftShader (software) when no GPU is present.
  const browser = await chromium.launch({ args: ["--use-gl=angle", "--use-angle=swiftshader", "--enable-unsafe-swiftshader"] });
  const page = await browser.newPage({ viewport: { width: W, height: H } });
  page.on("pageerror", e => console.error(e));
  await page.goto("file://" + path.resolve(__dirname, page_) + `?capture&w=${W}&h=${H}`);
  await page.evaluate(() => window.ready);
  const { D, F } = await page.evaluate(() => ({ D: window.DURATION, F: window.FPS }));
  const N = Math.round(D * F);
  for (let i = 0; i < N; i++) {
    const data = await page.evaluate(([t, s]) => { window.renderFrame(t, s); return document.getElementById("c").toDataURL("image/png"); }, [i / F, samples]);
    fs.writeFileSync(path.join(dir, `f${String(i).padStart(4, "0")}.png`), Buffer.from(data.split(",")[1], "base64"));
    if (i % 30 === 0) console.log(`frame ${i}/${N}`);
  }
  await browser.close();
  execFileSync("ffmpeg", ["-y", "-loglevel", "error", "-framerate", String(F), "-i", path.join(dir, "f%04d.png"),
    "-c:v", "libx264", "-pix_fmt", "yuv420p", "-crf", "16", "-preset", "slow", "-movflags", "+faststart", out]);
  fs.rmSync(dir, { recursive: true, force: true });
  console.log(`${N} frames → ${out}`);
})();
