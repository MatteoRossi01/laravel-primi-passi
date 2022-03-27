<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <style>
        * {
           margin: 0;
           padding: 0;
           box-sizing: border-box;
       }

       header {
           width: 100%;
           height: 70px;
           background-color: rgb(82, 226, 245);
           display: flex;
           flex-direction: row;
           align-items: center;
       }

        main {
            display: flex;
            justify-content: center;
        }

        main h2 {
            margin-top: 250px;
        }

        a {
            color: #000;
            text-decoration: none;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <header>
        <a href="http://127.0.0.1:8000/">Home</a>
    </header>

    <main>
        <h2>{{$stringa}}</h2>
    </main>
</body>
</html>