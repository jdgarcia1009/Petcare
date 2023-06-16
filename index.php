<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetCare</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/estilosindex.css">
</head>
<body>
<header class="header">
    <a href="#" class="logo"> <img src="img/logo solo.png" class="logito"> Petcare</a>
    <nav class="navbar">
        <a href="#home">inicio</a>
        <a href="#about">sobre nosotros</a>
        <a href="#gallery">galeria</a>
        <a href="#animal">animales</a>
        <a href="#pricing">catalogo</a>
        <a href="#contact">contacto</a>
    </nav>
    <div class="icons">
        <div id="login-btn" class="fas fa-user"></div>
        <div id="menu-btn" class="fas fa-bars"></div>
    </div>
<form action="post" class="login-form">
    <h3>Logeate</h3>
    <a href="login.php" class="btn">login</a>
</form>
</header>
<section class="home" id="home">
    <div class="content">
        <h3>La mejor veterinaria de toda <br> colombia</h3>
        <br>
        <br>
        <a href="#" class="btn">descubrenos</a>
    </div>
</section>
<section class="about" id="about">
    <h2 class="deco-title">Sobre nosotros</h2>
    <div class="box-container">
        <div class="image">
            <img src="img/about.png" alt="">
        </div>
        <div class="content">
            <h3 class="title">Cuidados y Educación para su mascota</h3>
            <p>Una mascota se convierte en un integrante más de la familia, pero es muy importante educarlo para evitar dolores de cabeza y cuidarlo para prolongar su existencia. A la hora de adoptar o comprar un perro, necesitará pensar en el compromiso que implica esa decisión. No solo tendrá que alimentarlo, requiere atención, tiempo y educación. Ello supone una gran responsabilidad. Con esta sección buscamos apoyar y dar consejos sobre educación y cuidado de perros.</p>    
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Nosotros educamos</h3>
                </div>
                <div class="icons">
                    <i class="fas fa-bullhorn"></i>
                    <h3>Nosotros divertimos</h3>
                </div>
                <div class="icons">
                    <i class="fas fa-book-open"></i>
                    <h3>Nosotros curamos</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="gallery" id="gallery">
    <h2 class="heading">galeria</h2>
    <div class="swiper gallery-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide">
                <div class="image">
                    <img src="img/gallery-1.jpg" alt="">
                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="image">
                    <img src="img/gallery-2.jpg" alt="">
                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="image">
                    <img src="img/gallery-3.jpg" alt="">
                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="image">
                    <img src="img/gallery-4.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<section class="animal" id="animal">
    <h2 class="heading">animales</h2>
    <div class="box-container">
        <div class="box">
            <img src="images/animal_1.jpg" alt="">
            <div class="content">
                <h3>cameleon</h3>
                <a href="#" class="btn">see datails</a>
            </div>
        </div>
        <div class="box">
            <img src="img/animals_2.jpg" alt="">
            <div class="content">
                <h3>zebra</h3>
                <a href="#" class="btn">see datails</a>
            </div>
        </div>
        <div class="box">
            <img src="img/animals_3.jpg" alt="">
            <div class="content">
                <h3>giraffe</h3>
                <a href="#" class="btn">see datails</a>
            </div>
        </div>
        <div class="box">
            <img src="img/animals_4.jpg" alt="">
            <div class="content">
                <h3>monkey</h3>
                <a href="#" class="btn">see datails</a>
            </div>
        </div>
    </div>
</section>
<section class="banner">
    <div class="row">      
        <div class="content">
            <h3>Salir de viaje con su mascota</h3>
            <p>Viajar juntos puede resultar muy divertido y una gran experiencia siempre que estemos correctamente preparados. Es importante tener en cuenta las condiciones de clima y del entorno a dónde se desplaza. Además se debe evitar el riesgo que supone el movimiento incontrolado de la mascota dentro del automóvil. Por eso ten en cuenta los siguientes consejos</p> 
        </div>
        <div class="image">
            <img src="img/banner_1.png" alt="">
        </div>    
    </div>
</section>
<section class="pricing" id="pricing">
    <h2 class="heading">Catalogo</h2>
    <div class="box-container">
        <div class="box">
            <img src="img/pricing1.png" alt="">
            <h3>individuals</h3>
            <h4 class="price">$ 10</h4>
            <p>the entrance is from 8:00 to 14:00</p>
        </div>
        <div class="box">
            <img src="img/pricing2.png" alt="">
            <h3>school</h3>
            <h4 class="price">$ 20</h4>
            <p>the entrance is from 8:00 to 14:00</p>
        </div>
        <div class="box">
            <img src="img/pricing1.png" alt="">
            <h3>family</h3>
            <h4 class="price">$ 30</h4>
            <p>the entrance is from 8:00 to 14:00</p>
        </div>
    </div>
</section>
<section class="contact" id="contact">
    <h2 class="heading">contacto</h2>
    <form method="post">
        <div class="inputBox">
            <input type="text" placeholder="nombre" class="nombreform" required="">
            <input type="email" placeholder="correo" class="emailform" required="">
        </div>
        <div class="inputBox">
            <input type="number" placeholder="numero" class="numero" required="">
            <input type="text" placeholder="tema" class="tema" required="">
        </div>
        <textarea name="" id="" cols="30" rows="10" placeholder="mensaje" class="mensaje" required=""></textarea>
        <input type="submit" name="enviar" class="btn">
    </form>
</section>
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3><i class="fas fa-paw"></i> petcare</h3>
            <p>nuestro horario de atención es</p>
            <p class="links"><i class="fas fa-clock"></i>lunes - sabado</p>
            <p class="days">9:00AM - 9:00PM</p>
        </div>
        <div class="box">
            <h3>Informacion</h3>
            <a href="#" class="links"><i class="fas fa-phone"></i> 312-346-5038</a>
            <a href="#" class="links"><i class="fas fa-phone"></i> 300-721-0853</a>
            <a href="#" class="links"><i class="fas fa-envelope"></i> alekitorojasdiaz@gmail.com</a>
            <a href="#" class="links"><i class="fas fa-map-marker-alt"></i> ibague, tolima</a>
        </div>
        <div class="box">
            <h3>links</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i>inicio</a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i>sobre nosotros</a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i>galeria</a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i>animales</a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i>catalogo</a>
        </div>
        <div class="box">
            <h3>recibe informacion</h3>
            <p>suscribete para recibir las ultimas actualizaciones</p>
            <input type="email" placeholder="Tu Correo" class="email">
            <a href="#" class="btn">suscribete</a>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
    </div>

    <div class="credit">&copy; 2023 petcare. Todos los derechos reservados por <a href="#" class="link">algarla</a></div>

</section>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>