<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="result">
    <div class="container">
        <h1>
           <?= $atts['title'];?>
        </h1>
        <ul>
            <?php if(is_array($atts['list']) && !empty($atts['list'])): ?>
                <?php foreach($atts['list'] as $key => $att): ?>
                    <li><?= $att['title'];?></li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
        <div class="result__absolute">
            <img src="<?= $atts['img']['url'];?>" alt="">
        </div>
    </div>
</section>
