<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/importation.css">
    <link rel="stylesheet" href="css/bureau-conges.css">    
    <!-- <link rel="stylesheet" href="css/ajout-importation.css"> -->
    <title>importation</title>
</head>
<body>

<section class="home">
<?php include 'sidebar-bureau-conges.php';?> 


<h1 class="h1">مكتب الرخص</h1>
<div class="navigation-pages">

<?php include 'navigation.php';?>


<form action="">
           <div class="inputs">
           <input type="text" name="رقم التاجير" placeholder="رقم التاجير" id="">
          <input type="text" name="الاسم و النسب" placeholder="الاسم و النسب" id="">
          <input type="text" name="تاريخ الدخول" placeholder="تاريخ الدخول" id="">
          <input type="text" name="المحتوى" placeholder="المحتوى" id="">
          <input type="text" name="المسؤول" placeholder="المسؤول" id="">
          <input type="text" name="تاريخ الاستلام" placeholder="تاريخ الاستلام" id="">
          <input type="text" name="اخر" placeholder="اخر" id="">
          
         
        </div>

        <div class="submit">
           
            <div class="del-save">
                <a class="del" href="bureau-conges.php"> retour</a>
                <a class="save" href="bureau-conges.php"> enregistrer</a>
            </div>
        </div>
       

</form>
</div>
</section>



</body>
</html>