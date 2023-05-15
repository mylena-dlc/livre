<?php

// définition de la classe Auteur
class Auteur {
    private string $nom;
    private string $prenom;
    private array $livres; // on ajoute un tableau de livres pour ensuite ajouter les livres à l'auteur

    // constructeur 
    public function __construct($nom, $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->livres = []; // on initialise la variable $livres en créant un tableau de livre vide
    }

    // getter / setter
    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

     // méthode
     // fonction pour pouvoir ajouter des livres
    public function addLivre(Livre $livre){ // on ajoute des livres en faisant appel à la classe Livre
         $this->livres[] = $livre;
    }

    // fonction pour afficher nom/prénom de l'auteur
    public function __toString(){
        return $this->nom . " " . $this->prenom . "<br/>";

    }

    // fonction pour afficher la bibliographie de l'auteur
    public function afficherBibliographie(){
        echo "Livres de ".$this->getNom(). ' '.$this->getPrenom()."<br/>";
        foreach($this->livres as $livre){
            echo $livre->__toString()."<br>";
        }

 }

}

?>