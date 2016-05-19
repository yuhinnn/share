<!DOCTYPE html>
<html lang="ja">
<head>

<meta charset="utf-8">
</head>
<body>
<script type="text/javascript">
function nextPage(){
    if(document.q.btn[1].checked){
        location.href = "q2.html";
    }else{
        location.href = "miss.html";
    }
}
</script>

<p>問題1：日本一長い川は？</p>
<form name="q">
<input type="hidden" name="btn">長谷川<br>
<input type="radio" name="btn">信濃川<br>
<input type="radio" name="btn">旭川<br>
<input type="radio" name="btn">品川<br>
</form>
<p><input type="button" value="OK" onclick="nextPage()"></p>
</body>
</html>
