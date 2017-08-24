<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<div class="useful">
    <div class="container">
        <h1><?= $atts['title']; ?></h1>
        <div class="useful__wrapper">
			<?php if ( is_array( $atts['items'] ) && ! empty( $atts['items'] ) ): ?>
				<?php foreach ( $atts['items'] as $key => $item ): ?>
                    <div class="useful__wrapper__item">
                        <h2><?= $item['title']; ?></h2>
                        <img src="<?= $item['img']['0']['url']; ?>" alt="">
	                    <?= $item['description']; ?>
                    </div>
				<?php endforeach; ?>
			<?php endif; ?>
        </div>
        <button onClick="getElementById('win').removeAttribute('style');" type="button"><?= $atts['button']; ?></button>
    </div>
</div>

