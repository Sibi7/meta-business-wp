<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="footer-form">
    <div class="container">
        <h1>
           <?= $atts['title'];?>
        </h1>
        <h2>  <?= $atts['title_two'];?></h2>
        <form action="#" id="footer-form">
            <!-- Hidden Required Fields -->
            <input type="hidden" name="action" value="booking">
            <!-- END Hidden Required Fields -->
            <input type="tel" name="v_phone" placeholder="Телефон" required>
            <input type="text" name="v_name" placeholder="Ваше имя" required>
            <button type="submit" id="subm3"><?= $atts['button'];?></button>
        </form>
    </div>
</section>
