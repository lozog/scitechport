<?php
function saltpass($p, $s)
{
	return md5($p . $s);
}
?>