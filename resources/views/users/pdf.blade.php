<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Carta de Presentación</title>
    <style>

        body {
            font-size: 11px;
            line-height: 1.4;
            margin: 40px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header h2 {
            font-family: 'Dancing Script', cursive;
            font-style: italic;
            font-size: 30px;
            margin: 5px 0;
            font-weight: bold;
        }
        .header h3 {
            font-size: 14px;
            margin: 3px 0;
            font-weight: normal;
        }
        .header p {
            font-size: 10px;
            margin: 2px 0;
            font-style: italic;
        }
        .document-info {
            margin: 30px 0;
        }
        .document-info p {
            margin: 8px 0;
        }
        .content {
            text-align: justify;
            margin: 30px 0;
            line-height: 1.6;
        }
        .firma {
            margin-top: 80px;
            text-align: left;
        }
        .firma p {
            margin: 5px 0;
        }
        .recibido {
            position: absolute;
            bottom: 100px;
            right: 50px;
            border: 2px solid #000;
            border-radius: 50px;
            padding: 15px 25px;
            text-align: center;
            transform: rotate(-15deg);
        }
        .recibido h4 {
            margin: 0;
            font-size: 14px;
        }
        .recibido p {
            margin: 5px 0;
            font-size: 10px;
        }
        strong {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">
<img src="https://upload.wikimedia.org/wikipedia/commons/5/5a/Logo_de_SENATI.png" alt="Logo de SENATI" width="200">
        <h2>Municipalidad Provincial De Puno</h2>
        <h3>GERENCIA DE ADMINISTRACIÓN</h3>
        <h3>SUB GERENCIA DE PERSONAL</h3>
        <p> Año de la recuperación y consolidación de la economía peruana</p>
    </div>

    <div class="document-info">
        <p><strong>CARTA DE PRESENTACIÓN Nº</strong> 089-2024-MPP/GA-SGP</p>
        <br>
        <p><strong>PARA</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;{{ $usuario->oficina->nombre ?? 'Oficina no asignada' }}</p>
        <p><strong>ASUNTO</strong> &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;Presenta a Practicante</p>
        <p><strong>REF.</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;CÓDIGO: ACAD 02-01 SENATI</p>
        <p><strong>FECHA</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;Puno, {{ \Carbon\Carbon::now()->format('d \d\e F \d\e\l Y') }}.</p>
    </div>

    <div class="content">
        <p>Me dirijo a Usted, con la finalidad de presentar al Alumno (a)
        <strong>{{ strtoupper($usuario->nombre_completo) }}</strong>, identificado (a) con DNI
        Nro. <strong>{{ $usuario->dni }}</strong>, quien de acuerdo al documento de la referencia, pertenece
        a la <strong>Carrera de {{ $usuario->carrera }}</strong> con <strong>Inteligencia Artificial del
        {{ strtoupper($usuario->institucion) }}</strong>; quien a partir de la fecha realizará sus prácticas <strong>Pre
        Profesionales</strong> en calidad de <strong>{{ $usuario->modalidad }}</strong>, dentro de la dependencia
        a su cargo, por un lapso de <strong>{{ $usuario->duracion_meses }} meses</strong>, para lo cual, agradeceré brindarle
        las facilidades del caso.</p>
    </div>

    <div class="firma">
        <p>Atentamente,</p>
        <br><br><br>
        <p style="text-align: center;">
            <strong>_________________________________</strong><br>
            <strong>{{ strtoupper('SUB GERENTE DE PERSONAL') }}</strong>
        </p>
        <br>
        <p style="font-size: 9px;">
            <strong>c.c.</strong><br>
            Archivo/<br>
            Archivo
        </p>
        <p style="font-size: 9px; margin-top: 20px;">
            Hora: 9:30 &nbsp;&nbsp;&nbsp;&nbsp; Firma: _______________
        </p>
    </div>

    <div class="recibido">
        <h4>Recibido</h4>
        <p>{{ $usuario->dni }}</p>
    </div>
</body>
</html>
