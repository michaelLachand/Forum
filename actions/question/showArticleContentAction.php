<?php

require ('actions/database.php');

//Vérifier si l'id de la question est rentrée dans l'URL
if(isset($_GET['id']) AND !empty($_GET['id'])) {

    //Récupérer l'identifiant de la question
    $idOfQuestion = $_GET['id'];

    //Vérifier si la question existe
    $checkIfQuestionExists = $bdd->prepare('SELECT * FROM questions WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfQuestion));

    if($checkIfQuestionExists->rowCount() > 0) {

        //Récupérer toutes les données de la question
        $questionsInfos = $checkIfQuestionExists->fetch();

        //Stocker les données de la question dans des variables
        $question_title = $questionsInfos['titre'];
        $question_content = $questionsInfos['contenu'];
        $question_id_author = $questionsInfos['id_auteur'];
        $question_pseudo_author = $questionsInfos['pseudo_auteur'];
        $question_publication_date = $questionsInfos['date_publication'];

    } else {
        $errorMsg =  "Aucune question n'a été trouvée";
    }

} else {
    $errorMsg = "Aucune question n'a été trouvée";
}
