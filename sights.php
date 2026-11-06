<?php
date_default_timezone_set('Europe/Moscow');

$title = 'Воинова Екатерина, группа 251-361, лабораторная работа №3';

$sights = [
    'Кафедральный собор' => 'готический храм на острове Канта, рядом с ним находится могила философа',
    'Королевские ворота' => 'старинные городские ворота с фигурами правителей',
    'Музей янтаря' => 'коллекция «солнечного камня», который добывают в Калининградской области',
    'Музей Мирового океана' => 'музей на набережной Преголи с настоящими судами, на которые можно подняться',
    'Рыбная деревня' => 'квартал в старонемецком стиле с магазинами и кафе у воды',
    'Форт №1 Штайн' => 'часть кольца укреплений старого Кёнигсберга',
];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title><?php echo $title; ?></title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header>
<nav>
<a href="<?php
$link = 'index.php'; $name = 'Главная'; $active = false;
echo $link;
?>"<?php
if ($active) echo ' class="selected_menu"';
echo '>' . $name;
?></a>
<a href="<?php
$link = 'sights.php'; $name = 'Калининград'; $active = true;
echo $link;
?>"<?php
if ($active) echo ' class="selected_menu"';
echo '>' . $name;
?></a>
<a href="<?php
$link = 'trip.php'; $name = 'Область'; $active = false;
echo $link;
?>"<?php
if ($active) echo ' class="selected_menu"';
echo '>' . $name;
?></a>
</nav>
</header>

<main>
<h1>Калининград и его достопримечательности</h1>

<h2>Город с немецкой историей</h2>
<p>
    До 1946 года Калининград назывался Кёнигсберг и был немецким городом. Многие здания,
    ворота, башни и форты сохранились с тех времён или были восстановлены, поэтому
    прогулка по городу похожа на путешествие по Европе. Начинать лучше с центра: остров
    Канта небольшой, по нему легко пройти пешком, а вокруг открываются красивые виды на
    реку Преголю и мосты.
</p>

<h2>Что посмотреть в городе</h2>
<ul>
<?php
foreach ($sights as $sight => $description) {
    echo '<li><b>' . $sight . '</b> — ' . $description . "</li>\n";
}
?>
</ul>

<h2>Совет туристам</h2>
<p>
    Большинство главных мест расположено недалеко друг от друга, поэтому в центре удобно
    ходить пешком. Музеи лучше выбирать заранее, чтобы хватило времени и на прогулки по
    набережной, и на отдых в кафе.
</p>
<h2>Фотографии</h2>
<div class="photos">
<img src="photos/photo4.jpg" alt="Кафедральный собор">
<img src="photos/photo5.jpg" alt="Королевские ворота">
<img src="photos/photo6.jpg" alt="Музей янтаря">
<img src="photos/photo7.jpg" alt="Музей Мирового океана">
<img src="photos/photo8.jpg" alt="Рыбная деревня">
<img src="photos/photo9.jpg" alt="Форт №1 Штайн">
</div>
</main>

<footer>
    Сформировано <?php echo date('d.m.Y') . ' в ' . date('H-i:s'); ?>
</footer>

</body>
</html>