<e?php
include('connection.php');

$con =connection();

$sql="SELECT * FROM users";

$query =mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio Tatiana</title>
    <link rel="icon" href="https://i.ibb.co/zRsTj3p/Frame-1-37.png">
    <link rel="stylesheet" href="stylephp.css">
    <link rel="stylesheet" href="styles.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" class="stylesheet">
</head> 

<body>

    <!-------------------------- Header Area -------------------------->
    <header class="header-area">
        <div class="container">
            <div class="header">
               
                <a href="" class="logo">
                    <img src="daniela.png" height="400" alt="0" class="signature" >
                    <i class="fa fa-bolt"></i>
                </a>
                   
                <ul class="navbar">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">Acerca de mi</a></li>
                    <li><a href="#education">Educacion</a></li>
                    <li><a href="#projects">Habilidades</a></li>
                    <li><a href="#contact">Contacto</a></li>
                </ul>
                
                <div class="menu_icon">
                    <i class="fa fa-bars"></i>
                </div>

            </div>
        </div> 
    </header>
 
    <!-------------------------- Home Page -------------------------->
    <div class="FirstElement" id="home">
        <div class="profile-photo">
            <img src="IMG_20221023_170142.jpg" alt="profile picture" height="259" width="350">
        </div>
        <div class="profile-text">
            <h5>Hola soy </h5><br>
            <h1>Tatiana Apaza </h1><br>
            <p>¡Bienvenido al sitio web de mi portafolio! Soy un ingeniero de software apasionado y aspirante con un fuerte deseo de crear soluciones innovadoras y superar los límites de la tecnología. Con un profundo amor por la codificación y la resolución de problemas, busco constantemente oportunidades para aprender y crecer en este campo en constante evolución.</p>
            
            <div class="btn-group">
                <a href="SowndharResume.pdf" class="btn   active">Descargar CV</a>
                <a href="mailto:daniela10ticona@gmail.com" class="btn">Contacto</a>
            </div>

            <div class="social">
                <a href="mailto:sowndharnewbie@gmail.com"><i class="fa fa-envelope"></i></a>
                <a href="https://github.com/sowndharnewbie"><i class="fa-brands fa-github"></i></a>
                <a href="https://leetcode.com/sowndharnewbie/"><i class="fa fa-code"></i></a>
                <a href="https://www.linkedin.com/in/sowndhar/"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
    </div>

        <!-------------------------- About Section -------------------------->
    <section class="about-area" id="about">
        <div class="container">
            <div class="about">
                
                <div class="about-content">
                    <h4>Acerca de mi</h4>
                    <ul>
                      <li>I am currently pursuing my final year Bachelor's Degree in Electronics and Communication Engineering.I have built a solid foundation in software development, particularly in areas such as Java, SQL, Git, and GitHub.</li>
                      <li> My expertise in these areas allows me to approach projects with confidence and deliver high-quality results.I have a strong belief in the value of continuous learning and staying adaptable in the ever-evolving world of software engineering.</li>
                      <li> I actively seek out opportunities to expand my knowledge and skills, embracing new technologies and approaches.Feel free to explore my work and get in touch if you have any questions or opportunities to collaborate. </li>
                    </ul>
                </div>
                                  
                <div class="about-skills">
                    <ul>
                        <li>Nombre: Tatisns apaza</li>
                        <li>Edad:20</li>     
                        <li>Pais: Peru</li>
                        <li>Email:daniela10ticona@gmail.com</li>
                        <li>Availabiltiy: Fulltime</li>
                        <li>Experiencia : No hay jaja</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


        <!-------------- Education & Internship -------------->
    <section class="education-content" id="education">
        <div class="container">
            <div class="row">
                <div class="education ">
                    <h3 class="title">Educacion</h3>
                    <div class="row">
                        <div class="timeline-box">
                            <div class="timeline">

                                <!-- Timeline-item -->
                                <div class="timeline-item">
                                    <div class="circle-dot"></div>
                                    <h3 class="timeline-title">
                                        Cursanado la carrera Ingineria de Sistemas-51%
                                    </h3>
                                    <h4 class="timeline-title">Universidad Nacional de Moquegua</h4>
                                    <h4 class="timeline-title">
                                        <i class="fa fa-calendar"></i> 2020-2024
                                    </h4>
                                </div> 
                                <!-- Timeline-item -->
                                <div class="timeline-item">
                                    <div class="circle-dot"></div>
                                    <h3 class="timeline-title"> Secundaria -100%</h3>
                                    <h4 class="timeline-title">I.E. Daniel Becerra Ocampo</h4>
                                    <h4 class="timeline-title">
                                        <i class="fa fa-calendar"></i> 2015-2020
                                    </h4>
                                </div>
                                <!-- Timeline-item -->
                                <div class="timeline-item">
                                    <div class="circle-dot"></div>
                                    <h3 class="timeline-title">
                                        Ingles y Ofimatica-50%
                                    </h3>
                                    <h4 class="timeline-title"> Certificado en Ingles y Ofimatica Basica</h4>
                                    <h4 class="timeline-title">
                                        <i class="fa fa-calendar"></i> 2017-2018
                                    </h4>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="internship">
                    <h3 class="title">Internship</h3>
                    <div class="row">
                        <div class="timeline-box">
                            <div class="timeline">
                                
                                <!-- Timeline-item -->
                                <div class="timeline-item">
                                    <div class="circle-dot"></div>
                                    <h3 class="timeline-title">
                                        ANDROID APPLICATION DEVELOPMENT
                                    </h3>
                                    <h4 class="timeline-title">FLARIAL TECHNOLOGY</h4>
                                    <h4 class="timeline-title">
                                        <i class="fa fa-calendar"></i> JUNE-2022
                                    </h4>
                                    <li class="timeline-text">Proficient in Android app development, with expertise in Java and building basic applications. Experienced in creating intuitive design and layout files. Completed a two-week internship, gaining practical skills and knowledge in the field.
                                    </li>
                                </div> 
                                <!-- Timeline-item -->
                                <div class="timeline-item">
                                    <div class="circle-dot"></div>
                                    <h3 class="timeline-title">PCB LAYOUT DESIGN AND FABRICATION</h3>
                                    <h4 class="timeline-title">PIONEER CIRCUITS</h4>
                                    <h4 class="timeline-title">
                                        <i class="fa fa-calendar"></i> DEC-2021
                                    </h4>
                                    <li class="timeline-text">Experienced in PCB design and fabrication with a focus on Altium Designer software. Proficient in designing high-quality PCB boards. Two-week internship in the field, gaining hands-on experience and enhancing skills.</li>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


        <!-------------------------- Projects -------------------------->
    <section class="project-content" id="projects">
        <div class="container">
            <div class="project-title">
                <h4>Mis Proyectos</h4>
                <p>Discover my projects, where creativity meets innovation</p>
            </div>
            <div class="projects">
                <!-- 1st Project -->
                <div class="project">
                    <i class="fa fa-coffee"></i>
                    <h4>SnakeGame Using Java</h4>
                    <p>This is a simple implementation of the classic Snake game using Java and Swing.</p>
                </div>
                 <!-- 2nd Project -->
                 <div class="project">
                    <i class="fa fa-car"></i>
                    <h4>Nightguard</h4>
                    <p>An innovative embedded system solution for safer driving, combining matrix LED technology to reduce headlight glare and vibration sensors to detect potholes, enhancing road safety and minimizing accidents</p>
                </div>
                <!-- 3rd Project -->
                <div class="project">
                    <i class="fa fa-desktop"></i>
                    <h4>Portafolio Web</h4>
                    <p>Created a portfolio website using HTML, CSS, and JavaScript, It serves as a platform to introduce myself, share my projects, and provide information about my  education and internship.</p>
                </div>
                
            </div>
        </div>
    </section>

        <!-------------------------- Contact Me -------------------------->

    <section class="contact-content" id="contact">

        <div class="container">
            <div class="contact-title">
                <h4>Contacto</h4>
                <p>Rellene el formulario</p>
                <div class="users-form">
                    <form action="insert_user.php" method="POST">
                        <h1 > REGISTRA TUS DATOS</h1>
            
                        <input type="text" name="name" placeholder="Nombre">
                        <input type="text" name="lastname" placeholder="Apellido">
                        <input type="text" name="direccion" placeholder="Direccion">
                        <input type="text" name="celular" placeholder="Celular">
                        <input type="text" name="email" placeholder="Email">
            
                        <input type="submit" value="Enviar">

                        
                    </form>
                </div>
                <div>
                <form action="tabla.php" method="post">
                          <input type="submit" value="Ver registro">
                        </form>
                        
                </div>
            
                <div class="users-table">
                    <h2> Usuarios Registrados </h2>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Direccion</th>
                                <th>Celular</th>
                                <th>Email</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row=mysqli_fetch_array($query)): ?>
                            <tr>
                                <th> <?= $row['id'] ?> </th>
                                <th> <?= $row['name'] ?> </th>
                                <th> <?= $row['lastname'] ?> </th>
                                <th> <?= $row['direccion'] ?> </th>
                                <th> <?= $row['celular'] ?> </th>
                                <th> <?= $row['email'] ?> </th>
            
                                <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit" >Editar</a></th>
                                <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="users-table--delete"> Eliminar</a></th>
                            </tr>
                            <?php endwhile; ?>
            
                        </tbody>
                    </table>
                </div>
                
            </div>

    </section>
     
    <!-------------------------- JS -------------------------->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="script.js"></script>
    <script src="script2.js"></script>
    
    <!-------------------------- Footer section -------------------------->
   <footer class="footer">
    <small class="message">Gracias por visitar mi Portafolio</small>
    <small class="copyright">&copy; Copyright 2023. All rights reserved.</small>
   </footer>

</body>
</html>