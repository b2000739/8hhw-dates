<?php
$week = array('Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье');
echo $week[date('w', '06.06.2006')];
echo $week[date('w', '14.07.2008')];
$months = array(1 => 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь');
echo '<br>';
echo $months[date('n')];
echo '<br> в текущем месяце: ' . date('t') . ' дней';
echo '<br>';
$date = new DateTime('14-05-20');
$date->modify('+2 day +1 month +3 day +1 year -3 day');

$results = $date->format('Y-m-d H:i:s');

if ($results) {
	echo ($results);
} else {
	echo ('Formatting failed');
}
echo '<br>';
$today = new Datetime(date('m-d-Y'));
$New_year = new DateTime(date("m-d-Y", mktime(0, 0, 0, 1, 1, date("Y") + 1)));
$interval = $New_year->diff($today);
$results = $New_year->format('%S:%I:%H');

if ($results) {
	echo ($results);
} else {
	echo ('Formatting failed');
}
//ЭТО ТОЖЕ НЕ РАБОТАЕТ

// echo ($_POST);
// if (date($_POST) == 1) {
// 	echo 'ваш год весокосен';
// } elseif (date($_POST) == 0) {
// 	echo 'ваш год не весокосен';
// } else {
// 	echo "Введите год";
// }

//
// <form action="index.php" method="post">
// 	<input type="string" class="input">
// 	<input type="button" value="отправить" type="submit">
// </form>


// НЕ РАБОТАЕТ НУЖНА ПОМОЩЬ