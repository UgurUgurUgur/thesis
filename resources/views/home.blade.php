<head>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <style>
        body {
            background: #7e40f6;
            background: -webkit-linear-gradient(to right, rgba(126, 64, 246, 1), rgba(80, 139, 252, 1));
            background: linear-gradient(to right, rgba(126, 64, 246, 1), rgba(80, 139, 252, 1));
        }
    </style>
</head>
@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <style>
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
            width: 250px;
            height: 250px;
            border-radius: 20px;
            background-color: rgba(255, 255, 255, 0.2);
            color: #ffffff;
            text-decoration: none;
            font-size: 32px;
            font-weight: bold;
            transition: transform 0.3s ease;
        }

        .button:hover {
            transform: scale(1.1);
            color: #600aeb; /* Change the text color on hover */
        }

        .button i {
            margin-bottom: 10px;
            font-size: 64px;
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
