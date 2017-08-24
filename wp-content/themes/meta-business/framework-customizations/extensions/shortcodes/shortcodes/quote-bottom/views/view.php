<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="quote-bottom">
    <div class="container">
        <div class="quote-bottom__wrapper">
            <div class="quote-bottom__wrapper__author">
                <img src="<?= $atts['img']['url'];?>" alt="">
                <h3><?= $atts['text'];?></h3>
            </div>
            <div class="quote-bottom__wrapper__text">
                <blockquote>
                  <?= $atts['quote'];?>
                </blockquote>
            </div>
        </div>
        <?php if(is_array($atts['item']) && !empty($atts['item'])): ?>
            <?php foreach($atts['item'] as $key => $att): ?>
                <div class="quote-bottom__item" style="background: url('<?= $att['img']['url'];?>') no-repeat center center; background-size: cover">
                    <img src="<?= $att['icon']['url'];?>" alt="">
                    <p>
                        <?= $att['title'];?>
                    </p>
                    <?= $att['button']['0']['title'];?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>