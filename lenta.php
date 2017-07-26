<?php

require_once __DIR__.DIRECTORY_SEPARATOR.'News.php';
require_once __DIR__.DIRECTORY_SEPARATOR.'Comments.php';

/*--начальное решение для учебного примера, заполняемся данными:--*/
$news_array = ['1' => ['cat'=>'Финансы',  'date'=>'12/07/2017', 'time'=>'12:00', 'tit'=>'Турция и израиль договорились о строительстве газопровода в Европу', 'text'=>'Турция и Израиль собираются до конца года подписать соглашение о строительстве трубопровода для поставки газа со средиземноморских месторождений в ЕС. Об этом заявил министр национальной инфраструктуры, энергетики и водоснабжения еврейского государства Юваль Штайниц, сообщает РИА Новости.','country'=>'Турция', 'src'=>'РИА Новости'],
               '2' => ['cat'=>'Политика', 'date'=>'12/07/2017', 'time'=>'11:00', 'tit'=>'Новые санкции США против России','text'=>'Члены Демократической партии в палате представителей Конгресса США представили новый вариант законопроекта, включающий в себя новые односторонние санкции против России и Ирана. Об этом в четверг, 13 июля, сообщает Reuters.','country'=>'Россия', 'src'=>'Reuters'],
               '3' => ['cat'=>'Финансы',  'date'=>'13/07/2017', 'time'=>'13:00', 'tit'=>'Банк ЮГРА','text'=>'Банк «Югра» не был под наблюдением регулятора из-за признаков проведения сомнительных операций, рассказал RNS зампред Банка России Дмитрий Скобелкин в кулуарах Международного финансового конгресса в Санкт-Петербурге.','country'=>'Россия','src'=>'Коммераснт']
              ];
$news_obj=[];
foreach ($news_array as $key => $news) {
    $news_obj[] = new News($news, $key);
}

//-- или так: --
$comm_obj[]=new Comments('Olga', '14/07/2017', '13:56', 'Плохая новость!','1');
$comm_obj[]=new Comments('Kler', '15/07/2017', '13:56', 'Хорошая новость!','2');
$comm_obj[]=new Comments('Iren', '16/07/2017', '13:56', 'Отличная новость!','3');
$comm_obj[]=new Comments('MegaMax', '19/07/2017','18:56', 'Никто ничего не понимает!','3');

function getNews() {
    global $news_obj;
    global $comm_obj;

    $str_res='';
    foreach ($news_obj as $news) {
        $str_res.=$news->setNewsToHtml();
        foreach ($comm_obj as $comment) {
            if ($comment->getNews() == $news->getId()) {
                $str_res .= $news->getComments($comment);
            }
        }
        $str_res.='</div>';
    }
    return $str_res;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Лента новостей</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="lenta.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
</head>
<body>
  <header>
  	<div class='header'>LENTA-NEWS</div>
  </header>
  <main>
    <?php echo getNews() ?>
  </main>
  <script  type="text/javascript">
      $(document).ready(function(){
          $('a').click(function() {
              $(this).nextAll('.comment').is(":hidden") ? $(this).nextAll('.comment').show() : $(this).nextAll('.comment').hide();
          });
      });
  </script>
</body>
</html>