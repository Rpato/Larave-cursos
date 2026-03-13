<!DOCTYPE html>
<html>
<head>

<title>{{$concepto['titulo']}}</title>

<style>

body{
font-family:Arial;
background:#f4f4f4;
text-align:center;
}

.card{
background:white;
padding:30px;
margin:100px auto;
width:500px;
border-radius:10px;
box-shadow:0px 0px 10px rgba(0,0,0,0.2);
}

a{
display:block;
margin-top:20px;
}

</style>

</head>

<body>

<div class="card">

<h1>{{$concepto['titulo']}}</h1>

<p>{{$concepto['descripcion']}}</p>

<a href="/">Volver</a>

</div>

</body>

</html>