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

        echo "Создан автомобиль  {$this->getBrand()} {$this->getModel()} цвет $color<br>   ";
        $this->loadCharaters();
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    private function loadCharaters()
    {
        // функция от $this->brand, $this->model
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function getConsumption()
    {
        return $this->consumption;
    }

    public function setConsumption($consumption)
    {
        $this->consumption = $consumption;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getPower()
    {
        return $this->power;
    }

    public function setPower($power)
    {
        $this->power = $power;
    }

    public function getDimensions()
    {
        return $this->dimensions;
    }

    public function setDimensions($dimensions)
    {
        $this->dimensions = $dimensions;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function start($speed) {
        $this->setSpeed($speed);
    	echo "Машина  {$this->getBrand()}  {$this->getModel()} поехала со скоростью {$this->getSpeed()}  км/ч<br/>";
    }

    public function stop() {
    	echo "Машина {$this->brand} {$this->model} тормозит <br/>";
    	$this->setSpeed(0);
    } 

    public function turn($side) {
        echo "Машина {$this->getBrand()} {$this->getModel()} поворачивает $side <br/>";
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
        echo"Создан TV  {$this->getBrand()}  {$this->getModel()} <br/>";
        $this->loadCharaters();
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    public function getBrightness()
    {
        return $this->brightness;
    }

    public function setBrightness($brightness)
    {
        $this->brightness = $brightness;
        return $this;
    }

    public function getResolution()
    {
        return $this->resolution;
    }

    public function setResolution($resolution)
    {
        $this->resolution = $resolution;
        return $this;
    }

    public function getCurrentChannel()
    {
        return $this->current_channel;
    }

    public function setCurrentChannel($current_channel)
    {
        $this->current_channel = $current_channel;
        return $this;
    }

    private function loadCharaters() {
      // функция от $this->brand, $this->model
    }

    public function turnOn() {
        echo "Телевизор  {$this->getBrand()} {$this->getModel()} включен<br/>";
    }

    public function turnOff() {
        echo "Телевизор {$this->getBrand()}  {$this->getModel()}  выключен<br/>";
    }

    public function switchChanal($channel) {
       $this->setCurrentChannel($channel);
       echo "Текущий канал {$this->getCurrentChannel()}";
    }

    public function upgradePo() {
        echo "Обновление програмного обеспечения на телевизоре {$this->brand}  {$this->model} <br/> ";
    }
}

//---------- РУЧКА: ---------------------------
class Pen
{
    private $color; // цвет стержня

    function __construct ($color)
    {
        $this->color = $color;
        echo "Куплена ручка с цветом {$this->getColor()} <br/>";
    }

    public function printColor($str) {
       echo "Ручка {$this->getColor()} пишет строку $str<br/>";
    }

    public function setColor($color) { // замена стержня
       $this->color = $color;
       echo "Ручка теперь пишет {$this->getColor()} цветом<br/>";
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
        echo "Родилась утка породы {$this->getPoroda()} <br/>";
    }

    public function fly() {
        echo "Утка {$this->getPoroda()} полетела<br/>";
    }

    public function swim() {
        echo "Утка {$this->getPoroda()} поплыла<br/>";
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

    public function getPoroda()
    {
        return $this->poroda;
    }

    public function setPoroda($poroda)
    {
        $this->poroda = $poroda;
        return $this;
    }

    public function getSound()
    {
        return $this->sound;
    }

    public function setSound($sound)
    {
        $this->sound = $sound;
        return $this;
    }

    public function getArea()
    {
        return $this->area;
    }

    public function setArea($area)
    {
        $this->area = $area;
        return $this;
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
    private $discount; // скидка на товар

    public function __construct($name, $price, $category, $unit)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->unit = $unit;
        echo "Создан товар  '{$this->getName()}'  с базовой ценой {$this->getPrice()}  в категории {$this->getCategory()} и единицей измерения {$this->getUnit()}<br/>";
    }

    public function putBasket()
    {
        echo "Товар {$this->getName()} поместили в корзину";
    }

    public function getPrice()
    {
        $price = $this->price - $this->price * $this->getDiscount() / 100;
        return $price;
    }

    public function moveToStore($count, $store)
    {
        echo "Товар {$this->getName()} перемещен на склад $store в количестве $count";
    }

    public function delFromStore($count)
    {
        echo "Товар {$this->getName()} удален со склада в количестве $count";
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;
        return $this;
    }

    public function getUnit()
    {
        return $this->unit;
    }

    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;
        return $this;
    }
}

//машины
$lexus = new Car('Lexus', 'GS', 'black');
$lexus->start(80);
$audi = new Car('Audi', 'Q7', 'red');
$audi->start(120);
$lexus->setConsumption(1000);
echo($lexus->getModel());
echo '<hr>';

// TV
$sumsung = new Tv('sumsung', 'mt100');
$sony = new Tv('sony', 'as100');
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
$cheese = new Product('Сыр', 600, 'Продукт', 'кг');
$potato = new Product('Картофель', 40, 'Продукт', 'кг');
echo "Цена товара {$cheese->getName()} со скидкой составляет {$cheese->getPrice()}";

