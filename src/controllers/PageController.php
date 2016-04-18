<?php
namespace Acme\Controllers;

use duncan3dc\Laravel\BladeInstance;

class PageController extends BaseController
{
  public function getShowHomePage() {
    //$_SESSION['test'] = "<strong>I hope this works!</strong>";
    echo $this->blade->render("home", ['test' => 'Hello, again.']);
  }

  public function getShowPage() {
    echo "foo";
  }
}
