<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiencia Profesional Blog</title>
    <style>
        /* Reset de estilos */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
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
    background-color: #0000;
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
    background-image: url(https://img.freepik.com/premium-photo/gloomy-atmospheric-dark-realistic-landscape-mystic-horror-spooky-scary-surreal-dramatic-scene_21085-7375.jpg);
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
            <h1>Experiencia Profesional Blog</h1>
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
            <h2>Pintura y Dibujo: Expresión Artística en Acción</h2>
            <p class="date">Publicado el 25 de Abril, 2024</p>
            <p class="summary">Aprende sobre la importancia de mantener un estilo de vida saludable y cómo el fitness puede ser una parte integral de tu vida diaria. Este artículo ofrece consejos y rutinas para mejorar tu salud física y mental.</p>
            <a href="#" class="read-more">Leer más</a>
        </article>

        <!-- Ejemplo de artículo 2 -->
        <article>
            <h2>Fitness y Salud: Un Viaje hacia la Mejor Versión de Ti</h2>
            <p class="date">Publicado el 24 de Abril, 2024</p>
            <p class="summary">Aprende técnicas efectivas para aumentar tu productividad y manejar mejor tu tiempo. Este artículo ofrece estrategias y herramientas para mejorar tu rendimiento diario y alcanzar tus metas profesionales.</p>
            <a href="#" class="read-more">Leer más</a>
        </article>

        <article>
            <h2>Fotografía y Viajes: Capturando Momentos y Creando Recuerdos</h2>
            <p class="date">Publicado el 23 de Abril, 2024</p>
            <p class="summary">Explora el mundo a través de la lente de una cámara. Este artículo te ofrece consejos sobre cómo mejorar tus habilidades fotográficas y cómo viajar de manera más consciente y creativa.</p>
            <a href="#" class="read-more">Leer más</a>
        </article>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Experiencia Profesional Blog</p>
        </div>
    </footer>
</body>
</html>
