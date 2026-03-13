<!DOCTYPE html>
<html>
<head>
<title>Conceptos de Programación</title>

<style>

body{
font-family: Arial;
background:#f4f4f4;
text-align:center;
}

.card{
background:white;
padding:20px;
margin:20px auto;
width:300px;
border-radius:10px;
box-shadow:0px 0px 10px rgba(0,0,0,0.2);
}

a{
text-decoration:none;
color:blue;
}

</style>

</head>

<body>

<h1>Conceptos de Programación</h1>

@foreach($conceptos as $concepto)

<div class="card">

<h2>{{$concepto['titulo']}}</h2>

<a href="/concepto/{{$concepto['id']}}">
Ver definición
</a>

</div>

@endforeach

</body>
</html>