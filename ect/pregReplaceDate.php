<?php

$string = '21-11-2015';

$pattern = '/([0-9]{2})-([0-9]{2})-([0-9]{4})/';

$replacement = 'Родился я в $3 году, а месяц то $2 не пропаду, ведь день настал, а день под номером был $1';
echo preg_replace($pattern, $replacement, $string);

echo "<br>month:".preg_replace($pattern, '$2', $string);

