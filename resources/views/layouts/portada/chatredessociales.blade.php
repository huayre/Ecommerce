<style>
    .appwhatsapp{
        position:fixed;
        right: 26px;
        bottom: 100px;
        width: 60px;
        z-index: 1000;
    }

</style>
<!--Whatssapp-->
 <a  class="appwhatsapp" href="https://api.whatsapp.com/send?phone=+51900888593&text=Hola!%20¿Me%20pueden%20apoyar?" target="_blank">
     <span class="fa-stack fa-2x">
      <i class="fas fa-circle fa-stack-2x" style="color:#00bb2d"></i>
      <i class="fab fa-whatsapp  fa-stack-1x fa-inverse" style="color: #000000"></i>
    </span>
 </a>
<!--Messenger-->
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v7.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="105277061219089"
     logged_in_greeting="Hola! ¿Cómo podemos ayudarte?"
     logged_out_greeting="Hola! ¿Cómo podemos ayudarte?">
</div>
