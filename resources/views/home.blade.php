<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
       }

       div {
           display: flex;
           flex-direction: row;
           align-items: center;
       }

       div h1 {
           font-size: 32px;
       }

       ul {
            display: flex;
           flex-direction: row;
       }

       div ul li{
            display: inline;
            margin-left: 10px;
            font-size: 20px;
            
        }
        div ul li a {
            color: #000;
            text-decoration: none;
            text-transform: uppercase;
        }

        main {
            display: flex;
            justify-content: center;
        }

        main h2 {
            margin-top: 250px;
        }

    </style>
</head>
<body>
    <header>
        <div>
            <h1>Laravel</h1>

            <ul>
                <li><a href="http://127.0.0.1:8000/">home</a></li>
                <li><a href="http://127.0.0.1:8000/scopri">scopri</a></li>
                <li><a href="http://127.0.0.1:8000/contatti">contatti</a></li>
            </ul>
        </div>
    </header>

    <main>
        <h2>{{$stringa}}</h2>
    </main>
</body>
</html>