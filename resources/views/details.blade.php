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
        body{
            background-color: black
        }
        li {
            color: white;
            padding: 50px;
            background-color: rgb(57, 57, 232);
            font-size: 25px;
            margin: 20px 0;
        }
    </style>
    <div>
        <ul>
            <li>
                name: {{$name}}
            </li>
            <li>
                lastname: {{$lastname}}
            </li>
            <li>
                age: {{$age}}
            </li>
        </ul>
    </div>
    
</body>
</html>