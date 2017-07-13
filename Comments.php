<?php
	class Comments {

	    private $user;  // пользователь, оставивший комментарий
	    private $date;  // дата комментария
	    private $time;  // время комментария
	    private $text;  // тело комментария
	    private $news;  // ссылка на новость

        public function __construct($user, $date, $time, $text, $news)
        {
            $this->user = $user;
            $this->date = $date;
            $this->time = $time;
            $this->text = $text;
            $this->news = $news;
        }

        public function getUser()
        {
            return $this->user;
        }

        public function setUser($user)
        {
            $this->user = $user;
            return $this;
        }

        public function getDate()
        {
            return $this->date;
        }

        public function setDate($date)
        {
            $this->date = $date;
            return $this;
        }

        public function getTime()
        {
            return $this->time;
        }

        public function setTime($time)
        {
            $this->time = $time;
            return $this;
        }

        public function getText()
        {
            return $this->text;
        }

        public function setText($text)
        {
            $this->text = $text;
            return $this;
        }

        public function getNews()
        {
            return $this->news;
        }

        public function setNews($news)
        {
            $this->news = $news;
            return $this;
        }



	}
