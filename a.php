<?php
$u = $_GET['u'];
if ($u != "")
{
$urlimg = str_replace("s72-c", "s320-c", "$u");
Header( "HTTP/1.1 301 Moved Permanently" );
Header( "Location:". $urlimg . "" );		
}
?>