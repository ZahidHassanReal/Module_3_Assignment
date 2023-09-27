<?php
function generatePassword($length) 
{
  $data = 'liyfgigyfIYGIYUFGWE!@#$%^&*()_+';
  return substr(str_shuffle($data), 0, $length);
};
  echo generatePassword(12)."\n";



?>