<?php

echo "<h1>","サイコロ","</h1>";
$a = mt_rand(1,6);
$b = mt_rand(1,6);
if ($a == $b) {
    echo'<p>','サイコロの目は「',$a,'」「',$b,'」でした！　ゾロ目でした！','</p>';
} else {
echo'<p>','サイコロの目は「',$a,'」「',$b,'」でした！','</p>';
}
echo "<a href=","index.php",">もう一度！</a>";
?>
