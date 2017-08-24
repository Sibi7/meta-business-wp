<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * Опции (поля) шорткода
 * @link Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
	//ключ - slug опции, к которому будем обращаться во view
	//значение - массив конфигураций для опции
	'title_lvl-1' => array(
		'type'  => 'text',
		'value' => 'Тренинг "Жесткие Переговоры" Елены Чикаловой. Как вести переговоры и Добиваться своего',
		'label' => __( 'Заголовок первого уровня', '{domain}' ),
	),
	'title_lvl-2' => array(
		'type'  => 'text',
		'value' => 'Оставьте заявку прямо сейчас и зарезервируйте место со скидкой 20 %',
		'label' => __( 'Заголовок второго уровня', '{domain}' ),
	),
	'bg' => array(
		'type'  => 'upload',
		'label' => __( 'Фоновое изображение', '{domain}' ),
	),
];