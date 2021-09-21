<?php

class car
{
  public $EngineNO;
   public $Model;
    public $Owner;
 
  public function showinfo()
  {
    return $this->EngineNO;
	
  }
   public function showinfo2()
  {
    return $this->Model;
	
  }
   public function showinfo3()
  {
    return $this->Owner;
	
  }
}
 
$car = new car();

$car->EngineNO = 'foreign car';
$car->Model = ' x34';
$car->Owner = ' asif';
echo $car->showinfo();
echo $car->showinfo2();
echo $car->showinfo3();


?>