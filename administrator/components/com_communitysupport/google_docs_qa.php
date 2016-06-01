<?

$google_docs_authors["ArnelC"] = "https://docs.google.com/spreadsheet/ccc?key=0At4w1CvRLh2qdDMtNjI5cVAyaGZCQUFqUmVzN3RjaGc&usp=sharing";
$google_docs_authors["ScottM"] = "https://docs.google.com/spreadsheet/ccc?key=0At4w1CvRLh2qdEFqZWl0X0FodHRORkp6UVVac0MwZlE&usp=sharing";
$google_docs_authors["JacobN"] = "https://docs.google.com/spreadsheet/ccc?key=0At4w1CvRLh2qdG5VWXNILUMzb2xGRXZTZURUTlNfV3c&usp=sharing";
$google_docs_authors["JeffMa"] = "https://docs.google.com/spreadsheet/ccc?key=0At4w1CvRLh2qdDRoNEl6WnF0dkhyNDdxc3hTanR4eHc&usp=sharing";
$google_docs_authors["JohnPaulB"] = "https://docs.google.com/spreadsheet/ccc?key=0At4w1CvRLh2qdDJCMEkxRHhpRmpoc3c3UDZrQll1R3c&usp=sharing";
$google_docs_authors["BradM"] = "https://docs.google.com/spreadsheet/ccc?key=0At4w1CvRLh2qdERzcmVGeEZmRE82bF9DUTRSRVpZblE&usp=drive_web";

foreach($google_docs_authors as $author => $url)
	echo "	<h1>$author</h1>
		<iframe style='width:1000px; height:400px;' src='$url'></iframe>
	";

?>
