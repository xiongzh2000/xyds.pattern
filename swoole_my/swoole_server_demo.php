<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 17/1/15
 * Time: 下午3:45
 */

$server = new \swoole_server("127.0.0.1",8088,SWOOLE_PROCESS,SWOOLE_SOCK_TCP);
var_dump($server);

$server->on('connect', function ($serv, $fd){ });

$server->on('receive', function ($serv, $fd, $from_id, $data){ });

$server->on('close', function ($serv, $fd){ });

//$server->set([
//    "daemonize"=>true
//]);

$server->set([
    "daemonize"=>true,
    "reactor_num"=>2,
    "worker_num"=>4,
]);

$server->start();