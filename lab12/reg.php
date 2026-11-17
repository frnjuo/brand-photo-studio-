<?php if (isset($_POST['login'])) {
$link=mysqli_connect("localhost", "root", NULL, "strukov") or die("Could not connect: ".mysqli_connect_error());
mysqli_set_charset($link, "utf8");
$query0 = mysqli_query($link,"INSERT INTO `strukov`.`klienty` (`login`, `pass`, `familiya`, `imya`, `email`, `telefon`, `gorod`, `adres`, `data_rozhdeniya`) VALUES ('".$_POST['login']."', '".$_POST['pass']."', '".$_POST['familiya']."', '".$_POST['imya']."', '".$_POST['email']."', '".$_POST['telefon']."', '".$_POST['gorod']."', '".$_POST['adres']."', '".$_POST['data_rozhdeniya']."')");
header('Location: reg.php?ok=1');
exit;
} ?>
<?php include("head.php");?>
<tr><td>
<style>
/* Стили форм */
.forma label { display: block; margin: 0 0 6px 0; font-size: 14px; color: #6f737b; }
.forma .pole_formy { display: block; width: 100%; margin: 0 0 16px 0; padding: 10px 12px; border: 1px solid #d5d8dd; border-radius: 8px; font-family: Arial, sans-serif; font-size: 15px; box-sizing: border-box; }
.forma .knopka { display: inline-block; border: none; font-size: 15px; cursor: pointer; }
#err { display: block; margin-top: 14px; font-weight: bold; color: #8b1e3f; }
.soobshenie { margin-bottom: 16px; padding: 14px 18px; border-radius: 10px; background-color: #e7f5ec; color: #1e6b3a; font-weight: bold; }
.podskazka { margin: 0 0 20px 0; color: #6f737b; }
</style>
<div class="soderzhanie">
<div class="wrap">

	<h1 style="margin-top:10px">Регистрация</h1>
	<p class="podskazka">Создайте аккаунт, чтобы оставлять отзывы о товарах и пользоваться личным кабинетом. Поля со звездочкой обязательны.</p>

	<?php if (isset($_GET['ok'])) { ?>
	<div class="soobshenie">Регистрация прошла успешно! Теперь вы можете войти в личный кабинет.</div>
	<?php } ?>

	<!-- Форма регистрации -->
	<div class="blok">
		<form method="post" id="regforma" class="forma">
			<table class="setka">
			<tr>
				<td style="width:50%">
					<label>Логин *</label><input name="login" class="pole_formy" />
					<label>Пароль *</label><input name="pass" type="password" class="pole_formy" />
					<label>Повторите пароль *</label><input name="pass2" type="password" class="pole_formy" />
					<label>Фамилия *</label><input name="familiya" class="pole_formy" />
					<label>Имя *</label><input name="imya" class="pole_formy" />
				</td>
				<td class="posl" style="width:50%">
					<label>Электронная почта *</label><input name="email" class="pole_formy" />
					<label>Телефон</label><input name="telefon" class="pole_formy" placeholder="+7 (900) 000-00-00" />
					<label>Город</label><input name="gorod" class="pole_formy" />
					<label>Адрес доставки</label><input name="adres" class="pole_formy" />
					<label>Дата рождения *</label><input name="data_rozhdeniya" type="date" class="pole_formy" />
				</td>
			</tr>
			</table>
			<input type="submit" class="knopka" value="Зарегистрироваться" />
		</form>
		<a id="err"></a>
		<script type="text/javascript">
		regforma.onsubmit = function() {
		if (regforma.login.value.length < 3) {err.innerHTML="Логин должен содержать не менее 3 символов"; return false;}
		if (regforma.pass.value.length < 6) {err.innerHTML="Пароль должен содержать не менее 6 символов"; return false;}
		if (regforma.pass.value != regforma.pass2.value) {err.innerHTML="Пароли не совпадают"; return false;}
		if (regforma.familiya.value == "") {err.innerHTML="Введите фамилию"; return false;}
		if (regforma.imya.value == "") {err.innerHTML="Введите имя"; return false;}
		if (regforma.email.value.indexOf("@") == -1) {err.innerHTML="Введите корректный адрес электронной почты"; return false;}
		if (regforma.data_rozhdeniya.value == "") {err.innerHTML="Укажите дату рождения"; return false;}
		}
		</script>
	</div>

</div>
</div>
</td></tr>
<?php include("foot.php");?>
