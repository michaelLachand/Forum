<?php
   session_start();
   require ('actions/question/showAllQuestionsAction.php');
?>
<!doctype html>
<html lang="en">
<?php include ('includes/head.php'); ?>
<body>
    <?php include ('includes/navbar.php') ?>
    <br><br>

    <div class="container">

        <form method="GET">
            <div class="form-group row">

                <div class="col-8">
                    <input type="search" name="search" class="form-control">
                </div>
                <div class="col-4">
                    <button class="btn btn-success" type="submit">Rechercher</button>
                </div>

            </div>
        </form>

        <br>

        <?php
             while($question = $getAllQuestions->fetch()) {
                  ?>
                 <div class="card">
                     <div class="card-header">
                         <a href="article.php?id=<?php echo $question['id']; ?>">
                             <?php echo $question['titre']; ?>
                         </a>
                     </div>
                     <div class="card-body">
                         <?php echo $question['description']; ?>
                     </div>
                     <div class="card-footer">
                         Publié par <a href="profile.php?id=<?= $question['id_auteur']; ?>"> <?php echo $question['pseudo_auteur']; ?></a> le  <?php echo $question['date_publication']; ?>
                     </div>
                 </div>
                 <br>
                  <?php
             }
        ?>

    </div>

</body>
</html>
