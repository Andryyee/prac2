<?php

    function getFigure($id) {
        $str = "<svg width=100% height=100%>";
        switch ($id % 3) {
            case 0:
                $str .= '<circle cx="50" cy="50" r="40" stroke="black" stroke-width="4px" fill="red">';
                break;
            case 1:
                $str .= '<rect width="50%" height="50" fill="blue">';
                break;
            case 2:
                $str .= '<polygon points="120,0 240,225 0,225" fill="green">';
                break;
        }

        return $str . "</svg>";
    }

?>