<?

$question = "Our website is not
working again. You just fixed the PHP file last Friday when our website was down, but now it's not working again. This is the fourth time our website has been down in only two months. What is happening to the	InMotion	server?";
//preg_match('/^[a-z0-9 .\-]+$/i',$question,$exploded_question);
$exploded_question = preg_split("/\s+/", $question);
echo "<pre>"; print_r($exploded_question); echo "</pre>";


?>
