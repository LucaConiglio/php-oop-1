<?php 
require_once __DIR__ . "/Genere.php";

class Movie {
  private $titolo;
  private $genere;
  private $durata;
  private $nomeCompleto;
  private $nome;
  private $cognome;
  
  function __construct($_titolo, $_genere,$_durata,$nome, $cognome, Genere $_nuovoGenere) {
    
    $this->setTitolo($_titolo);
    $this->setGenere($_genere);
    $this->setDurata($_durata);
    $this->setNomeCognome($nome, $cognome);

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
  public function getNomeCompleto()
  {
    return $this->nomeCompleto;
  }

  /**
   * Set the value of attori
   *
   * @return  self
   */ 
  public function setNomeCognome($nome, $cognome)
  {
    $this->nome = $nome;
    $this->cognome = $cognome;
    $this->nomeCompleto = $nome . " " . $cognome;

    return $this;
  }
};

?>