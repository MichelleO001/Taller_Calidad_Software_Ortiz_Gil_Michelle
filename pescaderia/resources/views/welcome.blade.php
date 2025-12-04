<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pescadería El Anzuelo de Oro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        *{
            font-family: 'Times New Roman', Times, serif;
        }
        body {
            background-color: #f0f8ff; /* Azul claro muy suave, como el mar */
        }
        .hero-section {
            background: linear-gradient(135deg, #007bff 0%, #00bfff 100%); /* Degradado de azul */
            color: white;
            padding: 4rem 0;
            border-radius: 0 0 50% 50% / 0 0 10% 10%; /* Borde inferior curvo sutil */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        .product-card {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            border: none;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        .category-header {
            background-color: #007bff;
            color: white;
            padding: 0.75rem 1.25rem;
            border-radius: 0.25rem 0.25rem 0 0;
        }
        .login-btn {
            border: 2px solid white;
        }
    </style>
</head>
<body>
    
    {{-- BARRA DE NAVEGACIÓN SIMPLIFICADA --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">
        <div class="container">
            <span class="navbar-brand text-primary fw-bold">El Anzuelo de Oro</span>
            <a href="{{ route('login') }}" class="btn btn-outline-primary">
                Login
            </a>
        </div>
    </nav>
    
    {{-- SECCIÓN DE BIENVENIDA / HERO --}}
    <div class="hero-section text-center mb-5">
        <div class="container">
            <h1 class="display-3 fw-light"><strong>¡Bienvenidos a nuestra Pescadería!</strong></h1>
            <p class="lead mt-3 mb-4">
                En <i>El Anzuelo de Oro</i> te ofrecemos el pescado y marisco más fresco, directo del mar a tu mesa.
            </p>
            <p class="mb-0">
                <small>Calidad garantizada, frescura inigualable.</small>
            </p>
        </div>
    </div>

    <div class="container my-5">
        
        <section id="categories" class="mt-5">
            <h2 class="mb-5 text-center text-secondary fw-light border-bottom pb-2">Nuestros Productos Frescos</h2>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card product-card h-100">
                    <img src="{{ asset('img/dashboard/salmon.jpg') }}" 
                        class="card-img-top" 
                        alt="Salmón Fresco de Ejemplo" 
                        style="height: 180px; object-fit: cover;">
                    
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary">Salmón Fresco</h5>
                        <hr>
                        <p class="h4 fw-bold text-success">25.500</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card product-card h-100">
                    <img src="{{ asset('img/dashboard/bacalao.jpg') }}" 
                        class="card-img-top" 
                        alt="Bacalao" 
                        style="height: 180px; object-fit: cover;">
                    
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary">Bacalao</h5>
                        <hr>
                        <p class="h4 fw-bold text-success">15.000</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card product-card h-100">
                    <img src="{{ asset('img/dashboard/trucha.webp') }}" 
                        class="card-img-top" 
                        alt="Trucha" 
                        style="height: 180px; object-fit: cover;">
                    
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary">Trucha Arcoíris</h5>
                        <hr>
                        <p class="h4 fw-bold text-success">12.500</p>
                    </div>
                </div>
            </div>
        </section>
        
        <footer class="text-center mt-5 pt-3 border-top text-muted">
            <p>El Anzuelo de Oro. &copy; {{ date('Y') }}</p>
        </footer>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>