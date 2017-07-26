<?php
require_once __DIR__.DIRECTORY_SEPARATOR.'Comments.php';

class News {

    private $category; // категория новости
    private $date;  // дата выпуска новости
    private $time; // время
    private $title; // заголовок
    private $body; // текст новости
    private $country; // страны - участницы новости
    private $src; // источник новости
    private $id; // айди (для комментария)

    public function __construct($data, $id)
    {
        $this->category = $data['cat'];
        $this->date = $data['date'];
        $this->time = $data['time'];
        $this->title = $data['tit'];
        $this->body = $data['text'];
        $this->country = $data['country'];
        $this->src = $data['src'];
        $this->id = $id;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getTime()
    {
        return $this->time;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getSrc()
    {
        return $this->src;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNewsToHtml()
    {
        $str = "<div class=\"news"."\" ><a href='#' class=\"".$this->getId()."\">".$this->getDate().' '.
                $this->getTime().' '.
                $this->getTitle()."</a>".
               "<p>".$this->getBody()."</p>";
        return $str;
    }

    public function getComments($comment)
    {
        return "<p class='comment'> {$comment->getMain()} {$comment->getText()} </p>";
    }
}

?>