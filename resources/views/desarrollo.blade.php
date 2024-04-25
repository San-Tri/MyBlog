<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desarrollo Personal Blog</title>
    <style>
        /* Reset de estilos */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
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
    background-color: #333;
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
    background-image: url(https://th.bing.com/th/id/R.f4409313c983e6d48c03c701aeb99971?rik=ozDIkLe2eyabKQ&pid=ImgRaw&r=0);
    background-size: cover;
    background-position: center;
    padding: 17px 0;A
    text-align: center;
    height: calc(100vh - 130px);
}

article {
    background-color: #fff;
    margin-bottom: 20px;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.date {
    font-size: 0.8em;
    color: #888;
    margin-bottom: 10px;
}

.summary {
    margin-bottom: 10px;
}

.read-more {
    display: inline-block;
    background-color: #333;
    color: #fff;
    padding: 5px 10px;
    text-decoration: none;
    border-radius: 5px;
}

.read-more:hover {
    background-color: #555;
}

footer {
    position: fixed;
    width: 100%;
    bottom: 0;
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
            <h1>Desarrollo Personal Blog</h1>
        </a>
            <nav>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Artículos</a></li>
                    <li><a href="#">Acerca de</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <section class="main-content">
        <div class="container">
        <article>
            <h2>Mejorar habilidades de programación: Un camino hacia el éxito</h2>
            <p class="date">Publicado el 25 de Abril, 2024</p>
            <p class="summary">Descubre cómo dominar nuevas tecnologías y lenguajes de programación para impulsar tu carrera en el desarrollo web. Este artículo te guiará a través de consejos prácticos y recursos útiles.</p>
            <a href="#" class="read-more">Leer más</a>
        </article>

        <!-- Ejemplo de artículo 2 -->
        <article>
            <h2>Productividad y gestión del tiempo: Claves para un trabajo eficiente</h2>
            <p class="date">Publicado el 24 de Abril, 2024</p>
            <p class="summary">Aprende técnicas efectivas para aumentar tu productividad y manejar mejor tu tiempo. Este artículo ofrece estrategias y herramientas para mejorar tu rendimiento diario y alcanzar tus metas profesionales.</p>
            <a href="#" class="read-more">Leer más</a>
        </article>

        <article>
            <h2>Salud mental y bienestar: Cuidado personal para un desarrollo integral</h2>
            <p class="date">Publicado el 23 de Abril, 2024</p>
            <p class="summary">Explora la importancia de la salud mental en el desarrollo personal y profesional. Este artículo te ofrece consejos y recursos para cuidar tu bienestar emocional y mental, contribuyendo a un estilo de vida más equilibrado y satisfactorio.</p>
            <a href="#" class="read-more">Leer más</a>
        </article>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Desarrollo Personal Blog</p>
        </div>
    </footer>
</body>
</html>
