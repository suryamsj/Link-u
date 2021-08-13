<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Link U - Link tidak ditemukan</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');

        :root {
            --biru1: #F2F7FF;
            --biru2: #d9dee6;
        }

        body,
        html {
            margin: 0;
            overflow: hidden;
            position: relative;
        }

        body {
            align-items: center;
            background-image: linear-gradient(to bottom right, var(--biru1), var(--biru2));
            color: #25396F;
            display: flex;
            flex-direction: column;
            font-family: 'Roboto', sans-serif;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }

        .container h1 {
            font-size: 10em;
            margin: 0 0 0.5em;
            line-height: 10px;
        }

        .container p {
            font-size: 1.2em;
            line-height: 26px;
        }

        .container small {
            opacity: 0.7;
        }

        .container a {
            color: #435EBE;
        }

        .circle {
            background-image: linear-gradient(to top right, var(--biru1), var(--biru2));
            border-radius: 50%;
            position: absolute;
            z-index: -1;
        }

        .circle.small {
            top: 200px;
            left: 150px;
            width: 100px;
            height: 100px;
        }

        .circle.medium {
            background-image: linear-gradient(to bottom left, var(--biru1), var(--biru2));
            bottom: -70px;
            left: 0;
            width: 200px;
            height: 200px;
        }

        .circle.big {
            top: -100px;
            right: -50px;
            width: 400px;
            height: 400px;
        }

        @media screen and (max-width: 480px) {
            .container h1 {
                font-size: 8em;
            }

            .container p {
                font-size: 1em;
            }
        }

    </style>
</head>

<body>
    <div class="container">
        <h1>404</h1>
        <p>Link yang anda buka salah atau sudah rusak.</p>
        <small>Silahkan kembali ke halaman <a href="{{ URL::to('/') }}">Awal</a> atau <a
                href="{{ route('register') }}">Daftar</a> akun baru</small>
        <div class="circle small"></div>
        <div class="circle medium"></div>
        <div class="circle big"></div>
    </div>
</body>

</html>
