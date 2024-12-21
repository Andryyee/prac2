<html lang="en">
    <head>
        <title>Page Ubuntu</title>
    </head>
    <body>
        <?php

            include_once "utils/ubuntu/command.php";

            $coms = array("ls", "pwd", "whoami", "id");
            foreach ($coms as $com)
                generHtml($com);

        ?>
    </body>
</html>