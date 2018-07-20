<?php
$bun1 = '私はうどんが大好きです。うどんがないと生きられません。うどんうどん！<br>';
echo $bun1;
$bun2 = str_replace('うどん', 'そば', $bun1);
echo $bun2;
?>