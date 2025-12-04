<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            overflow: hidden;
        }
        .main-container {
            height: 100vh;
        }
        .image-half {
            background-image: url('{{ asset("img/login/pescaderia.jpg") }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
        }
        .login-half {
            display: flex; 
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f8f9fa; 
        }
        .login-card {
            max-width: 400px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            background-color: white;
            width: 100%;
        }
    </style>
</head>
<body>
    
    <div class="container-fluid main-container">
        <div class="row h-100 g-0">
            
            {{-- Imagen --}}
            <div class="col-md-6 image-half">
            </div>
            
            {{-- Formulario --}}
            <div class="col-md-6 login-half">
                <div class="login-card">
                    <h2 class="text-center mb-4 text-primary">Iniciar Sesión</h2>
                    
                    <form method="POST" action="{{ route('do.login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-primary btn-lg">Entrar</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>