<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<title></title>

<style>

.contenedor{
    background-color: #F00;
    text-align: center;
}

.infoGeneral{
    background-color: #00F;
    margin:200px 0;
    color: #FFF;
}

.pie{
    background-color: #FF0;
}

</style>

</head>

<body>
</body>

<div class="contenedor">
    @yield("cabecera")
</div>

<div class="infoGeneral">
    @yield("infoGeneral")
</div>

<div class="pie">
    @yield("pie")

    Aqui va el contenido del pie

</div>

</html>

