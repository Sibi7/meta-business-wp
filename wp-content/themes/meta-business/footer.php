<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package artcraft
 */
?>
<footer class="footer">
    <div class="container">
        <div class="footer__logo">
            <a href="/">
                <img src="<?php bloginfo('template_directory') ;?>/img/footer-logo.png" alt="">
            </a>
        </div>
        <div class="footer__menu">
            <ul>
                <li><a href="#home">Главная</a></li>
                <li><a href="#classes">Кейсы</a></li>
                <li><a href="#classes">Программа</a></li>
                <li><a href="#training">Стоимость</a></li>
            </ul>
        </div>
        <div class="footer__contacts">
            <a href="tel:7 (937) 066 11 03">
                <i class="fa fa-phone" aria-hidden="true"></i>
                7 (937) 066 11 03
            </a>
            <a href="mailto:metatrening@mail.ru">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                metatrening@mail.ru
            </a>
            <a href="vk.com" target="_blank">
                <i class="fa fa-vk" aria-hidden="true"></i>
            </a>
            <a href="instagram.com" target="_blank">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
        </div>
    </div>
<!--    модальное окно формы -->
    <div id="win" style="display:none;">
    <div id="win">
        <div class="overlay"></div>
        <div class="visible">
            <h2>Оставить заявку</h2>
            <div class="content">

                <form id="modal-form" >
                    <!-- Hidden Required Fields -->
                    <input type="hidden" name="action" value="booking">
                    <!-- END Hidden Required Fields -->
                    <input  id="v_name" name="v_name" type="text" class="vItem"  placeholder="Ваше имя" required>`
                    <input id="v_phone" name="v_phone" type="text" class="vItem" placeholder="Телефон" required >

                    <input id="subm" type="submit" value="Отправить">
                </form>
            </div>
            <a  onClick="getElementById('win').style.display='none';"><i class="fa fa-2x fa-times-circle" aria-hidden="true"></i></a>
        </div>
    </div>
<!--        end modal-->
<!--        <button  type="button">Модальное окно</button>-->
</footer>
<?php wp_footer(); ?>
</body>
</html>
