<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<header class="quote" id="quote">
    <div class="container">
        <div class="quote__wrapper">
            <div class="quote__wrapper__author">
                <img src="<?= $atts['img']['url'];?>" alt="">
                <h3><?= $atts['text'];?></h3>
            </div>
            <div class="quote__wrapper__text">
                <blockquote>
                   <?= $atts['quote'];?>
                </blockquote>
            </div>
        </div>
    </div>
</header>

