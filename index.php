<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ООП php</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="Description" content="Enter your description here"/>
       
    </head>

    <body>
        <pre>
<?php 
interface Transport
{
    public function use();
    public function drive(string $direction);

}


abstract class Transportvehicle implements Transport
{
  public function use()
  {      
      echo $this->ability;
  }

  public function drive(string $direction)
  {
      echo $direction;
  }
  
  
}

class Cars extends Transportvehicle 
{
  public $signal ;
  public $wipers ;
  public $interior = "\r\n отделка салона из красной кожи";
  protected $ability = "использовать закись азота \r\n";
  public function onsignal()
  {
    
    if($this->signal)
    {
    echo "\r\n" . "beep!!!"; 
    $this->signal= false;

    }else{
      echo "\r\n" . "сигнала нет";  
    }
    
  }
  public function onwipers(){
    
    if($this->wipers)
    {
    echo "\r\n" . "дворники включены!!!" . "\r\n";  
    $this->wipers= false;
    }else{
      echo "\r\n" . "дворники не включены!!!" . "\r\n";  
    }
    
  }
  public function drive(string $direction){
    echo  $this->interior . "\r\n" ;
    $this->onsignal();
    $this->onwipers();
  if ($direction ==="вперед" ){
    
    echo $direction ."\r\n";
    $this->use(); 
    
    
  } elseif($direction !=null){
    echo $direction ."\r\n";
  }else{
    echo "стоит на месте";
  }
   
  }
 
    }

class Tanks extends Transportvehicle 
{
  protected $ability = "стрелять";
  public function drive(string $direction){
    echo $direction ."\r\n";
    $this->use();   
    
  }
 
    }

class Specialmachinery extends Transportvehicle 
{
  protected $ability = "управление ковшом";
  public function drive(string $direction){
  if ($direction !=null ){
    echo $direction ."\r\n";
    $this->use();  
  } 
  else{
    echo "спецтехника не используется";
  }
   
  }
 
    }
class Transportuse
{  
    public function drive(Transportvehicle $transport,string $direction)
    { 
      $transport-> drive($direction);
      }
}
$transport=new Cars();
$transportuse = new Transportuse();
$transportuse->drive($transport,"вперед");

$transport-> signal = true;
$transport-> wipers = true;

$transportuse->drive($transport,"вперед");
$transportuse->drive($transport,"назад");
?>
</body>
</html>