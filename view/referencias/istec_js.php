<?php
/**
 * Created by PhpStorm.
 * User: Alejandro
 * Date: 23/02/2019
 * Time: 16:23
 */
?>

    <script src="./js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
    <script src="./js/bootstrap.bundle.min.js" type="text/javascript"></script>

    <script>
        setInterval('borde()',1);
        function borde() {
            if (screen.width < 992) {
                $('#navbarText').addClass('border-top');
                $('#navbarText').addClass('borde-sup');
                $('#mt-inicio').addClass('borde-sup');
            } else {
                $('#navbarText').removeClass('border-top');
                $('#navbarText').removeClass('borde-sup');
                $('#mt-inicio').removeClass('borde-sup');
            }
        }
    </script>
