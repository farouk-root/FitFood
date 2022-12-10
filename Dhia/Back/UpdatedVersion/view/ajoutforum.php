<?php
if (isset($_FILES['file'])){
    $tmpName = $_['file']['tmp_name'];
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];
    move_uploaded_file ($tmpName, './upload/'. $name);

}

?>
<?php

require_once ('./ forum.class.php');
$forum = new forum($_POST['titre'], $_POST ['descreption'])

$forum->ajouter($id_table);

header("location:./....");
//echo "oui";
//exit()
?>