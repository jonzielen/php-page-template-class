<?php
  define('BASE_URL', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].'/');

  // LOGIN INFO
  $username = 'jon';
  $password = '123';

  // DATABASE INFO
  $settings['host'] = 'localhost';
  $settings['username'] = 'root';
  $settings['password'] = '';
  $settings['table'] = 'test';
  $settings['database'] = 'blog_1';

  // DEFAULT SITE INFO
  $defaultSite['title'] = 'THE BEST SITE ONLINE';
  $defaultSite['meta']['keywords'] = 'php, html, css, css3, javascript, jquery, burritos';
  $defaultSite['meta']['description'] = 'This site is the best site ever, it was built by Jon Z.';
  $defaultSite['meta']['og:title'] = 'open graphic title';
  $defaultSite['meta']['og:description'] = 'open graphic description';
  $defaultSite['meta']['og:url'] = BASE_URL;
  $defaultSite['meta']['og:image'] = BASE_URL.'img/';
?>
