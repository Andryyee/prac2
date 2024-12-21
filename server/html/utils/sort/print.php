<?php
    function getColor() {
        $str = "#";
        for ($i = 0; $i < 6; ++$i)
            $str .= random_int(0, 9);
        return $str;
    }

    function getDiv($num) {
        return '<div style="height: 20px; width: '. 10*$num . 'px; background-color: ' . getColor() . ';"></div>';
    }

    function printArr($arr, $msg = "") {
        echo $msg;
        foreach ($arr as $el) echo $el . "  ";
        $str = "";
        foreach ($arr as $el) $str .= getDiv($el);
        echo $str;
    }
?>