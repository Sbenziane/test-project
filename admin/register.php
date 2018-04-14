<?php
require_once("../header.php");
?>
<form id="register-form" method="post">
<input type="text" id="login" name="login" value="" />
<input type="password" id="password" name="password" value="" />
<input type="submit" name="submit" value="S'inscrire">
</form>
<script>
$(document).on('submit','#register-form',function(){

  $.ajax({
        url: "http://localhost/test-project/admin/admin-ajax.php",
        type: 'POST',
        data: {
          action: "registration",
          login: $("#login").val(),
          password: $("#password").val(),
        },
        success: function(html){
        $("#nextPrev").before(html.data.render);
        $("#nextPrev").remove();
        }
        });
});
</script>
<?php
require_once("../footer.html");
