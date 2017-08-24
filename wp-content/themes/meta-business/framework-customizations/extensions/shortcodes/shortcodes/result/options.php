<?php if (!defined('FW')) {
    die('Forbidden');
}
/**
 * Опции (поля) шорткода
 * @link Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
	//ключ - slug опции, к которому будем обращаться во view
	//значение - массив конфигураций для опции
	'title'     => array(
		'type'  => 'text',
		'label' => 'Заголовок'
	),
	'img'     => array(
		'type'  => 'upload',
		'label' => 'Картинка'
	),
	'list'     => array(
		'type'            => 'addable-popup',
		'label'           => __( 'Список', '{domain}' ),
		'template'        => '{{- title }}',
		'size'            => 'large', // small, medium, large
		'add-button-text' => __( 'Добавить', '{domain}' ),
		'sortable'        => true,
		'popup-options'   => array(
			'title'       => array(
				'label' => __( 'Добавить', '{domain}' ),
				'type'  => 'text',
			),
		),
	),
];