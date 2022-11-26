<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/TZ2/src/UserRepository.php';

// if ($_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest') {}

try {
    $userRepository = new UserRepository();
    $userRepository->authorization($_POST['login'], $_POST['password']);
    $id = $userRepository->searchId($_POST['login']);
    $user = $userRepository->get($id);

    session_start();
    setcookie('name', $user['name'], time() + 60 * 60 * 24 * 30, '/TZ2');
    $_SESSION['login'] = $_POST['login'];
    
    
    echo json_encode([
        'status' => true,
        'message' => 'Вы авторизовались'
    ]);

} catch(Exception $exception) {
  
    echo json_encode([
        'status' => false,
        'message' => $exception->getMessage()
    ]);
}

