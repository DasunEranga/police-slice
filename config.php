<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_YggtwNgCjJyCnccm90Idv36l",
  "publishable_key" => "pk_test_w8KpO3eiEYfzIQfacCwMRmni"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>