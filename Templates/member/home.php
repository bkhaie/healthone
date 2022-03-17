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
<h1 class="text-center">| Home <span class="text-primary">Pagina</span> |</h1>
        <br>
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">Welkom 
                        <?php if(isset($_SESSION['user']->first_name)){echo $_SESSION['user']->first_name;}else{echo "";}?>
                        <?php if(isset($_SESSION['user']->last_name)){echo $_SESSION['user']->last_name;}else{echo "";}?>
                    </h3>  
                    <br> 
                    <h5 class="text-center text-danger">Webpagina is in onderhoud</h5>
                </div>            
            </div>            

            <br><hr><br>

            <?php
            include_once ('defaults/footer.php');
            ?>
        </div>
    </body>
</html>