--TEST--
xdiff_string_patch_binary() with binary data
--SKIPIF--
<?php if (!extension_loaded("xdiff")) print "skip"; ?>
--POST--
--GET--
--INI--
--FILE--
<?php 
$a = file_get_contents('tests/zend.png');
$b = file_get_contents('tests/logo.bdiff');
$c = xdiff_string_patch_binary($a, $b);
$d = file_get_contents('tests/php.png');
echo strcmp($c, $d);
?>
--EXPECT--
0
