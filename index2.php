<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>share2</title>
  </head>
  <body>

    <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '178976645831726',
      xfbml      : true,
      version    : 'v2.6'
    });

    // ADD ADDITIONAL FACEBOOK CODE HERE
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<div class="pushbutton2 fb_share">
      <a href="#"><p class="pushtext2">いいねをする</p></a>
    </div>


    <a href="#">
    <div class="pushbutton3">


    <p class="pushtext3">シェアする</p>
    </div>
  </a>




  </body>
</html>
