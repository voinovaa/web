<?php
date_default_timezone_set('Europe/Moscow');

$title = 'Воинова Екатерина, группа 251-361, лабораторная работа №3';
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
$link = 'sights.php'; $name = 'Калининград'; $active = false;
echo $link;
?>"<?php
if ($active) echo ' class="selected_menu"';
echo '>' . $name;
?></a>
<a href="<?php
$link = 'trip.php'; $name = 'Область'; $active = true;
echo $link;
?>"<?php
if ($active) echo ' class="selected_menu"';
echo '>' . $name;
?></a>
</nav>
</header>

<main>
<h1>Калининградская область: города и косы</h1>

<h2>Города на побережье</h2>
<p>
    Кроме самого Калининграда, в области есть несколько небольших городов, куда стоит
    съездить на день. Зеленоградск и Светлогорск — курорты на Балтийском море с песчаными
    пляжами, прогулочными набережными и уютными улицами. Балтийск расположен на самом
    западе области и известен как морской город с портом и крепостью.
</p>
<ul>
<?php
$cities = [
    'Зеленоградск — курортный город с широким пляжем и набережной',
    'Светлогорск — курорт с парками и видами на море с высокого берега',
    'Балтийск — город-порт на самом западе области',
];
foreach ($cities as $city) {
    echo '<li>' . $city . "</li>\n";
}
?>
</ul>
<h2>Фотографии</h2>
<div class="photos">
<img src="photos/photo10.jpg" alt="Зеленоградск">
<img src="photos/photo11.jpg" alt="Водонапорная башня в Светлогорске">
<img src="photos/photo12.jpg" alt="Канатная дорога в Светлогорске">
<img src="photos/photo13.jpg" alt="Маяк в Балтийске">
</div>

<h2>Косы</h2>
<p>
    Главная природная достопримечательность области — две длинные песчаные косы, которые
    отделяют лагуны от моря. На Куршской косе находится национальный парк с дюнами,
    сосновыми лесами и знаменитым танцующим лесом, где деревья растут причудливо изогнутыми.
    Эта коса входит в список Всемирного наследия ЮНЕСКО. Вторая — Балтийская коса, она
    тянется вдоль побережья от Балтийска и выглядит почти как пустынный пляж.
</p>
<ul>
<?php
$spits = [
    'Куршская коса — национальный парк, дюны и танцующий лес',
    'Балтийская коса — длинная песчаная полоса у Балтийска',
];
foreach ($spits as $spit) {
    echo '<li>' . $spit . "</li>\n";
}
?>
</ul>
<h2>Фотографии</h2>
<div class="photos">
<img src="photos/photo14.jpg" alt="Танцующий лес">
<img src="photos/photo15.jpg" alt="Высота Эфа">
<img src="photos/photo16.jpg" alt="Балтийская коса - самая западная точка России">
<img src="photos/photo17.jpg" alt="Ржавый город">
<img src="photos/photo18.jpg" alt="Заброшенные ангары для самолетов">
</div>
</main>

<footer>
    Сформировано <?php echo date('d.m.Y') . ' в ' . date('H-i:s'); ?>
</footer>

</body>
</html>