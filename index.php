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
        $link = 'index.php'; $name = 'Главная'; $active = true;
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
        $link = 'trip.php'; $name = 'Область'; $active = false;
        echo $link;
        ?>"<?php
        if ($active) echo ' class="selected_menu"';
        echo '>' . $name;
        ?></a>
    </nav>
</header>

<main>
    <h1>Путешествие в Калининград</h1>

    <h2>О поездке</h2>
    <p>
        Калининград — столица самого заподного региона России, который находится на Балтийском побережье
        и совсем не похож на остальные российские города. Здесь сохранилась старинная немецкая
        архитектура: красные черепичные крыши, кирпичные ворота и узкие уютные улочки. Город
        стоит на реке Преголе, а в его центре расположен остров Канта с Кафедральным собором,
        где похоронен знаменитый философ.
    </p>
    <p>
        Мы приехали сюда с подругами, чтобы немного отдохнуть и посмотреть на город, о котором
        столько слышали. В этом разделе собраны впечатления от поездки: куда мы ходили, что
        попробовали и что хочется показать другим.
    </p>

    <h2>Где мы были</h2>
<ul>
<?php
$places = [
    'Кафедральный собор на острове Канта',
    'Музей Мирового океана',
    'Рыбная деревня на набережной Преголи',
    'Музей янтаря',
    'Форт №1 Штайн',
    'Замок Вальдау',
    'Куршская коса и танцующий лес',
    'Зеленоградск и Светлогорск',
    'Балтийск и Балтийская коса',
];
foreach ($places as $place) {
    echo '<li>' . $place . "</li>\n";
}
?>
</ul>

    <h2>Фотографии</h2>
<div class="photos">
    <?php
    echo '<img src="photos/photo' . (date('s') % 2 + 1) . '.jpg" alt="Меняющаяся фотография">';
    ?>
    <img src="photos/photo3.jpg" alt="Калининград">
</div>
</main>

<footer>
    Сформировано <?php echo date('d.m.Y') . ' в ' . date('H-i:s'); ?>
</footer>

</body>
</html>