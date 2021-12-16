<?php
include "classes/recipes.php";
include "classes/render.php";
include "classes/recipecollection.php";
include "inc/cookbook.php";

echo $recipe1->getTitle().'<br>';

foreach ($recipe1->getIngredients() as $ingredient) {
  echo $ingredient['amount'].' '.$ingredient['measure'].' '.$ingredient['item'].'<br>';
}

echo Render::displayRecipe($recipe1).'<br><br>';

echo Render::getClassMethods().'<br><br>';
?>
