<?php

//Save, the text area called text to the file that is named "docname"
var_dump($_POST['docname']);
var_dump($_POST['text']);


file_put_contents("docs/". $_POST["docname"] , $_POST['text']);

?>
