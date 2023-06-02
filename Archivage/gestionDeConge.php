<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <!-- font-awesome icon cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
<?php include 'sidebar-archivage.php';?>

<section class="home">

<div class="navigation-pages">
<div class="navigation">
    <div class="nav-pages">
    <ul >
        <li><a href="list-prof.php">liste</a></li>
        <li><a href="ajouter-prof.php">ajouter prof</a></li>
        <li><a href="liste-absence.php">absence </a></li>
        <li><a href="liste-conges.php">archifage</a></li>
        <li><a href="listeBureau.php">Rédaction</a></li>
    </ul>
    </div>
</div>
</div>
    <form class="form1" id="f1" action="">
        <div>
        <input id="etab" name="etab" type="text" placeholder="رقم المؤسسة">
        </div>
        <div>
        <div class="select-wrapper">
            <select id="select" name="select">
            <option>ابتدائي</option>
            <option>ثانوي اعدادي</option>
              <option>ثانوي تأهيلي</option>
            </select>
         </div>
        </div>
        
        <div>
        <input id="numsom" name="numsom" type="text" placeholder="رقم التاجير">
        </div>
        <div>
        <input id="certif" name="certif" type="text" placeholder="مقر العمل">
        </div>
        <div>
        <input id="certif" name="certif" type="text" placeholder="الشواهد">
        </div>
      <div>
        <input type="number" id="num" name="num" placeholder="رقمها">
      </div>
      <div>
        
        <input type="text"  name="duree" id="duree" placeholder="مدتها">
        
      </div>
      <div>
       
        <input id="date1" name="date1" type="datetime-local" placeholder=":مؤرخة ب">
      </div>
      <div>
        <input id="datefin" name="datefin" type="datetime-local" placeholder="تنتهي بتاريخ">
      </div>
    </form>



<form action="" class="form2" id="f2">
     
      <div>       
        <input id="medcin" name="medcin" type="text" placeholder="القرارات">
      </div>
      <div> 
        <input id="ce" name="ce" type="text" placeholder=" الفحص المضاد">
      </div>
      <div>
      <input id="decisCE" name="decisCE" type="text" placeholder="تقرير الفحص المضاد">
      </div>
      <div>
      <input id="numdateAcademie" name="numdateAcademie" type="text" placeholder="رقم و تاريخ الارسال الى الاكاديمية">
      </div>
      <div>
      <input id="remarque" name="remarques" type="text" placeholder="الملاحظات">
      </div>
      <div>
      <input id="numvisa" name="numvisa" type="text" placeholder="رقم التاشيرة">
      </div>
      <div>
      <input id="dateenvoi" name="dateenvoi" type="datetime-local" placeholder="تاريخ الارسال الى الاكاديمية">
      </div>
      <div>
        
        <input id="file" name="file" type="file" multiple="" >
        <ul id="file-list">

        </ul>
      </div>
      <div><button type="button" class="btn1 ">Importer liste exel</button></div>
      <button type="button" class="btn btn-outline-primary">Enregistrer</button>
      <button type="button" class="btn btn-outline-danger">Supprimer</button>
    </form>

    <script>
      const fileInput = document.querySelector('#file');
      const fileList = document.querySelector('#file-list');

      fileInput.addEventListener('change', updateFileList);

      function updateFileList() {
        while(fileList.firstChild) {
          fileList.removeChild(fileList.firstChild);
        }

        let curFiles = fileInput.files;

        if(!(curFiles.length === 0))  {
          for(let i = 0; i < curFiles.length; i++) {
            const listItem = document.createElement('li');
            listItem.textContent = 'File name: ' + curFiles[i].name + '; file size ' + returnFileSize(curFiles[i].size) + '.';
            fileList.appendChild(listItem);
          }
        }
      }

      function returnFileSize(number) {
        if(number < 1024) {
          return number + 'bytes';
        } else if(number >= 1024 && number < 1048576) {
          return (number/1024).toFixed(1) + 'KB';
        } else if(number >= 1048576) {
          return (number/1048576).toFixed(1) + 'MB';
        }
      }
    </script>



</section>
</body>
</html>