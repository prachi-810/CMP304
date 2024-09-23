<?php
function abc(&$s)
{
    $s.="good night dhari";
}
$x="Bye sweetie";
abc($x);
echo $x;

?>