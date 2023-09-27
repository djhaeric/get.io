<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Enregistrement</title>

<style>
    form {
padding: 10px;
background-color: rgb(245,245,245);
padding: 10px;
border-radius: 10px 10px ;
display: inline-block;
box-shadow: 0px 2px 6px rgba(32,32,32,0.5);
}
form table td {
padding: 5px 10px;
}
input[type="text"],input[type="email"],input[type=
"tel"]{
width: 300px;
height: 30px;
border-radius: 10px;
border: none;
padding-left: 5px;
}
input[type="reset"],input[type="submit"]{
background-color: rgb(0,0,150);
color: white;
border: none;
border-radius: 10px;
padding: 5px 10px;
transition: all 0.5s;
}
input[type="reset"]{
background-color: red;
}
input[type="reset"]:hover,input[type="submit"]:hover{
background-color: rgb(255,128,0);
padding: 5px 25px;
font-size: 15px;
font-weight: bolder;
border-radius: 20px;
cursor: pointer;
}

</style>

</head>
<body>
    <h1 style="text-decoration: underline;">
    <center>Formulaire des participants</center>
</h1>
 <center>
 <form method="post" action="recovery.php">
 <table>
 <tr>
 <td>Nom du participant <span style="color:red;">*</span> : </td> 
 <td><input type="text" name="nom" required=""></td>
 </tr>
 <tr>
 <td>Prénoms du participant<span style="color:red;">*</span> : </td> <td><input type="text" name="prenoms" /></td>
 </tr>
 <tr>
 <td>N° de téléphone du participant<span style="color:red;">*</span> : </td> <td><input type="tel" name="tel" required="" /></td>
 </tr>
 <tr>
 <td>Email participant<span style="color:red;">*</span>: </td> <td><input type="email" name="email" placeholder="ex2@gmail.com" /></td></tr>
 <tr>
 <td><input type="reset" value="Annuler" /></td> 
 <td><input type="submit" value="Valider"/></td>
 </tr>
 </table>
 <p class="erreur_message">
            <?php
            // si la variable message existe , affichons son contenu
            if (isset($message)) {
                echo $message;
            }
            ?>

        </p>
 </form>
 </center>
</body>
</html>