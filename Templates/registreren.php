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

            <?php if(!empty($message)): ?>
                <div class="alert alert-danger text-center" role="alert">
                    <?=$message?>
                </div>
            <?php endif;?>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item"><a href="/registreren">Registreren</a></li>
                </ol>
            </nav>
            <h1 class="text-center">| Members <span class="text-primary">Abonnementen</span> |</h1>
        <br>
         

            <div class="row">
                <div class="col-md-10 mx-auto d-block">

                    <p>Wat wij u kunnen geven: <br> 2 abonnementen een jaar- en maandabonnement. <br> Op dit moment is het nog niet mogelijk om via de site een lidmaatschap te kopen.<br>
                        <br>Registratie kosten.
                    </p>

                    <?php
                        try {
                            $db = new PDO("mysql:host=localhost;dbname=healthone","root", "");
                            $query = $db->prepare ("SELECT * FROM abonnementen");
                            $query->execute();
                            $result = $query->fetchAll(PDO::FETCH_ASSOC);
                            echo "<table>";
                            foreach ($result as &$data) {
                                echo "<td>" . $data ["type"] . " ";
                                echo "<td>&euro; " . number_format($data ["prijs"],2,",",".") . "<br>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        } catch(PDOException $e) {
                            die("Error!: " . $e->getMessage());
                        }
                    ?>                    
                </div>
            </div>

            <form method="post">
                
                <div class="mb-6">
                    <label for="Naam" class="form-label">Naam</label>
                    <input type="text" class="form-control" name="first_name" id="Naam">
                </div>
                <br>
                <div class="mb-6">
                    <label for="Achternaam" class="form-label">Achternaam</label>
                    <input type="text" class="form-control" name="last_name" id="Achternaam">
                </div>
                <br>
                <div class="mb-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <br>
                <div class="mb-6">
                    <label for="wachtwoord" class="form-label">Wachtwoord</label>
                    <input type="password" class="form-control" name="wachtwoord" id="wachtwoord">
                </div>    

                <div class="col-md-10 mx-auto d-block">
                <label>Abbonnement:</label>
                <div>
                    <select name="abonnement">
                    <option value="maand-abonnement">maand-abonnement</option>
                    <option value="jaar-abonnement">jaar-abonnement</option>
                </div>
                
                <input type="submit" name="register" value="Opslaan" class="btn btn-primary text-right">
                  </div>   
            </form>

            <br><hr><br>

            <?php
            include_once ('defaults/footer.php');
            ?>
        </div>
    </body>
</html>