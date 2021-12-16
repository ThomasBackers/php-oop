<?php
declare(strict_types=1);

class Recipe {
  private $title;
  private $ingredients = [];
  private $measurements = [
    'liter',
    'g',
    'kg',
    'cup',
    'soup spoon',
    'coffee spoon',
    'ounce'
  ];
  private $instructions = [];
  private $yield;
  private $tags = [];
  private $source = 'The crazy cooker';

  // magic methods are triggered by an action instead of being called directly
  public function __construct($title) {
    $this->setTitle($title);
  }

  public function __toString() {
    return $this->getTitle();
  }

  /**
   * __CLASS__ return the name of the class itself
   * __FILE__ return the full path with the filename (check about basename() method)
   * __DIR__ return the full path to the file without the filename
   * __LINE__ return the current line number in the file
   * __METHOD__ return the name of the method we are using
   */

  // setters let us sanitize data before assign it to our private property 
  public function setTitle($title) { 
    $this->title = ucwords($title); // ucwords() is a capitalize()
  }

  // then it is mandatory to use a getter to access the private property
  public function getTitle() {
    return $this->title;
  }
  
  public function addIngredient($item, $amount = null, $measure = null) {
    if ($amount != null && !is_float($amount) && !is_int($amount)) {
      exit('The amount must be a float: '.gettype($amount)." $amount given.");
    }

    if ($measure != null && !in_array(strtolower($measure), $this->measurements)) {
      exit('Please enter a valid measurements: '.implode(', ', $this->measurements));
    }

    $this->ingredients[] = [ // this syntax behave like a array.push()
      'item' => ucwords($item),
      'amount' => $amount,
      'measure' => strtolower($measure)
    ];
  }

  public function getIngredients() {
    return $this->ingredients;
  }

  public function setInstructions($instruction) {
    if (!is_string($instruction)) {
      exit('Instruction must be a string.');
    }
    $this->instructions[] = $instruction;
  }

  public function getInstructions() {
    return $this->instructions;
  }

  public function setYield($yield) {
    $this->yield = $yield;
  }

  public function getYield() {
    return $this->yield;
  }

  public function addTag($tag) {
    $this->tags[] = $tag;
  }

  public function getTags() {
    return $this->tags;
  }

  public function setSource($source) {
    $this->source = $source;
  }

  public function getSource() {
    return $this->source;
  }
}
?>
