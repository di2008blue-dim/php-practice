<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$count =4;
$base =1000000;
$increase =500000;

$final =($base + $increase) * $count;
?>

<center>
<table border="1" cellpadding="20" cellpacing="15">
<tr>
     <th>تعداد</th>
         <th>قیمت اولیه</th>
            <th> افزایش قیمت</th>
                <th>قیمت نهایی</th>
</tr>
<tr>
    <td><?php echo $count;?></td>
        <td><?php echo $base;?></td>
            <td><?php echo $increase;?></td>
                <td><?php echo $final;?></td>
</tr>
</table>
</center>

</body>
</html>