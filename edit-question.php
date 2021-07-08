<?php
  require('actions/question/getInfosOfEditedQuestionAction.php');
  require('actions/user/securityAction.php');
?>

<!doctype html>
<html lang="en">
<?php include ('includes/head.php'); ?>
<body>
    <?php include ('includes/navbar.php'); ?>

    <br><br>
    <div class="container">
        <?php
            if(isset($errorMsg)){
                echo '<p>'.$errorMsg.'</p>';
            }
        ?>

        <?php
            if(isset($question_date)){
                ?>
                <form method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Titre de la question</label>
                        <input type="text" class="form-control" name="title" value="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Description de la question</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Contenu de la question</label>
                        <textarea class="form-control" name="content"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="validate">Modifier la question</button>
                </form>
                <?php
            }
        ?>


    </div>

</body>
</html>
