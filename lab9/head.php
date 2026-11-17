<html><head><title>Сокет – магазин комплектующих для ПК</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="https://fonts.googleapis.com/css2?family=Onest:wght@400;500;600;700&display=swap" rel="stylesheet" />
<style>
/* ===== Цвета сайта =====
   фон              #ffffff
   светло-серый     #f4f4f2
   линии            #ebebeb
   основной текст   #111111
   второстепенный   #6b6b6b
   акцент           #ff4f00
*/

/* ===== Общие стили ===== */
* { box-sizing: border-box; }
body { background-color: #ffffff; }
table { border-collapse: collapse; border: none; table-layout: fixed; background-color: #ffffff; }
td { border: none; padding: 0; vertical-align: top; font-family: "Onest", Arial, sans-serif; font-size: 16px; color: #111111; }
a { color: inherit; text-decoration: none; }
.wrap { max-width: 1200px; margin: 0 auto; padding: 0 32px; }
.metka { display: flex; align-items: center; gap: 10px; font-size: 13px; letter-spacing: 0.12em; text-transform: uppercase; color: #6b6b6b; }
.metka:before { content: ""; width: 8px; height: 8px; border-radius: 50%; background-color: #ff4f00; }

/* ===== «Шапка» ===== */
#shapka { height: 150px; border-bottom: 1px solid #ebebeb; }
#shapka_verh { display: flex; align-items: center; gap: 32px; height: 84px; }
.logo { display: flex; align-items: center; gap: 10px; font-size: 26px; font-weight: 700; letter-spacing: -0.03em; }
.logo_znak { width: 14px; height: 14px; border-radius: 3px; background-color: #ff4f00; }
.logo small { margin-left: 6px; padding-left: 14px; border-left: 1px solid #e0e0e0; font-size: 13px; font-weight: 400; letter-spacing: 0; color: #6b6b6b; }
.poisk { display: flex; align-items: center; flex: 1; max-width: 420px; height: 44px; margin-left: auto; padding: 0 6px 0 20px; border-radius: 999px; background-color: #f4f4f2; }
.poisk input[type=text] { flex: 1; min-width: 0; border: none; background: transparent; outline: none; font-family: inherit; font-size: 15px; color: #111111; }
.poisk input[type=submit] { height: 32px; padding: 0 16px; border: none; border-radius: 999px; background-color: #111111; color: #ffffff; font-family: inherit; font-size: 14px; cursor: pointer; }
.poisk input[type=submit]:hover { background-color: #ff4f00; }
.tel { font-size: 15px; font-weight: 600; text-align: right; white-space: nowrap; }
.tel small { display: block; font-size: 12px; font-weight: 400; color: #6b6b6b; }
#menu { display: flex; align-items: flex-start; gap: 8px; height: 66px; }
#menu a { padding: 8px 18px; border: 1px solid #e0e0e0; border-radius: 999px; font-size: 14px; font-weight: 500; cursor: pointer; transition: 0.15s; }
#menu a:hover { border-color: #111111; }
#menu a.aktiv { border-color: #111111; background-color: #111111; color: #ffffff; }

/* ===== Баннер ===== */
#banner { display: grid; grid-template-columns: 1.5fr 1fr; align-items: end; gap: 64px; padding: 88px 0 80px 0; border-bottom: 1px solid #ebebeb; }
#banner h2 { margin: 24px 0 28px 0; font-size: 68px; font-weight: 600; line-height: 1.02; letter-spacing: -0.04em; }
#banner h2 span { color: #ff4f00; }
#banner p { max-width: 540px; margin: 0 0 40px 0; font-size: 19px; line-height: 1.55; color: #6b6b6b; }
.knopka { display: inline-block; padding: 15px 28px; border-radius: 999px; background-color: #111111; color: #ffffff; font-size: 15px; font-weight: 500; cursor: pointer; transition: 0.15s; }
.knopka:hover { background-color: #ff4f00; }
.knopka_belaya { background-color: #ffffff; color: #111111; }
.knopka_belaya:hover { color: #ffffff; }
.ssylka { margin-left: 24px; padding-bottom: 2px; border-bottom: 1px solid #111111; font-size: 15px; font-weight: 500; cursor: pointer; }
.ssylka:hover { color: #ff4f00; border-color: #ff4f00; }
.prais .metka { margin-bottom: 14px; }
.prais div.stroka { display: flex; justify-content: space-between; padding: 16px 0; border-top: 1px solid #ebebeb; font-size: 16px; }
.prais div.stroka:last-child { border-bottom: 1px solid #ebebeb; }
.prais span { color: #6b6b6b; }
.prais b { font-weight: 600; }

/* ===== Разделы ===== */
.razdel { display: grid; grid-template-columns: 1fr 2.4fr; align-items: start; gap: 64px; padding: 80px 0; border-bottom: 1px solid #ebebeb; }
.razdel > .metka { padding-top: 16px; }
.razdel:last-child { border-bottom: none; }
h1 { margin: 0 0 24px 0; font-size: 40px; font-weight: 600; line-height: 1.15; letter-spacing: -0.03em; }
.tekst { max-width: 680px; margin: 0 0 16px 0; font-size: 18px; line-height: 1.65; color: #6b6b6b; }

/* Преимущества */
.preim { display: grid; grid-template-columns: 1fr 1fr; gap: 0 48px; margin-top: 16px; }
.preim div { padding: 28px 0; border-top: 1px solid #ebebeb; }
.preim b { display: block; margin-bottom: 14px; font-size: 14px; font-weight: 600; color: #ff4f00; }
.preim h3 { margin: 0 0 8px 0; font-size: 20px; font-weight: 600; letter-spacing: -0.01em; }
.preim p { margin: 0; font-size: 15px; line-height: 1.6; color: #6b6b6b; }

/* Акции */
.akcii { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 16px; }
.akciya { padding: 36px; border-radius: 20px; }
.akciya_1 { background-color: #111111; color: #ffffff; }
.akciya_2 { background-color: #f4f4f2; }
.akciya .bolshoe { font-size: 64px; font-weight: 600; line-height: 1; letter-spacing: -0.04em; color: #ff4f00; }
.akciya h3 { margin: 24px 0 8px 0; font-size: 20px; font-weight: 600; }
.akciya p { margin: 0 0 28px 0; font-size: 15px; line-height: 1.6; color: #6b6b6b; }
.akciya_1 p { color: #a8a8a8; }

/* ===== «Подвал» ===== */
#podval { padding-top: 64px; border-top: 1px solid #ebebeb; background-color: #f7f7f5; }
.podval_setka { display: grid; grid-template-columns: 2fr 1fr 1fr 1.3fr; gap: 32px; }
#podval h4 { margin: 0 0 18px 0; font-size: 13px; font-weight: 500; letter-spacing: 0.12em; text-transform: uppercase; color: #6b6b6b; }
#podval p, #podval a { display: block; margin: 0; font-size: 15px; line-height: 2; }
#podval a { cursor: pointer; }
#podval a:hover { color: #ff4f00; }
#podval p.podval_text { max-width: 300px; margin-top: 16px; line-height: 1.6; color: #6b6b6b; }
.kopirait { display: flex; justify-content: space-between; margin-top: 56px; padding: 22px 0; border-top: 1px solid #e6e6e6; font-size: 13px; color: #6b6b6b; }

/* ===== Адаптивность ===== */
@media (max-width: 900px) {
	#banner, .razdel { grid-template-columns: 1fr; gap: 32px; }
	#banner h2 { font-size: 48px; }
	.podval_setka { grid-template-columns: 1fr 1fr; }
	.tel, .logo small { display: none; }
}
@media (max-width: 600px) {
	.wrap { padding: 0 20px; }
	#shapka { height: auto; }
	#shapka_verh { flex-wrap: wrap; height: auto; padding: 18px 0; gap: 14px; }
	.poisk { flex-basis: 100%; max-width: none; }
	#menu { flex-wrap: wrap; height: auto; padding-bottom: 18px; }
	#banner { padding: 48px 0; }
	#banner h2 { font-size: 38px; }
	.ssylka { display: inline-block; margin: 20px 0 0 0; }
	h1 { font-size: 30px; }
	.razdel { padding: 56px 0; }
	.preim, .akcii, .podval_setka { grid-template-columns: 1fr; }
	.kopirait { flex-direction: column; gap: 6px; }
}
</style>
</head>
<body style="width:100%; height:100%; margin:0">
<table border="1" style="width:100%; height:100%">
<tr><td style="height:150px">
<div id="shapka">
	<div class="wrap">
		<div id="shapka_verh">
			<!-- Логотип -->
			<a href="index.php" class="logo"><span class="logo_znak"></span>Сокет<small>магазин комплектующих для ПК</small></a>
			<!-- Строка поиска -->
			<form class="poisk" action="#" method="get">
				<input type="text" name="poisk" placeholder="Поиск комплектующих" /><input type="submit" value="Найти" />
			</form>
			<div class="tel">8 (800) 555-35-35<small>ежедневно 9:00 – 21:00</small></div>
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
