<?php include("head.php");?>
<tr><td>
<style>
/* Стили страницы контактов */
.kontakty h3 { margin: 0 0 4px 0; font-size: 14px; font-weight: normal; color: #6f737b; }
.kontakty p { margin: 0 0 18px 0; font-size: 17px; font-weight: bold; color: #1d1f23; }
.karta { padding: 0; overflow: hidden; background-color: #e4e6ea; }
.karta iframe { display: block; width: 100%; height: 420px; border: 0; }
.forma label { display: block; margin: 0 0 6px 0; font-size: 14px; color: #6f737b; }
.forma .pole_formy { display: block; width: 100%; margin: 0 0 16px 0; padding: 10px 12px; border: 1px solid #d5d8dd; border-radius: 8px; font-family: Arial, sans-serif; font-size: 15px; box-sizing: border-box; }
.forma textarea.pole_formy { height: 140px; resize: vertical; }
.forma .knopka { display: inline-block; border: none; font-size: 15px; cursor: pointer; }
</style>
<div class="soderzhanie">
<div class="wrap">

	<h1 style="margin-top:10px">Контакты</h1>

	<!-- Информация о контактах и карта -->
	<table class="setka">
	<tr>
		<td style="width:35%">
			<div class="blok kontakty">
				<h3>Адрес магазина</h3>
				<p>г. Москва, ул. Тверская, д. 7</p>
				<h3>Телефон</h3>
				<p>8 (800) 555-35-35</p>
				<h3>Электронная почта</h3>
				<p>info@soket-shop.ru</p>
				<h3>Режим работы</h3>
				<p>Ежедневно с 9:00 до 21:00</p>
				<h3>Как добраться</h3>
				<p style="margin-bottom:0">Метро «Охотный Ряд», 3 минуты пешком</p>
			</div>
		</td>
		<td class="posl" style="width:65%">
			<div class="blok karta">
				<iframe width="100%" height="420" frameborder="0" src="https://yandex.ru/map-widget/v1/?ll=37.610818%2C55.757718&z=16&pt=37.610818%2C55.757718%2Cpm2rdm" allowfullscreen="true"></iframe>
			</div>
		</td>
	</tr>
	</table>

	<!-- Форма отправки сообщения -->
	<h1>Напишите нам</h1>
	<div class="blok">
		<form class="forma">
			<label for="mailtema">Тема сообщения</label>
			<input id="mailtema" class="pole_formy" placeholder="Например: подбор комплектующих" />
			<label for="mailtext">Текст сообщения</label>
			<textarea id="mailtext" class="pole_formy" placeholder="Опишите ваш вопрос"></textarea>
			<input type="button" class="knopka" value="Отправить сообщение" onclick="sendmail()" />
		</form>
		<script type="text/javascript">
		function sendmail() {
		window.open("mailto:info@soket-shop.ru?subject="+mailtema.value+"&body="+mailtext.value);
		}
		</script>
	</div>

</div>
</div>
</td></tr>
<?php include("foot.php");?>
