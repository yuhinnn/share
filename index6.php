<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>share</title>
  </head>
  <body>
<SCRIPT type="text/JavaScript">
<!--
function Check(){
    var i,s;
    s="";
    if (document.main.q.length) {
        for (i = 0; i < document.main.q.length; i++) {
            if (document.main.q[i].checked) {
                s=(document.main.q[i].value);
            }
        }
    } else {
        if (document.main.q.checked) {
            s=(document.main.q.value);
        }
    }
	if(s.length==0){
		alert("どれかチェックしてください!");
	}else{
		location.href="page2.htm?v=" +escape(s);
	}
}
//-->
</SCRIPT>
<FORM name="main" action="#">
<TABLE border="0">
<TR><TD><INPUT type="radio" name="q" value="a"></TD><TD>選択肢a</TD></TR>
<TR><TD><INPUT type="radio" name="q" value="b"></TD><TD>選択肢b</TD></TR>
<TR><TD><INPUT type="radio" name="q" value="c"></TD><TD>選択肢c</TD></TR>
<TR><TD><INPUT type="radio" name="q" value="d"></TD><TD>選択肢d</TD></TR>
<TR><TD><INPUT type="radio" name="q" value="e"></TD><TD>選択肢e</TD></TR>
</TABLE>
<INPUT type="button" name="go" value="ひとこと" onclick="Check()">
</FORM>
 </body>
</html> 
