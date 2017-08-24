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
		'label' => 'Заголовок формы'
	),
	'title_two' => array(
		'type'  => 'text',
		'label' => 'Акция'
	),
	'button' => array(
		'type'  => 'text',
		'label' => 'Текст кнопки'
	),
];