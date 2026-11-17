<html><head><title>Сокет – магазин комплектующих для ПК</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&family=Russo+One&display=swap" rel="stylesheet" />
<style>
/* ===== Цвета сайта =====
   фон (кремовый)       #f6f1e7
   текст (почти черный) #1d1d1b
   зеленый (плата)      #1f6f50
   горчичный            #f2b134
   кирпичный            #e8623c
*/

/* ===== Общие стили ===== */
* { box-sizing: border-box; }
body { background-color: #f6f1e7; }
table { border-collapse: collapse; border: none; table-layout: fixed; background-color: #f6f1e7; }
td { border: none; padding: 0; vertical-align: top; font-family: "PT Sans", Arial, sans-serif; font-size: 16px; color: #1d1d1b; }
a { color: inherit; text-decoration: none; }
.wrap { max-width: 1180px; margin: 0 auto; padding: 0 24px; }

/* ===== «Шапка» ===== */
#shapka { height: 150px; background-color: #f6f1e7; border-bottom: 3px solid #1d1d1b; }
#shapka_verh { display: flex; align-items: center; gap: 28px; height: 90px; }
.logo { font-family: "Russo One", Arial, sans-serif; font-size: 30px; line-height: 1; }
.logo span { padding: 0 6px; background-color: #f2b134; }
.logo small { display: block; margin-top: 6px; font-family: "PT Sans", Arial, sans-serif; font-size: 13px; color: #5b5a55; }
.poisk { display: flex; flex: 1; max-width: 460px; margin-left: auto; }
.poisk input[type=text] { flex: 1; min-width: 0; height: 44px; padding: 0 14px; border: 2px solid #1d1d1b; border-right: none; background-color: #ffffff; font-family: inherit; font-size: 15px; outline: none; }
.poisk input[type=submit] { height: 44px; padding: 0 20px; border: 2px solid #1d1d1b; background-color: #1f6f50; color: #ffffff; font-family: inherit; font-size: 15px; font-weight: bold; cursor: pointer; }
.poisk input[type=submit]:hover { background-color: #1d1d1b; }
.tel { text-align: right; font-size: 18px; font-weight: bold; white-space: nowrap; }
.tel small { display: block; font-size: 13px; font-weight: normal; color: #5b5a55; }
#menu { display: flex; align-items: flex-start; gap: 12px; height: 60px; }
#menu a { padding: 8px 18px; border: 2px solid #1d1d1b; background-color: #ffffff; font-size: 15px; font-weight: bold; box-shadow: 3px 3px 0 #1d1d1b; cursor: pointer; }
#menu a:hover, #menu a.aktiv { background-color: #f2b134; }

/* ===== Баннер ===== */
#banner { position: relative; display: grid; grid-template-columns: 1.4fr 1fr; align-items: center; gap: 40px; margin-top: 40px; padding: 56px 48px; border: 3px solid #1d1d1b; background-color: #1f6f50; box-shadow: 8px 8px 0 #1d1d1b; }
#banner h2 { margin: 0 0 18px 0; font-family: "Russo One", Arial, sans-serif; font-size: 50px; font-weight: normal; line-height: 1.05; color: #f6f1e7; }
#banner h2 em { font-style: normal; color: #f2b134; }
#banner p { max-width: 520px; margin: 0 0 30px 0; font-size: 18px; line-height: 1.5; color: #d9e8df; }
.knopka { display: inline-block; padding: 14px 26px; border: 2px solid #1d1d1b; background-color: #f2b134; color: #1d1d1b; font-size: 16px; font-weight: bold; box-shadow: 4px 4px 0 #1d1d1b; cursor: pointer; }
.knopka:hover { box-shadow: 2px 2px 0 #1d1d1b; transform: translate(2px, 2px); }
.knopka_belaya { background-color: #ffffff; }
.prais { padding: 22px 24px; border: 3px solid #1d1d1b; background-color: #f6f1e7; }
.prais_zag { margin-bottom: 6px; font-family: "Russo One", Arial, sans-serif; font-size: 14px; letter-spacing: 1px; text-transform: uppercase; color: #e8623c; }
.prais div.stroka { display: flex; justify-content: space-between; padding: 10px 0; border-bottom: 2px dashed #b9b2a3; font-size: 17px; }
.prais div.stroka:last-child { border-bottom: none; }
.prais b { color: #1f6f50; }
.naklejka { position: absolute; top: -28px; right: 32px; width: 112px; height: 112px; border: 3px solid #1d1d1b; border-radius: 50%; background-color: #e8623c; display: flex; align-items: center; justify-content: center; text-align: center; font-family: "Russo One", Arial, sans-serif; font-size: 15px; line-height: 1.2; color: #ffffff; transform: rotate(12deg); }

/* ===== Разделы ===== */
.razdel { margin-top: 76px; }
h1 { display: inline; margin: 0; font-family: "Russo One", Arial, sans-serif; font-size: 32px; font-weight: normal; box-shadow: inset 0 -12px 0 #f2b134; }
.razdel_zag { margin-bottom: 28px; }

/* Описание */
.opisanie { display: grid; grid-template-columns: 1fr 1.6fr; gap: 48px; padding-top: 28px; border-top: 3px solid #1d1d1b; }
.opisanie p { margin: 0 0 16px 0; font-size: 18px; line-height: 1.65; }

/* Преимущества */
.preim { display: grid; grid-template-columns: repeat(4, 1fr); border: 3px solid #1d1d1b; background-color: #ffffff; }
.preim div { padding: 28px 24px; border-right: 2px solid #1d1d1b; }
.preim div:last-child { border-right: none; }
.preim b { display: block; margin-bottom: 14px; font-family: "Russo One", Arial, sans-serif; font-size: 44px; font-weight: normal; line-height: 1; color: #e8623c; }
.preim h3 { margin: 0 0 8px 0; font-size: 19px; }
.preim p { margin: 0; font-size: 15px; line-height: 1.5; color: #5b5a55; }

/* Акции */
.akcii { display: grid; grid-template-columns: 1fr 1fr; gap: 28px; }
.akciya { padding: 32px; border: 3px solid #1d1d1b; box-shadow: 6px 6px 0 #1d1d1b; }
.akciya_1 { background-color: #f2b134; }
.akciya_2 { background-color: #e8623c; color: #ffffff; }
.akciya .bolshoe { font-family: "Russo One", Arial, sans-serif; font-size: 64px; line-height: 1; }
.akciya h3 { margin: 10px 0 8px 0; font-size: 22px; }
.akciya p { margin: 0 0 24px 0; font-size: 16px; line-height: 1.5; }
.akciya .knopka { color: #1d1d1b; }
.niz_otstup { height: 80px; }

/* ===== «Подвал» ===== */
#podval { padding-top: 44px; background-color: #1d1d1b; color: #e9e3d6; }
.podval_setka { display: grid; grid-template-columns: 1.5fr 1fr 1fr 1.3fr; gap: 32px; }
#podval .logo { color: #ffffff; font-size: 24px; }
#podval .logo span { color: #1d1d1b; }
#podval h4 { margin: 0 0 14px 0; font-family: "Russo One", Arial, sans-serif; font-size: 16px; font-weight: normal; color: #f2b134; }
#podval p, #podval a { display: block; margin: 0; font-size: 15px; line-height: 1.9; color: #e9e3d6; }
#podval a { cursor: pointer; }
#podval a:hover { color: #f2b134; }
#podval p.podval_text { margin-top: 14px; line-height: 1.6; color: #a39e92; }
.kopirait { display: flex; justify-content: space-between; margin-top: 32px; padding: 16px 0; border-top: 1px solid #3a3935; font-size: 13px; color: #8f8a7e; }

/* ===== Адаптивность ===== */
@media (max-width: 900px) {
	#banner, .opisanie, .akcii { grid-template-columns: 1fr; }
	#banner { padding: 40px 28px; }
	#banner h2 { font-size: 36px; }
	.preim, .podval_setka { grid-template-columns: 1fr 1fr; }
	.preim div { border-bottom: 2px solid #1d1d1b; }
	.tel { display: none; }
}
@media (max-width: 600px) {
	#shapka { height: auto; }
	#shapka_verh { flex-wrap: wrap; height: auto; padding: 16px 0; gap: 14px; }
	.poisk { flex-basis: 100%; max-width: none; }
	#menu { flex-wrap: wrap; height: auto; padding-bottom: 18px; }
	.preim, .podval_setka { grid-template-columns: 1fr; }
	.preim div { border-right: none; }
	.naklejka { width: 90px; height: 90px; font-size: 12px; right: 12px; }
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
			<a href="index.php" class="logo"><span>Сокет</span><small>магазин комплектующих для ПК</small></a>
			<!-- Строка поиска -->
			<form class="poisk" action="#" method="get">
				<input type="text" name="poisk" placeholder="Видеокарта, процессор, SSD..." /><input type="submit" value="Найти" />
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
