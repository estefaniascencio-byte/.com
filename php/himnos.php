<?php

$titulo = "Himnos Mexicanos";

$himno1 = "CORO
Mexicanos, al grito de guerra
El acero aprestad y el bridón,
Y retiemble en sus centros la tierra
Al sonoro rugir del cañón,
Y retiemble en sus centros la tierra
Al sonoro rugir del cañón.


ESTROFA I
Ciña ¡oh patria! tus sienes de oliva
De la paz el arcangel divino,
Que en el cielo tu eterno destino
Por el dedo de Dios se escribió,
Más si osare un extraño enemigo
Profanar con su planta tu suelo,
Piensa ¡oh patria querida! que el cielo
Un soldado en cada hijo te dió,
Un soldado en cada hijo te dió.


CORO
Mexicanos, al grito de guerra
El acero aprestad y el bridón,
Y retiemble en sus centros la tierra
Al sonoro rugir del cañón,
Y retiemble en sus centros la tierra
Al sonoro rugir del cañón.


";

$himno2 = "CORO

SELVA, MAR, HISTORIA Y JUVENTUD

PUEBLO LIBRE Y JUSTO BAJO EL SOL,

LA TENACIDAD COMO VIRTUD;

¡ ESO ES QUINTANA ROO ¡

I

DE LAS HONDAS RAICES DEL MAYA

AL TESON QUE CONSTRUYE EL PRESENTE

ENTONEMOS, ALZADA LA FRENTE,

EN UN HIMNO, FRATERNA LEALTAD.

 

AL UNISONO VIBREN SUS NOTAS

Y LA VOZ DE TU PUEBLO TE ENVUELVA

LO REPITA EL CLAMOR DE LA SELVA.

Y LO CANTE EL TUMULTO DEL MAR.


CORO

SELVA, MAR, HISTORIA Y JUVENTUD

PUEBLO LIBRE Y JUSTO BAJO EL SOL,

LA TENACIDAD COMO VIRTUD;

¡ ESO ES QUINTANA ROO ¡
";

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php echo $titulo; ?></title>

<style>

*{
    box-sizing:border-box;
}

body{
    margin:0;
    padding:30px;
    font-family:Arial, sans-serif;
    min-height:100vh;
    text-align:center;

    background:
    linear-gradient(
        135deg,
        #006847 0%,
        #006847 30%,
        #ffffff 30%,
        #ffffff 70%,
        #ce1126 70%,
        #ce1126 100%
    );
}

/* TÍTULO */

h1{
    background:white;
    color:#006847;
    padding:20px;
    border-radius:20px;
    max-width:750px;
    margin:auto;
    box-shadow:0 6px 15px #555;
}

/* VENTANAS */

.contenedor{
    display:flex;
    justify-content:center;
    align-items:flex-start;
    gap:25px;
    flex-wrap:wrap;
    margin-top:30px;
}

.ventana{
    background:white;
    width:420px;
    min-height:450px;
    padding:20px;
    border-radius:20px;
    box-shadow:0 8px 20px #555;
}

/* TÍTULOS */

.ventana h2{
    color:#006847;
    border-bottom:4px solid #ce1126;
    padding-bottom:10px;
}

.ventana:nth-child(2) h2{
    color:#ce1126;
    border-bottom-color:#006847;
}

/* HIMNOS */

.himno{
    background:#f4f4f4;
    padding:20px;
    border-left:6px solid #006847;
    border-radius:10px;

    text-align:left;
    white-space:pre-line;
    line-height:1.7;

    max-height:350px;
    overflow-y:auto;
}

.ventana:nth-child(2) .himno{
    border-left-color:#ce1126;
}

/* PIE */

footer{
    background:white;
    margin:30px auto 0;
    padding:15px;
    max-width:700px;
    border-radius:15px;
    box-shadow:0 5px 10px #555;
    color:#333;
}

/* CELULAR */

@media(max-width:600px){

    body{
        padding:15px;
    }

    h1{
        font-size:25px;
    }

    .ventana{
        width:100%;
    }

}

</style>

</head>

<body>

<h1> <?php echo $titulo; ?> </h1>

<div class="contenedor">

    <!-- PRIMERA VENTANA -->

    <div class="ventana">

        <h2>Himno Nacional Mexicano</h2>

        <div class="himno">
            <?php echo $himno1; ?>
        </div>

    </div>


    <!-- SEGUNDA VENTANA -->

    <div class="ventana">

        <h2>Himno de Quintana Roo</h2>

        <div class="himno">
            <?php echo $himno2; ?>
        </div>

    </div>

</div>

</body>

</html>
