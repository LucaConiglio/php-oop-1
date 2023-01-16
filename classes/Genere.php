<?php

class Genere {
  private $nuovoGenere;

  function __construct($_nuovoGenere){
    $this->setGenere1($_nuovoGenere);
    
  }

  /**
   * Get the value of genere1
   */ 
  public function getGenere1()
  {
    return $this->nuovoGenere;
  }

  /**
   * Set the value of genere1
   *
   * @return  self
   */ 
  public function setGenere1($_nuovoGenere)
  {
    $this->nuovoGenere = $_nuovoGenere;

    return $this;
  }

}

?>

