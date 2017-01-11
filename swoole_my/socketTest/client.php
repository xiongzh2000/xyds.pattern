<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 17/1/8
 * Time: 下午2:51
 */

$socket =  socket_create(AF_INET, SOCK_STREAM, SOL_TCP );
socket_connect( $socket ,'127.0.0.1', 11212 );
while( $t = socket_read( $socket,1024  ) ){
    echo 'server:'.$t."\n";
    $str = trim(fgets(STDIN));
    if( $str ){
        socket_write($socket, $str, strlen($str) );
    }
}
socket_close( $socket );