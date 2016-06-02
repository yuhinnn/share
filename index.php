<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>share</title>
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
  function onLogin(response) {
    if (response.status == 'connected') {
      FB.api('/me?fields=first_name', function(data) {
        var welcomeBlock = document.getElementById('fb-welcome');
        welcomeBlock.innerHTML = 'こんにちは ' + data.first_name + '!';
      });
    }
  }

  FB.getLoginStatus(function(response) {
    // Check login status on load, and if the user is
    // already logged in, go directly to the welcome message.
    if (response.status == 'connected') {
      onLogin(response);
    } else {
      // Otherwise, show Login dialog first.
      FB.login(function(response) {
        onLogin(response);
      }, {scope: 'user_friends, email'});
    }
  });
};

(function(d, s, id){
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<h1 id="fb-welcome"></h1>

<h1>Hello,world</h1>

<a href="index2.php">aaaaaaaaa</a>

<script type="text/javascript">
function funcAdd1() {
  document.getElementById( "sample" ).innerHTML = 
    parseInt( document.getElementById( "sample" ).firstChild.nodeValue ) + 1;
}
function funcAdd2() {
  document.getElementById( "sample" ).innerHTML = 
    parseInt( document.getElementById( "sample" ).firstChild.nodeValue ) + 2;
}
function funcAdd3() {
  document.getElementById( "sample" ).innerHTML = 
    parseInt( document.getElementById( "sample" ).firstChild.nodeValue ) + 3;
}
</script>


<div id="sample">1</div>
<div id="sampleButton">
      <buton onclick="funcAdd1()">１を足す</button>
      <buton onclick="funcAdd1()">2を足す</button>
      <buton onclick="funcAdd1()">3を足す</button>

</div>

<a href="index3.php">index3へ移動</a>
 <a href="index5.php">index5へ移動</a>
  <a href="index6.php">index6へ移動</a>
   <a href="index8.php">index8へ移動</a>
   <a href="index9.php">index9へ移動</a>
   <a href="index10.php">index10へ移動</a>
   <a href="randtest.php">randtestへ移動</a>

  </body>
</html>
