<?

/*
 $db = JFactory::getDbo();


        $searchword = $_GET['searchword'];
        $searchword = trim($searchword);

        include_once("/home/ccdevinm/public_html/support/includes/search-2-helper.php");

        $searchword = addslashes(htmlspecialchars($searchword));

        $exploded_searchword = explode(" ",$searchword);
*/






// echo "<pre>BEFORE --$searchword--</pre>";






// 2013.08.06 fix searches ending with ?
$searchword = trim($searchword,"?");
$searchword = strtolower($searchword);

$searchword = str_replace("httpdconf","httpd.conf",$searchword);


// take out blocked words
$blocked_words = array("-","afraid","am","and","be","but","can","do","for","from","have","how","i","instead","is","it","just","know","like","may","my","need","not","of","on","once","started","that","the","to","via","want","what","where","with","would");
foreach($blocked_words as $bw_k => $bw_v)
{
	// does the string start with word_?
	if( substr($searchword,0,(strlen($bw_v)+1)) == $bw_v . " " )
		$searchword = substr($searchword,(strlen($bw_v)+1));
	// does the string end with _word?
	if( substr($searchword,(-1*(strlen($bw_v)+1))) == " " . $bw_v)
		$searchword = substr($searchword,0, (strlen($searchword)-(strlen($bw_v)+1)));
	// does the string include it?
	$searchword = str_replace(" " . $bw_v . " "," ",$searchword);
}






// echo "<pre>AFTER --$searchword--</pre>";












?>
