<?php
$week = array('Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота',);


echo "Задание 1: " . $week[date('w', mktime(0, 0, 0, 6, 6, 2006))];
echo "Задание 1.1: " . $week[date('w', mktime(0, 0, 0, 7, 14, 2008))];
$months = array(1 => 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь');
echo '<br>';
echo "Задание 2: " . $months[date('n')];
echo '<br> Задание 3: в текущем месяце: ' . date('t') . ' дней';
echo '<br>';
?>
<h4> Задание 4: </h4>
<form method="post" enctype='multipart/form-data'>
	<p>Выберите год<input type='text' name='year'></p>
	<input type='submit' value="Сохранить" name='ok'>
</form>
<?
if ($_POST['ok']) {
	$year = $_POST['year'];
	if (date("L", mktime(0, 0, 0, 7, 7, $year)) == 1) {
		echo "Ваш год високосный";
	} else {
		echo 'Ваш год не високосный';
	}
	echo '<br>';
}

$date = new DateTime('2025-12-31');
$date->modify('+ 2 day + 1 month + 3 day + 1 year - 3 day');
$results = $date->format('Y-m-d');
echo 'Задание 5: ' . $results;
echo '<br>';
$months = array(1 => 'января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря');
$week = array(1 => 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье');

$ny = mktime(0, 0, 0, 01, 01, date('Y') + 1);
$timeUntilNY = $ny - time();
$days = floor($timeUntilNY / 3600 / 24);
echo "Задание 6: " . $days;
// $results = $New_year->format('%S:%I:%H');\
$date = new DateTime(date('Y-m-d'));
$until = date('w') - 1;
$until_b = $until + 1;
$date->modify('+' . -$until_b . ' day');
echo '<br> <br> Задание 7: ';
for ($i = 1; $i < 8; $i++) {
	$date->modify('+ 1 day');
	$month = $date;
	$menth = $month->format('n');
	$results = $date->format($week[$i] . ', j ' . $months[$menth] . ' Y года');
	echo '<br>';
	echo $results;
	echo '<br><br>';
}
