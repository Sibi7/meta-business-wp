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
	'title' => array(
		'type'  => 'text',
		'label' => 'Заголовок'
	),
	'items' => array(
		'type'            => 'addable-popup',
		'label'           => __( 'Перечень', '{domain}' ),
		'template'        => '{{- title }}',
		'size'            => 'large', // small, medium, large
		'add-button-text' => __( 'Добавить', '{domain}' ),
		'sortable'        => true,
		'popup-options'   => array(
			'title'       => array(
				'label' => __( 'Заголовок', '{domain}' ),
				'type'  => 'text',
			),
			'img'         => array(
				'type'        => 'multi-upload',
				'label'       => __( 'Фотографии', '{domain}' ),
				'images_only' => true,
			),
			'description' => array(
				'type'          => 'wp-editor',
				'label'         => __( 'Описание работы', '{domain}' ),
				'size'          => 'small', // small, large
				'editor_height' => 400,
				'wpautop'       => true,
				'editor_type'   => false, // tinymce, html
			),

		),
	),
	'button' => array(
		'type'  => 'text',
		'label' => 'Текст кнопки'
	),
];