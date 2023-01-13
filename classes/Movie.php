<?php 
require_once __DIR__ . "/Genre.php";

class Movie {
  private $titolo;
  private $genere;
  private $durata;
  private $attori;
  
  function __construct($_titolo, $_genere,$_durata,$_attori, Genre $_nuovoGenere) {
    
    $this->setTitolo($_titolo);
    $this->setGenere($_genere);
    $this->setDurata($_durata);
    $this->setAttori($_attori);

    if ($_nuovoGenere) {
      
      $this->setGenere($_nuovoGenere);
    }
  }

  /**
   * Get the value of titolo
   */ 
  public function getTitolo()
  {
    return $this->titolo;
  }

  /**
   * Set the value of titolo
   *
   * @return  self
   */ 
  public function setTitolo($_titolo)
  {
    $this->titolo = $_titolo;

    return $this;
  }

  /**
   * Get the value of genere
   */ 
  public function getGenere()
  {
    return $this->genere;
  }

  /**
   * Set the value of genere
   *
   * @return  self
   */ 
  public function setGenere($_genere)
  {
    $this->genere = $_genere;

    return $this;
  }

  /**
   * Get the value of durata
   */ 
  public function getDurata()
  {
    return $this->durata;
  }

  /**
   * Set the value of durata
   *
   * @return  self
   */ 
  public function setDurata($_durata)
  {
    $this->durata = $_durata;

    return $this;
  }

  /**
   * Get the value of attori
   */ 
  public function getAttori()
  {
    return $this->attori;
  }

  /**
   * Set the value of attori
   *
   * @return  self
   */ 
  public function setAttori($_attori)
  {
    $this->attori = $_attori;

    return $this;
  }
};

?>