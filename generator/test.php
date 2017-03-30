<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 17/1/15
 * Time: 上午9:43
 */
require __DIR__ . '/../bootstrap.php';

use generator\Scheduler;

function task1() {
    for ($i = 1; $i <= 10; ++$i) {
        echo "This is task 1 iteration $i.\n";
        yield;
    }
}

function task2() {
    for ($i = 1; $i <= 5; ++$i) {
        echo "This is task 2 iteration $i.\n";
        yield;
    }
}

$scheduler = new Scheduler;

$scheduler->newTask(task1());
$scheduler->newTask(task2());

$scheduler->run();