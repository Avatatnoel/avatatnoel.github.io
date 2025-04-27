<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>avatatnoel</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #74ebd5, #acb6e5);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: #333;
    }

    .container {
      text-align: center;
      background: white;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.2);
      animation: fadeIn 1.5s ease-in-out;
    }

    .container h1 {
      font-size: 2.5em;
      margin-bottom: 10px;
      color: #444;
    }

    .container p {
      font-size: 1.2em;
      color: #666;
    }

    .loader {
      border: 6px solid #f3f3f3;
      border-top: 6px solid #3498db;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      animation: spin 1s linear infinite;
      margin: 20px auto;
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>🚧 Página en Desarrollo 🚧</h1>
    <div class="loader"></div>
    <p>Estamos trabajando para brindarte una mejor experiencia.<br>¡Vuelve pronto!</p>
  </div>
</body>
</html>
