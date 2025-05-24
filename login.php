<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --green-dark: #003c1c;
            --green-light: #164b2f;
            --yellow-soft: #f9fbe7;
            --yellow: #ffeb3b;
            --white: #ffffff;
            --black: #1f1f1f;
            --grey-border: #ccc;
        }

        * {
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: var(--green-dark);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form, h2 {
            width: 100%;
        }

        .login-box {
            background-color: var(--white);
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h2 {
            margin-bottom: 24px;
            color: var(--green-dark);
            font-size: 24px;
            font-weight: 600;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid var(--grey-border);
            border-radius: 10px;
            font-size: 15px;
            background-color: var(--yellow-soft);
        }

        input[type="submit"] {
            background-color: var(--green-dark);
            color: var(--white);
            padding: 12px;
            width: 100%;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out;
        }

        input[type="submit"]:hover {
            background-color: var(--green-light);
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>LOGIN</h2>
        <form action="progres/login_proses.php" method="post">
            <input type="email" name="email" placeholder="Email" required><br><br>
            <input type="password" name="password" placeholder="Password" required><br><br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
