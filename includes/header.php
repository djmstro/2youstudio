  <head>
    <title>2You-Studio</title>
    <!-- мета -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta content="http://www.2youstudio.com/img/events/party.png">
  
  <link rel="icon" href="img/favicons/favicon.ico">
    <link rel="apple-touch-icon" href="img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom CSS -->
      <link rel="stylesheet" href="styles.css">
          <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <script src="/js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript" ></script>

  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('.hamburger').click(function(event) {
        $('.sidebar').addClass('active');
      });
    });
  </script>

<script type="text/javascript">
  $(document).mouseup(function (e){ // событие клика по веб-документу
    var div = $('.sidebar.active'); // тут указываем ID элемента
    if (!div.is(e.target) // если клик был не по нашему блоку
        && div.has(e.target).length === 0) { // и не по его дочерним элементам
      $('.sidebar.active').removeClass('active'); // скрываем его
      $('.black.active').removeClass('active');
    }
  });
</script>

<script type="text/javascript">
    jQuery(document).ready(function($) {
      $('.hamburger').click(function(event) {
        $('.black').addClass('active');
      });
    });
  </script>

<script type="text/javascript">
$(document).ready(function () {
    $('.slidedown').click(function (event) {
       $(this).parent().find("li ul:visible").slideUp()
       if($(this).children("ul").is(":hidden"))$(this).children("ul").slideDown() ;
       event.stopPropagation();
    });
});
</script>


  <!-- Шрифты -->
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
  </head>

  <!-- ВЫПАДАЮЩЕЕ МЕНЮ ДЛЯ МОБИЛЬНЫХ -->
  <div class="black">
  </div>
  <div class="sidebar">
      <div class="mmenu_cover">
          <div class="row">
              <div class="mmenu_logo col-xs-5">
                  <a href="http://2youstudio.com/"><img src="img/logo.png"></a>
              </div>
              <div class="mmenu_contacts_icons visible-xs col-xs-7">
                  <a href="tel:+79154501122" data-title="8-915-450-11-22" ><i class="fa fa-phone"></i></a>
                  <a href="mailto:info@2youstudio.com" data-title="info@2youstudio.com"><i class="fa fa-envelope"></i></a>
              </div>
        </div>
          <div class="mmenu_slogan">
              <p>Создание видео "под ключ"</p>
          </div>
          <div class="mmenu_contacts hidden-xs">
              <p>8-915-450-11-22 info@2youstudio.com</p>
          </div>
          <div class="mmenu_social_links">
              <a href="https://vk.com/2youstudio" target="_blank"><i class="fa fa-vk fa-2x"></i></a>
              <a href="https://www.facebook.com/2youstudio.ru" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
              <a href="https://vimeo.com/2youstudio/" target="_blank"><i class="fa fa-vimeo-square fa-2x"></i></a>
              <a href="https://instagram.com/2you_studio/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
              <a href="https://www.youtube.com/channel/UCQ8cYWOMil7Yc5oCgfT7kuw/" target="_blank"><i class="fa fa-youtube-square fa-2x"></i></a>
              <a href="https://twitter.com/2you_studio/" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a>
          </div>
      </div>

      <!-- Рекламное и имиджевое видео -->
      <a href="advert.php"><div class="mmenu_chapter">Рекламное и имиджевое видео</div></a>
      <div class="mmenu_submenu">
          <li class="slidedown">
              <a class="mmenu_subtitle" href="#">Съёмка авто</a>
              <ul>
                  <li><a href="auto_testdrives.php">Тест драйв</a></li>
                  <li><a href="autodealer_review.php">Видеообзор автосалона</a></li>
                  <li><a href="auto_review_manager.php">Видеообзор автомобиля с менеджером</a></li>
                  <li><a href="auto_insta_review.php">Видеонарезка автомобиля для Instagram</a></li>
                  <li><a href="auto_instruction.php">Видеоинструкция</a></li>
                  <li><a href="auto_video_interview.php">Видеоряд + интервью</a></li>
                  <li><a href="auto_game.php">Постановочный видеоклип</a></li>
              </ul>
          </li>
          <li>
              <a class="mmenu_subtitle" href="immovable.php">Съёмка недвижимости</a>
          </li>
          <li class="slidedown">
              <a class="mmenu_subtitle" href="#">Рекламное видео</a>
              <ul>
                  <li><a href="game_advert.php">Постановочное</a></li>
                  <li><a href="review_advert.php">Обзорное</a></li>
              </ul>
          </li>
          <li>
              <a class="mmenu_subtitle" href="musical_clips.php">Музыкальные клипы</a>
          </li>
          <li class="slidedown">
              <a class="mmenu_subtitle" href="#">Имиджевое промо-видео</a>
              <ul>
                  <li><a href="promo_advert.php">Обзорное</a></li>
                  <li><a href="promo_advert_game.php">Постановочное</a></li>
              </ul>
          </li>
          <li class="slidedown">
              <a class="mmenu_subtitle" href="#">Другое</a>
              <ul>
                  <li><a href="infographic.php">Создание инфографики</a></li>
                  <li><a href="scenario.php">Разработка сценариев</a></li>
              </ul>
          </li>
      </div>

      <!-- Видеообзоры мероприятий -->
      <a href="reviews.php"><div class="mmenu_chapter">Видеообзоры мероприятий</div></a>
      <div class="mmenu_submenu">
      <li class="slidedown">
            <a class="mmenu_subtitle" href="#">Правительственные заказы</a>
            <ul>
                <li><a href="nasledniki_pobedy.php">"Наследники Победы"</a></li>
                <li><a href="vahta_pamyati.php">"Вахта Памяти"</a></li>
                <li><a href="wfys2017.php">Всемирный фестиваль молодёжи и студентов 2017</a></li>
                <li><a href="yagp.php">"Я Гражданин Подмосковья"</a></li>
                <li><a href="ways_of_win.php">"Дороги Победы"</a></li>
            </ul>
          </li>
          <li>
            <a class="mmenu_subtitle" href="stars.php">"Звёздные" мероприятия</a>
          </li>
          <li class="slidedown">
            <a class="mmenu_subtitle" href="#">Обзоры мероприятий</a>
            <ul>
                <li><a href="concerts.php">Концерты</a></li>
                <li><a href="exibitions.php">Выставки</a></li>
                <li><a href="festivals.php">Фестивали</a></li>
                <li><a href="theater.php">Театральные постановки</a></li>
                <li><a href="birthdays.php">Дни рождения / Юбилеи</a></li>
            </ul>
          </li>
          <li class="slidedown">
            <a class="mmenu_subtitle" href="#">Корпоративы</a>
            <ul>
                <li><a href="corporative_clips.php">Клипы</a></li>
                <li><a href="corporative_films.php">Фильмы</a></li>
                <li><a href="teambuilding.php">Постановочные видео, тимбилдинг</a></li>
            </ul>
          </li>
          <li class="slidedown">
            <a class="mmenu_subtitle" href="#">Церковные праздники</a>
            <ul>
                <li><a href="kreshenie.php">Крещение</a></li>
                <li><a href="venchanie.php">Венчание</a></li>
                <li><a href="church_other_events.php">Другое</a></li>
            </ul>
          </li>
          <li>
            <a class="mmenu_subtitle" href="clubs.php">Клубное видео</a>
          </li>
        </div>

        <!-- Свадьбы и Love Story -->
        <a href="weddings.php"><div class="mmenu_chapter">Видеосъёмка свадеб и Love Story</div></a>
      <div class="mmenu_submenu">
            <li class="slidedown">
            <a class="mmenu_subtitle" href="#">Свадебные клипы</a>
            <ul>
                <li><a href="wedding_linears_clips.php">Линейные клипы</a></li>
                <li><a href="wedding_not_linears_clips.php">Нелинейные клипы с сюжетом</a></li>
            </ul>
          </li>
          <li>
            <a class="mmenu_subtitle" href="wedding_films.php">Свадебные фильмы</a>
          </li>
          <li>
            <a class="mmenu_subtitle" href="sde.php">SDE Video</a>
          </li>
          <li>
            <a class="mmenu_subtitle" href="postproduction.php">Постобработка</a>
          </li>
          <li class="slidedown">
            <a class="mmenu_subtitle" href="#">Стоимость</a>
            <ul>
                <li><a href="wedding_price.php">Стандартные пакеты услуг</a></li>
                <li><a href="wedding_other_services.php">Дополнительные услуги</a></li>
            </ul>
          </li>
          <li class="slidedown">
            <a class="mmenu_subtitle" href="#">Love Story</a>
            <ul>
                <li><a href="love_story_classic.php">Классические Love Story</a></li>
                <li><a href="love_story_game.php">Love Story с сюжетом</a></li>
            </ul>
          </li>
       </div> 

       <!-- ДЕТСКАЯ И СЕМЕЙНАЯ ВИДЕОГРАФИЯ -->
        <a href="kids.php"><div class="mmenu_chapter">Детская и семейная видеография</div></a>
      <div class="mmenu_submenu">
            <li class="slidedown">
            <a class="mmenu_subtitle" href="#">Детская видеография</a>
            <ul>
                <li><a href="kids_birthday_0_3.php">Дни Рождения 0-3 года</a></li>
                <li><a href="kids_birthday_4_7.php">Дни Рождения 4-7 лет</a></li>
                <li><a href="kids_birthday_8_12.php">Дни Рождения 8-12 лет</a></li>
                <li><a href="new_year.php">Новый год</a></li>
                <li><a href="kids_events.php">Обзоры детских мероприятий</a></li>
                <li><a href="kids_game.php">Постановочные клипы с детьми</a></li>
            </ul>
          </li>
          <li class="slidedown">
            <a class="mmenu_subtitle" href="#" data-toggle="dropdown">Семейное видео</a>
            <ul>
                <li><a href="video_presents.php">Видеопоздравления от друзей для Именинника</a></li>
                <li><a href="video_family.php">Постановочные семейные фильмы</a></li>
                <li><a href="birthdays2.php">Видеосъёмка Юбилеев и Дней Рождения</a></li>
                <li><a href="family_blog.php">Семейный видеоблог</a></li>
            </ul>
          </li>
          <li>
            <a class="mmenu_subtitle" href="nursery_school.php">Детские сады</a>
          </li>
          <li class="slidedown">
            <a class="mmenu_subtitle" href="#" data-toggle="dropdown">Школы</a>
            <ul>
                <li><a href="school_1_september.php">1 сентября</a></li>
                <li><a href="school_11.php">Выпускной класс</a></li>
                <li><a href="school_other.php">Другое</a></li>
            </ul>
          </li>
          <li>
            <a class="mmenu_subtitle" href="marks.php">Видеоотзывы</a>
          </li>
       </div> 

       <!-- ДРУГИЕ НАПРАВЛЕНИЯ ВИДЕОСЪЁМКИ -->
        <a href="other.php"><div class="mmenu_chapter">Другие направления видеосъёмки</div></a>
      <div class="mmenu_submenu">
          <li>
              <a class="mmenu_subtitle" href="social_advert.php">Социальное видео</a>
          </li>
          <li>
            <a class="mmenu_subtitle" href="miss.php">Визитки для конкурсов красоты</a>
          </li>
          <li>
            <a class="mmenu_subtitle" href="presents_for_men.php">Видеоподарки для мужчин</a>
          </li>
          <li>
            <a class="mmenu_subtitle" href="other_other.php">Другое</a>
          </li>
       </div> 

  </div>
