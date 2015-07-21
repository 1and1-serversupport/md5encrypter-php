<HTML>
    <TITLE>Crypt</TITLE>
  </HEAD>
  <BODY>
    Please insert your password:
    <FORM ACTION="<?php echo $PHP_SELF ?>" METHOD=post>
      <INPUT type=text name=klartext maxlength=12>
      <INPUT type=submit value=Go>
    </FORM>
    <?php
      if (isset ($_POST["klartext"])) {
      function rand_string( $length ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";    

    $size = strlen( $chars );
    for( $i = 0; $i < $length; $i++ ) {
        $str .= $chars[ rand( 0, $size - 1 ) ];
    }

    return $str;
      }
      $rand_part=rand_string(8);
      $alt='$1$'.'$rand_part';
        echo "Der Crypt lautet:".crypt($_POST["klartext"],$alt);
      }
      else { echo "";
      }
      show_source($_ENV["SCRIPT_FILENAME"]);
    ?>
  </BODY>
</HTML>
