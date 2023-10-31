<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>USD para BRL</title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/latest/normalize.css">
    <style>
        body{
            background: #f0f0f0;
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI","Noto Sans",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji";
        }
        .content{
            max-width: 70vw;
            margin: 0 auto;
        }
        .width-100{
            width: 100%;
        }
        input, select, textarea{
            padding: 5px 10px;
            line-height: 1;
            border-radius: 3px;
            border: 1px solid #666;
        }
    </style>
</head>
<body>
    <div class="content">
        {{ $slot }}
    </div>
</body>
</html>