<!-- КОНЕЦ МЕНЮ ДЛЯ МОБИЛЬНЫХ -->
  
  <body>
  <div class="wrap">
  <!-- Шапка -->
  <header id="nav-main">
    <div class="container">
  <!-- Верхняя часть сайта-->
        <div class="row mb15">
            <div class="col-lg-2 col-md-9 col-sm-8 col-xs-10">
                <div class="logo">
					<a href="http://2youstudio.com/"><img src="img/logo.png"></a>
                </div>
            </div>
            
      <div class="col-lg-4 hidden-md hidden-xs hidden-sm ">
				<div class="slogan">
                    <p class="slogan">Создание видео "ПОД КЛЮЧ"</p>
                </div>
            </div>
			<div class="col-lg-2 offset-lg-2 hidden-md hidden-sm hidden-xs">
				<div class="social_links">
                    <a href="https://vk.com/2youstudio" target="_blank"><i class="fa fa-vk fa-2x"></i></a>
					<a href="https://www.facebook.com/2youstudio.ru" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
					<a href="https://vimeo.com/2youstudio/" target="_blank"><i class="fa fa-vimeo-square fa-2x"></i></a>
					<a href="https://instagram.com/2you_studio/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
					<a href="https://www.youtube.com/channel/UCQ8cYWOMil7Yc5oCgfT7kuw/" target="_blank"><i class="fa fa-youtube-square fa-2x"></i></a>
					<a href="https://twitter.com/2you_studio/" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a>
                </div>
            </div>
			<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
				<a class="btn btn-primary phone_btn" href="tel:+79154501122" data-title="8-915-450-11-22" role="button"><i class="fa fa-phone fa-2x2"></i></a>
				<a class="btn btn-primary mail_btn" href="mailto:info@2youstudio.com" data-title="info@2youstudio.com" role="button" data-toggle="modal" data-target="#contacts"><i class="fa fa-envelope fa-2x2"></i></a>
			</div>
      
      <!-- МЕНЮ ДЛЯ МОБИЛЬНЫХ! -->
      <div class="hamburger visible-md visible-xs visible-sm col-sm-2 col-md-1">
        <a class="btn btn-primary menu_btn" href="#" role="button" data-toggle="modal"><i class="fa fa-bars fa-2x2"></i></a>
      </div>
<!-- КОНЕЦ МЕНЮ ДЛЯ МОБИЛЬНЫХ! -->


    </div>


		<hr class="hidden-md hidden-sm hidden-xs">



    </div>
    </header>    
	
	