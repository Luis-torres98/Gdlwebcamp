<?php include_once 'includes/templates/header.php'; ?>

    <section class="seccion contenedor">
        <h2>
            La Mejor Conferencia de Diseño Web en español
        </h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam obcaecati maiores vero pariatur laboriosam dignissimos debitis consequatur delectus provident officia magni sapiente quod error, fugiat sunt recusandae cupiditate autem quas?</p>
    </section>
    <!--Seccion.contenedor-->

    <section class="programa">
        <div class="contenedor-video">
            <video autoplay loop poster="../img/bg-talleres.jpg">
                <source src="img/video.mp4" type="video/mp4">
                
                <source src="video.webm" type="video/webm">
                    <source src="video.ogg"  type="video/ogg">
            </video>
        </div>
        <!--Contenedor Video-->
        <div class="contenido-programa">
            <div class="contenedor">
                <div class="programa-evento">
                    <h2>Programa de Evento</h2>
                    <nav class="menu-programa">
                        <a href="#talleres"><i class="fas fa-code"></i>Talleres</a>
                        <a href="#conferencias"><i class="fa fa-comment-alt"></i>Conferencias</a>
                        <a href="#seminarios"><i class="fa fa-university"></i>Seminarios</a>
                    </nav>

                    <div id="talleres" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>HTML5, CSS3 y JavaScript</h3>
                            <p><i class="fa fa-clock"></i>16:00 hrs</p>
                            <p><i class="fa fa-calendar"></i>10 de Dic</p>
                            <p><i class="fa fa-user"></i>Luis Torres</p>
                        </div>

                        <div class="detalle-evento">
                            <h3>Responsive Web Design</h3>
                            <p><i class="fa fa-clock"></i>20:00 hrs</p>
                            <p><i class="fa fa-calendar"></i>10 de Dic</p>
                            <p><i class="fa fa-user"></i>Luis Torres</p>
                        </div>
                        <a href="#" class="button float-rigth"> Ver Todos</a>
                    </div>
                    <!--#talleres-->
                    <div id="conferencias" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Como ser freelancer</h3>
                            <p><i class="fa fa-clock"></i>10:00 hrs</p>
                            <p><i class="fa fa-calendar"></i>10 de Dic</p>
                            <p><i class="fa fa-user"></i>Jesus Valbuena</p>
                        </div>

                        <div class="detalle-evento">
                            <h3>Tecnologías del futuro</h3>
                            <p><i class="fa fa-clock"></i>20:00 hrs</p>
                            <p><i class="fa fa-calendar"></i>10 de Dic</p>
                            <p><i class="fa fa-user"></i>Luis Torres</p>
                        </div>
                        <a href="#" class="button float-rigth"> Ver Todos</a>
                    </div>
                    <!--#talleres-->

                    <div id="seminarios" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Diseño UI/UX para móviles</h3>
                            <p><i class="fa fa-clock"></i>17:00 hrs</p>
                            <p><i class="fa fa-calendar"></i>05 de Mar</p>
                            <p><i class="fa fa-user"></i>Luis Torres</p>
                        </div>

                        <div class="detalle-evento">
                            <h3>Aprende a programar en una mañana</h3>
                            <p><i class="fa fa-clock"></i>20:00 hrs</p>
                            <p><i class="fa fa-calendar"></i>10 de Dic</p>
                            <p><i class="fa fa-user"></i>Carlos Rivera</p>
                        </div>
                        <a href="#" class="button float-rigth"> Ver Todos</a>
                    </div>
                    <!--#talleres-->
                </div>
                <!--Programa-eventos-->

            </div>
            <!--Contenedor-->
        </div>
        <<!--Contenido-progama-->
    </section>

    <section class="invitados contenedor seccion">
        <h2>Nuestros Invitados</h2>
        <ul class="lista-invitados clearfix">
            <li>
                <div class="invitado">
                    <img src="img/invitado1.jpg" alt="imagen invitado">
                    <p>Rafael Bautista</p>
                </div>
            </li>

            <li>
                <div class="invitado">
                    <img src="img/invitado2.jpg" alt="imagen invitado">
                    <p>Shari Herrera</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado3.jpg" alt="imagen invitado">
                    <p>Gregorio Sanches</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado4.jpg" alt="imagen invitado">
                    <p>Susana Rivera</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado5.jpg" alt="imagen invitado">
                    <p>Rafael Bautista</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado6.jpg" alt="imagen invitado">
                    <p>Susan Sanchez</p>
                </div>
            </li>
        </ul>
    </section>

    <div class="contador parallax">
        <div class="contenedor">
            <ul class="resumen-evento clearfix">
                <li>
                    <p class="numero">0</p> Invitados</li>
                <li>
                    <p class="numero">0</p> Talleres</li>
                <li>
                    <p class="numero">0</p> Dias</li>
                <li>
                    <p class="numero">0</p> Conferencias</li>
            </ul>
        </div>
    </div>

    <section class="precios seccion">
        <h2>Precios</h2>
        <div class="contenedor">
            <ul class="lista-precios clearfix">
                <li>
                    <div class="tabla-precio">
                        <h3>Pase por día</h3>
                        <p class="numero">$30</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las conferencias</li>
                            <li>Todos los talleres</li>
                        </ul>
                        <a href="#" class="button hallow">COMPRAR</a>
                    </div>
                </li>

                <li>
                    <div class="tabla-precio">
                        <h3>Todos Los Dias</h3>
                        <p class="numero">$50</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las conferencias</li>
                            <li>Todos los talleres</li>
                        </ul>
                        <a href="#" class="button ">COMPRAR</a>
                    </div>
                </li>

                <li>
                    <div class="tabla-precio">
                        <h3>Pase por 2 día</h3>
                        <p class="numero">$45</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las conferencias</li>
                            <li>Todos los talleres</li>
                        </ul>
                        <a href="#" class="button hallow">COMPRAR</a>
                    </div>
                </li>


            </ul>
        </div>
    </section>

    <div class="mapa" id="mapa"></div>

    <section class="seccion">
        <h2>Testimoniales</h2>
        <div class="testimoniales contenedor clearfix">
            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus laudantium ipsum tempore omnis culpa excepturi
                    </p>
                    <footer class="info-testimonial clearfix">
                        <img src="../img/testimonial.jpg" alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
            <!--Testimonial-->

            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus laudantium ipsum tempore omnis culpa excepturi
                    </p>
                    <footer class="info-testimonial clearfix">
                        <img src="../img/testimonial.jpg" alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
            <!--Testimonial-->
            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus laudantium ipsum tempore omnis culpa excepturi
                    </p>
                    <footer class="info-testimonial clearfix">
                        <img src="../img/testimonial.jpg" alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
            <!--Testimonial-->
        </div>
    </section>


    <div class="newletter parallax">
        <div class="contenido contenedor">
            <p>Registrate al newletter:</p>
            <h3>gdlwebcamp</h3>
            <a href="#" class="button transparente">Registro</a>
        </div>
    </div>

    <section class="seccion">
        <h2>Falta</h2>
        <div class="cuenta-regresiva contenedor">
            <ul class="clearfix">
                <li>
                    <p id="dias" class="numero"></p>Días</li>
                <li>
                    <p id="horas" class="numero"></p>horas</li>
                <li>
                    <p id="minutos" class="numero"></p>minutos</li>
                <li>
                    <p id="segundos" class="numero"></p>segundos</li>
            </ul>
        </div>
    </section>

    <?php include_once 'includes/templates/footer.php'; ?>