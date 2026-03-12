<!DOCTYPE html>
<html>
<head>
<title>Gestión de Cursos</title>
</head>

<body>

<h1>Gestión de Cursos</h1>

<form method="POST" action="/agregar-curso">
@csrf

<input type="text" name="curso" placeholder="Nombre del curso">

<button type="submit">
Agregar curso
</button>

</form>

<h2>Lista de cursos</h2>

<ul>

@foreach ($cursos as $curso)
<li>{{ $curso }}</li>
@endforeach

</ul>

</body>
</html>