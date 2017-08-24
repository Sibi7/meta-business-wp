<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="what-learn" id="what-learn">
    <div class="container">
        <div class="what-learn__wrapper">
            <h1>
                <?= $atts['title'];?>
            </h1>
	        <?= $atts['list'];?>
            <button onClick="getElementById('win').removeAttribute('style');" type="button"><?= $atts['button_text'];?></button>
        </div>
        <div class="what-learn__absolute">
            <img src="<?= $atts['img']['url'];?>" alt="">
        </div>
    </div>
</section>
