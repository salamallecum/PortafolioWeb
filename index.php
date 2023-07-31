<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
        <!--===== ESTILOS Y FUENTES =====-->
        <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
        <link rel="stylesheet" href="assets/css/styles.css"> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
        
        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>
        
        <!--===== SCRIPTS JS =====-->
        <script src="assets/js/main.js" type="module"></script>
        <script src="assets/js/jquery-3.6.0.js"></script>
        <script src="assets/js/misProyectos.js"></script>
        
        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="shortcut icon" href="assets/img/icono.png">
        <title>LUIS ALEJANDRO AMAYA TORRES</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="encabezadoIzq">
            <nav class="navegacion bd-grid">
                <div class="wrapper">
                    <div class="typing-demo">
                        Luis Alejandro Amaya
                    </div>
                </div>                  
                
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">Perfil Profesional</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Conocimientos</a></li>
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
                    <h1 class="home__titulo">Hola, me llamo<br><span class="home__titulo-color">Luis Alejandro Amaya</span><br>Desarrollador Junior</h1>

                    <a href="./assets/cv/HOJA DE VIDA.pdf" class="boton" target="_blank" title="Ver CV">Ver CV</a>
                </div>

                <div class="home__social">
                    <a href="https://www.linkedin.com/in/luis-alejandro-amaya-torres-937237115/" class="home__social-icon" target="_blank"><i class='bx bxl-linkedin'></i></a>
                    <a href="https://github.com/salamallecum" class="home__social-icon" target="_blank"><i class='bx bxl-github' ></i></a>
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
                        <img src="assets/img/about 2.jpg" alt="">
                    </div>
                    
                    <div>
                        <p class="about__text">Ingeniero de sistemas apasionado por la tecnología, enfocado en el aprendizaje de nuevas herramientas y lenguajes, me gusta desarrollar proyectos que representen la solución a un problema para los que me rodean y un reto para mi crecimiento personal y profesional.</p>           
                    </div>                                   
                </div>
            </section>

            <!--===== CONOCIMIENTOS =====-->
            <section class="skills seccion" id="skills">
                <h2 class="seccion-titulo">Conocimientos</h2>

                <div class="skills__container bd-grid">          
                    <div>
                        <p class="skills__text">Dominio y conocimientos sólidos en los siguientes lenguajes de programación.</p>
                        <div class="skills__data">
                            <div class="skills__names">
                                <img src="assets/img/know/Java.png" alt="">
                                <span class="skills__name">Java</span>
                            </div>
                            <div class="skills__bar skills__java">

                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <img src="assets/img/know/Python.png" alt="">
                                <span class="skills__name">Python</span>
                            </div>
                            <div class="skills__bar skills__python">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">65%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <img src="assets/img/know/PHP.png" alt="">
                                <span class="skills__name">PHP</span>
                            </div>
                            <div class="skills__bar skills__php">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">70%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <img src="assets/img/know/JS.png" alt="">
                                <span class="skills__name">Javascript</span>
                            </div>
                            <div class="skills__bar skills__javascript">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">50%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <img src="assets/img/know/Android.png" alt="">
                                <span class="skills__name">Desarrollo Android</span>
                            </div>
                            <div class="skills__bar skills__android">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">30%</span>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div>              
                        <img src="assets/img/work6.jpg" alt="" class="skills__img">
                    </div>
                </div>
            </section>

            <!--===== MIS PROYECTOS =====-->
            <section class="work seccion" id="work">
                <h2 class="seccion-titulo">Mis proyectos</h2>

                <div class="project-wrapper">
                    <div class="category_list">
                        <a href="#work" class="category_item" category="all">Todos</a>
                        <a href="#work" class="category_item" category="java">Java</a>
                        <a href="#work" class="category_item" category="python">Python</a>
                        <a href="#work" class="category_item" category="php">PHP</a>
                        <a href="#work" class="category_item" category="android">Android</a>
                    </div>
                    <section class="project-list">
                        
                        <div class="project-item" category="java">
                            <img class="imagenDeProyecto" src="assets/img/misProyectosImg/logoSistParking.PNG" alt="">
                            <p>More Parking</p>
                            <button type="button" class="btn_detallesDeProyecto" data-bs-toggle="modal" data-bs-target="#detallesProyecto" data-imagen= "assets/img/misProyectosImg/modalSistParking.PNG" data-nombre="More Parking" 
                            data-descripcion="Aplicación de escritorio diseñada para apoyar el desarrollo de las tareas básicas que se realizan en un parqueadero de vehículos, tales como el ingreso y salida de vehículos, operación de caja registradora, revisión de facturas, cierres y arqueos de caja, seguimiento a los espacios de parqueo en tiempo real, parametrización y aplicación de convenios y tarifas así como el registro de vehículos en el sistema; Desarrollada para la empresa MORE SECURITY & TELEMETRY SAS." 
                            data-tecnologia="Java y MySQL" data-repositorio="https://acortar.link/ytH97K" data-video="" title="Ver detalles">Detalles</button>
                        </div>
                        
                        <div class="project-item" category="php">
                            <img class="imagenDeProyecto" src="assets/img/misProyectosImg/logoPandora.PNG" alt="">
                            <p>Pandora</p>
                            <button type="button" class="btn_detallesDeProyecto" data-bs-toggle="modal" data-bs-target="#detallesProyecto" data-imagen= "assets/img/misProyectosImg/modalPandora.PNG" data-nombre="Pandora" 
                            data-descripcion="Aplicación web dirigida al programa de Ingeniería de Sistemas de la Universidad El Bosque, en donde la comunidad educativa (Estudiantes, Profesores, Comité de currículo y Coordinación de Prácticas profesionales) dispone de un espacio para la certificación de las competencias profesionales existentes en el programa académico mediante insignias, teniendo en cuenta como criterio de evaluación el nivel de competencia alcanzado por el estudiante en los trabajos académicos que son aplicados en los Desafíos, Eventos y Convocatorias Externas propuestos por los profesores y/o Comité de currículo." 
                            data-tecnologia="HTML, JavaScript, Php, Bootstrap, Ajax, Jquery y MySQL" data-repositorio="https://acortar.link/IZSRTv" data-video="https://acortar.link/V038aD" title="Ver detalles">Detalles</button>
                        </div>

                    </section>
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
                        <div class="modal-footer">
                            <a id="btn_verRepositorio" target="_blank" title="Ver repositorio Github"><img src="assets/img/know/github.png" /></a>
                            <a id="btn_visualizarVideo" target="_blank" class="btn btn-primary" title="Ver video explicativo">🎥 Video explicativo</a>
                        </div>
                      </div>
                    </div>
                  </div>                 

            </section> 
            
            
            <!--===== CONTACTAME =====-->
            <section class="contact seccion" id="contact">
                <h2 class="seccion-titulo">Contacto</h2>
                <div class="contact__container bd-grid">
                    <form action="logic/capturaDeDatos.php" class="contact__form" method="POST">
                        <legend class="leyenda">Envíame tus comentarios</legend>
                        <input type="text" id="txt_nombreSolicitante" name="name" placeholder="Nombre completo" title="El nombre sólo acepta letras y espacios en blanco" class="contact__input" pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$" required maxlength="30">
                        <input type="email" id="txt_correo" name="email" placeholder="Email" title="Email incorrecto" class="contact__input" pattern="^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$" required maxlength="50">
                        <input type="text" id="txt_telefono" name="cel" placeholder="Teléfono" title="Teléfono no válido" class="contact__input" pattern="^[0-9]{7,10}$" required maxlength="10">
                        <input type="text" id="txt_asunto" name="subject" placeholder="Asunto" title="El asunto es requerido" class="contact__input" required maxlength="20">
                        <textarea name="comments" id="txt_mensaje" cols="50" placeholder="Escribe tus comentarios" rows="5" title="Tu comentario no debe exceder los 255 caracteres" class="contact__input" data-pattern="^.{1,255}$" required maxlength="255"></textarea>
                        
                        <input type="submit" id="btn_enviarDatos" name="envioInfoContacto" title="Enviar" class="contact__button button"></input>
                    </form>
                </div>
                <br>
                <?php include("logic/capturaDeDatos.php") ?>

                <a href="https://api.whatsapp.com/send?phone=573147427981" 
                class="btn-wsp" target="_blank">
                    <i class="fa fa-whatsapp icono"></i>
                </a>
            </section>
        </main>

        <!--===== PIE DE PAGINA =====-->
        <footer class="footer">
            <p class="footer__title">Luis Alejandro Amaya</p>
            <div class="footer__social">
                <a href="https://es-la.facebook.com/alejo.amayatorres" target="_blank" class="footer__icon"><i class='bx bxl-facebook' title="Mi Facebook"></i></a>
                <a href="https://www.instagram.com/alejoamayatorres/" target="_blank" class="footer__icon"><i class='bx bxl-instagram' title="Mi Instagram"></i></a>
            </div>
            <p>Tel: +57 - 3147427981</p>
            <p>&#169; 2023 - Todos los derechos reservados.</p>
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


    <!--Script para el manejo de los datos del formulario de contacto-->
    <script type='text/javascript'>
        $(document).ready(function() {
            $('#btn_enviarDatos').click(function() {

                //Capturamos los datos del formulario de contacto
                var nombreSolicitante = document.getElementById('txt_nombreSolicitante').value;
                var correoSolicitante = document.getElementById('txt_correo').value;
                var telefonoSolicitante = document.getElementById('txt_telefono').value;
                var asunto = document.getElementById('txt_asunto').value;
                var mensaje = document.getElementById('txt_mensaje').value;

                if(nombreSolicitante != "" && correoSolicitante != "" && telefonoSolicitante != "" && asunto != "" && mensaje != ""){
                    alert("La información suministrada se envió satisfactoriamente");
                }else{
                    alert("Por favor diligencie todos los campos");
                }
                
            });
        });
    </script>
</html>