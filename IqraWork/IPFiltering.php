<?php
$address_list = array("173.245.48.0/20", "108.162.192.0/18", "162.158.0.0/15", "131.0.72.0/22");

if (in_array("173.245.48.0/20", $address_list))
  {
  echo "Address found";
  }
else
  {
  echo "Address not found";
  }
?>