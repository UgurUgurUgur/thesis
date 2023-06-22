<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    {{-- font awesome --}}
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  <style>
      a.todolist {
          background-color: #ffffff40;
          color: white;
          padding: 7px;
          display: block;
          border-radius: 6px;
          margin-top: 6px;
          text-decoration: none;
      }

        a.todolist:hover {
          background-color: #ffffff60;
      }

      a.delete-link {
          float: right;
          margin-top: -27px;
          margin-right: 13px;
      }
      .footer {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: rgba(255, 255, 255, 0);
        padding: 20px;
      }

      .developer-img {
        width: 150px;
        height: 150px;
        object-fit: cover;
      }

      .mask-custom {
        background: rgba(24, 24, 16, 0.2);
        border-radius: 2em;
        backdrop-filter: blur(25px);
        border: 2px solid rgba(255, 255, 255, 0.05);
        background-clip: padding-box;
        box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
      }

      .fa-beat {
        animation: beat 0.7s infinite alternate;
      }
      @keyframes beat {
        from {
          transform: scale(1);
        }
        to {
          transform: scale(1.2);
        }
      }

      .top-right {
          position: absolute;
          top: 10px;
          right: 10px;
      }

      .top-left {
          position: absolute;
          top: 10px;
          left: 10px;
      }

      .nav-button {
          display: inline-block;
          margin-right: 10px;
          padding: 5px;
          color: #ffffff;
          text-decoration: none;
          font-size: 18px;
          font-weight: bold;
      }

      .nav-button i {
          margin-right: 5px;
      }

      body {
            background: #7e40f6;
            background: -webkit-linear-gradient(to right, rgba(126, 64, 246, 1), rgba(80, 139, 252, 1));
            background: linear-gradient(to right, rgba(126, 64, 246, 1), rgba(80, 139, 252, 1));
            color: #ffffff;
        }

        .gradient-custom-2 {
            background-color: transparent;
        }

        .text-black {
            color: #000000;
        }
        
        .task-title {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 1px;
        }

        .priority {
            margin-bottom: 50px;
        }

        .description-container {
            margin-bottom: 5px;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            padding: 10px;
        }

        .badge {
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
            color: #ffffff;
        }

        .bg-danger {
            background-color: #dc3545;
        }

        .bg-warning {
            background-color: #ffc107;
        }

        .bg-success {
            background-color: #28a745;
        }

        .description-label {
            font-weight: bold;
            color: #ffffff;
        }

        .description-text {
            color: #ffffff;
            font-weight: bold;
        }

        .return-button {
            margin-top: 20px;
            display: inline-block;
            padding: 10px 20px;
            background-color: rgba(255, 255, 255, 0.2);
            color: #000000;
            border-radius: 5px;
            text-decoration: none;
            transition: opacity 0.3s ease;
        }

        .return-button:hover {
            opacity: 0.9;
        }

        .return-button i {
            font-size: 19px;
        }

</style>
  
  </head>
  <body>
   
  @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>