<?php
class Render {
  // static allow to use the method without needing to make
  // an instance of the class
  public static function displayRecipe($recipe) {
    return $recipe->getTitle().' by '.$recipe->getSource();
  }

  public static function listRecipes($titles) {
    asort($titles);
    return implode(', <br>', $titles);
  }
  
  public static function getClassMethods() {
    return implode('<br>', get_class_methods(__CLASS__));
  }
}
// We use self:: to call a static method inside a method of the same class. 
// $output .= self::displayIngredients($recipe->getIngredients());
?>
