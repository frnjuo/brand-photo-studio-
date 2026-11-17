<html><head><title>Сокет – магазин комплектующих для ПК</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="https://fonts.googleapis.com/css2?family=Onest:wght@400;500;600;700&display=swap" rel="stylesheet" />
<style>
/* ===== Цвета сайта =====
   фон страницы     #f2f3f5
   карточки         #ffffff
   линии            #e4e6ea
   основной текст   #16181d
   второстепенный   #6f737b
   акцент           #ff4f00
   темный блок      #1d1f23
*/

/* ===== Общие стили ===== */
* { box-sizing: border-box; }
body { background-color: #f2f3f5; }
table { border-collapse: collapse; border: none; table-layout: fixed; background-color: #f2f3f5; }
td { border: none; padding: 0; vertical-align: top; font-family: "Onest", Arial, sans-serif; font-size: 15px; color: #16181d; }
a { color: inherit; text-decoration: none; cursor: pointer; }
.wrap { max-width: 1280px; margin: 0 auto; padding: 0 24px; }
.ico { width: 24px; height: 24px; fill: none; stroke: currentColor; stroke-width: 1.8; stroke-linecap: round; stroke-linejoin: round; }

/* ===== «Шапка» ===== */
#shapka { height: 150px; background-color: #ffffff; border-bottom: 1px solid #e4e6ea; }
/* Верхняя строка */
#shapka_info { height: 34px; background-color: #f7f8f9; border-bottom: 1px solid #e4e6ea; font-size: 13px; color: #6f737b; }
#shapka_info .wrap { display: flex; align-items: center; gap: 24px; height: 34px; }
#shapka_info a:hover { color: #16181d; }
#shapka_info .gorod { color: #16181d; font-weight: 500; }
#shapka_info .tel { margin-left: auto; color: #16181d; font-weight: 600; }
/* Основная строка */
#shapka_glav { display: flex; align-items: center; gap: 24px; height: 72px; }
.logo { display: flex; align-items: center; gap: 10px; font-size: 26px; font-weight: 700; letter-spacing: -0.03em; white-space: nowrap; }
.logo_znak { width: 30px; height: 30px; border-radius: 8px; background-color: #ff4f00; position: relative; }
.logo_znak:after { content: ""; position: absolute; left: 9px; top: 9px; width: 12px; height: 12px; border-radius: 2px; background-color: #ffffff; }
.poisk { display: flex; align-items: center; flex: 1; height: 44px; border: 2px solid #ff4f00; border-radius: 10px; overflow: hidden; }
.poisk input[type=text] { flex: 1; min-width: 0; height: 100%; padding: 0 16px; border: none; outline: none; font-family: inherit; font-size: 15px; color: #16181d; }
.poisk input[type=submit] { height: 100%; padding: 0 24px; border: none; background-color: #ff4f00; color: #ffffff; font-family: inherit; font-size: 15px; font-weight: 600; cursor: pointer; }
.deistviya { display: flex; gap: 22px; }
.deistviya a { display: flex; flex-direction: column; align-items: center; gap: 2px; font-size: 12px; color: #6f737b; }
.deistviya a:hover { color: #ff4f00; }
.deistviya .ico { color: #16181d; }
.deistviya a:hover .ico { color: #ff4f00; }
/* Меню */
#menu { display: flex; align-items: flex-start; gap: 6px; height: 44px; }
#menu a { padding: 7px 16px; border-radius: 8px; font-size: 14px; font-weight: 500; transition: 0.15s; }
#menu a:hover { background-color: #f2f3f5; }
#menu a.aktiv { background-color: #16181d; color: #ffffff; }

/* ===== Промо-баннеры ===== */
#promo { display: grid; grid-template-columns: 2fr 1fr; gap: 16px; margin-top: 20px; }
#banner { position: relative; overflow: hidden; display: flex; align-items: center; min-height: 340px; padding: 44px; border-radius: 16px; background-color: #1d1f23; color: #ffffff; }
#banner .banner_text { position: relative; z-index: 1; max-width: 400px; }
.plashka { display: inline-block; padding: 5px 10px; border-radius: 6px; background-color: #ff4f00; font-size: 12px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.04em; }
#banner h2 { margin: 18px 0 12px 0; font-size: 40px; font-weight: 700; line-height: 1.08; letter-spacing: -0.03em; }
#banner p { margin: 0 0 28px 0; font-size: 16px; line-height: 1.55; color: #b9bcc2; }
#banner .banner_kartinka { position: absolute; right: 28px; top: 50%; width: 330px; height: 220px; transform: translateY(-50%); }
.knopka { display: inline-block; padding: 13px 26px; border-radius: 10px; background-color: #ff4f00; color: #ffffff; font-size: 15px; font-weight: 600; transition: 0.15s; }
.knopka:hover { background-color: #e04500; }
.knopka_belaya { background-color: #ffffff; color: #16181d; }
.knopka_belaya:hover { background-color: #f2f3f5; }
.promo_mal { display: grid; grid-template-rows: 1fr 1fr; gap: 16px; }
.akciya { padding: 26px 28px; border-radius: 16px; }
.akciya_1 { background-color: #ff4f00; color: #ffffff; }
.akciya_2 { background-color: #ffffff; }
.akciya .bolshoe { font-size: 44px; font-weight: 700; line-height: 1; letter-spacing: -0.03em; }
.akciya_2 .bolshoe { color: #ff4f00; }
.akciya h3 { margin: 10px 0 6px 0; font-size: 18px; font-weight: 600; }
.akciya p { margin: 0 0 16px 0; font-size: 14px; line-height: 1.5; opacity: 0.85; }
.akciya a { font-size: 14px; font-weight: 600; border-bottom: 1px solid currentColor; }

/* ===== Разделы ===== */
.razdel { margin-top: 44px; }
.razdel_zag { display: flex; align-items: baseline; justify-content: space-between; margin-bottom: 18px; }
h1 { margin: 0; font-size: 28px; font-weight: 700; letter-spacing: -0.02em; }
.razdel_zag a { font-size: 14px; font-weight: 500; color: #ff4f00; }

/* Категории */
.kategorii { display: grid; grid-template-columns: repeat(8, 1fr); gap: 12px; }
.kat { display: flex; flex-direction: column; align-items: center; gap: 10px; padding: 18px 10px 16px; border-radius: 14px; background-color: #ffffff; text-align: center; font-size: 14px; font-weight: 500; transition: 0.15s; }
.kat:hover { box-shadow: 0 6px 20px rgba(22, 24, 29, 0.08); color: #ff4f00; }
.kat svg { width: 96px; height: 64px; }

/* Товары */
.tovary { display: grid; grid-template-columns: repeat(4, 1fr); gap: 12px; }
.tovar { display: flex; flex-direction: column; padding: 16px; border-radius: 14px; background-color: #ffffff; transition: 0.15s; }
.tovar:hover { box-shadow: 0 6px 20px rgba(22, 24, 29, 0.08); }
.tovar_foto { position: relative; display: flex; align-items: center; justify-content: center; height: 170px; margin-bottom: 14px; border-radius: 10px; background-color: #f7f8f9; }
.tovar_foto svg { width: 180px; height: 120px; }
.tovar_foto img { max-width: 100%; max-height: 100%; }
.skidka { position: absolute; top: 10px; left: 10px; padding: 3px 8px; border-radius: 6px; background-color: #e5322d; color: #ffffff; font-size: 12px; font-weight: 600; }
.reiting { margin-bottom: 6px; font-size: 13px; color: #ffb400; letter-spacing: 1px; }
.reiting span { letter-spacing: 0; color: #6f737b; }
.tovar h3 { flex: 1; margin: 0 0 12px 0; font-size: 15px; font-weight: 500; line-height: 1.4; }
.cena { font-size: 22px; font-weight: 700; }
.cena s { margin-left: 6px; font-size: 14px; font-weight: 400; color: #9a9ea6; }
.kredit { margin: 4px 0 14px 0; font-size: 13px; color: #6f737b; }
.v_korzinu { display: block; padding: 11px; border-radius: 10px; background-color: #ff4f00; color: #ffffff; text-align: center; font-weight: 600; transition: 0.15s; }
.v_korzinu:hover { background-color: #e04500; }

/* Преимущества */
.preim { display: grid; grid-template-columns: repeat(4, 1fr); gap: 12px; }
.preim div { display: flex; gap: 14px; padding: 22px; border-radius: 14px; background-color: #ffffff; }
.preim .ico { flex-shrink: 0; width: 28px; height: 28px; color: #ff4f00; }
.preim h3 { margin: 0 0 4px 0; font-size: 16px; font-weight: 600; }
.preim p { margin: 0; font-size: 14px; line-height: 1.5; color: #6f737b; }

/* О магазине */
.opisanie { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; padding: 36px; border-radius: 16px; background-color: #ffffff; }
.opisanie p { margin: 0 0 14px 0; font-size: 15px; line-height: 1.7; color: #4a4e56; }
.opisanie h1 { margin-bottom: 16px; }
.cifry { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
.cifry div { padding: 20px; border-radius: 12px; background-color: #f7f8f9; }
.cifry b { display: block; font-size: 30px; font-weight: 700; letter-spacing: -0.02em; }
.cifry span { font-size: 13px; color: #6f737b; }
.niz_otstup { height: 56px; }

/* ===== «Подвал» ===== */
#podval { padding-top: 44px; background-color: #ffffff; border-top: 1px solid #e4e6ea; }
.podval_setka { display: grid; grid-template-columns: 1.6fr 1fr 1fr 1.3fr; gap: 32px; }
#podval h4 { margin: 0 0 14px 0; font-size: 15px; font-weight: 600; }
#podval p, #podval a { display: block; margin: 0; font-size: 14px; line-height: 2; color: #4a4e56; }
#podval a:hover { color: #ff4f00; }
#podval p.podval_text { margin-top: 14px; line-height: 1.6; color: #6f737b; }
#podval .podval_tel { font-size: 20px; font-weight: 700; color: #16181d; }
.kopirait { display: flex; justify-content: space-between; margin-top: 40px; padding: 18px 0; border-top: 1px solid #e4e6ea; font-size: 13px; color: #6f737b; }

/* ===== Адаптивность ===== */
@media (max-width: 1100px) {
	.kategorii { grid-template-columns: repeat(4, 1fr); }
	.tovary, .preim { grid-template-columns: repeat(2, 1fr); }
	#promo, .opisanie { grid-template-columns: 1fr; }
	.promo_mal { grid-template-columns: 1fr 1fr; grid-template-rows: auto; }
	.podval_setka { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 700px) {
	#shapka { height: auto; }
	#shapka_info { display: none; }
	#shapka_glav { flex-wrap: wrap; height: auto; padding: 14px 0; gap: 14px; }
	.poisk { order: 3; flex-basis: 100%; }
	.deistviya { margin-left: auto; gap: 14px; }
	.deistviya span { display: none; }
	#menu { flex-wrap: wrap; height: auto; padding-bottom: 12px; }
	#banner { padding: 28px; min-height: 0; }
	#banner h2 { font-size: 30px; }
	#banner .banner_kartinka { display: none; }
	.promo_mal, .tovary, .preim, .podval_setka, .cifry { grid-template-columns: 1fr; }
	.kategorii { grid-template-columns: repeat(2, 1fr); }
	.opisanie { padding: 24px; }
	.kopirait { flex-direction: column; gap: 6px; }
}
</style>
</head>
<body style="width:100%; height:100%; margin:0">
<table border="1" style="width:100%; height:100%">
<tr><td style="height:150px">

<!-- Иконки и изображения комплектующих -->
<svg style="display:none">
	<symbol id="i-sravn" viewBox="0 0 24 24"><path d="M6 20V10M12 20V4M18 20v-7"/></symbol>
	<symbol id="i-izbr" viewBox="0 0 24 24"><path d="M12 20s-7-4.4-7-10a4 4 0 0 1 7-2.6A4 4 0 0 1 19 10c0 5.6-7 10-7 10z"/></symbol>
	<symbol id="i-korz" viewBox="0 0 24 24"><path d="M3 4h2l2.5 11h11L21 7H6.5"/><circle cx="9" cy="19" r="1.5"/><circle cx="18" cy="19" r="1.5"/></symbol>
	<symbol id="i-shield" viewBox="0 0 24 24"><path d="M12 2l8 3v6c0 5-3.5 9-8 11-4.5-2-8-6-8-11V5z"/><path d="M9 12l2 2 4-4"/></symbol>
	<symbol id="i-check" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M8 12l3 3 5-6"/></symbol>
	<symbol id="i-truck" viewBox="0 0 24 24"><path d="M1 5h13v11H1zM14 9h4l3 3v4h-7"/><circle cx="5.5" cy="18" r="2"/><circle cx="17.5" cy="18" r="2"/></symbol>
	<symbol id="i-tool" viewBox="0 0 24 24"><path d="M14.7 6.3a4 4 0 0 0-5.4 5.4L3 18l3 3 6.3-6.3a4 4 0 0 0 5.4-5.4l-2.5 2.5-2.5-.6-.6-2.5z"/></symbol>

	<symbol id="p-cpu" viewBox="0 0 120 80"><rect x="30" y="8" width="64" height="64" rx="5" fill="#c9ccd1"/><rect x="40" y="18" width="44" height="44" rx="3" fill="#e9ebee"/><path d="M34 12h8l-8 8z" fill="#ff4f00"/><rect x="50" y="34" width="24" height="12" rx="2" fill="#c9ccd1"/></symbol>
	<symbol id="p-gpu" viewBox="0 0 120 80"><rect x="6" y="16" width="108" height="42" rx="6" fill="#2b2d31"/><rect x="6" y="16" width="108" height="5" rx="2" fill="#ff4f00"/><circle cx="38" cy="38" r="15" fill="#45484e"/><circle cx="38" cy="38" r="5" fill="#2b2d31"/><circle cx="82" cy="38" r="15" fill="#45484e"/><circle cx="82" cy="38" r="5" fill="#2b2d31"/><rect x="20" y="58" width="56" height="6" fill="#d9a520"/></symbol>
	<symbol id="p-mat" viewBox="0 0 120 80"><rect x="20" y="4" width="80" height="72" rx="3" fill="#2b2d31"/><rect x="34" y="14" width="26" height="26" rx="2" fill="#c9ccd1"/><rect x="70" y="10" width="5" height="40" fill="#45484e"/><rect x="79" y="10" width="5" height="40" fill="#45484e"/><rect x="30" y="50" width="38" height="5" fill="#45484e"/><rect x="30" y="60" width="38" height="5" fill="#ff4f00"/></symbol>
	<symbol id="p-ram" viewBox="0 0 120 80"><rect x="6" y="22" width="108" height="30" rx="2" fill="#2b2d31"/><rect x="6" y="22" width="108" height="4" fill="#ff4f00"/><rect x="14" y="31" width="14" height="13" fill="#45484e"/><rect x="34" y="31" width="14" height="13" fill="#45484e"/><rect x="54" y="31" width="14" height="13" fill="#45484e"/><rect x="74" y="31" width="14" height="13" fill="#45484e"/><rect x="94" y="31" width="14" height="13" fill="#45484e"/><rect x="10" y="52" width="100" height="5" fill="#d9a520"/></symbol>
	<symbol id="p-ssd" viewBox="0 0 120 80"><rect x="8" y="28" width="104" height="24" rx="3" fill="#2b2d31"/><rect x="18" y="32" width="56" height="16" rx="2" fill="#ff4f00"/><rect x="80" y="34" width="14" height="12" fill="#45484e"/><rect x="106" y="31" width="6" height="18" fill="#d9a520"/><circle cx="14" cy="40" r="3" fill="#f2f3f5"/></symbol>
	<symbol id="p-bp" viewBox="0 0 120 80"><rect x="16" y="12" width="88" height="58" rx="4" fill="#45484e"/><circle cx="60" cy="41" r="22" fill="#2b2d31"/><path d="M42 41h36M60 23v36M47 28l26 26M73 28L47 54" stroke="#45484e" stroke-width="2"/><rect x="16" y="12" width="88" height="5" rx="2" fill="#ff4f00"/></symbol>
	<symbol id="p-korp" viewBox="0 0 120 80"><rect x="36" y="2" width="48" height="76" rx="4" fill="#2b2d31"/><rect x="41" y="8" width="38" height="52" rx="2" fill="#45484e"/><circle cx="60" cy="24" r="9" fill="none" stroke="#ff4f00" stroke-width="2.5"/><circle cx="60" cy="46" r="9" fill="none" stroke="#ff4f00" stroke-width="2.5"/><rect x="54" y="66" width="12" height="4" rx="2" fill="#c9ccd1"/></symbol>
	<symbol id="p-ohl" viewBox="0 0 120 80"><rect x="44" y="8" width="52" height="5" fill="#c9ccd1"/><rect x="44" y="17" width="52" height="5" fill="#c9ccd1"/><rect x="44" y="26" width="52" height="5" fill="#c9ccd1"/><rect x="44" y="35" width="52" height="5" fill="#c9ccd1"/><rect x="44" y="44" width="52" height="5" fill="#c9ccd1"/><rect x="44" y="53" width="52" height="5" fill="#c9ccd1"/><rect x="24" y="10" width="18" height="48" rx="3" fill="#2b2d31"/><circle cx="33" cy="34" r="6" fill="#ff4f00"/><rect x="58" y="62" width="24" height="10" rx="2" fill="#45484e"/></symbol>
</svg>

<div id="shapka">
	<!-- Верхняя строка -->
	<div id="shapka_info">
		<div class="wrap">
			<a class="gorod">Москва</a>
			<a>Магазины</a>
			<a>Доставка</a>
			<a>Сборка ПК</a>
			<a>Покупателям</a>
			<span class="tel">8 (800) 555-35-35</span>
		</div>
	</div>
	<div class="wrap">
		<!-- Логотип, поиск, действия -->
		<div id="shapka_glav">
			<a href="index.php" class="logo"><span class="logo_znak"></span>Сокет</a>
			<form class="poisk" action="#" method="get">
				<input type="text" name="poisk" placeholder="Поиск по каталогу: видеокарта, процессор, SSD..." /><input type="submit" value="Найти" />
			</form>
			<div class="deistviya">
				<a><svg class="ico"><use href="#i-sravn"/></svg><span>Сравнение</span></a>
				<a><svg class="ico"><use href="#i-izbr"/></svg><span>Избранное</span></a>
				<a><svg class="ico"><use href="#i-korz"/></svg><span>Корзина</span></a>
			</div>
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
