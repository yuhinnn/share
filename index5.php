<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
 
  <script type="text/javascript" language="javascript">
        function onButtonClick() {
          target = document.getElementById("output");
          target.innerText = document.forms.id_form1.id_textBox1.value;
          //target.innerText = document.id_form1.id_textBox1.value;//これでもOK
        }
  </script>
 
</head>
<body>
  <form name="form1" id="id_form1" action="">
    <input name="textBox1" id="id_textBox1" type="text" value="" />
    <input type="button" value="Exec" onclick="onButtonClick();" />
  </form>
  <hr/>
  <div id="output"></div>
 
</body>
</html>

