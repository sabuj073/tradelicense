<?php

namespace App\Controllers;

class AuthController
{
    public function showLoginForm()
    {
        require_once __DIR__ . '/../Views/frontend/Pages/Login.php';
    }

    public function login()
    {
        $email = $_POST['email'];
        $hashpassword = $_POST['password'];

        $pdo = require_once __DIR__ . '/../../config/database.php';
        $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($hashpassword, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            header('Location: home');
        } else {
            echo 'Invalid credentials';
        }
    }

    public function showRegisterForm()
    {
        require_once __DIR__ . '/../Views/register.php';
    }

    public function register()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $hashedPassword  = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $pdo = require_once __DIR__ . '/../../config/database.php';
        $stmt = $pdo->prepare('INSERT INTO users (name, email, password) VALUES (?, ?, ?)');
        $stmt->execute([$name, $email, $hashedPassword ]);

        echo 'Registration successful';
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header('Location: /login');
    }
}
