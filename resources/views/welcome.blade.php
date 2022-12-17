<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DIGIT DBU</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        html {
            font-family: 'nunito';
        }

        .headi {
            background-color: #2563eb;
            color: white;
            border-radius: 15px;
            padding: 4rem;
        }

        .headi a {
            text-decoration: none;
            padding: .8rem;
            color: black;
            background-color: white;
            border-radius: 15px;
            display: flex;
            align-items: center;
            width: 5%;

        }

        .headi a:hover {
            color: white;
            background-color: black;
        }

        .desc {
            margin-top: 1rem;
            background-color: #2563eb;
            color: white;
            border-radius: 15px;
            padding: 3rem;
        }
    </style>
</head>

<body>
    <div class="headi">
        <h1>PROYECTO DIGITALIZACION</h1>
        <a href="/login">

            <span>Entrar</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" width='20' heigth='20'>
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
            </svg>
        </a>
    </div>

    <div class="desc">
        <p>Proyecto financiado por la Universidad Nacional Santiago Antunez de Mayolo</p>
    </div>
</body>

</html>