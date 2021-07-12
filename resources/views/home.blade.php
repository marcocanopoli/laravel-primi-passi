<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <title>Home</title>
    </head>
    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html, body {
            font-family: 'Roboto', sans-serif;
            height: 100vh;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-grow: 1;
        }

        header, footer {
            margin: 30px 0;
            text-align: center;
        }

        ul {
            list-style: none;
        }

        li{
            display: inline-block;
            margin: 10px 30px; 
        }

        a {
            text-decoration: none;
            color: chocolate;
        }

        h1 {
            font-size: 120px;
        }

        .container {
            width: 70%;
            margin: 0 auto;
        }
        
    </style>
    <body>
        @include('partials.header');

        <main>
            <h1>My first Laravel project</h1>
        </main>

        @include('partials.footer');
    </body>
</html>