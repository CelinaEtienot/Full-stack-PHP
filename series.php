<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="movies.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&            display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        table {
            width: 89%;
            border-collapse: collapse;
            margin: 50px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .actions {
            display: flex;
            gap: 10px;
        }
    </style>
    <title>Movies</title>
</head>

<body>
    <Header>
        <div class="container">
            <div class="animate__animated animate__fadeInDown" id="Logotipo">
                <img src="Img/logo.png" alt="Jane Austen" id="logo">
                <a href="index.html" id="titulo">Jane Austen - Fans</a>
            </div>
        </div>
        <Nav>
            <a href="tendencias.html" target="_blank">Tendencias</a>
            <a href="registrarse.html" target="_blank">Registrarse</a>
            <a href="iniciar_sesion.html" target="_blank">Iniciar Sesión</a>
            <a href="conexion_api.html" target="_blank">Conexion Api</a>
            <a href="registro_pelis.html" target="_blank">Registro de Películas</a>
        </Nav>
    </Header>
    <main>
 
        <section data-aos="zoom-in-right" data-aos-duration="1000">
            <h2>Series</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Año</th>
                        <th>Descripción</th>
                        <th>Género</th>
                        <th>Director</th>
                        <th>Valoración</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include 'php/fetch_data.php' ?>
                </tbody>
            </table>
        </section>
    </main>
    <footer>
        <Nav>
            <a href="tendencias.html">Términos y condiciones</a>
            <a href="registrarse.html">Preguntas frecuentes</a>
            <a href="contacto.html">Contacto</a>
        </Nav>
        <div>
            <h4 id="equipo">Desarrollado por Celina Etienot, Jeremias Ianigro, Pablo Pugliese y Jonatan Pedalino</h4>
            <h4>©2024 todos los derechos reservados</h4>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>