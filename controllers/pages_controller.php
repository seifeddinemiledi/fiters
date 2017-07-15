<?php
  class PagesController {

    public function home() {
    $home=new Home();
    $nbrUser=$home->getNbrUser();
    $nbrCoache=$home->getNbrCoache();
    $nbrPlace=$home->getNbrPlace();
    $nbrBooking=$home->getNbrBooking();
      require_once('views/pages/home.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
  }
?>