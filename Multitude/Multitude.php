<?php
namespace Qwelve\N1\Multitude;

class Multitude
{
    private $multitude = [];
    private $delimitersRegExp = "/[\s,\-!?\(\)\.]+/";
    public function __construct(string $s){
        $this->multitude = $this->converStringToMultitude(trim($s));
    }
    public function getMultitude(){
        return $this->multitude;
    }
    /**
     * Количество элменетов в множестве
     */
    public function count(){
        return count($this->getMultitude());
    }
    /**
     * Сортировка по выбраннаму правилу
     */
    public function sort(string $sortRule){
        $tmpMultitude = $this->getMultitude();   
        $sortRule = mb_strtoupper($sortRule, "UTF-8");
        switch ($sortRule){
            case "ASC":
                asort($tmpMultitude);
                return $tmpMultitude;
            case "DESC":
                arsort($tmpMultitude);
                return $tmpMultitude;
            default:
                throw new \Exception("Неправильное правило сортировки. Доступно только ASC или DESC");
        }
    }
    /**
     * Минимальный элемент множеств
     */
    public function min(){
        return min($this->getMultitude());
    }
    /**
     * Максимальный элемент множества
     */
    public function max(){
        return max($this->getMultitude());
    }
    /**
     * Множество в обратном порядке
     */
    public function reverse(){
        return array_reverse($this->getMultitude());
    }
    /**
     * Перемешать множество
     */
    public function shuffle(){
        $tmpMultitude = $this->getMultitude();
        shuffle($tmpMultitude);
        return $tmpMultitude;
    }
    public function composite(){
        return array_product($this->getMultitude());
    }
    private function converStringToMultitude(string $s){
        $convertedString = preg_split($this->delimitersRegExp, $s);    
        $this->checkMultitude($convertedString);    
        return $convertedString;
    }
    private function checkMultitude($array){
        if($array  !== array_filter($array,'is_numeric')){
            throw new \Exception("В множестве допускаются только числа");
        }
    }
}
