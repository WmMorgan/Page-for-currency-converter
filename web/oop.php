<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 28/02/2021
 * Time: 11:49
 */

class Men {
    public $m = "Bexi daraxti";
    public function Olma() {
        return $this->m;
    }
}
class Sen {
    public function daraxt() {
        return $this->m;
    }
}

$Men = new Sen;
print_r($Men->m);

echo "Salom";