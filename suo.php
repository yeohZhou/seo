<?php
ignore_user_abort();
set_time_limit(0);
$filename = 'path';
do {
sleep(60);
file_put_contents($filename,file_get_contents('path'));
}while (1);
?>
