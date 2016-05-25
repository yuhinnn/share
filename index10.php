<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>share2</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
  <body>
<div id="a">こんにちは</div>
<li><a href="javascript:void(0);" class="a color">a</a></li>
<li><a href="javascript:void(0);" class="b color">b</a></li>
<li><a href="javascript:void(0);" class="c color">c</a></li>
<button onclidk="getElement()">結果</button>


<div class="q1">
<input type="button" name="a" value="a" onClick="choice(1)">
<input type="button" name="b" value="b" onClick="choice(2)">
<input type="button" name="c" value="c" onClick="choice(3)">
</div>

<div class="q2">
<input type="button" name="a" value="a" onClick="choice2(1)">
<input type="button" name="b" value="b" onClick="choice2(2)">
<input type="button" name="c" value="c" onClick="choice2(3)">
</div>

<div class="q3">
<input type="button" name="a" value="a" onClick="choice(1)">
<input type="button" name="b" value="b" onClick="choice(2)">
<input type="button" name="c" value="c" onClick="choice(3)">
</div>

    <script src="script.js"></script>

  </body>
</html>
