<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link href="../../../public/style/style.css"/>
    <style>

        body{
            width: 80%;
            margin: 0 10%;
            padding: 0;
            height: 100%;
            font-family: 'Roboto Condensed', sans-serif;
        }

        a{
            outline: none;
            text-decoration: none;
            color: white;
        }

        a:hover {
            outline: none;
            text-decoration: none;
        }

        img{

        }

        h1{
            text-align: center;
            color: white;
            background: #41b783;
            margin: 0;
            padding: 15px;
        }

        form{
            margin: 0;
        }

        button{
            border: none;
        }

        button, input{
            outline: none;
            text-decoration: none;
        }

        button:hover, input:hover{
            outline: none;
            text-decoration: none;
        }

        .tac{
            text-align: center;
        }

        .searchFile, .searchInput{
            width: 100%;
            text-align: center;
            padding: 15px;
            font-size: 20px;
            cursor: pointer;
        }

        .UsersBlock{
            width: 22.34%;
            background: #F08080;
            border-right: 0.5px solid white;
            padding: 20px;
            flex-wrap:wrap;
        }

        .UserName{
            font-size: 20px;
            color: white;
        }

        .UserName div{
            padding: 20px;
            margin: 5px;
            border: 2px solid white;
        }

        .blockAdd {
            text-align: center;
            padding: 16.5px;
            color:white;
            width: 97.7%;
            background: indigo;
            font-size: 20px;
        }

        .blockChange, .blockDelete{
            width: 97%;
            padding: 15px;
            cursor: pointer;
            color: white;
            background: #F08080;
            border: 2px solid white;
        }

        .formAdd{
            margin-top: 22px;
        }

        .formAdd form{
            display: flex;
        }

        .formAdd form input, button{
            width: 100%;
            padding: 20px;
            font-size: 20px;
            text-align: center;
            font-weight: bold;
        }

        .formAdd form div{
            width: 100%;
            text-align: center;
            font-size: 20px;
            padding: 20px;
            border: 1px solid green;
            font-weight: bold;
            color: green;
        }

        .formAdd form button{
            cursor: pointer;
            color: white;
            background: green;
            border: 1px solid green;
            transition: 0.5s ease;
        }

        .formAdd form input{
            border: 1px solid green;
            color: green;
        }

        .formAdd form button:hover{
            color: green;
            background: white;
            transition: 0.5s ease;
            border: 1px solid green;
        }

        .changeDelete{

        }

        .changeDelete form{
            width: 100%;
            margin: 5px;
        }

        .changeDelete form button{
            font-size: 20px;
        }

        .changeDelete form button:hover{
            color: #F08080;
            background: white;
            transition: 0.5s ease;
        }

        .personsFrom{
            display: flex;
        }

        .personsFrom form{
            width: 100%;
        }

        .personsFrom form input{
            width: 100%;
            padding: 20px;
            font-size: 20px;
            text-align: center;
            cursor: pointer;
            background: coral;
            border: none;
            color: white;
        }

        .blockChange{

        }

        .blockDelete{

        }

        .error{
            width: 100%;
            background: red;
            color: white;
            font-size: 20px;
            padding: 20px;
        }
    </style>
</head>

<body>


    <?php echo $content; ?>


</body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</html>