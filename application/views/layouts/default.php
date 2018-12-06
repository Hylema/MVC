<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link href="../../../public/style/style.css"/>
    <style>
        body{
            padding: 0;
            width: 80%;
            margin-left: 10%;
            margin-right: 10%;
        }

        button{
            outline: none;
            text-decoration: none;
            cursor: pointer;
            text-align: center;
            background: #41b783;
            width: 100%;
            color: white;
            font-size: 20px;
            border: 1px solid black;
        }

        input{
            background: #edeef0;
            border: none;
            font-size: 18px;
            border: 1px solid black;
        }

        input:hover {
            outline: none;
            text-decoration: none;
        }

        form{
            width: 100%;
            display: flex;
            margin: 0;
        }

        form div, input{
            width: 100%;
            display: flex;
            padding: 15px;
            text-align: center;
        }

        h2{
            text-align: center;
            background: indigo;
            margin: 0;
            padding: 20px;
            color: white;
        }

        a{
            text-decoration: none;
            outline: none;
        }

        a:hover {
            text-decoration: none;
            outline: none;
            color: #41b783;
        }

        .content{
            width: 100%;
        }

        .blockContent{
            width: 33%;
            text-align: center;
            border: 1px solid silver;
            font-size: 20px;
            float: left;
        }

        .blockContent:hover{
            background: #41b783;
            transition: 0.3s ease;
            cursor: pointer;
            color: white;
        }

        .search{
            width: 70%;
            font-size: 18px;
            text-align: center;
            color: white;
            outline: none;
            text-decoration: none;
        }

        .btn{
            width: 30%;
        }

        .addContent{
            width: 100%;
            padding: 20px;
            background: #41b783;
            color: white;
            font-size: 20px;
            cursor: pointer;
        }

        .change{
            width: 50%;
            background: yellow;
            padding: 20px;
            color: black;
            font-size: 15px;
        }

        .delete{
            width: 50%;
            background: #F08080;
            padding: 20px;
            color: black;
            font-size: 15px;
        }

        .mainIndex a{
            font-size: 20px;
        }
    </style>
</head>

<body>


    <?php echo $content; ?>


</body>

</html>