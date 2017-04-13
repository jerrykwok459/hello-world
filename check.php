<?php 
$redis = new Redis();
$conn=$redis->connect('127.0.0.1',6379);
$redis->set('info','测试成功');
echo $redis->get('info');

?>