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
	'title'     => array(
		'type'  => 'text',
		'label' => 'Заголовок'
	),
	'title-two' => array(
		'type'  => 'text',
		'label' => 'Подзаголовок'
	),
	'items'     => array(
		'type'            => 'addable-popup',
		'label'           => __( 'Пользователь', '{domain}' ),
		'template'        => '{{- title }}',
		'size'            => 'large', // small, medium, large
		'add-button-text' => __( 'Добавить', '{domain}' ),
		'sortable'        => true,
		'popup-options'   => array(
			'title'       => array(
				'label' => __( 'Инициалы', '{domain}' ),
				'type'  => 'text',
			),
			'img'         => array(
				'type'        => 'upload',
				'label'       => __( 'Фото', '{domain}' ),
				'images_only' => true,
			),
			'date'        => array(
				'type'  => 'text',
				'label' => __( 'дата/поток', '{domain}' ),
			),
			'description' => array(
				'type'          => 'wp-editor',
				'label'         => __( 'Описание работы', '{domain}' ),
				'size'          => 'small', // small, large
				'editor_height' => 400,
				'wpautop'       => true,
				'editor_type'   => false, // tinymce, html
			),
			'stats'       => array(
				'type'            => 'addable-popup',
				'label'           => __( 'Результаты в работе', '{domain}' ),
				'template'        => '{{- description }}',
				'size'            => 'large', // small, medium, large
				'add-button-text' => __( 'Добавить', '{domain}' ),
				'sortable'        => true,
				'popup-options'   => array(
					'img'         => array(
						'type'        => 'upload',
						'label'       => __( 'Картинки графика', '{domain}' ),
						'images_only' => true,
					),
					'description' => array(
						'type'  => 'text',
						'label' => __( 'Описание данного блока', '{domain}' ),
					),

				),
			),
			'family'      => array(
				'type'            => 'addable-popup',
				'label'           => __( 'Результаты в личной жизни', '{domain}' ),
				'template'        => '{{- description }}',
				'size'            => 'large', // small, medium, large
				'add-button-text' => __( 'Добавить', '{domain}' ),
				'sortable'        => true,
				'popup-options'   => array(
					'img'         => array(
						'type'        => 'upload',
						'label'       => __( 'Картинки графика', '{domain}' ),
						'images_only' => true,
					),
					'description' => array(
						'type'  => 'text',
						'label' => __( 'Описание данного блока', '{domain}' ),
					),
				),
			),
		),
	),
];