<?php 
    require('actions/users/securityAction.php'); 
    require('actions/questions/publishQuestionAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body class="bg-dark">
    <?php include 'includes/navbar.php'; ?>

    <br><br>
    <form class="container" method="POST">

        <?php 
            if(isset($errorMsg)){ 
                echo '<p class="text-white">'.$errorMsg.'</p>'; 
            }elseif(isset($successMsg)){ 
                echo '<p class="text-white">'.$successMsg.'</p>'; 
            }
        ?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-white">Titre de la question</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-white">Description de la question</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-white">Contenu de la question</label>
            <textarea type="text" class="form-control" name="content"></textarea>
        </div>

        <button type="submit" class="btn btn-success" name="validate">Publier la question</button>
   </form>
</body>
</html>