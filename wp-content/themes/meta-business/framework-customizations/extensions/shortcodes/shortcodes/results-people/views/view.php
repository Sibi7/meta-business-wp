<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="results-people" id="results-people">
    <div class="container">
        <h1>
			<?= $atts['title']; ?>
        </h1>
        <h2>
			<?= $atts['title_two']; ?>
        </h2>
    </div>
    <div class="tabs">

        <div>
			<?php if ( is_array( $atts['items'] ) && ! empty( $atts['items'] ) ): ?>
				<?php foreach ( $atts['items'] as $key => $item ): ?>
                    <div>
                        <div class="container">
                            <div class="results-people__wrapper">
                                <div class="results-people__wrapper__user">
                                    <img src="<?= $item['img']['url']; ?>" alt="">
                                </div>
                                <div class="results-people__wrapper__text">
                                    <h3><?= $item['title']; ?></h3>
                                    <h4><?= $item['date']; ?></h4>
									<?= $item['description']; ?>
                                </div>
                            </div>
                            <div class="results-people__stats">
                                <h3>Результаты в работе</h3>
                                <table>
                                    <tr>
                                        <td><img src="<?php bloginfo( 'template_directory' ); ?>/img/stats0.png" alt="">
                                        </td>
										<?php if ( is_array( $item['stats'] ) && ! empty( $item['stats'] ) ): ?>
											<?php foreach ( $item['stats'] as $key => $stat ): ?>
                                                <td><img src="<?= $stat['img']['url']; ?>" alt=""></td>
											<?php endforeach; ?>
										<?php endif; ?>
                                    </tr>
                                    <tr>
                                        <td></td>
										<?php if ( is_array( $item['stats'] ) && ! empty( $item['stats'] ) ): ?>
											<?php foreach ( $item['stats'] as $key => $stat ): ?>
                                                <td><?= $stat['description']; ?></td>
											<?php endforeach; ?>
										<?php endif; ?>
                                    </tr>
                                </table>
                            </div>
                            <div class="results-people__stats">
                                <h3>Результаты в личной жизни</h3>
                                <table>
                                    <tr>
                                        <td><img src="<?php bloginfo( 'template_directory' ); ?>/img/stats0.png" alt="">
                                        </td>
										<?php if ( is_array( $item['family'] ) && ! empty( $item['family'] ) ): ?>
											<?php foreach ( $item['family'] as $key => $stat ): ?>
                                                <td><img src="<?= $stat['img']['url']; ?>" alt=""></td>
											<?php endforeach; ?>
										<?php endif; ?>
                                    </tr>
                                    <tr>
                                        <td></td>
										<?php if ( is_array( $item['family'] ) && ! empty( $item['family'] ) ): ?>
											<?php foreach ( $item['family'] as $key => $stat ): ?>
                                                <td><?= $stat['description']; ?></td>
											<?php endforeach; ?>
										<?php endif; ?>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
				<?php endforeach; ?>
			<?php endif; ?>
        </div>
        <ul>
			<?php if ( is_array( $atts['items'] ) && ! empty( $atts['items'] ) ): ?>
				<?php foreach ( $atts['items'] as $key => $item ): ?>
                    <li><img src="<?= $item['img']['url']; ?>" alt=""></li>
				<?php endforeach; ?>
			<?php endif; ?>
        </ul>
    </div>
    <div class="results-people__absolute-text">
        Нажмите сюда чтобы увидеть больше достижений
    </div>
</section>
