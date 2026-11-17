<html><head><title>КомпДеталь – магазин комплектующих для ПК</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<style>
/* ===== Общие стили ===== */
* { box-sizing: border-box; }
body { background-color: #070a12; }
table { border-collapse: collapse; border: none; background-color: #070a12; table-layout: fixed; }
td { border: none; padding: 0; vertical-align: top; font-family: "Segoe UI", Roboto, Arial, sans-serif; font-size: 15px; color: #e2e8f0; }
a { color: inherit; text-decoration: none; }
.wrap { max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.ico { width: 24px; height: 24px; fill: none; stroke: currentColor; stroke-width: 1.8; stroke-linecap: round; stroke-linejoin: round; }

/* ===== «Шапка» ===== */
#shapka { height: 150px; background: linear-gradient(180deg, #0d1322 0%, #0a0f1c 100%); border-bottom: 1px solid #1e293b; }
#shapka_verh { display: flex; align-items: center; gap: 24px; height: 88px; }
.logo { display: flex; align-items: center; gap: 12px; }
.logo_znak { width: 46px; height: 46px; border-radius: 12px; background: linear-gradient(135deg, #22d3ee, #8b5cf6); display: flex; align-items: center; justify-content: center; color: #ffffff; box-shadow: 0 0 24px rgba(34, 211, 238, 0.35); }
.logo_znak .ico { width: 26px; height: 26px; }
.logo_text b { display: block; font-size: 22px; color: #ffffff; letter-spacing: 0.5px; }
.logo_text span { font-size: 12px; color: #94a3b8; }
.poisk { flex: 1; max-width: 520px; margin: 0 auto; display: flex; align-items: center; height: 46px; padding: 0 6px 0 14px; background-color: #111827; border: 1px solid #1f2937; border-radius: 12px; }
.poisk .ico { width: 20px; height: 20px; color: #64748b; }
.poisk input[type=text] { flex: 1; min-width: 0; width: 100%; height: 100%; padding: 0 10px; background: transparent; border: none; outline: none; color: #e2e8f0; font-size: 14px; }
.poisk input[type=submit] { height: 34px; padding: 0 18px; border: none; border-radius: 8px; background: linear-gradient(135deg, #22d3ee, #8b5cf6); color: #ffffff; font-weight: 600; cursor: pointer; }
.shapka_tel { text-align: right; font-size: 12px; color: #94a3b8; }
.shapka_tel b { display: block; font-size: 16px; color: #ffffff; }
#menu { display: flex; align-items: center; gap: 8px; height: 62px; }
#menu a { padding: 9px 18px; border: 1px solid transparent; border-radius: 10px; font-size: 14px; font-weight: 600; color: #cbd5e1; cursor: pointer; transition: 0.2s; }
#menu a:hover { background-color: #111827; border-color: #1f2937; color: #ffffff; }
#menu a.aktiv { background-color: rgba(34, 211, 238, 0.12); border-color: rgba(34, 211, 238, 0.4); color: #22d3ee; }

/* ===== Баннер ===== */
#banner { display: grid; grid-template-columns: 1.2fr 1fr; align-items: center; gap: 32px; margin-top: 32px; padding: 56px; border: 1px solid #1e293b; border-radius: 24px; overflow: hidden;
	background: radial-gradient(600px 300px at 85% 30%, rgba(139, 92, 246, 0.35), transparent 70%), radial-gradient(500px 300px at 60% 100%, rgba(34, 211, 238, 0.22), transparent 70%), #0d1322; }
.metka { display: inline-block; padding: 6px 12px; border: 1px solid rgba(34, 211, 238, 0.35); border-radius: 999px; background-color: rgba(34, 211, 238, 0.1); color: #22d3ee; font-size: 12px; font-weight: 600; letter-spacing: 0.5px; text-transform: uppercase; }
#banner h2 { margin: 18px 0 16px 0; font-size: 48px; line-height: 1.1; font-weight: 800; color: #ffffff; }
.gradient_text { background: linear-gradient(90deg, #22d3ee, #a78bfa); -webkit-background-clip: text; background-clip: text; color: transparent; }
#banner p { max-width: 520px; margin: 0 0 28px 0; font-size: 17px; line-height: 1.6; color: #94a3b8; }
.knopka { display: inline-block; padding: 14px 24px; border-radius: 12px; font-size: 15px; font-weight: 700; cursor: pointer; transition: 0.2s; }
.knopka_glav { background: linear-gradient(135deg, #22d3ee, #8b5cf6); color: #ffffff; box-shadow: 0 10px 30px rgba(99, 102, 241, 0.35); }
.knopka_glav:hover { transform: translateY(-2px); }
.knopka_vtor { margin-left: 10px; border: 1px solid #334155; color: #e2e8f0; }
.knopka_vtor:hover { background-color: #111827; }
.knopka_belaya { background-color: #ffffff; color: #0f172a; white-space: nowrap; }
.cifry { display: flex; gap: 36px; margin-top: 40px; }
.cifry b { display: block; font-size: 28px; color: #ffffff; }
.cifry span { font-size: 13px; color: #64748b; }
.banner_kartinka svg { display: block; width: 100%; max-width: 400px; margin: 0 auto; }

/* ===== Разделы и карточки ===== */
.razdel { margin-top: 64px; }
.razdel_zag { display: flex; align-items: flex-end; justify-content: space-between; margin-bottom: 24px; }
.razdel_zag h1 { margin: 0; font-size: 28px; font-weight: 800; color: #ffffff; }
.razdel_zag p { margin: 6px 0 0 0; color: #64748b; }
.razdel_zag .ssylka { font-size: 14px; font-weight: 600; color: #22d3ee; cursor: pointer; }
.setka { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; }
.kartochka { padding: 22px; border: 1px solid #1e293b; border-radius: 18px; background-color: #0d1322; transition: 0.25s; }
.kartochka:hover { border-color: rgba(34, 211, 238, 0.5); transform: translateY(-4px); box-shadow: 0 18px 40px rgba(0, 0, 0, 0.4); }
.kat { display: flex; align-items: center; gap: 14px; cursor: pointer; }
.kat_ico { flex-shrink: 0; width: 52px; height: 52px; border-radius: 14px; display: flex; align-items: center; justify-content: center; background-color: rgba(34, 211, 238, 0.1); color: #22d3ee; }
.kat:nth-child(even) .kat_ico, .preim:nth-child(even) .kat_ico { background-color: rgba(139, 92, 246, 0.12); color: #a78bfa; }
.kat b { display: block; font-size: 16px; color: #ffffff; }
.kat span { font-size: 13px; color: #64748b; }

/* Товары */
.tovar_foto { position: relative; height: 170px; margin-bottom: 18px; border-radius: 14px; display: flex; align-items: center; justify-content: center; color: #e2e8f0;
	background: radial-gradient(circle at 50% 40%, rgba(34, 211, 238, 0.25), transparent 60%), #111827; }
.tovar_foto .ico { width: 72px; height: 72px; stroke-width: 1.2; }
.tovar_foto img { width: 100%; height: 100%; object-fit: contain; }
.skidka { position: absolute; top: 12px; left: 12px; padding: 4px 10px; border-radius: 999px; background-color: #f43f5e; color: #ffffff; font-size: 12px; font-weight: 700; }
.tovar h3 { margin: 0 0 6px 0; font-size: 16px; line-height: 1.35; color: #ffffff; }
.harakt { margin: 0 0 16px 0; font-size: 13px; color: #64748b; }
.tovar_niz { display: flex; align-items: center; justify-content: space-between; }
.cena { font-size: 22px; font-weight: 800; color: #ffffff; }
.cena s { display: block; font-size: 13px; font-weight: 400; color: #475569; }
.v_korzinu { width: 44px; height: 44px; border-radius: 12px; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #22d3ee, #8b5cf6); color: #ffffff; cursor: pointer; }

/* О магазине */
.opisanie { display: grid; grid-template-columns: 1.3fr 1fr; gap: 40px; align-items: center; padding: 40px; }
.opisanie p { margin: 0 0 14px 0; line-height: 1.7; color: #94a3b8; }
.brendy { display: flex; flex-wrap: wrap; gap: 10px; }
.brendy span { padding: 10px 16px; border: 1px solid #1e293b; border-radius: 10px; background-color: #111827; font-weight: 700; color: #cbd5e1; letter-spacing: 0.5px; }

/* Преимущества */
.preim .kat_ico { margin-bottom: 16px; }
.preim h3 { margin: 0 0 8px 0; font-size: 17px; color: #ffffff; }
.preim p { margin: 0; font-size: 14px; line-height: 1.6; color: #94a3b8; }

/* Акция */
#akciya { display: flex; align-items: center; justify-content: space-between; gap: 24px; margin-top: 64px; padding: 44px 56px; border-radius: 24px; background: linear-gradient(120deg, #0e7490 0%, #4c1d95 100%); }
#akciya h2 { margin: 0 0 8px 0; font-size: 32px; color: #ffffff; }
#akciya p { margin: 0; color: #cffafe; }
.promokod { display: inline-block; margin-top: 16px; padding: 8px 14px; border: 1px dashed rgba(255, 255, 255, 0.6); border-radius: 10px; font-family: Consolas, monospace; letter-spacing: 2px; color: #ffffff; }
.niz_otstup { height: 64px; }

/* ===== «Подвал» ===== */
#podval { padding-top: 48px; background-color: #0a0e18; border-top: 1px solid #1e293b; }
.podval_setka { display: grid; grid-template-columns: 1.5fr 1fr 1fr 1.3fr; gap: 32px; }
#podval h4 { margin: 0 0 16px 0; font-size: 13px; color: #ffffff; text-transform: uppercase; letter-spacing: 1px; }
#podval p, #podval a { margin: 0; font-size: 14px; line-height: 1.9; color: #94a3b8; }
#podval a { display: block; cursor: pointer; }
#podval a:hover { color: #22d3ee; }
.kopirait { display: flex; justify-content: space-between; margin-top: 36px; padding: 18px 0; border-top: 1px solid #1e293b; font-size: 13px; color: #475569; }

/* ===== Адаптивность ===== */
@media (max-width: 900px) {
	#banner, .opisanie { grid-template-columns: 1fr; padding: 28px; }
	#banner h2 { font-size: 34px; }
	.setka, .podval_setka { grid-template-columns: repeat(2, 1fr); }
	.shapka_tel { display: none; }
	#menu { overflow-x: auto; }
	#akciya { flex-direction: column; align-items: flex-start; padding: 28px; }
}
@media (max-width: 600px) {
	#shapka { height: auto; }
	#shapka_verh { flex-wrap: wrap; height: auto; padding-top: 16px; gap: 14px; }
	.poisk { max-width: none; flex-basis: 100%; }
	.setka, .podval_setka { grid-template-columns: 1fr; }
	#banner { padding: 24px; }
	#banner h2 { font-size: 30px; }
	.knopka_vtor { margin: 10px 0 0 0; }
	.cifry { gap: 20px; }
	.kopirait { flex-direction: column; gap: 6px; }
}
</style>
</head>
<body style="width:100%; height:100%; margin:0">
<table border="1" style="width:100%; height:100%">
<tr><td style="height:150px">

<!-- Набор иконок сайта -->
<svg style="display:none">
	<symbol id="i-cpu" viewBox="0 0 24 24"><rect x="6" y="6" width="12" height="12" rx="2"/><rect x="9" y="9" width="6" height="6"/><path d="M9 2v3M15 2v3M9 19v3M15 19v3M2 9h3M2 15h3M19 9h3M19 15h3"/></symbol>
	<symbol id="i-gpu" viewBox="0 0 24 24"><rect x="2" y="5" width="20" height="12" rx="2"/><circle cx="8" cy="11" r="3"/><circle cx="16" cy="11" r="3"/><path d="M5 17v3M9 17v3M13 17v3"/></symbol>
	<symbol id="i-mat" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><rect x="6" y="6" width="6" height="6"/><path d="M15 6h3M15 9h3M6 15h12M6 18h8"/></symbol>
	<symbol id="i-ram" viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="9" rx="1"/><path d="M6 10v3M10 10v3M14 10v3M18 10v3M5 16v3M19 16v3"/></symbol>
	<symbol id="i-ssd" viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="10" rx="2"/><path d="M6 12h7"/><circle cx="18" cy="12" r="1"/></symbol>
	<symbol id="i-bp" viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M11 8l-2.5 4.5h4L10 17"/><path d="M16 9h2M16 12h2M16 15h2"/></symbol>
	<symbol id="i-korpus" viewBox="0 0 24 24"><rect x="6" y="2" width="12" height="20" rx="2"/><circle cx="12" cy="15" r="3"/><path d="M9 6h6"/></symbol>
	<symbol id="i-ohl" viewBox="0 0 24 24"><path d="M12 2v20M2 12h20M5 5l14 14M19 5L5 19"/></symbol>
	<symbol id="i-shield" viewBox="0 0 24 24"><path d="M12 2l8 3v6c0 5-3.5 9-8 11-4.5-2-8-6-8-11V5z"/><path d="M9 12l2 2 4-4"/></symbol>
	<symbol id="i-check" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M8 12l3 3 5-6"/></symbol>
	<symbol id="i-truck" viewBox="0 0 24 24"><path d="M1 5h13v11H1zM14 9h4l3 3v4h-7"/><circle cx="5.5" cy="18" r="2"/><circle cx="17.5" cy="18" r="2"/></symbol>
	<symbol id="i-tool" viewBox="0 0 24 24"><path d="M14.7 6.3a4 4 0 0 0-5.4 5.4L3 18l3 3 6.3-6.3a4 4 0 0 0 5.4-5.4l-2.5 2.5-2.5-.6-.6-2.5z"/></symbol>
	<symbol id="i-search" viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="M21 21l-5-5"/></symbol>
	<symbol id="i-cart" viewBox="0 0 24 24"><path d="M3 4h2l2.5 11h11L21 7H6.5"/><circle cx="9" cy="19" r="1.5"/><circle cx="18" cy="19" r="1.5"/></symbol>
</svg>

<div id="shapka">
	<div class="wrap">
		<div id="shapka_verh">
			<!-- Логотип -->
			<a href="index.php" class="logo">
				<span class="logo_znak"><svg class="ico"><use href="#i-cpu"/></svg></span>
				<span class="logo_text"><b>КомпДеталь</b><span>магазин комплектующих для ПК</span></span>
			</a>
			<!-- Строка поиска -->
			<form class="poisk" action="#" method="get">
				<svg class="ico"><use href="#i-search"/></svg>
				<input type="text" name="poisk" placeholder="Видеокарта, процессор, SSD..." />
				<input type="submit" value="Найти" />
			</form>
			<div class="shapka_tel"><b>8 (800) 555-35-35</b>ежедневно 9:00 – 21:00</div>
		</div>
		<!-- Меню сайта -->
		<div id="menu">
			<a href="index.php" class="aktiv">Главная</a>
			<a>Регистрация</a>
			<a>Кабинет</a>
			<a>Каталог</a>
			<a>Контакты</a>
		</div>
	</div>
</div>
</td></tr>
