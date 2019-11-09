<?php
trait Nahid {
    public function sayHelloToNahid() {
        echo 'Nahid ';
    }
}

trait Tareq {
    use Nahid;
    public function sayHelloToTareq() {
        echo 'Tareq ';
    }
}


trait Tipu {
        use Tareq;

    public function sayHelloToTipu() {
        echo 'Tipu ';
    }
}

trait Nazmul {
    public function sayHelloTonazmul() {
        echo 'Nazmul ';
    }
}


class MyHelloWorld {
    use Tipu,Nazmul;
    public function sayExclamationMark() {
        echo '!';
    }
}

$o = new MyHelloWorld();
$o->sayHelloToNahid();
$o->sayHelloToTareq();
$o->sayHelloToTipu();

$o->sayHelloTonazmul();

$o->sayExclamationMark();

?>