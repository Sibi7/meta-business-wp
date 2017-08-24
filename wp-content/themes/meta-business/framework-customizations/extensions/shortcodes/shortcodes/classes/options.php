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
	'item' => array(
		'type' => 'addable-popup',
		'label' => __('Блоки занятий', '{domain}'),
		'template' => '{{- day }}',
		'size' => 'small',
		'add-button-text' => __('Добавить', '{domain}'),
		'sortable' => true,
		'popup-options' => array(
			'day'     => array(
				'type'  => 'text',
				'label' => __('День', '{domain}'),
			),
			'description'     => array(
				'type'  => 'text',
				'label' => 'Описание'
			),
			'img'     => array(
				'type'  => 'upload',
				'label' => 'Картинка блока'
			),
			'list'     => array(
				'type' => 'addable-popup',
				'label' => __('Перечень', '{domain}'),
				'template' => '{{- title }}',
				'size' => 'small',
				'add-button-text' => __('Добавить', '{domain}'),
				'sortable' => true,
				'popup-options' => array(
					'icon'     => array(
						'type'  => 'icon-v2',
						'preview_size' => 'medium',
						'modal_size' => 'medium',
						'label' => __('Иконка перерыва', '{domain}'),
					),
					'time'     => array(
						'type'  => 'text',
						'label' => 'Время',
					),
					'num'     => array(
						'type'  => 'text',
						'label' => 'Номер блока',
					),
					'title'     => array(
						'type'  => 'text',
						'label' => 'Описание',
					),
				),


			),
		),
	),


];