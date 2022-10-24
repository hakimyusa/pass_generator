<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
<?php
function pass_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
?>
<h3>Password Generator</h3>
<p>* refresh this page to get new pass</p>
<b><?php echo pass_generate(6) ."\n"?></b><br>
<b><?php echo pass_generate(7) ."\n"?></b><br>
<b><?php echo pass_generate(8) ."\n"?></b><br>
<b><?php echo pass_generate(9) ."\n"?></b><br>
<b><?php echo pass_generate(10) ."\n"?></b><br>
</body>
</html>