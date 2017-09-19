<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="/category" method="post">
	{{csrf_field()}}
	<input type="text" name="name">
	<input type="submit" name="">
</form>
</body>
</html>