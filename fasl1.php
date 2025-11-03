<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body dir="rtl">

<?php
$x=53;
$y=62;

$equal = ($x !== $y);
$less = ($x < $y);
$greater = ($x > $y);

?>
<center>
<table border="1" cellpadding="20" cellpacing="15">
<tr>
    <th>اجرا</th>
        <th>مثال</th>
            <th>عملگر</th>
</tr>
<tr>
    <td><?php echo $equal; ?></td>
        <td>x !== y </td>
            <td>==!</td>
</tr>
<tr>
    <td><?php echo $less; ?></td>
        <td>x < y </td>
            <td> > </td>
</tr>
<tr>
    <td><?php echo $greater; ?></td>
        <td>x > y </td>
            <td> < </td>
</tr>
</table>              
</center>

</body>
</html>