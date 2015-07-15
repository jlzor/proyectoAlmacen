<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<center><h1>INSTITUTO TECNOLOGICO DE CULIACAN</h1></center>
				<br>
				<center><h1>Reporte de Bajas del Almacen</h1></center>
				<table border="1" style="margin:0 auto">
					<tr align="center">
						<th colspan="2">Folio</th>
						<th colspan="2">Usuario</th>
						<th colspan="2">Producto</th>
						<th colspan="2">Cantidad</th>
						<th colspan="2">Fecha</th>
					</tr>
				@foreach($reporte as $repo)
					<tr align="center">
				<td colspan="2">{{$repo->folio}}</td>
				 <td colspan="2">{{$repo->nombreUsuario}}</td>
				 	<td colspan="2">{{$repo->nombreProducto}}</td>
				 <td colspan="2">{{$repo->cantidad}}</td>
				 <td colspan="2">{{date('d/m/Y H:i:s', strtotime($repo->fecha))}}</td>
					</tr>
					@endforeach
				</table>
</body>
</html>
