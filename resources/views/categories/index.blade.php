<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<ul>
	@foreach($categories as $category)
	<li>{{$category->name}}</li>
	@endforeach
</ul>
</body>
</html>