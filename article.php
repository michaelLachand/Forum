<?php
session_start();
require ('actions/question/showArticleContentAction.php');
require ('actions/question/postAnswerAction.php');
require ('actions/question/showAllAnswersOfQuestionAction.php');
?>

<!doctype html>
<html lang="en">
<?php require ('includes/head.php')  ?>
<body>

    <?php require ('includes/navbar.php')  ?>
    <br><br>

    <div class="container">

        <?php
            if(isset($errorMsg)){ echo $errorMsg; }

            if (isset($question_publication_date)) {
                ?>
                <section class="show-content">
                    <h3><?= $question_title; ?></h3>
                    <hr>
                    <p><?= $question_content; ?></p>
                    <hr>
                    <small><?= '<a href="profile.php?id='.$question_id_author. ' ">'.$question_pseudo_author. '</a> ' . $question_publication_date; ?></small>
                </section>
                <br>
                <section class="show-answers">
                    <form class="form-group" method="POST">

                        <label class="mb-3">Réponse :</label>
                        <textarea name="answer" class="form-control"></textarea>
                        <br>
                        <button type="submit" class="btn btn-primary" name="validate">Répondre</button>
                    </form>
                    <br>

                    <?php
                        while($answer = $getAllAnswersOfThisQuestion->fetch()){
                            ?>
                            <div class="card">
                                <div class="card-header">
                                    <a href="profile.php?id=<?= $answer['id_auteur']; ?>">
                                        <?= $answer['pseudo_auteur'] ?>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <?= $answer['contenu'] ?>
                                </div>
                            </div>
                            <br>
                            <?php

                        }

                    ?>



                </section>

                <?php
            }

        ?>

    </div>


</body>
</html>
