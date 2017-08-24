<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<div class="course-record">
    <div class="container">
        <h1><?= $atts['title'];?></h1>
        <form action="#" id="form-course-record">
            <!-- Hidden Required Fields -->
            <input type="hidden" name="action" value="booking">
            <!-- END Hidden Required Fields -->
            <input type="tel" name="v_phone" placeholder="Телефон" required>
            <input type="text" name="v_name" placeholder="Ваше имя" required>
            <button id="subm1"><?= $atts['button'];?></button>
        </form>
        <h2><?= $atts['title_two'];?></h2>
    </div>
</div>