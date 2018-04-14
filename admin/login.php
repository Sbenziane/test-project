<?php
require_once("../header.php");
if (!file_exists('./CSV/products.csv') || empty(file('./CSV/products.csv')))
{
  echo "<center>
  <h3>Il n'y a aucun inscrit sur le site</h3>
  </center>
  </body>
  </html>";
  exit();
}
?>
<form id="login-form">
<input type="text" name="login" value="" />
<input type="password" name="password" value="" />
<input type="submit" name="submit" value="Se connecter">
</form>
<a href="./register.php">S'inscrire</a>
<?php
require_once("../footer.html");
