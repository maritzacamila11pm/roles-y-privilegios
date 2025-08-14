<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoja de Control de Asistencia</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #000;
            padding-bottom: 20px;
        }

        .header img {
            width: 60px;
            height: 60px;
            float: left;
            margin-right: 20px;
        }

        .header h1 {
            font-size: 16px;
            font-weight: bold;
            margin: 5px 0;
            text-transform: uppercase;
        }

        .header h2 {
            font-size: 14px;
            margin: 3px 0;
            font-weight: normal;
        }

        .header .motto {
            font-style: italic;
            font-size: 12px;
            margin-top: 10px;
        }

        .title {
            text-align: center;
            font-weight: bold;
            font-size: 14px;
            margin: 20px 0;
            text-decoration: underline;
        }

        .info-section {
            margin: 20px 0;
            font-size: 12px;
        }

        .info-row {
            margin: 8px 0;
            display: flex;
            align-items: center;
        }

        .info-row strong {
            display: inline-block;
            width: 180px;
            margin-right: 10px;
        }

        .info-row span {
            border-bottom: 1px solid #000;
            flex: 1;
            padding: 2px;
            min-height: 16px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 11px;
        }

        th, td {
            border: 1px solid #000;
            padding: 6px;
            text-align: center;
        }

        th {
            background-color: #f0f0f0;
            font-weight: bold;
        }

        .fecha-col {
            width: 15%;
        }

        .hora-col {
            width: 15%;
        }

        .asistio-col {
            width: 15%;
        }

        .obs-col {
            width: 10%;
        }

        .numero-col {
            width: 8%;
        }

        .logo-placeholder {
            width: 60px;
            height: 60px;
            background: #ddd;
            float: left;
            margin-right: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            color: #666;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo-placeholder">ESCUDO</div>
            <h1>MUNICIPALIDAD PROVINCIAL DE PUNO</h1>
            <h2>GERENCIA DE ADMINISTRACIÓN</h2>
            <h2>SUB GERENCIA DE PERSONAL</h2>
            <div class="clear"></div>
            <p class="motto">"Año de la recuperación y consolidación de la economía peruana"</p>
        </div>

        <div class="title">
            HOJA DE CONTROL DE ASISTENCIA DE PRACTICANTE - 2025
        </div>

        <div class="info-section">
            <div class="info-row">
                <strong>NOMBRES Y APELLIDOS</strong>
                <span>: Maritza Camila Pongo Mamani</span>
            </div>
            <div class="info-row">
                <strong>OFICINA DESIGNADA</strong>
                <span>: Oficina de Tecnología Informática</span>
            </div>
            <div class="info-row">
                <strong>CARRERA PROFESIONAL</strong>
                <span>: Ingeniería de Software con IA</span>
            </div>
            <div class="info-row">
                <strong>FECHA DE INICIO</strong>
                <span>: 2025-04-15</span>
            </div>
            <div class="info-row">
                <strong>FECHA DE TÉRMINO</strong>
                <span>: 2025-08-15</span>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th class="numero-col">#</th>
                    <th class="fecha-col">Fecha</th>
                    <th class="hora-col">Hora Entrada</th>
                    <th class="hora-col">Hora Salida</th>
                    <th class="asistio-col">¿Asistió?</th>
                    <th class="obs-col">O.B.S</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>2025-04-15</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>Ausente</td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2025-04-16</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>Ausente</td>
                    <td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>2025-04-17</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>Ausente</td>
                    <td></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>2025-04-18</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>Ausente</td>
                    <td></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>2025-04-21</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>Ausente</td>
                    <td></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>2025-04-22</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>Ausente</td>
                    <td></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>2025-04-23</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>Ausente</td>
                    <td></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>2025-04-24</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>Ausente</td>
                    <td></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>2025-04-25</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>Ausente</td>
                    <td></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>2025-04-28</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>Ausente</td>
                    <td></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>2025-04-29</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>Ausente</td>
                    <td></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>2025-04-30</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>Ausente</td>
                    <td></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>2025-05-01</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>Ausente</td>
                    <td></td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>2025-05-02</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>Ausente</td>
                    <td></td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>2025-05-05</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>Ausente</td>
                    <td></td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>2025-05-06</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>Ausente</td>
                    <td></td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>2025-05-07</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>Ausente</td>
                    <td></td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>2025-05-08</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>Ausente</td>
                    <td></td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>2025-05-09</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>Ausente</td>
                    <td></td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>2025-05-12</td>
                    <td>11:39</td>
                    <td>21:18</td>
                    <td>Presente</td>
                    <td></td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>2025-05-13</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>Ausente</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
