<?php
namespace Qwelve\N1\Multitude;

class MultitudeCalculator
{
    private $multitude1;
    private $multitude2;
    public function __construct(Multitude $multi1, Multitude $multi2){
        $this->multitude1 = $multi1;
        $this->multitude2 = $multi2;
    }
    public function intersect(){
        return array_intersect($this->multitude1->getMultitude(), $this->multitude2->getMultitude());
    }
    public function getDifference(){
        return array_diff($this->multitude1->getMultitude(), $this->multitude2->getMultitude());
    }
}
