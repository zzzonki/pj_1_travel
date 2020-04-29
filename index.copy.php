<?php
	// if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
	// 	$uri = 'https://';
	// } else {
	// 	$uri = 'http://';
	// }
	// $uri .= $_SERVER['HTTP_HOST'];
	// header('Location: '.$uri.'/dashboard/');
	// exit;

	$request = $_SERVER['REQUEST_URI'];

	echo $request;
	echo __DIR__;

	switch($request){
		case'/':
			require __DIR__.'/pj_1_travel/index.php';
			break;
		case'/admin':
			require __DIR__.'/pj_1_travel/admin/admin.php';
			break;
		case'/admin/parag':
			require __DIR__.'/pj_1_travel/admin/admin.parag.php';
			break;
	
		case'/admin/cards':
			require __DIR__.'/pj_1_travel/admin/admin.cards.php';
			break;

		case'/admin/cards_done':
			require __DIR__.'/pj_1_travel/admin/form_cards.php';
			break;
	
		case'/admin/anchor':
			require __DIR__.'/pj_1_travel/admin/admin.anchor.php';
			break;

		case'/admin/anchor_done':
			require __DIR__.'/pj_1_travel/admin/form_anchor.php';
			break;
	
		case'/reg':
			require __DIR__.'/pj_1_travel/admin/auth/admin.reg.php';
			break;

		case'/postreg':
			require __DIR__.'/pj_1_travel/admin/auth/form_reg.php';
			break;
	
		case'/auth':
			require __DIR__.'/pj_1_travel/admin/auth/admin.auth.php';
			break;
	
		case'/postauth':
			require __DIR__.'/pj_1_travel/admin/auth/form_auth.php';
			break;
	
		default:
			http_response_code(404);
			require __DIR__ . '/pj_1_travel/404.php';
			break;
	}
?>
<!-- Something is wrong with the XAMPP installation :-( -->
