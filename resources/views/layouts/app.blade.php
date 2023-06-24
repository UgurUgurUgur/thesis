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

        .music-player {
          position: fixed;
          bottom: 20px;
          right: 20px;
          display: flex;
          align-items: flex-end;
        }

        .play-button {
          background-color: #ffffff00;
          color: #ffffff;
          border: none;
          padding: 10px;
          border-radius: 50%;
          font-size: 24px;
          margin-right: 10px;
        }

        .play-button {
        background-color: #ffffff00;
        color: #ffffff;
        border: none;
        padding: 10px;
        border-radius: 50%;
        font-size: 24px;
      }

      .play-button:hover {
        color: #0a58ca;
      }

      .music-player {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: flex;
        align-items: center; /* Updated */
      }

      .play-button {
        background-color: #ffffff00;
        color: #ffffff;
        border: none;
        padding: 10px;
        border-radius: 50%;
        font-size: 24px;
        margin-right: 10px; /* Added */
      }

      .volume-bar {
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .volume-slider {
        width: 50px; /* Adjust width as needed */
        height: 10px; /* Adjust height as needed */
        background-color: rgba(255, 255, 255, 0.502);
        border-radius: 5px;
        -webkit-appearance: none;
        appearance: none;
        outline: none;
        margin-left: 10px; /* Updated */
        transform: rotate(0deg); /* Updated */
      }

      .volume-slider::-webkit-slider-thumb {
        appearance: none;
        width: 14px;
        height: 14px;
        background-color: white;
        border-radius: 35%;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      .volume-icon {
        color: white;
        font-size: 24px;
        margin-top: 5px; /* Added */
      }

      .glowing-header {
        animation: glowing 2s linear infinite;
      }

      @keyframes glowing {
        0% {
          color: white;
          text-shadow: 0 0 10px #fff;
        }
        50% {
          color: #ffffff00;
          text-shadow: 0 0 15px #ffffff, 0 0 30px #ffffff;
        }
        100% {
          color: white;
          text-shadow: 0 0 10px #fff;
        }
      }

      .speech-box {
        position: relative;
        display: inline-block;
        background-color: #ffffff6f;
        padding: 10px;
        border-radius: 5px;
        margin-top: 10px;
        max-width: 200px;
      }

      .speech-box::after {
        content: "";
        position: absolute;
        bottom: 100%;
        left: 50%;
        margin-left: -10px;
        border-width: 10px;
        border-style: solid;
        border-color: transparent transparent #ffffff transparent;
      }

      .text-center:nth-child(even) .speech-box::after {
        left: auto;
        right: 50%;
        margin-left: 0;
        margin-right: -10px;
        border-color: transparent transparent transparent #ffffff;
      }

      .developer-container {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        margin-bottom: 20px;
      }

      .developer-image {
        margin-right: 20px;
      }

      .developer-image-ugu {
        margin-left: 20px;
      }

      .speech-box-right {
        background-color: #f8f9fa57;
        color: #ffffff;
        padding: 15px;
        border-radius: 10px;
        text-align: left;
        max-width: 800px;
      }

      .speech-box-right .highlight {
        background-image: linear-gradient(to right, #0c54da, #9714d3);
        color: transparent;
        -webkit-background-clip: text;
        background-clip: text;
      }

      .speech-box-right .highlight {
        background-image: linear-gradient(to right, #0c54da, #9714d3);
        color: transparent;
        -webkit-background-clip: text;
        background-clip: text;
        font-weight: bold;
        font-style: italic;
      }

      .speech-box-right .rgb-scroll {
        animation: rgbScroll 2s linear infinite;
      }

      @keyframes rgbScroll {
        0% {
          color: rgb(255, 0, 0);
        }
        33% {
          color: rgb(0, 255, 0);
        }
        66% {
          color: rgb(0, 0, 255);
        }
        100% {
          color: rgb(255, 0, 0);
      }
    }

        .textbox-container {
          display: flex;
          justify-content: center;
        }

        .textbox {
          background-color: #f8f9fa57;
          color: #ffffff;
          padding: 15px;
          border-radius: 10px;
          text-align: left;
          max-width: 800px;
        }

        .textbox .highlight {
          background-image: linear-gradient(to right, #0c54da, #9714d3);
          color: transparent;
          -webkit-background-clip: text;
          background-clip: text;
          font-weight: bold;
          font-style: italic;
        }

</style>
<script type="text/javascript">
const rgbScrollElements = document.querySelectorAll('.rgb-scroll');

rgbScrollElements.forEach(element => {
  const text = element.textContent;
  const colors = ['red', 'green', 'blue'];
  let html = '';

  for (let i = 0; i < text.length; i++) {
    const color = colors[i % colors.length];
    html += `<span style="color: ${color}">${text[i]}</span>`;
  }

  element.innerHTML = html;
});
</script>

  </head>
  <body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>