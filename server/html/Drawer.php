<html lang="en">
    <head>
        <title>Page Drawer</title>
    </head>
    <body>
        <?php

            include_once "utils/drawer/figure.php";

            $id = 0;
            if (isset($_GET['ID']))
                $id = $_GET['ID'];
            
            echo getFigure($id);

        ?>
    </body>
</html>