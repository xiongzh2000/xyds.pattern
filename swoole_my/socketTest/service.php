<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 17/1/8
 * Time: 下午2:51
 */
//
//$serv = stream_socket_server("tcp://0.0.0.0:8610", $errNo, $errStr) or die("create server failed");
//
//while (1) {
//    $conn = stream_socket_accept($serv);
//    if (pcntl_fork() == 0) {
//        $request  = fread($conn, 2000);
//        //
//        $response = 'hello ! from serv response';
//        //
//        fwrite($conn, $response);
//        fclose($conn);
//        exit(0);
//    }
//}

// base socket
$socket =  socket_create(AF_INET, SOCK_STREAM, SOL_TCP );
socket_bind($socket ,'127.0.0.1', 11212 );
socket_listen( $socket ,5);
while( true ){
    $con = socket_accept( $socket );
    if( $con !==false ){
        socket_write($con, 'init', 4 );
        while(  $str = socket_read( $con,1024 ) ){
            echo 'client:'.$str."\n";
            $ret = fgets(STDIN);
        }
        socket_close( $con );
    }
}

//
$socket = stream_socket_server("tcp://127.0.0.1:1121", $errNo, $errStr) or die("create server failed");

while (1) {
    $conn = stream_socket_accept($socket);
    if (pcntl_fork() == 0) {
        $request  = fread($conn, 2000);
        //
        echo 'from client:' . $request . PHP_EOL;
        $response = 'hello ! from serv response';
        //
        fwrite($conn, $response);
        fclose($conn);
    }
}