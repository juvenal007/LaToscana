<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <style>
        /* label color */
        .input-field label {
            color: #f3989b !important;
        }
        /* label focus color */
        .input-field input[type=text]:focus + label {
            color: #f3989b !important;
        }
        /* label underline focus color */
        .input-field input[type=text]:focus {
            border-bottom: 1px solid white !important;
            box-shadow: 0 1px 0 0 plum !important;
        }
        /* valid color */
        .input-field input[type=text].valid {
            border-bottom: 1px solid black !important;
            box-shadow: 0 1px 0 0 black !important;
        }
        /* invalid color */
        .input-field input[type=text].invalid {
            border-bottom: 1px solid black !important;
            box-shadow: 0 1px 0 0 black !important;
        }
        /* icon prefix focus color */
        .input-field .prefix.active {
            color: #f3989b !important;
        }
        .input-field input[type=text]:focus + label, .materialize-textarea:focus:not([readonly]) + label {
            color: #f3989b !important;
        }
        /* label underline focus color */
        .input-field input[type=text]:focus, .materialize-textarea:focus:not([readonly]) {
            border-bottom: 1px solid #f3989b !important;
            box-shadow: 0 1px 0 0 #f3989b !important;
        }
        .bold {
            font-weight: bold;
        }
        .carousel .carousel-item {
            height: 500px
        }
        body {
            background: url(img/textura1.png) center center fixed;

        }
        .tituloOfrecemos {
            background: url(img/textura3.png) center center fixed;

        }
        .flex {
            display: flex;
            flex-wrap: wrap;
        }
        .bordeimg {
            border: 3px solid black;
            margin-bottom: 20px;
        }
        .borde {
            margin-bottom: 20px;
        }
    </style>
    <body class="pink">
        <header>
            <!-- MENU => NAVBAR/SIDENAV-->
            <div id="home" class="scrollspy">
                <nav class="pink">
                    <div class="nav-wrapper">
                        <a href="#" class="brand-logo">La Toscana</a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li><a href="#home">Home<i class="material-icons left">home</i></a></li>
                            <li><a href="#ofrecemos">Ofrecemos<i class="material-icons left">local_dining</i></a></li>
                            <li><a href="#productos">Productos<i class="material-icons left">cake</i></a></li>
                            <li><a href="#maestros">Maestros<i class="material-icons left">face</i></a></li>                        
                            <li><a href="#contacto">Contrata<i class="material-icons left">contact_mail</i></a></li>
                        </ul>

                        <ul id="slide-out" class="side-nav">
                            <li><div class="user-view">
                                    <div class="background">
                                        <img src="img/slider3.jpg" class="responsive-img">
                                    </div>
                                    <br><br>
                                </div></li>
                            <li><a href="#home">Home<i class="material-icons left">home</i></a></li>
                            <li><a href="#ofrecemos">Ofrecemos<i class="material-icons left">local_dining</i></a></li> 
                            <li><a href="#productos">Nuestros productos<i class="material-icons left">cake</i></a></li> 
                            <li><a href="#maestros">Nuestros maestros<i class="material-icons left">face</i></a></li> 
                            <li><a href="#contacto">Contrata<i class="material-icons left">contact_mail</i></a></li>
                        </ul>
                        <!-- BOTON DE MENU QUE ACTIVA SIDENAV -->
                        <a href="#" data-activates="slide-out" class="button-collapse show-on-small"><i class="material-icons">menu</i></a>
                    </div>
                </nav>
            </div>
        </header>
        <main>

            <!-- SLIDER -->

            <div class="slider">
                <ul class="slides">
                    <li>
                        <img class="responsive-img"src="img/slider3.jpg"> <!-- random image -->
                        <div class="caption black-text center-align">
                            <h3>La Toscana, Pasteleria.</h3>
                            <h5 class="light white-text bold">Lo mas grande en panaderias</h5>
                        </div>
                    </li>
                    <li>
                        <img class="responsive-img" src="img/slider1.png"> <!-- random image -->
                        <div class="caption left-align">
                            <h3>Algebra y la ctm!!!</h3>
                            <h5 class="light grey-text text-lighten-3">Chiiichiiiiiiiiiin.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="img/slider2.png"> <!-- random image -->
                        <div class="caption right-align">
                            <h3>Jaramillo Alias mono</h3>
                            <h5 class="light black-text">EL TARZAN DE LOS CONTYS.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="img/slider4.png"> <!-- random image -->
                        <div class="caption center-align">
                            <h3>Sergio Villagran!</h3>
                            <h5 class="light grey-text text-lighten-3">El real huaso de talca.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="img/slider5.png"> <!-- random image -->
                        <div class="caption black-text left-align">
                            <h3>LEIVA MODE ON!</h3>
                            <h5 class="light black-text">Lo mas grande lo mas gigante! O.o.</h5>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Ofrecemos -->
            <br>
            <div class="scrollspy" id="ofrecemos">               
                <div class="col s12">
                    <div class="teal tituloOfrecemos">
                        <br>
                        <h4 class="center-align white-text">Ofrecemos</h4>
                        <br>
                    </div>
                </div>               
            </div>
            <br>
            <div class="row">
                <div class="container">

                    <!-- FILA 1 -->

                    <div class="col s12 m6 l6 center">
                        <div class="card-panel hoverable">

                            <i class="material-icons large pink-text">cake</i>
                            <h4>Productos</h4>
                            <p>El Lorem Ipsum fue reintroducido en la década de 1980 por Aldus Corporation, una empresa que desarrolló Software de Publicación de Escritorio. Su producto más conocido PageMaker viene con gráficos y plantillas de procesamiento de textos previamente instaladas que contienen una versión del lenguaje latín falso.</p>
                        </div>
                    </div>

                    <div class="col s12 m6 l6 center">
                        <div class="card-panel hoverable">

                            <i class="material-icons large pink-text">local_dining</i>
                            <h4>Servicios</h4>
                            <p>El Lorem Ipsum fue reintroducido en la década de 1980 por Aldus Corporation, una empresa que desarrolló Software de Publicación de Escritorio. Su producto más conocido PageMaker viene con gráficos y plantillas de procesamiento de textos previamente instaladas que contienen una versión del lenguaje latín falso.</p>
                        </div>
                    </div>

                    <!-- FILA 2 -->

                    <div class="col s12 m6 l6 center">
                        <div class="card-panel hoverable">

                            <i class="material-icons large pink-text">local_bar</i>
                            <h4>Coktels</h4>
                            <p>El Lorem Ipsum fue reintroducido en la década de 1980 por Aldus Corporation, una empresa que desarrolló Software de Publicación de Escritorio. Su producto más conocido PageMaker viene con gráficos y plantillas de procesamiento de textos previamente instaladas que contienen una versión del lenguaje latín falso.</p>
                        </div>
                    </div>

                    <div class="col s12 m6 l6 center">
                        <div class="card-panel hoverable">

                            <i class="material-icons large pink-text">store</i>
                            <h4>Tienda</h4>
                            <p>El Lorem Ipsum fue reintroducido en la década de 1980 por Aldus Corporation, una empresa que desarrolló Software de Publicación de Escritorio. Su producto más conocido PageMaker viene con gráficos y plantillas de procesamiento de textos previamente instaladas que contienen una versión del lenguaje latín falso.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Productos -->
                
                
            <div>               
                <div class="col s12">
                    
                    <div class="teal tituloOfrecemos">
                        <br>
                        <h4 class="center-align white-text">Nuestros Productos</h4>
                        <br>
                    </div>
                    <br>
                </div>               
            </div>
            
            <br>
            
            <div class="row scrollspy" id="productos">
                <div class="container">
                    <div class="col s12 m6 l3">
                        <img class="materialboxed responsive-img bordeimg" src="img/0.jpg"> 
                    </div>
                    <div class="col s12 m6 l3">
                        <img class="materialboxed responsive-img bordeimg" src="img/1.jpg"> 
                    </div>
                    <div class="col s12 m6 l3">
                        <img class="materialboxed responsive-img bordeimg" src="img/2.jpg">  
                    </div>
                    <div class="col s12 m6 l3">
                        <img class="materialboxed responsive-img bordeimg" src="img/3.jpg">  
                    </div>

                    <div class="col s12 m6 l3">
                        <img class="materialboxed responsive-img bordeimg" src="img/4.jpg"> 
                    </div>
                    <div class="col s12 m6 l3">
                        <img class="materialboxed responsive-img bordeimg" src="img/5.jpg"> 
                    </div>
                    <div class="col s12 m6 l3">
                        <img class="materialboxed responsive-img bordeimg" src="img/6.jpg">  
                    </div>
                    <div class="col s12 m6 l3">
                        <img class="materialboxed responsive-img bordeimg" src="img/7.jpg">  
                    </div>

                    <div class="col s12 m6 l3">
                        <img class="materialboxed responsive-img bordeimg" src="img/8.jpg"> 
                    </div>
                    <div class="col s12 m6 l3">
                        <img class="materialboxed responsive-img bordeimg" src="img/9.jpg"> 
                    </div>
                    <div class="col s12 m6 l3">
                        <img class="materialboxed responsive-img bordeimg" src="img/12.jpg">  
                    </div>
                    <div class="col s12 m6 l3">
                        <img class="materialboxed responsive-img bordeimg" src="img/11.jpg">  
                    </div>
                </div>
            </div>

            <!-- Maestros -->

            <div class="scrollspy" id="maestros">               
                <div class="col s12">
                    <div class="teal tituloOfrecemos">
                        <br>
                        <h4 class="center-align white-text">Nuestros Maestros</h4>
                        <br>
                    </div>
                </div>               
            </div>
            
            <br>

            <div class="row">
                <div class="container flex">
                    <div class="col s12 m6 l3 flex">
                        <div class="card-panel center-align hoverable">
                            <img src="img/maestro1.jpg" class="responsive-img circle"/>
                            <h5 class="pink-text darken-3">Mario Fiutto</h5>
                            <p>Pedro Corchero Murga es el creador de este blog, un blogger al que le encanta el marketing, el diseño y la programación web. Saber más sobre él. Seguir en Twitter o Facebook. Contactar.</p>
                        </div>
                    </div>

                    <div class="col s12 m6 l3 flex">
                        <div class="card-panel center-align hoverable">
                            <img src="img/maestro2.jpg" class="responsive-img circle"/>
                            <h5 class="pink-text darken-3">Benito Camelo</h5>
                            <p>Pedro Corchero Murga es el creador de este blog, un blogger al que le encanta el marketing, el diseño y la programación web. Saber más sobre él. Seguir en Twitter o Facebook. Contactar.</p>
                        </div>
                    </div>

                    <div class="col s12 m6 l3 flex">
                        <div class="card-panel center-align hoverable">
                            <img src="img/maestro3.jpg" class="responsive-img circle"/>
                            <h5 class="pink-text darken-3">Elsa Podiondo</h5>
                            <p>Pedro Corchero Murga es el creador de este blog, 
                                Pedro Corchero Murga es el creador de este blog, un blogger
                                un blogger al que le encanta el marketing, el diseño y la programación web. Saber más sobre él. Seguir en Twitter o Facebook. Contactar.</p>
                        </div>
                    </div>

                    <div class="col s12 m6 l3 flex">
                        <div class="card-panel center-align hoverable">
                            <img src="img/maestro4.jpg" class="responsive-img circle"/>
                            <h5 class="pink-text darken-3">Rosa Melfierro</h5>
                            <p>Pedro Corchero Murga es el creador de este blog, un blogger al que le encanta el marketing, el diseño y la programación web. Saber más sobre él. Seguir en Twitter o Facebook. Contactar.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CONTACTO -->

            <div class="row scrollspy" id="contacto">
                <div class="container">
                    <div class="col s12">
                        <div class="card-panel">
                            <h5 class="center-align grey-text bold">Contrata Nuestros Servicios</h5>
                            <div class="row">
                                <div class="input-field col s12 m12 l4">
                                    <i class="material-icons prefix pink-text">chat</i>
                                    <input id="nombre" type="text">
                                    <label for="nombre">Tu nombre</label>
                                </div>

                                <div class="input-field col s12 m12 l4">
                                    <i class="material-icons prefix pink-text">chat</i>
                                    <input id="apellido" type="text">
                                    <label for="apellido">Tu apellido</label>
                                </div>

                                <div class="input-field col s12 m12 l4">
                                    <i class="material-icons prefix pink-text">local_post_office</i>
                                    <input id="correo" type="text">
                                    <label for="correo">Tu correo</label>
                                </div>

                                <div class="input-field col s12 m12 l4">
                                    <i class="material-icons prefix pink-text">location_on</i>
                                    <input id="ciudad" type="text">
                                    <label for="ciudad">Tu ciudad</label>
                                </div>

                                <!-- IMAGEN -->

                                <div class="input-field col s12 m12 l4 center-align hide-on-med-and-down">
                                    <i class="material-icons large pink-text">forum</i>

                                </div>

                                <div class="input-field col s12 m12 l4">
                                    <i class="material-icons prefix pink-text">local_phone</i>
                                    <input id="telefono" type="text">
                                    <label for="telefono">Tu telefono</label>
                                </div>

                                <!-- QUE NECESITAS L12 -->

                                <div class="input-field col s12 m12 l12">
                                    <i class="material-icons prefix pink-text">mode_edit</i>
                                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                                    <label for="textarea1">Que necesitas</label>
                                </div>

                                <!-- BOTON -->
                            </div>
                            <ul class="center">
                                <li><button class="btn-large pink waves-effect" >Enviar<i class="material-icons left">done</i></button></li>                            
                            </ul>                            
                        </div>
                    </div>
                </div>
            </div>    

            <!-- BOTON FLOTANTE -->
            
            <div class="fixed-action-btn">
                <a href="#home" class="btn-floating btn-large black">
                    <i class="large material-icons white-text">arrow_upward</i>
                </a>
            </div>
        </main>

        <footer class="page-footer black" style="background-image: url(img/textura.png)">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">La Toscana</h5>
                        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                        <ul><a href="#home" class="bold">Facebook<i class="material-icons left">people</i></a></ul>
                        <ul><a href="#home" class="bold">Instagram<i class="material-icons left">local_see</i></a></ul>
                        <ul><a href="#home" class="bold">Youtube<i class="material-icons left">live_tv</i></a></ul>
                        <ul><a href="#home" class="bold">Flor de Chile Casa Nº 31<i class="material-icons left">location_on</i></a></ul>
                        <ul><a href="#home" class="bold">+56 9 98034496<i class="material-icons left">phone</i></a></ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2018 Copyright Juvenal Salas
                    <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                </div>
            </div>
        </footer>


        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.scrollspy').scrollSpy();
                $(".button-collapse").sideNav();
                $('.materialboxed').materialbox();
                $('.slider').slider();
                Materialize.updateTextFields();
                $('#textarea1').trigger('autoresize');
            });

        </script>
    </body>
</html>