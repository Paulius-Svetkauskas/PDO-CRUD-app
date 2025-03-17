<?php
function escape($string) {
    return htmlspecialchars($string ?? '', ENT_QUOTES, 'UTF-8');
$data = trim($data);
$data = stripslashes($data);
return ($data);
}