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

        <h1 class="text-center">| Sportcenter Health<span class="text-primary">One</span> |</h1>
        <br>

        <center>
            <a type="button" class="btn btn-success btn-sm px-10" href="/admin/add">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                    class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
                    <path
                        d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z" />
                    <path
                        d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
                </svg>
            </a>
        </center>

        <br>

        <table class="table align-middle">
            <thead>
                <tr>
                    <th scope="col">nr</th>
                    <th scope="col">picture</th>
                    <th scope="col">Naam</th>
                    <th scope="col">Category</th>
                    <th scope="col" class="text-center">Aanpassen</th>
                    <th scope="col" class="text-center">Verwijderen</th>
                </tr>
            </thead>
            <tbody>
                <?php $count=1; ?>
                <?php foreach($products as $product): ?>
                <tr>
                    <th scope="row"><?= $count++?></th>

                    <td style="width: 10%"><img src="/img/<?=$product->picture?>" class="img-thumbnail img-fluid"></td>
                    <td><?= $product->name ?></td>
                    <td><?= getCategoryname($product->category_id) ?></td>
                    <td class="text-center">
                        <a type="button" class="btn btn-warning btn-sm px-10" href="/admin/edit/<?=$product->id?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-pencil" viewBox="0 0 16 16">
                                <path
                                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                            </svg>
                        </a>
                    </td>
                    <td class="text-center">
                        <a type="button" class="btn btn-danger btn-sm px-10" href="/admin/delete/<?=$product->id?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-trash" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                <path fill-rule="evenodd"
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                            </svg>
                        </a>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

        <br>
        <hr><br>
        <?php
            include_once ('defaults/footer.php');
            ?>
    </div>
</body>

</html>