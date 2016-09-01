<?php
  /* Produit */
  class Pizza {
    private $_pate = "";
    private $_sauce = "";
    private $_garniture = "";

    public function setPate($pate)              { $this->_pate = $pate; }
    public function setSauce($sauce)            { $this->_sauce = $sauce; }
    public function setGarniture($garniture)    { $this->_garniture = $garniture; }

    public function getPate()                   { return $this->_pate; }
    public function getSauce()                  { return $this->_sauce; }
    public function getGarniture()              { return $this->_garniture; }
  }

  /* Monteur */
  abstract class MonteurPizza {
    protected $_pizza;

    public function getPizza()           { return $this->_pizza; }
    public function creerNouvellePizza() { $this->_pizza = new Pizza(); }

    abstract public function monterPate();
    abstract public function monterSauce();
    abstract public function monterGarniture();
  }

  /* MonteurConcret */
  class MonteurPizzaHawaii extends MonteurPizza {
    public function monterPate()      { $this->_pizza->setPate("croisée"); }
    public function monterSauce()     { $this->_pizza->setSauce("douce"); }
    public function monterGarniture() { $this->_pizza->setGarniture("jambon+ananas"); }
  }

  /* MonteurConcret */
  class MonteurPizzaPiquante extends MonteurPizza {
    public function monterPate()      { $this->_pizza->setPate("feuilletée"); }
    public function monterSauce()     { $this->_pizza->setSauce("piquante"); }
    public function monterGarniture() { $this->_pizza->setGarniture("pepperoni+salami"); }
  }

  /* Directeur */
  class Serveur {
    private $_monteurPizza;

    public function setMonteurPizza(MonteurPizza $mp) { $this->_monteurPizza = $mp; }
    public function getPizza()    { return $this->_monteurPizza->getPizza(); }

    public function construirePizza() {
      $this->_monteurPizza->creerNouvellePizza();
      $this->_monteurPizza->monterPate();
      $this->_monteurPizza->monterSauce();
      $this->_monteurPizza->monterGarniture();
    }
  }


