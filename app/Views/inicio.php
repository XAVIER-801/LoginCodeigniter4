<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Custom CSS for styling -->
  <style>
    body {
      background: linear-gradient(to right, #74ebd5, #acb6e5);
      font-family: 'Verdana', sans-serif;
    }
    .navbar {
      background-color: #333;
      color: #fff;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }
    .navbar-brand {
      color: #f8f9fa !important;
    }
    .navbar .nav-link {
      color: #dcdcdc !important;
      transition: color 0.3s;
    }
    .navbar .nav-link:hover {
      color: #fff !important;
    }
    .btn-logout {
      background-color: #f03a47;
      border: none;
      transition: transform 0.3s ease;
    }
    .btn-logout:hover {
      background-color: #c7323d;
      transform: scale(1.05);
    }
    .content {
      margin-top: 60px;
      text-align: center;
    }
    .content h1 {
      color: #fff;
      font-weight: 700;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
    }
    .role {
      color: #eee;
      font-size: 1.2rem;
      margin-top: 15px;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
    }
    .btn-primary, .btn-secondary {
      margin: 5px;
      border-radius: 50px;
      transition: background-color 0.3s ease, transform 0.3s ease;
    }
    .btn-primary:hover {
      background-color: #0056b3;
      transform: scale(1.05);
    }
    .btn-secondary:hover {
      background-color: #6c757d;
      transform: scale(1.05);
    }
    .content p {
      color: #ffffff;
    }
  </style>

  <title>Inicio</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand font-weight-bold" href="#"><?php echo session('usuario'); ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link btn btn-logout text-white" href="<?php echo base_url('/salir') ?>">Salir</a>
        </li>
      </ul>
    </div>
  </nav>
  
  <div class="container content">
    <h1>Bienvenido, <?php echo session('usuario'); ?>!</h1>
    <p class="role">
      <?php
      switch (session('type')) {
        case 'admin':
          echo "Eres un administrador.";
          break;
        case 'editor':
          echo "Eres un editor.";
          break;
        case 'viewer':
          echo "Eres un espectador.";
          break;
        default:
          echo "Rol desconocido.";
          break;
      }
      ?>
    </p>
    <!-- Contenido dinámico basado en el tipo de usuario -->
    <div class="mt-4">
      <?php if (session('type') === 'admin'): ?>
        <a href="<?php echo base_url('/admin/configuracion'); ?>" class="btn btn-primary">Configuración</a>
        <a href="<?php echo base_url('/admin/usuarios'); ?>" class="btn btn-secondary">Gestionar Usuarios</a>
      <?php elseif (session('type') === 'editor'): ?>
        <a href="<?php echo base_url('/editor'); ?>" class="btn btn-primary">Editar Contenido</a>
      <?php elseif (session('type') === 'viewer'): ?>
        <p>Gracias por visitar. Puedes explorar el contenido disponible.</p>
      <?php else: ?>
        <p>No tienes un rol asignado.</p>
      <?php endif; ?>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
