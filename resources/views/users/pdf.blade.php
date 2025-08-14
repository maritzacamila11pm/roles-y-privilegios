<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Carta de Presentación</title>
    <style>
        body {
            font-size: 19px;
            line-height: 1.4;
            margin: 40px;
            color: #000;
        }
.footer-links {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    display: flex;
    align-items: center;
    margin-top: 50px;
}
        .header {
            text-align: center;
            margin-bottom: 25px;
            position: relative;
            font-size: 19px;

        }

        .header-table {
            width: 100%;
            margin-bottom: 15px;
        }

        .logo-left {
            width: 15%;
            text-align: left;
            vertical-align: top;
        }
        .abajo-left {
            width: 15%;
            text-align: left;
        }

        .header-content {
            width: 70%;
            text-align: center;
            vertical-align: top;
            font-size: 16px;
        }

        .header h1 {
            font-family: cursive;
            font-size: 29px;
            margin: 5px 0;
            font-weight: bold;
            font-style: italic;
            transform: skew(-30deg, 0deg);
        }


        .header h2 {
            font-family: cursive;
            font-size: 16px;
            margin: 3px 0;
            font-weight: bold;
        }

        .header h3 {
            font-size: 12px;
            margin: 3px 0;
            font-weight: normal;
        }

        .year-motto {
            font-family: Arial, sans-serif;
            font-size: 19px;
            font-style: italic;
            margin: 10px 0;
            border-top: 2px solid #000;
            border-bottom: 2px solid #000;
            padding: 5px 0;
        }

        .document-info {
            margin: 25px 0;
            font-size: 19px;
        }

        .document-info p {
            margin: 6px 0;
            display: flex;
        }

        .document-info strong {
            min-width: 120px;
            display: inline-block;
            font-size: 19px;
        }

        .separator-line {
            border: none;
            height: 2px;
            background-color: #000;
            margin: 15px 0;
        }

        .content {
            text-align: justify;
            margin: 20px 0;
            line-height: 1.6;
            font-size: 19px;
        }

        .content p {
            margin: 20px 0;
        }

        .schedule {
            margin: 20px 0;
        }

        .closing {
            margin: 20px 0;
        }

        .closing-text {
            font-family: 'Times New Roman', serif;
            font-size: 19px;
            font-style: italic;
            font-weight: bold;
            text-align: left;
        }

        .cc-section {
            font-size: 10px;
            margin-top: 15px;
            border-top: 1px solid #000;
            padding-top: 5px;
        }

        .signature-container {
            margin-top: 40px;
            position: relative;
            height: 120px;
            width: 100%;
        }

        .signature-left {
        position: absolute;
        left: -40px;
        bottom: -72px;
        width: 250px;
        text-align: center;
        }

        .signature-area {
            width: 200px;
            height: 60px;
            margin: 0 auto 10px;
        }

        .signature-name {
            font-size: 11px;
            font-weight: bold;
            text-align: center;
        }

        .signature-title {
            font-size: 10px;
            text-align: center;
            margin-top: 2px;
        }

        .received-stamp {
        position: absolute;
        right: 20px;
        top: -40px;
        border: 2px solid #000;
        border-radius: 50%;
        width: 200px;
        height: 140px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        transform: rotate(0deg);
        background: rgba(255, 255, 255, 0.9);
        z-index: 10;
        }

        .received-stamp h4 {
            margin: 0;
            font-size: 20px;
            font-weight: bold;
            font-style: italic;
        }

        .received-stamp .dni {
            font-size: 20px;
            margin-top: 8px;
            font-weight: normal;
        }


        strong {
            font-weight: bold;
        }
        .links-bar{
        padding-top: 18px; /* Espacio entre línea y enlaces */
        justify-content: space-around; /* Reparte el espacio entre los enlaces */
        font-size:14px;
        color: #000000;
        padding: 0px 20px; /* Espacio arriba/abajo y a los lados */
        background-color: yellow;

        }

    </style>
</head>
<body>
    <div class="header">
        <table class="header-table">
            <tr>
                <td class="logo-left">
                    <img src="{{ public_path('municipalidad.png') }}" width="60">
                </td>
                <td class="header-content">
                    <h1>Municipalidad Provincial De Puno</h1>
                    <h2>GERENCIA DE ADMINISTRACIÓN</h2>
                    <h3>SUB GERENCIA DE PERSONAL</h3>
                </td>
                <td style="width: 15%;"></td>
            </tr>
        </table>
              <hr class="separator-line">
            "Año de la recuperación y consolidación de la economía peruana"

    </div>

    <div class="document-info">
        <p><strong style="text-decoration: underline;">CARTA DE PRESENTACIÓN Nº : 089-2024-MPP/GA-SGP</strong></p>
        <p><strong>PARA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $usuario->oficina->nombre ?? 'Oficina no asignada' }}</strong></p>
        <p><strong>ASUNTO</strong> : Presenta a Practicante</p>
        <p><strong>REF. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: CÓDIGO: ACAD 02-01 {{ strtoupper($usuario->institucion) }}</strong></p>
        <p><strong>FECHA</strong> : Puno, {{ \Carbon\Carbon::now()->format('d \d\e F \d\e\l Y') }}.</p>

        <hr class="separator-line">
    </div>

    <div class="content">
        <p>Me dirijo a Usted, con la finalidad de presentar al Alumno (a)
        <strong>{{ strtoupper($usuario->nombre_completo) }}</strong>, identificado (a) con DNI
        Nro. <strong>{{ $usuario->dni }}</strong>, quien de acuerdo al documento de la referencia, pertenece
        a la <strong>Carrera de {{ $usuario->carrera }}</strong> de <strong>
        {{ strtoupper($usuario->institucion) }}</strong>; quien a partir de la fecha realizará sus prácticas
        <strong>{{ $usuario->tipo }}</strong> en calidad de <strong style="text-decoration: underline;">{{ $usuario->modalidad }}</strong>,
        dentro de la dependencia a su cargo, por un lapso de <strong>{{ $usuario->duracion_meses }} meses</strong>, para lo cual,
        agradeceré brindarle las facilidades del caso.</p>

        <div class="closing">
            <p class="closing-text">
                Atentamente,
                <br><br><br>
            </p>
        </div>

        <div class="cc-section">
            <strong>c.c.</strong><br>
            Interesado<br>
            Archivo
        </div>
    </div>

    <div class="signature-container">
    <div class="signature-left">
        <div class="signature-area">
            <img src="{{ public_path('abajo.png') }}" width="200">
        </div>
    </div>

    <div class="received-stamp">
        <h4>Recibido</h4>
        <br>
        <br>
        <br>
        <div class="dni">{{ $usuario->dni }}</div>
    </div>
</div>

<div class="footer-links">
    <div style="flex: 1;"></div>
    <div class="links-bar" style="flex: 1; margin-left: 210px;">
        <a href="#"> Jr. Plaza Mayor Nº 123</a> |
        <a href="#"> Teléfono: 051-123456</a> |
        <a href="#">www.munipuno.gob.pe</a>
    </div>
</div>

</body>
</html>
