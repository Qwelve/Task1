<?php
require "vendor/autoload.php";
use Qwelve\N1\Multitude\Multitude;
use Qwelve\N1\Multitude\MultitudeCalculator;

$request = $_REQUEST;
$multi1 = new Multitude($request["multitude1"]);
$multi2 = new Multitude($request["multitude2"]);
$calculator = new MultitudeCalculator($multi1, $multi2);
?>
<p>Количество элменетов в первом множестве: <?=$multi1->count()?></p>
<p>Количество элменетов во втором множестве: <?=$multi2->count()?></p>
<hr>
<p>Отсортированное множество 1: <?=implode(", ",$multi1->sort($request["sort"]))?></p>
<p>Отсортированное множество 2: <?=implode(", ",$multi2->sort($request["sort"]))?></p>
<hr>
<p>Максимальное значение множества 1: <?=$multi1->max()?></p>
<p>Минимальное значение множества 1: <?=$multi1->min()?></p>
<p>Максимальное значение множества 2: <?=$multi2->max()?></p>
<p>Минимальное значение множества 2: <?=$multi2->min()?></p>
<hr>
<p>Пересечение множеств: <?=implode(", ",$calculator->intersect())?></p>
<hr>
<p>Разница множеств: <?=implode(", ",$calculator->getDifference())?></p>
<hr>
<p>Первое множество в обратном порядке:<?=implode(", ",$multi1->reverse())?></p>
<hr>
<p>Произведение элементов второго множества:<?=$multi2->composite()?></p>
<hr>
<p>Значения первого множества, перемешанные в случайном порядке:<?=implode(", ", $multi1->shuffle())?></p>