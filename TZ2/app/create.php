<<<<<<< HEAD:TZ2/App/create.php
<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/TZ2/src/UserRepository.php';

try {
    $userRepository = new UserRepository();
    $userRepository->create($_POST['login'], $_POST['password'], $_POST['email'], $_POST['name']);
    session_start();
    setcookie('name', $_POST['name'], time() + 60 * 60 * 24 * 30, '/TZ2');
    $_SESSION['login'] = $_POST['login'];
    
    echo json_encode([
        'status' => true,
        'message' => '',
    ]);
    
} catch(Exception $exception) {
      
    echo json_encode([
        'status' => false,
        'message' => $exception->getMessage()
    ]);
}

=======
<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/TZ2/src/UserRepository.php';

try {
    $userRepository = new UserRepository();
    $userRepository->create($_POST['login'], $_POST['password'], $_POST['email'], $_POST['name']);
    session_start();
    setcookie('name', $_POST['name'], time() + 60 * 60 * 24 * 30, '/TZ2');
    $_SESSION['login'] = $_POST['login'];
    
    echo json_encode([
        'status' => true,
        'message' => '',
    ]);
    
} catch(Exception $exception) {
      
    echo json_encode([
        'status' => false,
        'message' => $exception->getMessage()
    ]);
}
>>>>>>> 5173ded1ab17068461c732fb144b33c5f04da31e:TZ2/app/create.php