<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estilo de Vida Blog</title>
    <style>
        /* Reset de estilos */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #fafafa;
}

.inicio {
    text-decoration: none;
    color: #fff;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

header {
    background-color: #ff69b4;
    color: #fff;
    padding: 20px 0;
}

header h1 {
    margin: 0;
}

nav ul {
    list-style: none;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
}

nav ul li a:hover {
    text-decoration: underline;
}

.main-content {
    padding: 40px 0;
}

footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}

    </style>
</head>
<body>
    <header>
        <div class="container">
        <a class="inicio" href="{{route('welcome')}}">
            <h1>Estilo de Vida Blog</h1>
        </a>
            <nav>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Categorías</a></li>
                    <li><a href="#">Acerca de</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <section class="main-content">
        <div class="container">
            <!-- Aquí irán los artículos del blog -->
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Estilo de Vida Blog</p>
        </div>
    </footer>
</body>
</html>
