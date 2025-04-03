//Vulnerable Script
$uri = rtrim($_GET['url'], "/");
...					
$path = ROOTPATH . $file;
...
if (file_exists($path)) {
  echo "<pre>";
  echo htmlspecialchars(file_get_contents($path));
  echo "</pre>";
  } else { ?>
    <p class="text-xl"><?= ltrim($file, "/") ?> is not found</p>
 <?php
... 
 
