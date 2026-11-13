<?php
$file = 'flag-mipkBswUppqwXlq9ZydO.php';

// Option 1 : contenu brut échappé (sûr, affiche tout tel quel)
echo '<pre>' . htmlspecialchars(file_get_contents($file)) . '</pre>';
?>
