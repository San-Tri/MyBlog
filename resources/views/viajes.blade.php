<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viajes y Aventura Blog</title>
    <style>
        /* Reset de estilos */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}
.inicio {
    text-decoration: none;
    color: #fff;
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
    background-image: url(https://wallpapercave.com/wp/wp7998912.jpg);
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
            <h1>Viajes y Aventuras Blog</h1>
        </a>
            <nav>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Destinos</a></li>
                    <li><a href="#">Acerca de</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <section class="main-content">
        <div class="container">
        <article>
            <h2>Explorando Paraísos Escondidos: Destinos Secretos para los Amantes de la Naturaleza</h2>
            <p class="date">Publicado el 25 de Abril, 2024</p>
            <p class="summary">Embárcate en una aventura única mientras descubrimos algunos de los destinos naturales más impresionantes y menos conocidos del mundo. Desde cascadas ocultas hasta bosques encantados, este artículo te llevará a lugares fuera de lo común donde podrás conectar con la naturaleza y disfrutar de la serenidad que ofrecen estos paraísos escondidos.</p>
            <a href="#" class="read-more">Leer más</a>
        </article>

        <!-- Ejemplo de artículo 2 -->
        <article>
            <h2>De Mochilero por Europa: Consejos para Viajar con Presupuesto Reducido</h2>
            <p class="date">Publicado el 24 de Abril, 2024</p>
            <p class="summary"> ¿Sueñas con recorrer Europa pero crees que es demasiado caro? En este artículo, te mostramos cómo puedes explorar los rincones más fascinantes del continente sin gastar una fortuna. Desde alojamiento económico hasta consejos para ahorrar en comida y transporte, descubre cómo convertirte en un mochilero experto y vivir una aventura inolvidable sin que tu presupuesto se dispare./p>
            <a href="#" class="read-more">Leer más</a>
        </article>

        <article>
            <h2>Experiencias Extremas: Desafiando los Límites en los Destinos más Salvajes del Mundo</h2>
            <p class="date">Publicado el 23 de Abril, 2024</p>
            <p class="summary">Únete a nosotros en un viaje emocionante a través de algunos de los destinos más extremos y desafiantes del planeta. Desde expediciones a las cimas de montañas imponentes hasta aventuras en los desiertos más inhóspitos, este artículo te sumergirá en el mundo de los viajes de aventura y te inspirará a superar tus propios límites en busca de experiencias inolvidables.</p>
            <a href="#" class="read-more">Leer más</a>
        </article>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Viajes y Aventura Blog</p>
        </div>
    </footer>
</body>
</html>
