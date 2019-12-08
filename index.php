<?php 

$str = file_get_contents('https://rsport.ria.ru/20191203/1561908401.html');

preg_match_all('#<h1\s+?class\s*?=\s*?"article__title">(.+?)</h1>#su', $str, $title);
preg_match_all('#<div\s+?class\s*?=\s*?"article__info-date">(.+?)</div>#su', $str, $date);
preg_match_all('#<div\s+?class\s*?=\s*?"article__text">(.+?)</div>#su', $str, $text);

echo strip_tags($title[1][0]);

echo '<br>';

echo strip_tags($date[1][0]);

echo '<br>';

foreach ($text[1] as $value){
	echo strip_tags($value);
}

?>