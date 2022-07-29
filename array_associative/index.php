<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>

    <style>
        .kotak {
            width: 60px;
            height: 60px;
            background-color: red;
            text-align: center;
            line-height: 60px;
            margin: 50px;
            transition: 0.7s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<?php 
$angka = [[1,2,3],[4,5,6],[7,8,9]];
?>

<?php foreach ($angka as $a) :?>
    <?php foreach ($a as $b) :?>
        <div class="kotak"><?php echo $b ?></div>
    <?php endforeach;?>
    <div class="clear"></div>
<?php endforeach;?>
</body>
</html>