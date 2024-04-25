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
    background-image: url(https://w0.peakpx.com/wallpaper/630/881/HD-wallpaper-wanderer-fairies-sunset-fantasy-world-mountain-clouds-forest-fantasy.jpg);
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
        <article>
            <h2>10 Pasos para una Rutina Matutina que Revolucione tu Día</h2>
            <p class="date">Publicado el 25 de Abril, 2024</p>
            <p class="summary">Descubre cómo puedes transformar tus mañanas con esta guía detallada que te ayudará a establecer una rutina matutina que impulse tu productividad, mejore tu bienestar emocional y te prepare para enfrentar el día con energía y enfoque.</p>
            <a href="#" class="read-more">Leer más</a>
        </article>

        <!-- Ejemplo de artículo 2 -->
        <article>
            <h2>Viajar Ligero: Consejos para Empacar de Forma Eficiente</h2>
            <p class="date">Publicado el 24 de Abril, 2024</p>
            <p class="summary">¿Te agobia la idea de empacar para tus viajes? En este artículo, te ofrecemos consejos prácticos y trucos inteligentes para maximizar el espacio en tu equipaje, minimizar el estrés de empacar y asegurarte de tener todo lo esencial para disfrutar al máximo de tus aventuras sin cargar con exceso de peso.</p>
            <a href="#" class="read-more">Leer más</a>
        </article>

        <article>
            <h2>"Mindfulness en la Vida Cotidiana: Cómo Integrar la Atención Plena en tu Rutina"</h2>
            <p class="date">Publicado el 23 de Abril, 2024</p>
            <p class="summary">Explora el poder transformador del mindfulness y aprende cómo puedes incorporar la atención plena en tu vida diaria para reducir el estrés, mejorar la concentración y cultivar una mayor conexión contigo mismo y con el mundo que te rodea. Desde prácticas simples hasta consejos para aplicarlo en el trabajo y en casa, descubre cómo vivir con mayor plenitud en cada momento.</p>
            <a href="#" class="read-more">Leer más</a>
        </article>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Estilo de Vida Blog</p>
        </div>
    </footer>
</body>
</html>
