<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .container {
        width: 60%;
        margin: auto;
        overflow: hidden;
    }

    .login-box {
        background: #fff;
        margin-top: 50px;
        padding: 30px;
        border-radius: 4px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login-box h2 {
        margin-bottom: 20px;
        text-align: center;
    }

    .login-box input[type="text"],
    .login-box input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .login-box input[type="submit"] {
        width: 100%;
        padding: 10px;
        border: none;
        background: #007bff;
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
    }

    .login-box input[type="submit"]:hover {
        background: #0056b3;
    }

    .login-box p {
        text-align: center;
        margin-top: 10px;
    }
    </style>
</head>

<body>
    @yield('container')
</body>

</html>