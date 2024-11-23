<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Gradient Background */
        body {
            background: #222;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
        }

        /* Card Design */
        .login-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            color: #fff;
        }

        .login-card h2 {
            font-size: 1.8rem;
            font-weight: 600;
        }

        .login-card .form-control {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: #fff;
        }

        .login-card .form-control:focus {
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            box-shadow: none;
        }

        .login-card .btn-primary {
            background: #2575fc;
            border: none;
            font-weight: bold;
            transition: all 0.3s;
        }

        .login-card .btn-primary:hover {
            background: #6a11cb;
        }

        .login-card a {
            color: #fff;
            text-decoration: underline;
        }

        .login-card p {
            margin-top: 20px;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="login-card text-center">
        <h2>WELCOME</h2>
        <p>Please login to your account</p>
        <form action="./backend/login.php" method="post" class="mt-4">
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary w-100">Login</button>
        </form>
        <p class="mt-3">
            Belum punya account ? <a href="register.php">Daftar Disini</a>
        </p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
