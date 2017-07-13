<?php

include_once __DIR__.DIRECTORY_SEPARATOR.'News.php';
include_once __DIR__.DIRECTORY_SEPARATOR.'Comments.php';

$news_array = ['1' => ['Финансы',  '12/07/2017', '12:00', 'Турция и израиль договорились о строительстве газопровода в Европу', 'текст новости-1','Турция', 'SNN'],
               '2' => ['Политика', '12/07/2017', '11:00', 'Новые санкции США против России','текст новости - 2','Россия', 'Reuters'],
               '3' => ['Финансы',  '13/07/2017', '13:00', 'Банк ЮГРА','текст новости-3','Россия','Коммераснт']
              ];
$news_obj=[];

foreach ($news_array as $key => $news) {
    echo $news;
  /* $news_obj = new News($news, $key);*/
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Лента новостей</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="lenta.css">
</head>
<body>
  <header>
  	<div class='header'>LENTA-NEWS</div>
  </header>
  <main>
    <div class='news'>Тест</div>
  </main>
</body>
</html>