<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            width: 350px;
            padding: 40px;
            background-color: #fff;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .login-container input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .login-container button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-container button:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>

    <div class="login-container">
        <h2>Login</h2>
        <form action="login_process.php" method="POST">
            <label for="username">Username:</label> 
            <input type="text" name="username" id="username" placeholder="Username" required> 
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <br>
            <button type="submit">Login</button>
        </form>
    </div>


</body>
</html>
