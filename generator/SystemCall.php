<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 17/1/15
 * Time: 上午10:47
 */
namespace generator;

class SystemCall {
    protected $callback;

    public function __construct(callable $callback) {
        $this->callback = $callback;
    }

    public function __invoke(Task $task, Scheduler $scheduler) {
        $callback = $this->callback;
        return $callback($task, $scheduler);
    }
}