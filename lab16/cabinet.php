<?php session_start(); ?>
<?php if (isset($_POST['logout'])) {
session_destroy();
header("Location: cabinet.php");
exit;
} ?>
<?php $err=""; if (isset($_POST['login'])) {
$err="логин получен";
$link=mysqli_connect("localhost", "root", NULL, "strukov") or die("Could not connect: ".mysqli_connect_error());
mysqli_set_charset($link, "utf8");
$query0 = mysqli_query($link,"SELECT * FROM clients WHERE login='".$_POST['login']."' LIMIT 1");
if (mysqli_num_rows($query0)<=0){ $err="Неверный логин";}
else {$data=mysqli_fetch_array($query0);
if ($data['pass']!=$_POST['pass']) $err="Неверный пароль";
else
{
$_SESSION['id']=$data['id'];
$err="Вход успешен";
}
}
} ?>
<?php include("head.php");?>
<tr><td>
<style>
/* Стили форм */
.forma label { display: block; margin: 0 0 6px 0; font-size: 14px; color: #6f737b; }
.forma .pole_formy { display: block; width: 100%; margin: 0 0 16px 0; padding: 10px 12px; border: 1px solid #d5d8dd; border-radius: 8px; font-family: Arial, sans-serif; font-size: 15px; box-sizing: border-box; }
.forma .knopka { display: inline-block; border: none; font-size: 15px; cursor: pointer; }
#err { display: block; margin-top: 14px; font-weight: bold; color: #8b1e3f; }
/* Стили личного кабинета */
.vhod { max-width: 420px; margin: 0 auto; }
.vhod h1 { margin-top: 10px; }
.vhod_niz { margin: 18px 0 0 0; color: #6f737b; }
.vhod_niz a { color: #8b1e3f; font-weight: bold; }
.profil h3 { margin: 0 0 4px 0; font-size: 14px; font-weight: normal; color: #6f737b; }
.profil p { margin: 0 0 18px 0; font-size: 16px; font-weight: bold; }
.avatar { display: block; width: 96px; height: 96px; margin-bottom: 14px; border-radius: 50%; object-fit: cover; background-color: #f2f3f5; }
.privetstvie { font-size: 22px; font-weight: bold; margin-bottom: 6px; }
.knopka_vyhod { display: inline-block; padding: 11px 22px; border: 1px solid #d5d8dd; border-radius: 10px; background-color: #ffffff; font-size: 15px; cursor: pointer; }
.knopka_vyhod:hover { border-color: #8b1e3f; color: #8b1e3f; }
/* Стили отзывов пользователя */
.moi_otziv { margin-bottom: 12px; }
.moi_otziv td { vertical-align: middle; }
.moi_otziv img { display: block; width: 90px; height: 70px; object-fit: contain; border-radius: 8px; background-color: #f7f8f9; }
.moi_otziv_tovar { font-weight: bold; color: #8b1e3f; }
.moi_otziv_data { margin-left: 8px; font-size: 13px; color: #6f737b; }
.moi_otziv p { margin: 6px 0 0 0; }
.net_otzivov { color: #6f737b; }
.net_otzivov a { color: #8b1e3f; font-weight: bold; }
</style>
<div class="soderzhanie">
<div class="wrap">

<?php if(!isset($_SESSION['id'])) { ?>
	<!-- Форма авторизации (для неавторизованного пользователя) -->
	<div class="vhod">
		<h1>Вход в личный кабинет</h1>
		<div class="blok">
			<form method="post" id="vhodforma" class="forma">
				<label>Логин</label><input name="login" class="pole_formy" />
				<label>Пароль</label><input name="pass" type="password" class="pole_formy" />
				<input type="submit" class="knopka" value="Войти" />
			</form>
			<a id="err"><?php echo $err; ?></a>
			<script type="text/javascript">
			vhodforma.onsubmit = function() {
			if (vhodforma.login.value == "") {err.innerHTML="Введите логин"; return false;}
			if (vhodforma.pass.value == "") {err.innerHTML="Введите пароль"; return false;}
			}
			</script>
			<p class="vhod_niz">Нет аккаунта? <a href="reg.php">Зарегистрируйтесь</a></p>
		</div>
	</div>
<?php } else { ?>
	<!-- Информация о пользователе (для авторизованного пользователя) -->
	<div>
		<?php $link=mysqli_connect("localhost", "root", NULL, "strukov") or die("Could not connect: ".mysqli_connect_error()); ?>
		<?php mysqli_set_charset($link, "utf8"); ?>
		<?php $query0 = mysqli_query($link,"SELECT * FROM clients WHERE id='".$_SESSION['id']."' LIMIT 1"); ?>
		<?php $data=mysqli_fetch_array($query0); ?>

		<h1 style="margin-top:10px">Личный кабинет</h1>
		<table class="setka">
		<tr>
			<td style="width:70%">
				<div class="blok profil">
					<table class="setka">
					<tr>
						<td style="width:50%">
							<h3>Имя и фамилия</h3><p><?php echo $data['first name'];?> <?php echo $data['last name'];?></p>
							<h3>Логин</h3><p><?php echo $data['login'];?></p>
							<h3>Электронная почта</h3><p style="margin-bottom:0"><?php echo $data['email'];?></p>
						</td>
						<td class="posl" style="width:50%">
							<h3>Телефон</h3><p><?php echo $data['phone'];?></p>
							<h3>Страна</h3><p><?php echo $data['country'];?></p>
							<h3>Город</h3><p style="margin-bottom:0"><?php echo $data['city'];?></p>
						</td>
					</tr>
					</table>
				</div>
			</td>
			<td class="posl" style="width:30%">
				<div class="blok">
					<img class="avatar" src="images/<?php echo $data['avatar'];?>" alt="" onerror="this.style.display='none'" />
					<div class="privetstvie">Здравствуйте, <?php echo $data['first name'];?>!</div>
					<p>Вы вошли в личный кабинет магазина «Сокет».</p>
					<!-- Форма выхода -->
					<form method="post">
						<input type="hidden" name="logout" /><input type="submit" class="knopka_vyhod" value="Выйти из кабинета" />
					</form>
				</div>
			</td>
		</tr>
		</table>

		<!-- Отзывы авторизованного пользователя -->
		<h1>Мои отзывы</h1>
		<?php $query0 = mysqli_query($link,"SELECT * FROM `otzivi`, `tovar` WHERE `otzivi`.`tovar`=`tovar`.`id` AND `otzivi`.`client`=".$_SESSION['id']); ?>
		<?php if (mysqli_num_rows($query0)>0) {
		$data=mysqli_fetch_array($query0);
		do{ ?>
		<div class="blok moi_otziv">
			<table class="setka">
			<tr>
				<td style="width:110px"><a href="tovar.php?id=<?php echo $data['tovar']; ?>"><img src="tovar/<?php echo $data['image']; ?>" alt="<?php echo $data['name']; ?>" /></a></td>
				<td class="posl">
					<a href="tovar.php?id=<?php echo $data['tovar']; ?>" class="moi_otziv_tovar"><?php echo $data['name']; ?></a>
					<span class="moi_otziv_data"><?php echo date("d.m.Y", strtotime($data['date'])); ?></span>
					<p><?php echo $data['text']; ?></p>
				</td>
			</tr>
			</table>
		</div>
		<?php } while($data=mysqli_fetch_array($query0));
		} else { ?>
		<div class="blok net_otzivov">Вы еще не оставили ни одного отзыва. Выберите товар в <a href="catalog.php">каталоге</a> и поделитесь мнением.</div>
		<?php } ?>
	</div>
<?php } ?>

</div>
</div>
</td></tr>
<?php include("foot.php");?>
