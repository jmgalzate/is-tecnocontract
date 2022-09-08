<?php
  // Load Config with the Constants defined for using in the entire application:
  require_once 'config/config.php';

  // Load Helpers
  //require_once 'helpers/session_helper.php';
  require_once 'helpers/url_helper.php';

  // Autoload Core Classes
  spl_autoload_register(function ($className) {
      require_once 'libraries/'. $className . '.php';
  });
  