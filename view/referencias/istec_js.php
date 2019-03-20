<?php
/**
 * Created by PhpStorm.
 * User: Alejandro
 * Date: 23/02/2019
 * Time: 16:23
 */
?>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js" type="text/javascript"></script>

    <script>
        $(document).ready(function(){
            $('.card').hover(
                function () {
                    $(this).animate({
                        marginTop: "-=1%",
                    }, 200);
                },

                function () {
                    $(this).animate({
                        marginTop: "0%",
                    }, 200);                },
            );
        });
    </script>
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