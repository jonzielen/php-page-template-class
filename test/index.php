<?php
  $filePath = $_SERVER['DOCUMENT_ROOT'].'/';

  require_once($filePath.'classes/class.page.php');

  $page = new jon\Page($filePath);
  $page->header();
  $page->main($filePath.'views/testPage.php');
  $page->footer();

  echo $page->displayPage($filePath.'models/testpageinfo.php');
?>
