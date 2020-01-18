<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1 class="text-center form-control">CALCULETTE V1</h1>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

 <?php if (!empty($resultat)){ ?>

     <div class="container">
         <div class="row">
             <div class="col-md-4"></div>
             <div class="col-md-4">
                 <h4>RESULTAT </h4>
                 <p class="form-control"><?php echo $resultat?></p>
                 <a href="index.php" class="btn btn-default">Retour à la calculette</a>
             </div>
             <div class="col-md-4"></div>
         </div>
     </div>
<?php }else{?>
     <div class="container">
         <div class="row">
             <div class="col-md-2"></div>
             <div class="col-md-4">
                 <h4>SIMPLE</h4>
                 <form action="index.php" method="POST">
                     <input type="hidden"  name="simple" value="simple">
                     <label for="nb_1">Nombre 1</label>
                     <input type="number" class="form-control" name="nb_1"> <br>
                     <label for="operator">Operateur</label>
                     <select name="operator" id="operator" class="form-control">
                         <option value="add" class="form-control">ADDITION</option>
                         <option value="mul" class="form-control">MULTIPLICATION</option>
                         <option value="sub" class="form-control">SOUSTRACTION</option>
                     </select> <br>
                     <label for="nb_2">Nombre 2</label>
                     <input type="number" name="nb_2" class="form-control"> <br>
                     <input type="submit" name="calculer" value="calculer" class="btn btn-default">
                 </form>
             </div>
             <div class="col-md-4">
                <h4>AVANCER</h4>
                <p> Calculer la moyenne: <br>
                  Saisir les nombres en les séparants par une virgule EX : 12.5,12</p>
                 <form action="index.php" method="POST">
                     <input type="hidden" name="double" value="double">
                     <textarea name="note" id="note" cols="30" rows="10" class="form-control"></textarea> <br>
                     <input type="submit" name="calculer" value="calculer" class="btn btn-default">
                 </form>
 <?php } ?>
             </div>
             <div class="col-md-2"></div>

         </div>
     </div>


	
</body>
</html>