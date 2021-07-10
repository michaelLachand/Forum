<?php
    session_start();
    require ('actions/user/showOneUserProfile.php');
?>
<!doctype html>
<html lang="en">
<?php require ('includes/head.php') ?>

<body>
    <?php require ('includes/navbar.php') ?>
    <br><br><br>

    <div class="container">
    <?php
        if(isset($errorMsg)) { echo $errorMsg; }

        if(isset($getHisQuestions)) {

            ?>
            <div class="card">
                <div class="card-body">
                    <h4><?= $user_pseudo; ?></h4>
                    <hr>
                    <p><?= $user_lastname . ' ' . $user_firstname; ?></p>
                </div>
            </div>
            <br>
            <?php

              while( $question = $getHisQuestions->fetch()){
                  ?>
                  <div class="card">
                      <div class="card-header">
                          <?= $question['titre']; ?>
                      </div>
                      <div class="card-body">
                          <?= $question['description']; ?>
                      </div>
                      <div class="card-footer">
                          Par  <?= $question['pseudo_auteur']; ?> le  <?= $question['date_publication']; ?>
                      </div>
                  </div>
                  <br>

                  <?php

            }
        }



    ?>
    </div>


</body>
</html>
