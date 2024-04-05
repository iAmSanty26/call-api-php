<?php 
    $name = "Santy"; 
    $age = 22;
    $is_married = false;
    $age_new = $age + 2;
    $concat_string = "Hello, my name is " . $name . " and I am " . $age . " years old.";
    $best_languages = ["php", "python", "javascript"];
    $best_languages[1] = "java";
?> 

<ul>
  <?php foreach ($best_languages as $language) : ?>
  <li><?= $language ?></li>
  <?php endforeach; ?>
</ul>


<h1>
  <?= $name; ?>
  <?= $concat_string; ?>
</h1>

<style>
  :root {
    color-scheme: light dark;
  }
  body {
    display: grid;
    place-content: center;
  }
</style>
