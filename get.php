<?php

//Save, the text area called text to the file that is named "docname"
// var_dump($_POST['docname']);

// file_put_contents("docs/". $_POST["docname"] , $_POST['text']);
echo file_get_contents('docs/' . $_POST['docname']);

?>
