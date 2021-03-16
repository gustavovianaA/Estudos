<?php 

class Calculator{
  
  private $a;
  private $b;
  private $result;
  const OPERATIONS = ['+'=>'sum',
      '-' => 'subtract',
      '.' => 'multiply',
      '/' => 'divide'
    ];
  
  public function __construct($a,$b)
  {
    $this->setA($a);
    $this->setB($b);
  }

  public function setA($a){
    $this->a = (float) $a;
  }

  public function setB($b){
    $this->b = (float) $b;
  }
  
  public function __get($property)
  {
    return $this->$property;
  }

  public function sum($a,$b)
  {
    return $a + $b;
  }

  public function result($operation){
    $operation = self::OPERATIONS[$operation];
    $this->result = $this->$operation($this->a,$this->b);
    return $this->result;
  }

}

$compute = new Calculator(1,2);
echo $compute->result('+');
    
?> 