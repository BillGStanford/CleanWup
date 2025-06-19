<?php
file_put_contents('usage.log', date('Y-m-d H:i:s')." - ".file_get_contents('php://input')."\n", FILE_APPEND);
echo '{"status":"success"}';
?>