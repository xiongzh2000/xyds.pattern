<?php
/**
 * Created by PhpStorm.
 * User: xiongzhenhua
 * Date: 16/12/13
 * Time: 下午8:30
 */

abstract class Student
{
    private $name;
    private $content;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    public abstract function talk();

}

class Monitor extends Student
{
    public function talk()
    {
        echo 'Monitor ' . $this->getName() . ' said:' . $this->getContent() . PHP_EOL;
    }

}

class OrdinaryStudent extends Student
{
    public function talk()
    {
        echo 'student' . $this->getName() . ' said:' . $this->getContent() . PHP_EOL;
    }
}



abstract class Mediator
{
    private $studentList = [];

    public function addStudent(Student $obj)
    {
        $this->studentList[] = $obj;
    }

    public function getStudentList()
    {
        return $this->studentList;
    }

    abstract function notify(Student $stu);

    abstract function chat(Student $stuA, Student $stuB);
}

class QQMediator extends Mediator
{
    public function notify(Student $student)
    {
        $student->talk();
        foreach ($this->getStudentList() as $item) {
            if ($item != $student) {
                $item->talk();
            }
        }
    }

    public function chat(Student $studentA, Student $studentB)
    {
        $studentA->talk();
        $studentB->talk();
    }
}


$monitor = new Monitor('xiaohua');
$xiaoMing = new OrdinaryStudent('xiaoming');
$xiaofang = new OrdinaryStudent('xiaofang');

$qq = new QQMediator();
$qq->addStudent($monitor);
$qq->addStudent($xiaoMing);
$qq->addStudent($xiaofang);

$monitor->setContent('tomorrow have a  meeting!');
$xiaofang->setContent('ok!');
$xiaoMing->setContent('no time!');

$qq->notify($monitor);

