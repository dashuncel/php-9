<?php
//---------- АВТОМОБИЛЬ: ---------------------------
  class Car
  {
  	private $brand; // производитель
  	private $model; // модель
  	private $consumption; // расход топлива
  	private $body; // кузов
  	private $color; //цвет
  	private $power; // мощность
    private $dimensions; // габариты
    private $speed ; // текущая скорость 

    function __construct ($brand, $model, $color) {
      // прочие характеристики в функицональной зависимости от первых двух, можно получать данные запросом куда-то
      $this->brand = $brand;
      $this->model = $model;
      $this->color = $color;

      echo "Создан автомобиль $this->brand  $this->model, цвет $color";
      $this->loadCharaters();
    }

    private function loadCharaters() {
      // функция от $this->brand, $this->model
    }

    public function __get($property)
    {
        switch ($property)
        {
          case 'brand':
            return $this->brand;
            break;
 
          case 'consumption':
            return $this->consumption;
            break;

          case 'power':
            return $this->power;
            break;  

          // итп  
        }
    }
 
    public function __set($property, $value)
    {
        switch ($property)
        {
          case 'brand':
            $this->brand = $value;
            break;
 
          case 'consumption':
            $this->consumption = $value;
            break;

          case 'power':
            $this->power = $value;
            break;  

        }
        echo "Для машины $this->brand $this->model установлено свойство '$property' = $value<br/>";
    }

    public function start() {
    	$this->speed = 100;
    	echo "Машина $this->brand $this->model поехала со скоростью $this->speed км/ч<br/>";
    } 

    public function stop() {
    	echo 'Тормозим';
    	$this->speed = 0;
    } 

    public function turn() {
    	echo 'Поворот';
    } 
  }

//----------ТЕЛЕВИЗОР: ---------------------------
  class Tv
  {
    private $size;
    private $brand;
    private $model;
    private $brightness;
    private $resolution;
    private $current_channel;

    function __construct ($brand, $model) {
      // прочие характеристики частично в функицональной зависимости от первых двух
      $this->brand = $brand;
      $this->model = $model;
      echo "Создан TV $this->brand  $this->model<br/>";

      $this->loadCharaters();
    }

     public function __get($property)
    {
        switch ($property)
        {
          case 'brand':
            return $this->brand;
            break;
 
          case 'consumption':
            return $this->brightness;
            break;

          case 'resolution':
            return $this->resolution;
            break;  
          // итп  
        }
    }
 
    public function __set($property, $value)
    {
        switch ($property)
        {
          case 'brand':
            $this->brand = $value;
            break;
 
          case 'brightness':
            $this->brightness = $value;
            break;

          case 'resolution':
            $this->resolution = $value;
            break;  
         // итп
        }
        echo "Для TV $this->brand $this->model установлено свойство '$property' = $value<br/>";
    }

    private function loadCharaters() {
      // функция от $this->brand, $this->model
    }

    public function turnOn() {
      echo "Телевизор  $this->brand $this->model включен<br/>";
    }

    public function turnOff() {
      echo "Телевизор  $this->brand $this->model выключен<br/>";
    }

    public function switchChanal() {
       $this->current_channel +=  $this->$current_channel;
       echo "Текущий канал ".$this->$current_channel;
    }

    public function upgradePo() {
      echo "Обновление програмного обеспечения на телевизоре $this->brand $this->model<br/> ";
    }
  }

//---------- РУЧКА: ---------------------------
  class Pen
  {
    private $color; // цвет стержня
    private $size; //габариты
    private $producter; //производитель
    private $matherial; // материал корпуса

    function __construct ($color) {
      $this->color = $color;
      echo "Куплена ручка с цветом $this->color<br/>";
    }

    public function print($str) {
       echo "Ручка пишет строку $str<br/>";
    }

    public function setColor($color) { // замена стержня
       $this->color = $color;
       echo "Ручка теперь пишет $color цветом<br/>";
       return $this;
    }

    public function getColor() { 
       return $this->color;
    }

  }

//---------- УТКА: ---------------------------
  class Duck
  {
     private $sound;  // произносимый звук
     private $poroda; // вид
     private $area; // континент обитания

    function __construct ($poroda) {
      $this->poroda = $poroda;
      echo "Родилась утка породы $this->poroda<br/>";
    }

    public function fly() {
      echo "Утка $poroda полетела<br/>";
    }

    public function swim() {
      echo "Утка $poroda поплыла<br/>";
    }

    public function eat($eda) {
      switch ($eda) {
        case 'meat':
          echo "Так не пойдет, вы отравите нашу утку! <br/>";
          break;
        case 'fish':
          echo "О, это любимая еда утки! <br/>";
          break;
        default:
          echo "Спасибо, вкусно! <br/>";
          break;
      }    	
    }
  }

//---------- ТОВАР: ---------------------------
  class Product
  {
    private $name; // наименование
    private $price; // цена
    private $category; // категория
    private $photo; // URL фото 
    private $unit; // единица измерения

    public function __construct($name, $price, $category, $unit)
    {
      $this->name = $name;
      $this->price = $price;
      $this->category = $category;
      $this->unit = $unit;
      echo "Создан товар $this->name с базовой ценой $this->price в категории '$this->category' и единицей измерения $this->unit<br/>";
    }

    public function __get($property)
    {
      switch ($property)
      {
        case 'price':
          return $this->price;
          break;

        case 'category':
          return $this->category;
          break;

        case 'unit':
          return $this->unit;
          break;  
        // итп  
      }
    }
 
    public function __set($property, $value)
    {
      switch ($property)
      {
        case 'price':
          $this->price = $value;
          break;

        case 'category':
          $this->category = $value;
          break;

        case 'unit':
          $this->unit = $value;
          break;  
       // итп
      }
      echo "Для товар $this->name установлено свойство '$property' = $value<br/>";
    }

    public function putBasket() {
        echo "Товар $name поместили в корзину";
ж   }

    public function getPrice($discount) {
      $price = $this->price  - $this->price * $discount / 100 ;
      return $price;
    }

    public function getName() {
      return $this->name ;
    }

  }

  //машины 
  $lexus=new Car('Lexus', 'GS', 'black');
  $lexus->start();
  $audi=new Car('Audi', 'Q7', 'red');
  $audi->start();
  $lexus->consumption=1000;
  echo($lexus->model);
  echo '<hr>';

  // TV
  $sumsung = new Tv('sumsung','mt100');
  $sony = new Tv('sony','as100');
  echo '<hr>';

  // Ручка 
  $green = new Pen('green');
  $red = new Pen('red');
  echo '<hr>';

  // Утка 
  $gaga = new Duck('Гага');
  $turpan = new Duck('Турпан');
  echo '<hr>';

  //продукты 
  $cheese  = new Product('Сыр', 600, 'Продукт', 'кг');
  $potato = new Product('Картофель', 40, 'Продукт', 'кг');
  echo 'Цена товара "'.$cheese->getName().'" со скидкой составляет '.$cheese->getPrice(10);

?>