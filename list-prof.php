<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstdap-icons@1.10.5/font/bootstdap-icons.css">
    <link rel="stylesheet" href="css/ajouter-prof.css">
    <link rel="stylesheet" href="css/liste-prof.css">
    <title>login</title>
</head>
<body>

<section class="home">
<?php include 'sidebar.php';?> 



<div class="navigation-pages">
<?php include 'navigation.php'; ?>

<div class="table-box">
<table>
<Thead> 
        <th></th> 
        
        <th> ملاحظة</th> 
        <th> الوضعية</th>   
        <th> إطار نظامي للأكاديمية</th> 
        <th> مجموع النقط</th> 
        <th> تاريخ التوظيف أو التخرج</th> 
        <th> تاريخ التعيين بالمؤسسة</th> 
        <th> تاريخ التعيين بالمديرية</th> 
        <th> تاريخ الازدياد</th> 
        <th> رقم البطاقة الوطنية</th> 
        <th> رقم التأجير</th> 
        <th> الاسم الكامل</th>
        <th> المؤسسة</th>
</Thead>

<tbody>
    <?php

    include 'config.php';
    $res = $conn->query("SELECT * FROM test");
    while($row= $res->fetch_array()){
    ?>
<tr><td class="icon">
    <a href=""><i class="bi bi-pencil-square"></i></a>
    <a href=""><i class="bi bi-trash"></i></a>
    <a href=""><i class="bi bi-eye"></i></i></a>
</td>
    <td><?= $row[1];?></td>
    <td><?= $row[2];?></td>
    <td><?= $row[3];?></td>
    <td><?= $row[3];?></td>
    <td><?= $row[3];?></td>
    <td><?= $row[3];?></td>
    <td><?= $row[3];?></td>
    <td><?= $row[3];?></td>
    <td><?= $row[3];?></td>
    <td><?= $row[3];?></td>
    <td><?= $row[3];?></td>
    <td><?= $row[3];?></td>
   
    
<?php }?>

 
    

</tbody>
</table>
</div>

    <div class="print">
                
        <a class="del" href="">imprimer la liste</a>
          
    </div>

</div>
</section>



</body>
</html>