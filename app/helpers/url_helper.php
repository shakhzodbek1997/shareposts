<?php 
// Simple page Redirect
function redirect($page){
  header('location: ' . URLROOT . '/' . $page);
}
?>