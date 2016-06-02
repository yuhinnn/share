<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Qustion</title>
</head>
<body>
<script>
window.fbAsyncInit = function() {
  FB.init({
    appId      : '607456416083903',
      xfbml      : true,
      version    : 'v2.6'
  });
};
</script>
  <Qustion>
    <div class="top">
      <div class="text">
      <img src="images/top_n2.png" width="100%">
      </div>
     </div>
      <div class="box">
        <div class="Q1">
          <div class="Q1img">
          <img class="Qimg" src="images/Question1_re.png" width="100%">
          </div>
            <ul>
            <div class="Q1box">

                 <li><p id="first" class="push-text" onClick="choice(1)" style="background:white">様子を見る</p></li>
               <li><p id="secound" class="push-text" onClick="choice(2)" style="background:white">ご飯に誘う</li></p>
               <li><p id="third" class="push-text" onClick="choice(3)" style="background:white">告白する</li></p>


             </div> 
            </ul>
        </div>
        <div class="Q2">
          <div class="Q2img">
          <img class="Qimg" src="images/Question2_re.png" width="100%">
          </div>
            <ul>
            <div class="Q1box">

              <li><p id="fourth" class="push-text" onClick="choice2(4)" style="background:white">質素な家</li></p>
               <li><p id="fifth" class="push-text" onClick="choice2(5)" style="background:white">高層ビル</li></p>
               <li><p id="sixth" class="push-text" onClick="choice2(6)" style="background:white">大豪邸</li></p>
            </ul>
        </div>
        <div class="Q3">
          <div class="Q3img">


          <img class="Qimg" src="images/Question3_re.png" width="100%">
          </div>
            <ul>
            <div class="Q1box">


              <li><p id="seventh" class="push-text" onClick="choice3(7)" style="background:white">仕事</li></p>
               <li><p id="eighth" class="push-text" onClick="choice3(8)" style="background:white">女性と過ごす</li></p>
               <li><p id="ninth" class="push-text" onClick="choice3(9)" style="background:white">食べまくる</li></p>

            </ul>
        </div>


        <div class="Q4">
          <div class="Q4img">
          <img class="Qimg" src="images/Question4_re.png" width="100%">
          </div>
            <ul>


               <li><p id="tenth" class="push-text" onClick="choice4(10)" style="background:white">お茶</li></p>
               <li><p id="eleventh" class="push-text" onClick="choice4(11)" style="background:white">炭酸</li></p>
               <li><p id="twelfth" class="push-text" onClick="choice4(12)" style="background:white">お酒</li></p>



            </ul>
        </div>
      </div>

        <div class="Q4">
          <div class="Q4img">
          <img class="Qimg" src="images/Question5_re.png" width="100%">
          </div>
            <ul>


               <li><p id="thirteenth" class="push-text" onClick="choice5(13)" style="background:white">東京タワー</li></p>
               <li><p id="fourteenth" class="push-text" onClick="choice5(14)" style="background:white">富士山</li></p>
               <li><p id="fifteenth" class="push-text" onClick="choice5(15)" style="background:white">スカイツリー</li></p>



            </ul>
        </div>
      </div>
      <div class="pushbutton-to-result">
        <p class="pushtext" width="90%" onClick="sendresult();checkpoint();">結果を見る</p>
      </div>


<script src="script.js"></script>
</body>
</html>
