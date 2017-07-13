<?php
class News {

    private $category; // категория новости
    private $date;  // дата выпуска новости
    private $time; // время
    private $title; // заголовок
    private $body; // текст новости
    private $country; // страны - участницы новости
    private $src; // источник новости
    private $id; // айди (для комментария)

    public function __construct($category, $date, $time, $title, $body, $country, $src, $id)
    {
        $this->category = $category;
        $this->date = $date;
        $this->time = $time;
        $this->title = $title;
        $this->body = $body;
        $this->country = $country;
        $this->src = $src;
        $this->id = $id;
    }


}

?>