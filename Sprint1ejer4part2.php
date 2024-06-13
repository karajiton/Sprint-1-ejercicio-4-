<html>
    <head>
        <?php
        $dedos = ["pulgar" , "indice" , "medio" , "anular" , "meñique" ];
        print_r ($dedos);
        echo  "<br/>";
        echo sizeof($dedos);
        unset($dedos[3]);
        echo  "<br/>";
        echo sizeof($dedos);
        echo  "<br/>";
        print_r ($dedos);
        //echo count($dedos);
        echo  "<br/>";
        $dedos = array_values($dedos);
        print_r ($dedos);
        ?>
    </head>
</html>