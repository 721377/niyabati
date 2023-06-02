<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/bureauFc.css">
    <link rel="stylesheet" href="css/importation.css">
    <title>login</title>
</head>
<body>
<?php include 'sidebar-redaction.php';?> 

<div class="navigation-pages">
<?php include 'navigation.php'; ?>
        
<div class="select-wrapper1">
        <select id="select" name="select" onchange="location = this.value;"><label>خصاص مؤقت</label>
            <option onclick="this.parentElement.style.display='none';">خصاص مؤقت</option>
            <option value="bureau-controle.php">ولادة</option>
            <option value="bureau-controle.php"> مرض</option>
              <option value="bureau-controle.php"> اخر</option>
          </select>
         </div>
</div>
<div class="select-wrapper2">
        <select id="select" name="select" onchange="location = this.value;"><label>خصاص فعلي </label>
            <option onclick="this.parentElement.style.display='none';">خصاص فعلي</option>
            <option value="bureau-controle.php">وفاة </option>
            <option value="bureau-controle.php"> انتقال</option>
            <option value="bureau-controle.php"> ناتج عن البنية</option>
              <option value="bureau-controle.php"> اخر</option>
          </select>
         </div>
</div>
<button id="bt1" type="button" class="btn2" >Retour </button>

</div>
</body>
</html>