<?php
  class PagesController {

    public function home() {
    
        global $session;

        $session->display_session('panier');
        die;
      require_once('views/pages/home.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
  }
?>