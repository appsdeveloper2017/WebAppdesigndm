<!DOCTYPE html>
<!--
Created by PhpStorm.
User: david
Date: 18/12/17
Time: 23:24

To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <meta name="description" content="Web dedicada al diseño web & movil"/>
        <meta name="keywords" content="html, html5, css, css3, javascript, js, php, android, java, xml,
                                        web, webs, aplicaciones moviles, movil"/>
        <title>Desarrollo movil & web</title>
        <link rel="stylesheet" href="appdesigndm.css">
    </head>
    <body>
        <div id="agrupar">
            <header id="cabecera">
                <h1>Appdesigndm</h1>
            </header>
            <nav id="menu">
                <ul>
                    <li>Portfolio</li>
                    <li>Sobre mi</li>
                    <li>Trabajos</li>
                    <li>Contacta</li>
                </ul>
            </nav>
            <section id="seccion">
                <article>
                    <header>
                        <hgroup>
                            <h1>Título uno</h1>
                            <h2 class="texto1">Subtítulo uno</h2>
                        </hgroup>
                        <time datetime="2011-12-10" pubdate>publicado 10-12-2011</time>
                    </header>
                    Texto del <strong>primer</strong> mensaje
                    <figure>
                        <img src=”http://minkbooks.com/content/myimage.jpg”> <figcaption>
                            Esta es la imagen del primer mensaje </figcaption>
                    </figure>
                    <footer>
                        <p><Comentarios del primer mensaje<p>
                    </footer>
                </article>
                <article>
                    <header>
                        <hgroup>
                            <h1>Título dos</h1>
                            <h2>Subtítulo dos</h2>
                        </hgroup>
                        <time datetime="2011-12-15" pubdate>publicado 15-12-2011 </time>
                    </header>
                    Texto del <strong>segundo</strong> mensaje
                    <footer>
                        <p><Comentarios del segundo mensaje<p>
                    </footer>
                </article>
                <?php
                        echo "Hooooooooolaaaaaaaaaaa";
                // put your code here
                ?>
            </section>
            <aside id="columna">
                <blockquote>Mensaje número 1</blockquote>
                <blockquote>Mensaje número 2</blockquote>
            </aside>
            <footer id="pie">
                <small>Derechos reservados &copy; 2018</small>
            </footer>
        </div>
    </body>
</html>
