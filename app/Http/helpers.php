<?php

function showMessageIfError($errors, $key){
	if ($errors->has('title')){
        echo '<span class="help-block">';
        echo    '<strong>' . $errors->first($key) . '</strong>';
        echo '</span>';
    }
}