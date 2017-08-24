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
	'img' => array(
		'type'  => 'upload',
		'label' => 'Фото автора'
	),
	'text' => array(
		'type'  => 'text',
		'label' => 'Инициалы автора'
	),
	'quote' => array(
		'type'  => 'text',
		'label' => 'Цитата'
	),
];