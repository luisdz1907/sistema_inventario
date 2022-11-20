<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
    <link rel="shortcut icon" href="assets/img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <!-- FONT-AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- DATATABLES -->
    <link rel="stylesheet" type="text/css" href="assets/DataTables/datatables.min.css" />

    <script type="text/javascript" src="assets/DataTables/datatables.min.js"></script>

    <!-- GOOGLE FONTS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- SWEETALERT2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.8/sweetalert2.min.js"
        integrity="sha512-c1AfYKag4intaizqJC0Zx1NxImYP7B2namyOLbpFW3P12oYkZjQGQ/8r6N75SlWidbm7oQElnVZqBzRvFtU0Hw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>Inventory System</title>

    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

</head>

<body>

    <?php
    if (isset($_SESSION["login"]) && $_SESSION["login"] == true) {
        echo '<div class="wrapper">';
        include "views/includes/sidebar.php";
        include "views/includes/navbar.php";

        //PAGINAS PRINCIPALES
        $url = explode("/", $_GET["url"]);
        $controller = "";
        
        if (isset($_GET["url"])) {
            
            if (isset($url[0])) {
                $controller = $url[0];
                //Redireccionamos al usuario a esa pagina
                include "pages/" . $controller . ".php";
            }
        } else {
            include "views/pages/inicio.php";
        }

        include "views/includes/footer.php";
        echo '<div/>';
    } else {
        include "pages/auth/login.php";
    }
    ?>

    <script>
        $(document).ready(function () {
            $('#tabla').DataTable();
        });
    </script>
</body>

</html>