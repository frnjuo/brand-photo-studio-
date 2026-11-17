<?php include("head.php");?>
<tr><td>
<style>
/* Стили страницы товара */
.hleb { margin: 6px 0 18px 0; font-size: 14px; color: #6f737b; }
.hleb a { color: #8b1e3f; }
.tovar_foto { padding: 20px; text-align: center; }
.tovar_foto img { display: block; width: 100%; height: 340px; object-fit: contain; }
.tovar_kat { margin-bottom: 6px; font-size: 13px; color: #6f737b; text-transform: uppercase; letter-spacing: 0.04em; }
.tovar_nazv { margin: 0 0 12px 0; font-size: 28px; line-height: 1.25; }
.tovar_har { margin: 0 0 22px 0; font-size: 16px; color: #4a4e56; }
.tovar_cena { margin-bottom: 6px; font-size: 34px; font-weight: bold; }
.tovar_nal { margin-bottom: 22px; font-size: 14px; color: #1e6b3a; font-weight: bold; }
.tovar_info td { padding: 10px 0; border-bottom: 1px solid #e4e6ea; font-size: 15px; }
.tovar_info td.nazv_polya { width: 40%; color: #6f737b; }
</style>

<?php $urls=parse_url($_SERVER['REQUEST_URI']); parse_str($urls['query'],$params); ?>
<?php $link=mysqli_connect("localhost", "root", NULL, "strukov") or die("Could not connect: ".mysqli_connect_error()); ?>
<?php mysqli_set_charset($link, "utf8"); ?>
<?php $query0 = mysqli_query($link,"SELECT * FROM tovary WHERE id=".$params['id']); ?>
<?php $data=mysqli_fetch_array($query0); ?>

<div class="soderzhanie">
<div class="wrap">

	<div class="hleb"><a href="catalog.php">Каталог</a> / <?php echo $data['kategoriya'];?></div>

	<!-- Фото и основная информация о товаре -->
	<table class="setka">
	<tr>
		<td style="width:45%">
			<div class="blok tovar_foto"><img src="<?php echo $data['image'];?>" alt="<?php echo $data['name'];?>" /></div>
		</td>
		<td class="posl" style="width:55%">
			<div class="blok">
				<div class="tovar_kat"><?php echo $data['kategoriya'];?> · <?php echo $data['proizvoditel'];?></div>
				<h1 class="tovar_nazv"><?php echo $data['name'];?></h1>
				<p class="tovar_har"><?php echo $data['harakteristiki'];?></p>
				<div class="tovar_cena"><?php echo $data['cena'];?> ₽</div>
				<div class="tovar_nal">В наличии: <?php echo $data['kolichestvo'];?> шт.</div>
				<a class="knopka">Добавить в корзину</a>
			</div>
		</td>
	</tr>
	</table>

	<!-- Описание и характеристики -->
	<h1>Описание и характеристики</h1>
	<div class="blok">
		<p><?php echo $data['opisanie'];?></p>
		<table class="tovar_info" style="width:100%">
			<tr><td class="nazv_polya">Категория</td><td><?php echo $data['kategoriya'];?></td></tr>
			<tr><td class="nazv_polya">Производитель</td><td><?php echo $data['proizvoditel'];?></td></tr>
			<tr><td class="nazv_polya">Характеристики</td><td><?php echo $data['harakteristiki'];?></td></tr>
			<tr><td class="nazv_polya">Гарантия</td><td><?php echo $data['garantiya'];?> мес.</td></tr>
			<tr><td class="nazv_polya">Артикул</td><td><?php echo $data['id'];?></td></tr>
		</table>
	</div>

</div>
</div>
</td></tr>
<?php include("foot.php");?>
