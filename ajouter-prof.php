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
            <div class="div" data-open-modal>Importer liste excel</div>
        <div class="del-save">
                <a class="del" href=""> supprimer</a>
                <a class="save" href=""> enregistrer</a>
            </div>

</form>

        <dialog data-modal>
            <form action="uploads.php" method="post" enctype="multipart/form-data">
                <label for="file" class="file"><i class="bi bi-file-earmark-arrow-up"></i>importer votre fichier </label>
                <input type="file" name="excel" id="file" required>
                <div class="butt">
                <input class="imp" type="submit" name="import" value="Importer">
                <button class="anul" type="submit" data-close-modal>annuler</button>
                </div>
            </form>
            </dialog>


<script>

    const open = document.querySelector("[data-open-modal]");
    const close = document.querySelector("[data-close-modal]");
    const model = document.querySelector("[data-modal]");

    open.addEventListener("click",()=>{
        model.showModal();
    });
    close.addEventListener("click",()=>{
        model.close();
    })
</script>
</div>
</section>



</body>
</html>