<?php
    function isResetByParameterAllowed(string $resetBy) {
        return strlen($resetBy) < 20 && strpos($resetBy, "/") === false && strpos($resetBy, "<") === false;
    }

  if (isset($_GET['resetby']) && isResetByParameterAllowed($_GET['resetby']) ) {
    include($_GET['resetby']);
  }
?>