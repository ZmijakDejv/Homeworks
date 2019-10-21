
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /**
         * Vytvoření objektu z třídy Krychle.php
         */
        require 'Krychle.php';
        $krychle = new Krychle();
        /**
         * Vypsání povrchu krychle
         */
        echo 'Povrch krychle:'. $Krychle -> povrch().'<br />';
        /**
         * Vypsání objemu krychle
         */
        echo 'Objem krychle:'. $Krychle -> objem().'<br />';
        /**
         * Vypsání zda je krychle 3D
         */
         echo '3D:'. $Krychle -> is3D().'<br />';
         /**
         * Vypsání počtu vrcholů krychle
         */
         echo 'Počet vrcholů krychle je:'. $Krychle -> pocetVrcholu().'<br />';
         /**
         * Vypsání infa
         */
         echo 'info o krychli:'. $Krychle -> info().'<br />';
        ?>
    </body>
</html>
