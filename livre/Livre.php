<?php

// définition de la classe Livre
class Livre {
    private string $titre;
    private int $nbPages;
    private int $annee;
    private float $prix;
    private Auteur $auteur; // on ajoute la classe Auteur en attribut

    // constructeur 
    public function __construct($titre, $nbPages, $annee, $prix, Auteur $auteur){ // Auteur $auteur : on fait appelle à la classe Auteur, en lui attribuant n'importe quelle nom de variable 
        $this->titre = $titre;
        $this->nbPages = $nbPages;
        $this->annee = $annee;
        $this->prix = $prix;
        $this->auteur = $auteur; 
        $auteur->addLivre($this); // fonction pour ajouter des livres à cet auteur, celui de cet objet
    }

    // getter / setter
    public function getTitre(){
        return $this->titre;
    }

    public function setTitre($titre){
        $this->titre = $titre;
    }

    public function getNbPages(){
        return $this->nbPages;
    }

    public function setNbPages($nbPages){
        $this->nbPages = $nbPages;
    }

    public function getAnnee(){
        return $this->annee;
    }

    public function setAnnee($annee){
        $this->annee = $annee;
    }

    public function getPrix(){
        return $this->prix;
    }

    public function setPrix($prix){
        $this->prix = $prix;
    }
    
    // méthode
    // on préfère __toString à getInfos pour afficher le return de la fonction
    public function __toString(){
        return " " . $this->getTitre() . " (" . $this->getAnnee() .") : " . $this->getNbPages() . " pages " . " / " . $this->getPrix() . "€";
     }

  
}



?>
