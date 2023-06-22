<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <style>
        body {
            background: #ffffff;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .button {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background-color: #7e40f6;
            color: #ffffff;
            text-decoration: none;
            font-size: 24px;
            font-weight: bold;
            transition: transform 0.3s ease;
        }

        .button:hover {
            transform: scale(1.1);
        }

        .button i {
            margin-bottom: 10px;
            font-size: 48px;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="#" class="button">
            <i class="fa-solid fa-list-check"></i>
            Create Tasks
        </a>
    </div>
</body>
</html>
