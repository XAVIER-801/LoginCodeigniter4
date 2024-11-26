<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(135deg, #74ebd5 0%, #acb6e5 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            overflow: hidden;
        }

        .card {
            border: none;
            border-radius: 15px;
            padding: 30px;
            width: 100%;
            max-width: 400px;
            background: #ffffff;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.8s ease-out;
        }

        .card-title {
            font-size: 1.8rem;
            font-weight: 600;
            color: #4a4a4a;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 30px;
            padding: 10px 15px;
            border: 1px solid #ddd;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .form-control:focus {
            border-color: #74ebd5;
            box-shadow: 0 0 8px rgba(116, 235, 213, 0.5);
        }

        .btn-primary {
            background: #74ebd5;
            border: none;
            border-radius: 30px;
            padding: 10px;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        .btn-primary:hover {
            background: #67d8c6;
            transform: translateY(-2px);
        }

        .text-primary.register-link {
            font-weight: 600;
            color: #74ebd5 !important;
        }

        .text-primary.register-link:hover {
            text-decoration: underline;
            color: #67d8c6 !important;
        }

        .background-decor {
            position: absolute;
            z-index: -1;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .background-decor .circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
        }

        .circle-1 {
            width: 200px;
            height: 200px;
            top: 10%;
            left: -50px;
        }

        .circle-2 {
            width: 300px;
            height: 300px;
            bottom: -100px;
            right: -100px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <title>Login</title>
</head>
<body>
    <div class="background-decor">
        <div class="circle circle-1"></div>
        <div class="circle circle-2"></div>
    </div>

    <div class="card">
        <h3 class="card-title">Login con CodeIgniter 4</h3>
        <form action="<?php echo base_url('/login') ?>" method="POST">
            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" class="form-control" placeholder="Ingresa tu usuario" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Ingresa tu contraseña" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
        </form>
        <div class="text-center mt-3">
            <span>¿No tienes una cuenta?</span>
            <a href="/register" class="text-primary register-link">Regístrate aquí</a>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
