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
		'label' => 'Картинка',
	),
	'title' => array(
		'type'  => 'text',
		'label' => 'Заголовок секции',
	),
	'list'  => array(
		'type'          => 'wp-editor',
		'label'         => __( 'Маркированные списки ', '{domain}' ),
		'desc'          => __( 'Здесь пишем перечень в списке ul>li', '{domain}' ),
		'size'          => 'small', // small, large
		'editor_height' => 400,
		'wpautop'       => true,
		'editor_type'   => false, // tinymce, html
	),
	'button-text' => array(
		'type'  => 'text',
		'label' => 'Текст кнопки',
	),
];