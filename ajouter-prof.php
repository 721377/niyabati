<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/ajouter-prof.css">
    <title>login</title>
</head>
<body>

<section class="home">
<?php include 'sidebar.php';?> 



<div class="navigation-pages">

<?php include 'navigation.php';?>


<form action="">
           <div class="inputs">
           <input type="text" name="" placeholder="etablissement" id="">
          <input type="text" name="" placeholder="nom et prenom" id="">
          <input type="text" name="" placeholder="N_som" id="">
          <input type="text" name="" placeholder="cin" id="">
          <input type="text" name="" placeholder="date de naissance" id="">
          <input type="text" name="" placeholder="matiere" id="">
          <input type="text" name="" placeholder="date de recrutement" id="">
          <input type="text" name="" placeholder="status" id="">
          <input type="text" name="" placeholder="remarque" id="">
          <input type="text" name="" placeholder="nom" id="">
         
        </div>

        <div class="submit">
            <input type="submit" value="Importer liste excel">
            <div class="del-save">
                <a class="del" href=""> supprimer</a>
                <a class="save" href=""> enregistrer</a>
            </div>
        </div>

</form>
</div>
</section>



</body>
</html>