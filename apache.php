<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $code . ' ' . $title ?></title>
    <meta name="robots" content="noindex, nofollow">
    <style>
        html, body {
            height: 99.9%;
            padding: 0;
            margin: 0;
            text-align: center;
            font-size: 24px;
            line-height: 1.2em;

            background: #f3f3f3;
            background: -moz-linear-gradient(top,  #f4f4f4 0%, #ededed 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f4f4f4), color-stop(100%,#ededed));
            background: -o-linear-gradient(top,  #f4f4f4 0%,#ededed 100%);
            background: -ms-linear-gradient(top,  #f4f4f4 0%,#ededed 100%);
            background: linear-gradient(to bottom,  #f4f4f4 0%,#ededed 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f4f4f4', endColorstr='#ededed',GradientType=0 );

            color: #222;
            font-family: 'Open Sans Condensed', sans-serif;
            overflow: hidden;
        }
        #wrapper {
            position: absolute;
            top: 0;
            left: 0;
            height: 90%;
            width: 100%;
        }

        h1 {
            text-shadow: 1px 1px 0px #ccc;
        }
    </style>
    <link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
</head>
<body>
    <table id="wrapper">
        <tr>
            <td style="vertical-align:middle">
                <h1><?php echo $code . ' ' . $title ?></h1>

                <div>
                  <p><?php echo $description ?></p>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>
