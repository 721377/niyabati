<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- font-awesome icon cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/importation.css">
    <link rel="stylesheet" href="css/bureau-controle.css">
    <title> مكتب مراقبة الموظفين و اعادة الانتشار</title>
</head>
<body>
<?php //include 'header2.php';?> 

<section class="home">
<?php include 'sidebar-bureau-controle.php';?> 

        <h1 class="h1"> مكتب مراقبة الموظفين و اعادة الانتشار</h1>
<div class="navigation-pages">
<?php include 'navigation.php'; ?>

<div class="table-box">
<table>
<Thead> 
            <th></th> 
        <th> </th>
        <th>تاريخ الضبط</th>
        <th> </th>
        <th>تاريخ انتهاء المعالجة</th>
        <th> </th>
        <th>تاريخ الاستلام</th>
        <th>المسؤول </th>
        <th>المحتوى</th>
        <th>تاريخ الدخول</th>
        <th>الاسم و النسب</th>
        <th>رقم التاجير</th>
        
</Thead>

<tbody>
            <tr>
            <td>
            <a href="http://"><i class="bi bi-trash"></i></a> 
            <a href="http://"><i class="bi bi-pencil"></i></a>
              </td>
        
    <td>
        <input type="checkbox" name="exporte" id="exporte">
    </td>
    <td>المؤسسة</td>
    <td>
        <input type="checkbox" name="traite" id="traite">
    </td>
    <td>المؤسسة</td>
     <td>
        <input type="checkbox" name="importe" id="importe">
    </td>
    <td>المؤسسة</td>
    <td>المؤسسة</td>
    <td>المؤسسة</td>
    <td>المؤسسة</td>
    <td>المؤسسة</td>
    <td>المؤسسة</td>
    </tr>

    <tr>
    <td>
    <a href="http://"><i class="bi bi-trash"></i></a> 
    <a href="http://"><i class="bi bi-pencil"></i></a>
    </td>
    <td>
        <input type="checkbox" name="exporte" id="exporte">
    </td>
    <td>المؤسسة</td>
    <td>
        <input type="checkbox" name="traite" id="traite">
    </td>
    <td>المؤسسة</td>
     <td>
        <input type="checkbox" name="importe" id="importe">
    </td>
    <td>المؤسسة</td>
    <td>المؤسسة</td>
    <td>المؤسسة</td>
    <td>المؤسسة</td>
    <td>المؤسسة</td>
    <td>المؤسسة</td>
    </tr>
</tbody>
</table>
</div>
        <div class="submit">
            <input type="submit" value="Importer liste excel">
            <div class="del-save">
            <a class="del" href="bureauFc.php"><i class="bi bi-arrow-clockwise"></i>&nbsp; Retour</a>
                <a class="save" href="ajouter-bureau-controle.php"> <i class="bi bi-plus"></i>&nbsp; Ajouter</a>
            </div>
        </div>
</div>
</section>

</body>
</html>