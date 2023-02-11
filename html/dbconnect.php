<?php
try {
    $db = new PDO('mysql:dbname=original_bbs; host=127.0.0.1; port=8889; charset=utf8', 'root', 'root');
} catch(PDOException $e) {
    echo '接続エラー:' . $e->getMessage();
}
?>