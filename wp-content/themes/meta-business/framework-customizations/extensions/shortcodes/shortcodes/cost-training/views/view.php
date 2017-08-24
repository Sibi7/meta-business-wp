<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="cost-training" id="training">
    <div class="container">
        <h1>Стоимость участия в тренинге</h1>
        <div class="cost-training__item">
            <h2>Личное участие в небольшой группе</h2>
            <p>
                При оплате до 15.09.17 <b>11 770</b> руб.
            </p>
            <p>
                При оплате c 15.09.17 до 30.09.17 <span>14 700</span> руб.
            </p>
        </div>
        <div class="cost-training__item">
            <h3>30 сентября по 1 октября</h3>
            <form action="#" id="coast-traning-form">
                <!-- Hidden Required Fields -->
                <input type="hidden" name="action" value="booking">
                <!-- END Hidden Required Fields -->
                <input type="text" placeholder="Ваше имя" name="v_name" required>
                <input type="tel" placeholder="Телефон" name="v_phone" required>
                <button type="submit" id="subm2">Успей записаться</button>
                <h4>Осталось <span>6</span> мест в группе</h4>
            </form>
        </div>
    </div>
</section>

