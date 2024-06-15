<html>
    <head>
        <?php
        function letras ($array,$c): bool{
           foreach($array as $x){
            if(strpos($x,$c) === false)
                return false ;
           }
           return true;
        }
        $palabras = ['hola' , 'pajaro' , 'sopa' , 'rata' , 'carro', 'pensamiento'];
        $char = 'a';
        $true = false;
        $true = letras($palabras,$char);
        if ($true){
            echo "el array contiene esta letra en cada srting ";
        }else{
            echo "el array no contiene esta letra en todas los string";
        }
        ?>
    </head>
</html>