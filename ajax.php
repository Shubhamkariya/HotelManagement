<html>
<head>
<script type="text/javascript">
var xmlhttp=false;
function validate1(name)
{
 if(window.XMLHttpRequest)
 {
   xmlhttp= new XMLHttpRequest();
 }
 else if(window.ActiveXObject)
 {
   xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
 }
 if(xmlhttp == null)
 {
  alert("Browser does not support http page.");
  return;
 }
 xmlhttp.open("GET","validate1.php?name="+name,true);
 xmlhttp.onreadystatechange = statechanged
 xmlhttp.send(null);
 function statechanged()
 {
  if(xmlhttp.readyState == 4)
  {
   document.getElementById("res").innerHTML=xmlhttp.responseText;
  }
 }
}
var xmlhttp=false;
function validate2(name1)
{
 if(window.XMLHttpRequest)
 {
   xmlhttp= new XMLHttpRequest();
 }
 else if(window.ActiveXObject)
 {
   xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
 }
 if(xmlhttp == null)
 {
  alert("Browser does not support http page.");
  return;
 }
 xmlhttp.open("GET","validate2.php?pass="+name1,true);
 xmlhttp.onreadystatechange = statechanged
 xmlhttp.send(null);
 function statechanged()
 {
  if(xmlhttp.readyState == 4)
  {
   document.getElementById("res2").innerHTML=xmlhttp.responseText;
  }
 }
}
</script>
</head>
<body>
<form method="GET">
ENTER USERNAME:
<input type="text" name="name" onKeyUp="validate1(this.value)">
<div id="res"></div>

ENTER password:
<input type="email" name="pass" onKeyUp="validate2(this.value)">
<div id="res2"></div>

</form>
</body>
</html>
