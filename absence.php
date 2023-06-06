<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau absence</title>
    <style>
        .container
        {
            border: 0px;
            box-shadow: 5px 5px 10px 1px rgba(0, 0, 0, 0.5);
            margin: auto;
            width: 700px;
            padding-top: 10px;
            padding-bottom: 200px;
        }
        .formContainer
        {
            margin: auto;
            margin-bottom: 30px;
            width: 400px;
        }
        .title
        {
            position: absolute;
            font-size: 10px;
            font-family: Arial, Helvetica, sans-serif;
            margin: 5px;
            color: #694ED6;
        }
        .inputBox
        {
            box-sizing: border-box;
            padding: 15px 200px 10px 5px;
            border-radius: 5px;
            border: 1px solid grey;
            width: 100%;
        }

        .Btn
        {
            color: white;
            border: 0px;
            border-radius: 5px;
            padding: 10px;
        }
        #BtnJustif
        {
            width: 100%;
            background-color: #0095F6;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }
        #BtnEnvoie
        {
            background-color: #694ED6;
            width: 200px;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            position: fixed;
            margin-top: 9%;
            margin-left: 15%;
                }
        .BtnContainer
        {
            margin-top: 20px;
        }
        .inputDate
        {
            box-sizing: border-box;
            width: 100%;
            padding: 15px 0px 10px 0px;
        }
    input[type="date"]:in-range::-webkit-datetime-edit-year-field, input[type="date"]:in-range::-webkit-datetime-edit-month-field, input[type="date"]:in-range::-webkit-datetime-edit-day-field, input[type="date"]:in-range::-webkit-datetime-edit-text { 	color: transparent; }
    </style>
</head>
<body>
    <?php
    include 'config.php';
    $name = $_POST['NomC'];
    $N_Som = $_POST['NSom'];
    $dd = $_POST['dd'];
    $df = $_POST['df'];
    $justif=$_FILES['justificatif']['name'];
    $file_tmp_name=$_FILES['justificatif']['tmp_name']; 
    move_uploaded_file($file_tmp_name,"./Justificatif/$justif");
    

    ?>
    <div class="container">
        <div><center><p style="font-family: Arial, Helvetica, sans-serif; font-weight: bold;">Ajouter un Absence</p></center></div>
        <div>
            <form>
            
            <div class="formContainer">
                <label class="title">Nom Complet</label>
                <input class="inputBox" type="text" name="NomC">
            </div>
            <div class="formContainer">
                <label class="title">N_SOM</label>
                <input class="inputBox" type="text" name="NSom">
            </div>
            <div class="formContainer">
                <label class="title">Date début</label>
                <input class="inputDate"  type="Date" name="dd">
            </div>
            <div class="formContainer">
                <label class="title">Date Fin</label>
                <input class="inputDate" type="Date" name="df">
            <div class="BtnContainer">
                <input id="BtnJustif" class="Btn" type="button" name="justificatif" value="Ajouter justificatif">
            </div>
            <input id="BtnEnvoie" class="Btn" type="submit" value="Envoyer Absence">
            </form>
        </div>
    </div>
<?php
$sql = "INSERT INTO absence (Professeur, N_SOM,DateDebut,DateFin,Justificatif)
VALUES ('$name','$N_SOM','$dd','$df','$justif')";

if (mysqli_query($conn, $sql)) {
  echo "<script> alert('Absence ajouté')</script>;";
} else {
   echo" <script> alert('Veuillez remplir tout les champs')</script>;";
}
?>
</body>
</html>