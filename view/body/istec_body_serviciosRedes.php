<?php
/**
 * Created by PhpStorm.
 * User: Alejandro
 * Date: 12/03/2019
 * Time: 22:20
 */
?>

<body>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v3.2'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="628257124280737"
     logged_in_greeting="Hola, cuéntanos como podemos ayudarte."
     logged_out_greeting="Hola, cuéntanos como podemos ayudarte.">
</div>
<?php include "./body/header/istec_header.php";?>
<?php include "./body/navbar/istec_navbar_servicios.php"?>
<?php include "./body/banner/istec_banner_serviciosRedes.php"?>
<?php include "./body/contenido/istec_contenido_serviciosRedes.php"?>
<?php include "./body/footer/istec_footer.php"?>
<?php include "./referencias/istec_js.php";?>
</body>

