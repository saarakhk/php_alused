<!doctype html>
<html>
<head>
    <title>Koodi taaskasutamine</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: Verdana, Geneva, sans-serif;
        }
        #pais {
            background-color: #6C9;
            line-height: 100px;
        }
        #jalus {
            background-color: #F93;
            line-height: 30px;
        }
    </style>
</head>
<body>
<?php include('pais.php'); ?>
<div id="sisu">
    <h2>Lorem ipsum</h2>
    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lacinia feugiat mi, ac blandit purus hendrerit vel.</p>
</div>
<?php
    include('jalus.php');
    include_once('jalus.php'); // ei käivitu, kuna on juba olemas
?>
</body>
</html>