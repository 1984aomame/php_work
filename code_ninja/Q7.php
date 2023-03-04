<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $list = [
            "JavaScript",
            "python",
            "PHP",
            "Ruby",
            "Perl"
        ];
    ?>
    <ul>
        <?php foreach($list as $key => $val): ?>
        <li><?php echo $val; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

