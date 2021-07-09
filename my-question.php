<?php
    require('actions/user/securityAction.php');
    require ('actions/question/myQuestionsAction.php');
?>

<!doctype html>
<html lang="en">
<?php include ('includes/head.php')?>
<body>
    <?php include 'includes/navbar.php' ?>

    <br><br>
    <div class="container">

    <?php

        while ($question =  $getAllMyQuestions->fetch()) {
            ?>
            <div class="card">
                <h5 class="card-header">
                    <?php echo $question['titre']; ?>
                </h5>
                <div class="card-body">

                    <p class="card-text">
                        <?= $question['description']; ?>
                    </p>
                    <a href="#" class="btn btn-primary">Accéder à la question</a>
                    <a href="edit-question.php?id=<?= $question['id']; ?>" class="btn btn-warning">Modifier la question</a>
                </div>
            </div>
            <br>
            <?php
        }

    ?>

    </div>

</body>
</html>