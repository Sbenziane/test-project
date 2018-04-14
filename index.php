<?php
require_once('./header.php');


if (!file_exists('./CSV/products.csv') || empty(file('./CSV/products.csv')))
{
  echo "<center>
  <h3>Il n'y a pas de produits actuellement.</h3>
  </center>
  </body>
  </html>";
  exit();
}



require_once('./footer.html');
?>
