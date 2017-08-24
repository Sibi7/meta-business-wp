<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<header class="header" id="home" style="background: url('<?= $atts['bg']['url'] ;?>') no-repeat center center; background-size: cover">
    <div class="container">
        <div class="header__wrapper">
            <div class="header__wrapper__logo">
                <a href="/">
                    <img src="<?php bloginfo('template_directory') ;?>/img/logo.png" alt="">
                </a>
            </div>
            <div class="header__wrapper__hamburger">
                <a href="#">
                    <img src="<?php bloginfo('template_directory') ;?>/img/icons/hamburger.svg" alt="">
                </a>
            </div>
            <div class="header__wrapper__navigation">
                <ul>
                    <li><a href="#home">Главная</a></li>
                    <li><a href="#results-people">Кейсы</a></li>
                    <li><a href="#classes">Программа</a></li>
                    <li><a href="#training">Стоимость</a></li>
                </ul>
            </div>
            <button onClick="getElementById('win').removeAttribute('style');" type="button" >Записаться сейчас</button>
        </div>
        <div class="header__text">
            <h1 class="animated">
               <?= $atts['title_lvl_1'] ;?>
            </h1>
            <h2 class="animated">
	            <?= $atts['title_lvl_2'] ;?>
            </h2>
            <button onClick="getElementById('win').removeAttribute('style');" type="button" >Оставить заявку</button>
            <div class="header__text__arrow-down">
                <a href="#quote" class="fa fa-angle-down fa-3x bonce"    aria-hidden="true"></a>
            </div>
        </div>
    </div>
</header>
