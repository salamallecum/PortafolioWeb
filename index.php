<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
        <!--===== ESTILOS Y FUENTES =====-->
        <link rel="stylesheet" href="assets/css/styles.css"> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
            
        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>
      
        <!--===== SCRIPTS JS =====-->
        <script src="assets/js/main.js" type="module"></script>
        <script src="assets/js/jquery-3.6.0.js"></script>
        <script src="assets/js/misProyectos.js"></script>
        <!--IMPLEMENTACION CAPTCHA-->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        
        
        <link rel="shortcut icon" href="assets/img/icono.png">
        <title>Mi Portafolio web - Luis Alejandro Amaya Torres</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="encabezadoIzq">
            <nav class="navegacion bd-grid">
                <div class="wrapper">
                    <div class="typing-demo">
                        Portafolio Web
                    </div>
                </div>                  
                
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">Perfil Profesional</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Conocimientos</a></li>
                        <li class="nav__item"><a href="#experience" class="nav__link">Exp. Laboral</a></li>
                        <li class="nav__item"><a href="#work" class="nav__link">Mis proyectos</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contacto</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__titulo">Hola, me llamo<br><span class="home__titulo-color">Luis Alejandro Amaya</span></h1> 
                    <a href="./assets/cv/HOJA DE VIDA.pdf" class="boton" target="_blank" title="Ver Hoja de vida">Ver HV</a>        
                </div>

                <div class="home__social">
                    <a href="https://www.linkedin.com/in/luis-alejandro-amaya-torres-937237115/" title="Mi LinkedIn" class="home__social-icon" target="_blank"><i class='bx bxl-linkedin'></i></a>
                </div>

                <div class="home__img">    
                    <img id="fotoPrincipal" src="assets/img/about.jpg" alt="">
                </div>
            </section>

            <!--===== PERFIL PROFESIONAL =====-->
            <section class="about seccion " id="about">
                <h2 class="seccion-titulo">Perfil profesional</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/about 2.png" alt="">
                    </div>
                    
                    <div>
                        <p class="about__text">Soy un Ingeniero de sistemas apasionado por la tecnología, enfocado en el aprendizaje de nuevas herramientas y lenguajes, me gusta desarrollar proyectos que representan la solución a un problema para los que me rodean y un reto para mi crecimiento profesional y personal.</p>           
                    </div>                                   
                </div>
            </section>

            <!--===== CONOCIMIENTOS =====-->
            <section class="skills seccion" id="skills">
                <h2 class="seccion-titulo">Conocimientos</h2>
                <br>
                <div class="skills__container bd-grid">          
                    <div>
                        <p class="skills__text">Haz click en cada una de las categorías.</p>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne">
                                        <img src="assets/img/know/web.png" alt="">    
                                        <strong>&nbspDesarrollo Web</strong>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                            <div class="skills__names">
                                                <img src="assets/img/know/spring.png" alt="">
                                                <span class="skills__name">&nbspSpringBoot</span>
                                            </div>
                                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 75%">75%</div>
                                            </div>
                                            <br>
                                            <div class="skills__names">
                                                <img src="assets/img/know/angular.png" alt="">
                                                <span class="skills__name">&nbspAngular</span>
                                            </div>
                                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 60%">60%</div>
                                            </div>
                                            <br>
                                            <div class="skills__names">
                                                <img src="assets/img/know/PHP.png" alt="">
                                                <span class="skills__name">&nbspPhp</span>
                                            </div>
                                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 65%">65%</div>
                                            </div>
                                            <br>
                                            <div class="skills__names">
                                                <img src="assets/img/know/html.png" alt="">
                                                <img src="assets/img/know/css.png" alt="">
                                                <img src="assets/img/know/JS.png" alt="">
                                                <span class="skills__name">&nbspHTML/CSS/JavaScript</span>
                                            </div>
                                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 90%">90%</div>
                                            </div>

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <img src="assets/img/know/db.png" alt="">
                                        <strong>&nbspAdministración de Bases de datos</strong>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="skills__names">         
                                            <img src="assets/img/know/oracle.png" alt="">
                                            <span class="skills__name">&nbspOracle DB - PLSQL</span>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70">
                                            <div class="progress-bar" style="width: 70%">70%</div>
                                        </div>
                                        <br>
                                        <div class="skills__names">         
                                            <img src="assets/img/know/mysql.png" alt="">
                                            <span class="skills__name">&nbspMySQL</span>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="65" aria-valuemin="0" aria-valuemax="65">
                                            <div class="progress-bar" style="width: 65%">65%</div>
                                        </div>
                                        <br>
                                        <div class="skills__names">         
                                            <img src="assets/img/know/sql.png" alt="">
                                            <span class="skills__name">&nbspSQL Server</span>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70">
                                            <div class="progress-bar" style="width: 70%">70%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <img src="assets/img/know/cel.png" alt="">
                                        <strong>&nbspDesarrollo Movil</strong>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="skills__names">         
                                            <img src="assets/img/know/Android.png" alt="">
                                            <span class="skills__name">&nbspAndroid - Java</span>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="20" aria-valuemin="0" aria-valuemax="20">
                                            <div class="progress-bar" style="width: 20%">20%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                        <img src="assets/img/know/desk.png" alt="">
                                        <strong>&nbspDesarrollo de Escritorio</strong>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="skills__names">         
                                            <img src="assets/img/know/Java.png" alt="">
                                            <span class="skills__name">&nbspJava</span>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar" style="width: 90%">90%</div>
                                        </div>
                                        <br>
                                        <div class="skills__names">
                                            <img src="assets/img/know/Python.png" alt="">
                                            <span class="skills__name">&nbspPython</span>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar" style="width: 65%">65%</div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div>              
                        <img src="assets/img/work6.jpg" alt="" class="skills__img">
                    </div>
                </div>
            </section>

            <!--===== EXPERIENCIA LABORAL =====-->
            <section class="experience seccion" id="experience">
                <h2 class="seccion-titulo">Experiencia laboral</h2>
                <br>
                <div class="experience bd-grid">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>Aprendiz Pasante</strong></h5>
                                        <h6 class="card-subtitle mb-2 text-body-secondary"><i>Cobiscorp Colombia S.A</i></h6>
                                        <p class="card-text" style="font-size: 14px;">Apoyé en las labores al equipo de ingeniería, sobretodo en la implementación de pruebas al software de la compañía mediante los framework JUnit, Mockito y PowerMockito de Java.</p>
                                    </div>
                                </div>    
                            </div>
                            <div class="col">
                                <div class="card" style="width: 18rem;"> 
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>Ing. Desarrollo Continuidad</strong></h5>
                                        <h6 class="card-subtitle mb-2 text-body-secondary"><i>Carvajal Tecnología y Servicios S.A</i></h6>
                                        <p class="card-text" style="font-size: 13px;">Brindé atención a la mesa de servicio, haciendo seguimiento, depuración y corrección de funcionalidades a los servicios del software de la compañía con su documentación correspondiente.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 18rem;">     
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>Ing. Desarrollo TyD</strong></h5>
                                        <h6 class="card-subtitle mb-2 text-body-secondary"><i>Softland Colombia S.A.S</i></h6>
                                        <p class="card-text" style="font-size: 13px;">Brindé atención a la mesa de servicio, haciendo seguimiento a las bases de datos, construyendo nuevas funcionalidades al software HCM y ERP de la compañía y apoyo en la construcción de funcionalidades para el software durante su migración a nuevas tecnologías.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                 
            <!--===== MIS PROYECTOS =====-->
            <section class="work seccion" id="work">
                <h2 class="seccion-titulo">Mis proyectos</h2>
                <div class="experience bd-grid">
                    <br>
                    <p class="work__text">Haz click en cada recuadro para mayor información.</p>
                    <br>
                    <div class="project-wrapper">
                        <section class="project-list">   
                            <button class="btn_detallesDeProyecto" category="java" data-bs-toggle="modal" data-bs-target="#detallesProyecto" data-imagen= "assets/img/misProyectosImg/modalSistParking.PNG" data-nombre="More Parking" 
                                data-descripcion="Aplicación de escritorio cuyo objetivo es apoyar el desarrollo de las tareas básicas que se realizan en un parqueadero de vehículos, tales como el ingreso y salida de vehículos de forma manual y mediante codigo QR, operación de caja registradora, revisión de facturas, cierres y arqueos de caja, seguimiento a los espacios de parqueo en tiempo real, parametrización y aplicación de convenios y tarifas así como el registro de vehículos en el sistema; Desarrollada para la empresa MORE SECURITY & TELEMETRY SAS." 
                                data-tecnologia="Java y MySQL" title="Ver detalles del proyecto">
                                    <img class="imagenDeProyecto" src="assets/img/misProyectosImg/logoSistParking.PNG" alt="">
                                    <p>More Parking</p>
                            </button>  

                            <button class="btn_detallesDeProyecto" category="php" data-bs-toggle="modal" data-bs-target="#detallesProyecto" data-imagen= "assets/img/misProyectosImg/modalPandora.PNG" data-nombre="Pandora" 
                                data-descripcion="Aplicación web dirigida al programa de Ingeniería de Sistemas de la Universidad El Bosque, en donde la comunidad educativa (Estudiantes, Profesores, Comité de currículo y Coordinación de Prácticas profesionales) dispone de un espacio para la certificación de las competencias profesionales definidas para el programa académico mediante insignias, teniendo en cuenta como criterio de evaluación el nivel de competencia alcanzado (sea Alto, Medio o Bajo) por el estudiante en los trabajos académicos que son aplicados en los Desafíos, Eventos y Convocatorias Externas propuestos por los Profesores y/o Comité de currículo, de manera que estos trabajos certificados formen parte de su e-portafolio de presentación y así lograr certificar experiencia profesional ante posibles empleadores." 
                                data-tecnologia="HTML, JavaScript, Php, Bootstrap, Ajax, Jquery y MySQL" title="Ver detalles del proyecto">
                                    <img class="imagenDeProyecto" src="assets/img/misProyectosImg/logoPandora.PNG" alt="">
                                    <p>Pandora</p>
                            </button>
                        </section>
                    </div> 
                </div>               
                
                <!--Modal de detalles de un proyecto-->
                <div class="modal fade" id="detallesProyecto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <input type="text" class="detalleNombreProyecto" id="nombreDeProyectoModal" disabled>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img id="imagenDeProyectoModal">
                            <br>
                            <textarea type="text" id="descripcionDeProyectoModal" class="textAreaDetalleDescripcionProyecto" disabled></textarea>  
                            <br>
                            <table>
                                <tr>
                                    <td>
                                        <p id="tecnologiasUtilizadas">Tecnologías utilizadas: </p>
                                    </td>
                                    <td>
                                        <input type="text" id="tecnoUtilizadasModal" disabled>
                                    </td>
                                </tr>
                            </table>                           
                        </div>
                        <div class="modal-footer"></div>
                      </div>
                    </div>
                  </div>                 
            </section>  
            
            <!--===== CONTACTAME =====-->
            <section class="contact seccion" id="contact">
                <h2 class="seccion-titulo">Contacto</h2>
                <div class="contact__container bd-grid">
                    <form method="POST" class="contact__form">
                        <p class="invitacionEnvInfo">Envíame tus comentarios.</p>
                        <input type="text" id="txt_nombreSolicitante" name="name" placeholder="Nombre completo" title="El nombre sólo acepta letras y espacios en blanco" class="form-control" pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$" required maxlength="30">
                        <input type="email" id="txt_correo" name="email" placeholder="Email" title="Email incorrecto" class="form-control" pattern="^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$" required maxlength="50">
                        <input type="text" id="txt_telefono" name="cel" placeholder="Teléfono" title="Teléfono no válido" class="form-control" pattern="^[0-9]{7,10}$" required maxlength="10">
                        <input type="text" id="txt_asunto" name="subject" placeholder="Asunto" title="El asunto es requerido" class="form-control" required maxlength="20">
                        <textarea name="comments" id="txt_mensaje" cols="50" placeholder="Escribe tus comentarios" rows="5" title="Tu comentario no debe exceder los 255 caracteres" class="form-control" data-pattern="^.{1,255}$" required maxlength="255"></textarea>
                        
                        <!--captcha no soy un robot-->
                        <div class="g-recaptcha" data-sitekey="6LebIJwnAAAAADdHjex-5M1AMJogCgAGU1TJ_rQA"></div>
                        <?php include("logic/capturaDeDatos.php") ?>
                        <input type="submit" id="btn_enviarDatos" name="envioInfoContacto" class="btn_enviarInfoContacto" title="Enviar" class="contact__button button"></input>
                    </form>
                </div>
            </section>
            <a href="https://api.whatsapp.com/send?phone=573147427981" class="btn-wsp" target="_blank" title="Mi WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
        </main>

        <!--===== PIE DE PAGINA =====-->
        <footer class="footer">
            <p class="footer__title">Luis Alejandro Amaya Torres</p>
            <div class="footer__social">
                <a href="https://es-la.facebook.com/alejo.amayatorres" target="_blank" class="footer__icon"><i class='bx bxl-facebook' title="Mi Facebook"></i></a>
                <a href="https://www.instagram.com/alejoamayatorres/" target="_blank" class="footer__icon"><i class='bx bxl-instagram' title="Mi Instagram"></i></a>
            </div>
            <p>Tel: +57 - 3147427981</p>
            <p>2025 - Todos los derechos reservados.</p>
        </footer>
    </body>

    <!--Script para la administración de mis proyectos personales-->
    <script type='text/javascript'>

        //Aqui se pasan los datos para el evento de los botones de detalles de los proyectos
        $(document).ready(function(){
            
            $('.btn_detallesDeProyecto').click(function(){
                
                var imagenDelProyecto = $(this).data('imagen');
                var tituloDelProyecto = $(this).data('nombre');
                var detallesDelProyecto = $(this).data('descripcion');
                var tecnologias = $(this).data('tecnologia');
                var repositorio = $(this).data('repositorio');
                var urlDelProyecto = $(this).data('video');
                
                var tituloDeModalProyectos = document.getElementById('nombreDeProyectoModal');
                var descripcionModalProyectos = document.getElementById('descripcionDeProyectoModal');
                var tecnologiasUtilizadas = document.getElementById('tecnoUtilizadasModal');

                tituloDeModalProyectos.value = tituloDelProyecto;
                descripcionModalProyectos.value = detallesDelProyecto;
                tecnologiasUtilizadas.value = tecnologias;

                $("#imagenDeProyectoModal").attr("src", imagenDelProyecto);
                $("#btn_verRepositorio").attr("href", repositorio);
                $("#btn_visualizarVideo").attr("href", urlDelProyecto);                
 
            });
        });
    </script>

</html>