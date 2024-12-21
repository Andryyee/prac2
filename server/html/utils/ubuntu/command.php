<?php

    function generHtml($com) {
        echo "<h1>Command: {$com}</h1>";
        echo "<div>" . shell_exec($com) . "</div>";
    }

?>