<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 408 - Tiempo de espera agotado</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            background: linear-gradient(135deg, #2c3e50, #16a085);
            font-family: 'Montserrat', sans-serif;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .container {
            max-width: 600px;
            padding: 40px;
            background-color: rgba(0, 0, 0, 0.4);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
            width: 100%;
        }
        h1 { font-size: 60px; margin-bottom: 10px; color: #16a085; }
        p { font-size: 20px; margin-bottom: 30px; }
        a {
            text-decoration: none;
            background-color: #16a085;
            color: #000;
            padding: 12px 25px;
            border-radius: 8px;
            font-weight: bold;
            transition: background 0.3s ease;
        }
        a:hover { background-color: #00000033; color: white; }
        
        /* Media Query para pantallas más pequeñas */
        @media (max-width: 768px) {
            h1 {
                font-size: 50px;
            }
            p {
                font-size: 18px;
            }
            a {
                padding: 10px 20px;
                font-size: 16px;
            }
            .container {
                padding: 20px;
            }
        }
        @media (max-width: 480px) {
            h1 {
                font-size: 40px;
            }
            p {
                font-size: 16px;
            }
            a {
                padding: 8px 15px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>408</h1>
        <p>Tiempo de espera agotado</p>
        <a href="/">Volver al inicio</a>
    </div>
</body>
</html>
