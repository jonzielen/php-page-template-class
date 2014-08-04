<?php
namespace jon;
class Page {

  public $headerFile = 'views/tpls/header.php';
  public $bodyFile = 'views/tpls/default.php';
  public $footerFile = 'views/tpls/footer.php';
  public $pageInfo = 'models/defaultPageInfo.php';
  public $template;
  public $rootPath;

  public function __construct($path) {
    $this->rootPath = $path;
  }

  public function header($file = 'views/tpls/header.php') {
    if (isset($file) && file_exists($file)) {
      $this->template = file_get_contents($file);
    } else {
      $this->template = file_get_contents($this->rootPath.$this->headerFile);
    }
  }

  public function main($file = 'views/tpls/default.php') {
    if (isset($file) && file_exists($file)) {
      $this->template .= file_get_contents($file);
    } else {
      $this->template .= file_get_contents($this->bodyFile);
    }
  }

  public function footer($file = 'views/tpls/footer.php') {
    if (isset($file) && file_exists($file)) {
      $this->template .= file_get_contents($file);
    } else {
      $this->template .= file_get_contents($this->rootPath.$this->footerFile);
    }
  }

  public function displayPage($file  = 'models/defaultPageInfo.php') {
    if (isset($file) && file_exists($file)) {
      require_once($file);
      $pageSettings['pageRoot'] = $this->rootPath;
      foreach($pageSettings as $pageKey => $pageValue) {
        $this->template = str_replace("{".$pageKey."}", $pageValue, $this->template);
      }
      return eval("?>$this->template");
    } else {
      require_once($this->rootPath.$file);
      $pageSettings['pageRoot'] = $this->rootPath;
      foreach($pageSettings as $pageKey => $pageValue) {
        $this->template = str_replace("{".$pageKey."}", $pageValue, $this->template);
      }
      $this->template .= file_get_contents($this->rootPath.$file);
      return eval("?>$this->template");
    }
  }
}
