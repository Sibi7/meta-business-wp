<?php if (!defined('FW')) {
    die('Forbidden');
}
/**
 * Опции (поля) шорткода
 * @link Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
	'img' => array(
		'type'  => 'upload',
		'label' => 'Фото'
	),
	'text' => array(
		'type'  => 'text',
		'label' => 'Инициалы'
	),
	'quote' => array(
		'type'  => 'wp-editor',
		'label' => 'Текст'
	),
	'item' => array(
		'type' => 'addable-popup',
		'label' => __('Блоки с картинками', '{domain}'),
		'template' => '{{- title }}',
		'size' => 'small',
		'limit' => 2,
		'add-button-text' => __('Добавить', '{domain}'),
		'sortable' => true,
		'popup-options' => array(
			'icon'     => array(
				'type'  => 'upload',
				'label' => __('Иконка блока', '{domain}'),
			),
			'title'     => array(
				'type'  => 'text',
				'label' => 'Текст блока'
			),
			'img'     => array(
				'type'  => 'upload',
				'label' => 'Картинка блока'
			),
			'button'     => array(
				'type' => 'addable-popup',
				'label' => __('Кнопка', '{domain}'),
				'template' => '{{- title }}',
				'size' => 'small',
				'add-button-text' => __('Добавить кнопку', '{domain}'),
				'sortable' => true,
				'limit' => 1,
				'popup-options' => array(
					'title'     => array(
						'type'  => 'text',
						'label' => 'Текст Кнопки',
						'value' => '<button></button>',
						'desc' => __('Текст кнопки пишем между тегов < button>ТЕКСТ КНОПКИ< /button>', '{domain}'),
					),
			),


		),
	),
	),
];