<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .container {
            font-family: Arial, sans-serif;
            margin: 0 auto;
            padding: 20px;
            max-width: 600px;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #ced4da;
            padding: 15px;
            text-align: center;
            border-radius: 10px 10px 0 0;
            font-weight: bold;
        }
        .details-card {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 15px;
            margin-top: 20px;
        }
        .section-header {
            font-weight: bold;
            margin-top: 10px;
        }
        .info-section {
            padding: 10px 0;
        }
        .logo-container {
            text-align: right;
            margin-bottom: 20px;
        }
        .logo-container img {
            max-width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            {{ $datos['nombre'] }}
        </div>
        <div class="details-card">
            <div class="info-section">
                <div class="container">
                    <div style="background-color: #dfd508; border: 1px solid black; color: white; padding: 15px; border-radius: 5px; font-size: 16px; color:black;">
                        <i class="fas fa-check"></i> Se ha subido una nueva evidencia a esta Obligación.
                    </div>
                    <hr>
                    <div class="section-header">📝 Obligación:</div>
                    <p>{{ $datos['evidencia'] }}</p>
                    <div class="section-header">🗓 Periodicidad:</div>
                    <p>{{ $datos['periodicidad'] }}</p>
                    <div class="section-header">👤 Responsable:</div>
                    <p>{{ $datos['responsable'] }}</p>
                    <div class="section-header">📅 Fechas límite de cumplimiento:</div>
                    <p>{{ $datos['fecha_limite_cumplimiento'] }}</p>
                    <div class="section-header">📄 Origen de la obligación:</div>
                    <p>{{ $datos['origen_obligacion'] }}</p>
                    <div class="section-header">📜 Cláusula, condicionante, o artículo:</div>
                    <p>{{ $datos['clausula_condicionante_articulo'] }}</p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <br>
        <p style="color:orange;">Antes de imprimir este mensaje en papel, piensa si es realmente necesario gastar esa hoja.</p>
        <p style="color:gray;">AVISO DE CONFIDENCIALIDAD Y PRIVACIDAD. Este correo electrónico y cualquier archivo adjunto al mismo puede contener datos y/o información confidencial, sometida a secreto profesional o cuya divulgación está prohibida en virtud de la legislación vigente, la información transmitida mediante el presente correo es para la(s) persona(s) cuya dirección aparece como destinatario y es estrictamente confidencial. Esta información no debe ser divulgada a ninguna persona sin autorización. Si ha recibido este correo por error o no es usted el destinatario al cual se pretende hacer llegar esta comunicación, por favor notifique al remitente de inmediato o a una persona responsable de hacerla llegar a su destinatario y elimine por completo este mensaje de su sistema.</p>
        <p style="color:gray;">Cualquier uso, distribución, divulgación, reproducción o retención de este mensaje o cualquier parte del mismo, o cualquier acción u omisión basada en el contenido de este correo electrónico está prohibida y puede ser ilegal.</p>
        <p style="color:gray;">La transmisión por vía electrónica no permite garantizar la confidencialidad de los mensajes que se transmiten, ni su integridad o correcta recepción, por lo que Operadora Vía Rápida Poetas, S.A.P.I. de C.V., y/o las empresas pertenecientes a dicho grupo empresarial no asumen responsabilidad alguna por estas circunstancias.</p>
        <p style="color:red;"><b>Este es un mensaje automático y no es necesario responder.</b></p>
    </div>
</body>
</html>
