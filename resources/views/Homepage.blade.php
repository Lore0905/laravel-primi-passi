<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
    <style>
        h1{
            color:red;
            padding: 50px;
            background-color: black;
            text-align: center
        }
        a{
            text-decoration: none;
            color: white;
        }
        /* nav */
        nav{
            background-color: rgb(19, 18, 18);
            width: 100%;
            height: 60px;
        }  
        li{
            list-style-type: none;
            font-size: 20px;
            margin-right: 30px;
        }
        li:hover a{
            padding: 10px;
            background-color: red;
            border-radius: 10px
        }
        ul{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%
        }
        
        
    </style>

    <header>
        <div>
            <h1>HELLO WORLD</h1>
        </div>
        {{-- nav --}}
        <nav>
            <ul>
                <li>
                    <a href="/data">Ideatore</a>
                </li>
                <li>
                    <a href="/text">text</a>
                </li>
            </ul>
        </nav>
    </header>
    
    
</body>
</html>