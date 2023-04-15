<html>
<head>
</head>
<script type="text/javascript">
var xmlhttp=false;
function validate(name)
{
	if(window.XMLHttpRequest)
	{
		xmlhttp= new XMLHttpRequest();
	}
	else if(window.ActiveXObject)
	{
		xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	if (xmlhttp==NULL)
	{
		alert("Browser does not support HTTP page!!");
		return;
	}
	xmlhttp.open("GET","user.php?name="+name,true);
	xmlhttp.onreadystatechange=state changed;
	xmlhttp.send(null);

	function.statechanged()
	{
		if(xmlhttp.readystate==4)
		{
			document.getElementById("res").innerHTML=xmlhttp.responseText;
		}
	}
}
</script>
</head>
<body>
<form>
Enter Username: 
<input type="text" name="name" onkeyup="validate(this.value)">
<div id="res"></div>
</form>
</body>
</html>
