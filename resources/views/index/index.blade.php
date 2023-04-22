<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<input type="text" id="txtNumber">
	<button type="button" onclick="sendRequest('{{url('/')}}');">Calcular</button>
	<span id="spanResult">...</span>

	<script src="{{asset('viewResources/index/index.js')}}"></script>
</body>
</html>