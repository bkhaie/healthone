<!DOCTYPE html>
    <html>
    <?php
    include_once('defaults/head.php');
    ?>
    <body>
        <div class="container">
            <?php
            include_once ('defaults/header.php');
            include_once ('defaults/menu.php');
            include_once ('defaults/pictures.php');
            ?>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item"><a href="/contact">Contact</a></li>
                </ol>
            </nav>
            <h1 class="text-center">| Over <span class="text-primary">Ons</span> |</h1>
        <br>
         
<center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium itaque atque dignissimos necessitatibus sunt autem iste suscipit eligendi iusto labore! Quaerat voluptates velit ullam eveniet, a explicabo error deleniti enim.</p> 
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium itaque atque dignissimos necessitatibus sunt autem iste suscipit eligendi iusto labore! Quaerat voluptates velit ullam eveniet, a explicabo error deleniti enim.</p>
</center>
            <div class="row">
                <div class="col-md-10 rounded mx-auto d-block">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="prev"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="next"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="/img/carousel1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/img/carousel2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/img/carousel3.jpg" alt="Third slide">
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
                </div>
            </div>

            <br>
            <center>
          

            <br>

            
           
            <span>Hieronder vind u de openingstijden van onze sportschool
                    </span>
            <div class="row">
                <div class="col-md-12 rounded mx-auto d-block">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4908.209030621044!2d4.256548110628114!3d52.04140936694351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4b8945005086f903!2sMondriaan%20Tinwerf!5e0!3m2!1snl!2snl!4v1647550604313!5m2!1snl!2snl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                    <br>
                    <h6 class="text-center">Wij zijn gevestigd op Tinwerf 10, 2544 ED Den Haag  </h6>
                    <br>
                </div>
            </div>  <div class="row">
                <div class="col-md-10 mx-auto d-block">

            

                    <?php
                        try {
                            $db = new PDO("mysql:host=localhost;dbname=healthone","root", "");
                            $query = $db->prepare ("SELECT * FROM openingstijden");
                            $query->execute();
                            $result = $query->fetchAll(PDO::FETCH_ASSOC);
                            echo "<table>";
                            foreach ($result as &$data) {
                                echo "<td>" . $data ["day"] . " ";
                                echo "<td>" . $data ["time"] . "<br>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        } catch(PDOException $e) {
                            die("Error!: " . $e->getMessage());
                        }
                    ?>                    
                </div>
            </div>
            </center>

            <br><hr><br>

            <?php
            include_once ('defaults/footer.php');
            ?>
        </div>
    </body>
</html>