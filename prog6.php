<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="1">
    <title>Digital Clock</title>
    <style>
        body {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: black;
            color: white;
            font-size: 80px;
        }
        body:hover
        {
          color:red;
          transform:scale(2.0);
        }
    </style>
</head>
<body>
  <div>
    <?php
    date_default_timezone_set("Asia/calcutta");
        echo date("d:m:y:::h:i:s:a");
    ?>
    </div>
</body>
</html>
