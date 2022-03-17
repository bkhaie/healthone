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

            <h2 class="text-center">| Sportcenter Health<span class="text-primary">One</span> |</h2>
            <br>
            <div class="row">
                <div class="col-md-12">
                <h1 class="text-center">Welkom 
                        <?php if(isset($_SESSION['user']->first_name)){echo $_SESSION['user']->first_name;}else{echo "";}?>
                        <?php if(isset($_SESSION['user']->last_name)){echo $_SESSION['user']->last_name;}else{echo "";}?>
                    </h1>  
<br>
                    <h3 class="text-center"> Jeffrey Klein is werelds beste sportschool eigenaar!</h3>  
                    <br> 
                    <h3 class="text-center text-danger">Webpagina is in onderhoud</h3>
                </div>            
            </div>            

            <br><hr><br>

            <?php
            include_once ('defaults/footer.php');
            ?>
        </div>
    </body>
</html>
