// Renders moya-planeta-logo.html to PNG frames and encodes MP4 (H.264, 30 fps).
// Usage: node render.js [width] [height] [out.mp4]
const { chromium } = require("playwright");
const fs = require("fs"), path = require("path"), { execFileSync } = require("child_process");
(async () => {
  const W = +process.argv[2] || 1920, H = +process.argv[3] || 1080;
  const out = path.resolve(process.argv[4] || `moya-planeta-${W}x${H}.mp4`);
  const dir = fs.mkdtempSync(path.join(require("os").tmpdir(), "mp-frames-"));
  const browser = await chromium.launch();
  const page = await browser.newPage({ viewport: { width: W, height: H } });
  await page.goto("file://" + path.join(__dirname, "moya-planeta-logo.html") + `?capture&w=${W}&h=${H}`);
  await page.evaluate(() => window.ready);
  const { D, F } = await page.evaluate(() => ({ D: window.DURATION, F: window.FPS }));
  const N = Math.round(D * F);
  for (let i = 0; i < N; i++) {
    const data = await page.evaluate(t => { window.renderFrame(t, 6); return document.getElementById("c").toDataURL("image/png"); }, i / F);
    fs.writeFileSync(path.join(dir, `f${String(i).padStart(4, "0")}.png`), Buffer.from(data.split(",")[1], "base64"));
  }
  await browser.close();
  execFileSync("ffmpeg", ["-y", "-loglevel", "error", "-framerate", String(F), "-i", path.join(dir, "f%04d.png"),
    "-c:v", "libx264", "-pix_fmt", "yuv420p", "-crf", "16", "-preset", "slow", "-movflags", "+faststart", out]);
  console.log(`${N} frames → ${out}  (frames kept in ${dir})`);
})();
