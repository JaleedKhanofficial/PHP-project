<?php
use Core\App;
use Core\DataBase;
use Core\Validator;

$db = App::resolve(DataBase::class);

$email = $_POST['email'];
$password = $_POST['password'];

// validate the forms inputs.

$errors = [];
if (!Validator::email($email)){
    $errors['email'] = 'Please provide a valid email address.';
}

if (! Validator::string($password, 7, 255)){
    $errors['password'] = 'Please provide a password of at least seven character.';
}

if(! empty($errors)){
    return view('registration/create.view.php',[
        'errors'=> $errors
    ]);
}

//check if the account already exists

$user = $db->query('select * from users where email= :email',[
    'email' => $email
])->find();

    //if yes, redirect to login page 
if ($user){
    // than someone with ehat email already exists and has an account
    header('Location: /');
} else{
    // if not, save to the databass, and than log the user in, and redirect.

    $db->query('INSERT INTO users(email , password) VALUES(:email, :password)',[
        'email'=> $email,
        'password'=> password_hash($password,PASSWORD_BCRYPT)
    ]);

    // mark that the user has logged in,
    login($user);


    header('location: /');
    exit();
}
    