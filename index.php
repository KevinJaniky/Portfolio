<?php
require_once 'autoload.php';
$display = new Display('test', 'bouah');
?>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="#">Kevin JANIKY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">A propos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="media/image/item1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="media/image/item2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="media/image/item3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container">
        <article>
            <h1>A propos</h1>
            <div class="about">
                <p>
                    Je suis Kévin et j’ai 21 ans. J’habite en région parisienne. Auto entrepreneur depuis une petite
                    période
                    maintenant. Je me focalise beaucoup sur la création d’une identité sur internet. Je suis dans le
                    même
                    temps,
                    salarié dans une entreprise spécialisé dans le web. J’occupe le poste de développeur Full Stack et
                    dans
                    un
                    même temps, je me forme aux techniques du webmarketing, de l’e-commerce ou encore du référencement
                    Web
                    sous
                    toutes ses formes. En équipe ou seul , j’ai mené de nombreux projets backend ou front-end. </p>
                <div class="image_container">
                    <img src="media/image/profil.jpg">
                </div>
            </div>
        </article>
        <article>
            <h1>Blog</h1>
            <div class="blog">
                <?php
                for ($i = 0; $i < 8; $i++) {
                    $color = ['#96CA2D','#B5E655','#EDF7F2','#4BB5C1','#7FC6BC','#B9121B','#4C1B1B','#F6E497','#FCFAE1']
                    ?>
                    <div class="item" style="background: url(media/image/item1.jpg)">
                        <h3>Titre</h3>
                        <div class="right_effect"></div>

                    </div>
                    <?php
                }
                ?>
            </div>
        </article>
    </div>


    </body>
<?php
$display->footer();