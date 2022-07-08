<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    #multi {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

#multi td, #multi th {
  border: 1px solid #ddd;
  padding: 8px;
}

#multi tr:nth-child(even){background-color: #f2f2f2;}

#multi tr:hover {background-color: #ddd;}

#multi th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

</style>
</head>
<body>
    <table id="multi">
        <?php for($row=1;$row<=10;$row++)
        { ?>
            <tr>
                <?php for($col=1;$col<=10; $col++)
                { 
                    $result = $row * $col;
                    ?>
                    <td><?php echo $result ?></td>
             <?php } ?>
            </tr>
    <?php } ?>
    </table>
</body>
</html>