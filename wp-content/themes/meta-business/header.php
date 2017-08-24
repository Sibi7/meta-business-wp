<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package artcraft
 */

/**
 * Вывод настроек темы
 *
 * @link http://manual.unyson.io/en/latest/helpers/php.html#database
 */
// fw_get_db_customizer_option($option_id, $default_value = null);

/**
 * Вывод меню
 *
 * @link https://wp-kama.ru/function/wp_nav_menu
 */
// wp_nav_menu([
//  'theme_location' => 'primary
//]);

?><!doctype html>
<html <?php language_attributes(); ?>>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=1920">
    <meta name="format-detection" content="telephone=no">
</head>
<?php wp_head(); ?>
<body>
<section class="header-social">
    <div class="container">
        <div class="header-social__social">
            <span>Мы в соц. сетях:</span>
            <a href="https://vk.com/meta63" target="_blank">
                <i class="fa fa-vk" aria-hidden="true"></i>
            </a>
            <a href="instagram.com" target="_blank">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
        </div>
        <div class="header-social__contacts">
            <a href="mailto:metatrening@mail.ru">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                metatrening@mail.ru
            </a>
            <a href="#">
                <i class="fa fa-phone" aria-hidden="true"></i>
                7 (937) 066 11 03
                <button onClick="getElementById('win').removeAttribute('style');" type="button" >Заказать звонок</button>
            </a>
        </div>
    </div>
</section>
