<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to SnapCart</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #0f0f0f;
            color: #00ffcc;
            font-family: 'Orbitron', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        img {
            width: 120px;
            margin-bottom: 20px;
        }
        h1 {
            font-size: 2.5rem;
            text-shadow: 0 0 10px #00ffcc;
        }
    </style>
</head>
<body>
    <img src="{{ asset('assets/logo.svg') }}" alt="SnapCart Logo">
    <h1>Welcome to SnapCart</h1>
    <p>Your cyberpunk commerce engine is live ⚡</p>
</body>
</html>
