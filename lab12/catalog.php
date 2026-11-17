<?php include("head.php");?>
<tr><td>
<div class="soderzhanie">
<div class="wrap">

	<h1 style="margin-top:10px">Каталог комплектующих</h1>

	<!-- Подключение к базе данных и запрос товаров -->
	<?php $link=mysqli_connect("localhost", "root", NULL, "strukov") or die("Could not connect: ".mysqli_connect_error()); ?>
	<?php mysqli_set_charset($link, "utf8"); ?>
	<?php $query0 = mysqli_query($link,"SELECT * FROM tovary"); ?>
	<?php $data=mysqli_fetch_array($query0); ?>

	<!-- Набор карточек товаров -->
	<div style="display: flex; flex-wrap: wrap; justify-content: center;">
	<?php do{ ?>
		<div class="card">
			<div class="card_foto"><img src="<?php echo $data['image'];?>" alt="<?php echo $data['name'];?>" /></div>
			<div class="card_kat"><?php echo $data['kategoriya'];?></div>
			<div class="card_nazv"><?php echo $data['name'];?></div>
			<div class="card_har"><?php echo $data['harakteristiki'];?></div>
			<div class="card_cena"><?php echo $data['cena'];?> ₽</div>
			<div class="card_nal">На складе: <?php echo $data['kolichestvo'];?> шт. · Гарантия <?php echo $data['garantiya'];?> мес.</div>
			<a class="knopka card_knopka">Подробнее</a>
		</div>
	<?php } while($data=mysqli_fetch_array($query0)); ?>
	</div>

</div>
</div>
</td></tr>
<?php include("foot.php");?>
