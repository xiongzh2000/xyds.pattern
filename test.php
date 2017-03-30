<?php

function xrange($start, $end, $step = 1) {
    for ($i = $start; $i <= $end; $i += $step) {
        yield $i;
    }
}
$gen = xrange(1,10);

$gen->rewind();
while ($gen->valid()) {
    echo $gen->current() . "\n";
    $gen->next();
}


foreach (xrange(1, 10) as $num) {
    echo $num, "\n";
}


function gen() {
$ret = (yield 'yield1');
    var_dump($ret);
    $ret = (yield 'yield2');
    var_dump($ret);
}

$gen = gen();
var_dump($gen->current());    // string(6) "yield1"
var_dump($gen->send('ret1')); // string(4) "ret1"   (the first var_dump in gen)
                              // string(6) "yield2" (the var_dump of the ->send() return value)
var_dump($gen->send('ret2')); // string(4) "ret2"   (again from within gen)


function printer() {
    echo "I'm printer!".PHP_EOL;
    while (true) {
        $string = (yield '1');
        echo $string.PHP_EOL;
    }
}

$printer = printer();
var_dump($printer);
var_dump($printer->current());
$printer->send('Hello world!');
$printer->send('Bye world!');
