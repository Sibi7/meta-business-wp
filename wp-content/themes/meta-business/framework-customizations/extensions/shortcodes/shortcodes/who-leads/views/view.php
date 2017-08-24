<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="who-leads">
    <div class="container">
        <h1>
			<?= $atts['title']; ?>
        </h1>
	    <?= $atts['text']; ?>
        <div class="who-leads__result">
            <?php if(is_array($atts['result']) && !empty($atts['result'])): ?>
                <?php foreach($atts['result'] as $key => $att): ?>
                    <a href="<?= $att['url'];?>" data-lightbox="image-1" data-title="My caption">
                        <img src="<?= $att['url'];?>" alt="">
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
