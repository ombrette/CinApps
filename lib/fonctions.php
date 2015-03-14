<?php
/*include 'include.php';
function nbfilms(){
	$requete=$db->query("SELECT COUNT(*) AS total FROM film");
	$nbfilms = $select->fetchAll();
	$nbtotal = $nbfilms['total'];
	echo $nbtotal;
	return $nbtotal;
}*/


if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'insert':
            insert();
            break;
        case 'select':
            select();
            break;
    }
}
?>


<?php
include '../lib/include.php';
$title_page="Questionnaire";
include '../partials/header.php';

if (isset($_POST['id'])) {
    echo "string";
    switch ($_POST['id']) {
        case 'numR1':
            $numQ=$numQ+1;
            break;
        case 'numR2':
            $numQ=$numQ+1;
            break;
    }
}else{
    $numQ=1;
}

$selectQ = $db->query("SELECT * FROM questions WHERE numero=$numQ");
$questions = $selectQ->fetchAll();

 
$selectR = $db->query("SELECT * FROM reponses WHERE question_id=$numQ");
$reponses = $selectR->fetchAll();

?>
<form action="ajax.js" method="post" accept-charset="utf-8" class="question">
    <?php foreach($questions as $question): ?>
        <label>"<?= $question['contenu']; ?>"</label>
    <?php endforeach ?>

    <?php foreach($reponses as $reponse): ?>
        <input type="submit" class="button" name="numR<?= $reponse['numero']; ?>" value="<?= $reponse['contenu'];  ?>" />
    <?php endforeach ?>
</form>

<?php 
include '../partials/footer.php'; ?>

