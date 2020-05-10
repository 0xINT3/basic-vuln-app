<?php

$stripCacheFile = './strip';

if (file_exists($stripCacheFile)) {
  $characters = str_split(trim(file_get_contents($stripCacheFile)), 1);

  foreach ($_GET as $key => $value) {
    $_GET[$key] = str_replace($characters, array(''), $value);
  }
}
