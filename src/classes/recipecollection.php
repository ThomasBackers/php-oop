<?php
class RecipeCollection {
  private $title;
  private $recipes = [];

  public function __construct($title) {
    $this->setTitle($title);
  }

  public function setTitle($title) {
    $this->title = ucwords($title); 
  }

  public function getTitle() {
    return $this->title;
  }

  public function addRecipe($recipe) {
    $recipes[] = $recipe;
  }

  public function getRecipesTitles() {
    $titles = [];
    foreach ($this->recipes as $recipe) {
      $titles[] = $recipe->getTitle();
    }
    return array_values($titles);
  }
}
?>
