<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
<h1>First javascript</h1>
<p>Java script can change the content of an html element:</p>
<button type="button" onclick="">Click Me!</button>
<p id="demo">This is the demonstration.</p>

<script>
	function myFunction(){
		document.getElementById("demo").innerHTML="hello javascript";
	}
</script>
</body>
</html>