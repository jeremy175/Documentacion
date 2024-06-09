<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>División de Página</title>
    <link rel="stylesheet" href="styless.css">
</head>

<body>
    <div class="page-container">
        <section class="left-section">
            <nav class="sidebar-menu">
                <ul>
                    <li><a href="#" onclick="showContent('content1')">General</a></li>
                    <li><a href="#" onclick="showContent('content2')">Login</a></li>
                    <li><a href="#" onclick="showContent('content3')">Tienda</a></li>
                    <li><a href="#" onclick="showContent('content4')">Ventanas emergentes</a></li>
                </ul>
            </nav>
        </section>
        <!--Seccion de minijuegos-->
        <section class="right-section">
            <h2>Documentacion</h2>
            <div id="content1" class="content">
                <h1>Titulo: UTP + play</h1>
                <img src="./img/inicial.png" width="600px">
                <p>Una plataforma creada con la finalidad de mejorar el proceso de inducción de los nuevos ingresantes UTP, +play busca que el alumno aprenda a través de minijuegos y quizz interactivos.
                </p>
                <h2>Tecnologías</h2><!--Definir sus variables de los minijuegos-->
                <p>El desarrollo de la plataforma se ha dividido en 3 sectores, a continuación se presentan las herramientas usadas por cada sector respectivamente:
                <ul>
                    <li><b>Diseño UI/UX:</b>Figma</li>
                    <LI><b>Desarrollo frontend:</b>Html5, JS, CSS3 y boostrap5</LI>
                    <li><b>Desarrollo Backend:</b>php y mysqlPHP my admin</li>
                </ul>
                </p>
                <h2>Recursos:</h2>
                <p>Enlace figma: <a href="https://www.figma.com/design/oQvntsbTtE1pSKL2dQi8Bf/HACKATON-RETO-2-ONBOARDING-FIGMA?node-id=251-18&t=6m47Lq66OwummRKg-1" target="_blank">Presionar aquí</a></p>
            </div>
            <!--Seccion de Login-->
            <div id="content2" class="content" style="display: none;">
                <h1>Titulo: Login</h1>
                <img src="https://via.placeholder.com/300">
                <p>Ingrese el titulo</p>
                <h2>Variables</h2><!--Definir sus variables de los minijuegos-->
                <p>Ingrese variables</p>
                <h2>Eventos</h2>
                <p>Ingrese eventos</p>
            </div>
            <!--Seccion de tienda-->
            <div id="content3" class="content" style="display: none;">
                <h1>Titulo: Tienda</h1>
                <img src="https://via.placeholder.com/300">
                <p>Ingrese el titulo</p>
                <h2>Variables</h2><!--Definir sus variables de los minijuegos-->
                <p>Ingrese variables</p>
                <h2>Eventos</h2>
                <p>Ingrese eventos</p>
            </div>
            <!--Seccion ventanas emergentes-->
            <div id="content4" class="content" style="display: none;">
                <h1>Titulo: Ventanas emergentes</h1>
                <img src="https://via.placeholder.com/300">
                <p>Ingrese el titulo</p>
                <h2>Variables</h2><!--Definir sus variables de los minijuegos-->
                <p>Ingrese variables</p>
                <h2>Eventos</h2>
                <p>Ingrese eventos</p>
            </div>
        </section>
    </div>
    <script src="scripts.js"></script>
</body>

</html>