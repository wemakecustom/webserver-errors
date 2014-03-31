HTTP/1.0 <?php echo $code ?> <?php echo $title ?>

Cache-Control: no-cache
Connection: close
Content-Type: text/html

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
            background: #F2F2F2;
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
