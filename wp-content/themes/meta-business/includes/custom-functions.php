<?php
// Бекенд

/**
 * Дебаг переменной
 */
// fw_print($value);


/**
 * Рендер шаблона
 */
// fw_render_view($file_path, $view_variables = [])

/**
 * AJAX
 *
 * @link
 */
//Регестрируем экшны для обработки аякса
add_action( 'wp_ajax_booking', 'sendBookingForm' );
add_action( 'wp_ajax_nopriv_booking', 'sendBookingForm' );

function sendBookingForm() {
	if ( $_POST ) {
		// обрабатываем запрос
		$msg = 'Вам отправили заявку на бронирование <br>';

		$msg .= 'Имя:' . $_POST['v_name'] . '<br>';
		$msg .= 'Телефон: ' . $_POST['v_phone'] . '<br>';


		$adminEmail = 'lipodat94@gmail.com';


		if(wp_mail( $adminEmail, 'Заявка', $msg, 'Content-type: text/html' )) {
			wp_send_json([
				'status' => 'success',
				'message' => 'Ваша заявка принята.'
			]);
		} else {
			wp_send_json([
				'status' => 'error',
				'message' => 'Ошибка при отправке формы. Попробуйте еще раз'
			]);
		}
	}
}
