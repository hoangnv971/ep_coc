<!DOCTYPE html>
<html lang="vi">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        @page { margin: 0px; }
        body { margin: 8px 24px }
        @font-face {
            font-family: roboto-black;
            src: url('/font/roboto/Roboto-Black.tff');
        }
        .box-list{
            font-size: 5px;
            font-family: DejaVu Sans, sans-serif;
            display: inline-table;
            justify-content: center;

        }

        .box-card{
            width: 219px;
            height: 175px;   
            color:white;
            text-align: center;
            background-position: center;
            border: 1px solid #002D86;
            border-radius: 2px; 
            position: relative;
            z-index: 1;
        }
        .background{
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1;
        }
        .box-header{
            padding: 0px 7px 0;
            margin-top: 5px;
        }
        .z-index{
            z-index: 10;
        }
        .box-header h3{
            font-weight: bold;
            margin-bottom: 0px;
            font-size: inherit;
        }

        .box-header .address{
            /* font-size: 11px; */
        }

        .box-header p{
            margin: 0;
        }

        .before-body{
            margin-top: 5px;
            color : #002D86;
            font-size: 8px;
            font-weight: bold;
        }
        .box-body .qr-code{
            margin-left:13px;
            margin-right: 13px;
        }
        .box-body .qr-code a{
            display: block;
        }
        .box-body .qr-code.image-left{
            float: left;
            margin-top:9px; 
        }
        .box-body .qr-code.image-left .qr-text{
            color:red;
            font-weight: bold;
            font-size: 7px;
            text-align: center;
        }
        .box-body .qr-code.image-right{
            float: right;
            margin-top:9px;
        }

        .box-body .qr-code.image-right a{
            padding: 3px;
            background: #fff;
        }
        .box-footer{
            padding-top: 3px;
            clear: both;
        }
        .box-footer .quotes{
            font-weight: bold;
            font-size: 8px;
        }
        .box-card .information{
            color: #002D86;
            text-align: left;
            font-weight: bold;
            margin-top:2x;
        }
        .info-detail{
            float: left;
            width: 50%;
        }
        .info-left{
            padding-left: 12px;
        }
        .info-right{
            padding-right: 12px;
            margin-left: -12px; 
        }

        .info-detail p{
            margin-bottom: 0;
        }
        .last-quotes{
            color:red;
            font-weight: bold;
            text-align: center;
            clear: both;
        }
    </style>
</head>
<body>
    <div class="container">
        @foreach ($listCodes as $code)
            @include('layouts.layout_qr', ['code' => $code, 'logoPath' => $logoPath])
        @endforeach
    </div>
</body>
</html>