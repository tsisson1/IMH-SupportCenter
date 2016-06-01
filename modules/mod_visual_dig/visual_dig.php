<?

// Graph DNS
// Programmed by: Brad Markle
// Start Date: 2010.01.22


// grab the domain from the url and perform security checks
$domain = trim($_GET['domain']);
if (! preg_match ("/^[a-z0-9][a-z0-9\-]+[a-z0-9](\.[a-z]{2,4})+$/i", $domain))
{
	$nogo= true;
	$domain = "";
	die_with_error();
}
$my_domain = $domain;


// setup other variables
$servers_involved[0] = "0.0.0.0";



// find my nameservers
$number_of_nameservers = shell_exec("dig $my_domain ns +noall +answer +short | wc -l");
$my_nameservers = str_replace("\n ","\n",shell_exec("dig $my_domain ns +noall +answer +short"));
$my_nameservers = explode("\n",$my_nameservers);
$my_nameservers = array_filter($my_nameservers, 'strlen');




for($x = 0; $x <= $number_of_nameservers - 1; $x++)
{

	// debug // echo "<p>" . $my_nameservers[$x] . "</p>";

	// get the number of mx records
	$my_command = "dig @" . $my_nameservers[$x] . " $my_domain mx +noall +answer +short | wc -l";
	$number_of_mx = shell_exec($my_command);

	// get the number of a records
   $my_command = "dig @" . $my_nameservers[$x] . " $my_domain a +noall +answer +short | wc -l";
   $number_of_a = shell_exec($my_command);

	// grab the actual mx records at that nameservers
	$my_command = "dig @" . $my_nameservers[$x] . " $my_domain mx +noall +answer +short | awk '{print $2}'";
	$my_mx[$x] = shell_exec($my_command);
	$my_mx_2explode = $my_mx[$x];

	// grab the a records
   $my_command = "dig @" . $my_nameservers[$x] . " $my_domain a +noall +answer +short";
   $my_a[$x] = shell_exec($my_command);
   $my_a_2explode = $my_a[$x];

	$my_mx_2explode = explode("\n",$my_mx_2explode);
	$my_a_2explode = explode("\n",$my_a_2explode);
	// loop through each mx record
	for($y = 0; $y <= $number_of_mx - 1; $y++)
	{		
		$my_final_mx[$x][$y] = $my_mx_2explode[$y];

		// get the ip of the current mx
		if(substr_count($my_final_mx[$x][$y],".")>=1)
		{
			$my_command = "dig " . $my_final_mx[$x][$y] . " a +noall +answer +short";
			$my_final_mx_a[$x][$y] = shell_exec($my_command);
		}
		else
			$my_final_mx_a[$x][$y] = "unknown ip";
		$servers_involved = servers_involved($my_final_mx_a[$x][$y],$servers_involved);
	}

	// loop through each a record
	for($y = 0; $y <= $number_of_a - 1; $y++)
   {
      $my_final_a[$x][$y] = $my_a_2explode[$y];
		$servers_involved = servers_involved($my_final_a[$x][$y],$servers_involved);
	}
}

function servers_involved($my_ip,$servers_involved)
{
	$my_ip = explode("\n",$my_ip);
	sort($my_ip);
	$my_ip = implode("\n",$my_ip);
	$my_ip = trim($my_ip);	//echo "<hr>";
	$indent = "&nbsp;&nbsp;&nbsp;&nbsp";
	

	$number_of_servers = 0;
	$add_new_ip = 0;
	foreach ($servers_involved as $value)
	{
		// echo "$indent currently in array: $servers_involved[$number_of_servers]<br>";
		if($my_ip != $servers_involved[$number_of_servers])
		{
			// debug echo "testing ip \"$my_ip\" loggedip \"$servers_involved[$number_of_servers]\"<br>";
			$add_new_ip++;
		}
		$number_of_servers++;
	}

	if($add_new_ip == $number_of_servers)
	{
		$servers_involved[$number_of_servers] = $my_ip;
	}
	return $servers_involved;
}






function number_servers_involved($servers_involved)
{
	// we're returning -1 because higher up in the script
	// for some reason we added this:
	// $servers_involved[0] = "0.0.0.0";
	return( count($servers_involved) - 1 );
} 






function number_my_nameservers($my_nameservers)
{
	return count($my_nameservers);
}






// pass this function a hostname and it will return all the a records, each on a separate line ----
// please note however, that most hostnames will only have one a record
function give_host_return_ip($my_host)
{
	$my_command = "dig $my_host a +noall +answer +short";
	$my_ip = shell_exec($my_command);
	return $my_ip;
}






function give_ip_return_host($my_ip)
{
	$my_command = "host $my_ip |cut -d\" \" -f5";	
	$my_host = shell_exec($my_command);
	return $my_host;
}





function die_with_error()
{
	header('content-type: image/png');
	$image = imagecreatetruecolor(550, 150);
	$dark_grey = imagecolorallocate($image, 102, 102, 102);
	$white = imagecolorallocate($image, 255, 255, 255);
	$red = imagecolorallocate($image, 255, 0, 0);
	$font_path = 'arial.ttf';

	$string = 'ERROR';
	imagettftext ($image, 14, 0, 10, 25, $red, $font_path, $string);
	
	$string = 'There was an error, generally this means one of a few things:';
	imagettftext ($image, 11, 0, 10, 55, $white, $font_path, $string);
	
	$string = '- The domain name you entered has not been registered';
	imagettftext ($image, 10, 0, 10, 75, $white, $font_path, $string);
	
	$string = '- There is a problem with the dns setup of this domain';
	imagettftext ($image, 10, 0, 10, 95, $white, $font_path, $string);

	$string = '- Our script is having a problem';
	imagettftext ($image, 10, 0, 10, 115, $white, $font_path, $string);
	
	$string = '- You entered a sub domain (like www.) or you added \'http://\'';
	imagettftext ($image, 10, 0, 10, 135, $white, $font_path, $string);


	imagegif($image);
	imagedestroy($image);
	die();
}






// *********************************************************************************
// *********************************************************************************
// START DRAWING THE PICTURE !!!!
// *********************************************************************************
// *********************************************************************************

$fontsize = "10";
$topindent = "20";
$leftindent = "20";
$rightindent = "20";
$bottomindent = "20";

$number_servers_involved = sizeof($servers_involved);
$servers_involved_virtical = 150 + (50 * $number_servers_involved);
$servers_involved_horizontal = "300";

$nameservers_involved_virtical = "100";
$nameservers_involved_horizontal = "300";

if(number_my_nameservers($my_nameservers) > number_servers_involved($servers_involved))
{
	$width_factor = $nameservers_involved_horizontal;
	$number_of_colums = number_my_nameservers($my_nameservers);
}
else
{
	$width_factor = $servers_involved_horizontal;
	$number_of_colums = number_servers_involved($servers_involved);
}

$my_width = $leftindent + $rightindent + ($width_factor * $number_of_colums);
$my_height = $topindent + $bottomindent + 300 + $servers_involved_virtical;

// Create a 300x100 image
$im = imagecreatetruecolor($my_width, $my_height);
$red = imagecolorallocate($im, 0xFF, 0x00, 0x00);
$black = imagecolorallocate($im, 0x00, 0x00, 0x00);
$white = imagecolorallocate($im, 0xFF, 0xFF, 0xFF);
$blue = imagecolorallocate($im, 0, 0, 255);
$ip_block_green = imagecolorallocate($im,189,252,201);
$ip_block_red = imagecolorallocate($im,255,228,225);

// Make the background white
imagefilledrectangle($im, 5, 5, $my_width - 5, $my_height - 5, $white);

// Path to our ttf font file
$font_file = 'arial.ttf';

// Write the domain to the screen
imagefttext($im, $fontsize, 0, $leftindent, 20, $black, $font_file, "DOMAIN: " . $my_domain);
imagefttext($im, $fontsize, 0, $leftindent, 50, $black, $font_file, "Red lines indicate where A records (website) are routing.");
imagefttext($im, $fontsize, 0, $leftindent, 65, $black, $font_file, "Blue lines indicate where MX records (email) are routing.");

// loop through the servers in question and print
$server_number = 0;
foreach ($servers_involved as $value)
{
	if($server_number != 0)
	{
		// calculate some coordinates
		$top_left = $leftindent + $servers_involved_horizontal * ($server_number - 1);
		// save the top left cordinate so we can draw to it later
                $server_coord_x[$value] = $top_left;
                $server_coord_y[$value] = $servers_involved_virtical - 15;
		$x1 = $server_coord_x[$value];
		$y1 = $server_coord_y[$value];
		$x2 = $x1 + $servers_involved_horizontal - 5;
		$y2 = $my_height - $bottomindent;

		// draw green box below server
      $my_color = $ip_block_green;
      
		// print the background color of the servers
      imagefilledrectangle($im,$x1,$y1,$x2,$y2,$my_color);
		// print the border of the servers
      imagerectangle($im,$x1,$y1,$x2,$y2,$black);

		// draw horizontal line above server
		// imageline($im, $top_left, $servers_involved_virtical - 15, $top_left + $servers_involved_horizontal - 45, $servers_involved_virtical - 15, $black);
		// save the top left cordinate so we can draw to it later
		$server_coord_x[$value] = $top_left;
		$server_coord_y[$value] = $servers_involved_virtical - 15;
		

		// convert the multi-line ip format to ip (host)
		$ip_and_host = $value;
		$ip_and_host = explode("\n",$ip_and_host);
		// if only one entry in array
		//if(sizeof($ip_and_host) > 1)
		//{
			for($x = 0; $x <= sizeof($ip_and_host) - 1; $x++)
			{
				// make sure this is an ip address before we continue
				if( substr_count($ip_and_host[$x],".") == 4 )
				{
					$my_iphost = give_ip_return_host($ip_and_host[$x]);
					$my_iphost = explode("\n",$my_iphost);
					if(sizeof($my_iphost) == 2)
					{
						$my_iphost = implode("\n",$my_iphost);
						$my_iphost = str_ireplace("\n","",$my_iphost);
					}
					else
					{
						$my_iphost = implode("\n",$my_iphost);
					}
					$ip_and_host[$x] = " " . $ip_and_host[$x] . " ( " . $my_iphost . " )";
				}
			}
		//}
		//else
		//{
		//	$ip_and_host[0] = " " . $ip_and_host[0] . " ( " . str_ireplace("\n","",give_ip_return_host($ip_and_host[0])) . " )";
		//}
		$ip_and_host = implode("\n",$ip_and_host);


		// print the IP
		imagefttext($im, $fontsize, 0, $top_left, $servers_involved_virtical, $black, $font_file, $ip_and_host);

		// print the host
		//$my_command = "host $value |cut -d\" \" -f5";
		//$hostname = shell_exec($my_command);
		//imagefttext($im, $fontsize, 0, $leftindent + $servers_involved_horizontal * ($server_number - 1), $servers_involved_virtical + ($fontsize + 5), $black, $font_file, " Host: " . $hostname);
	}
	$server_number++;
}

// loop through the nameservers
$number_my_nameservers =  number_my_nameservers($my_nameservers);

if($number_my_nameservers == 0)
{
	die_with_error();
}

$nameserver_number = 0;
//foreach ($my_nameservers as $value)
for($c = 0; $c <= sizeof($my_nameservers) - 1; $c++)
{
		// calculate some coordinates
		$top_left = $leftindent + $nameservers_involved_horizontal * ($nameserver_number);
		$x1 = $top_left;
		$y1 = $nameservers_involved_virtical;
		$x2 = $x1 + $nameservers_involved_horizontal - 45;
		$y2 = $nameservers_involved_virtical + ($fontsize * 2);

		// calculate some variables
		$my_nameserver_ip = give_host_return_ip($my_nameservers[$nameserver_number]);

		// calculate the background color of the nameservers
		$my_color = $ip_block_green;
		// print the background color of the nameservers
		imagefilledrectangle($im,$x1,$y1 - ($fontsize * 1.5),$x2,$y2,$my_color);

                // print the nameserver host
                imagefttext($im, $fontsize, 0, $x1, $y1, $black, $font_file, " NS: " . $my_nameservers[$nameserver_number]);
		// under the nameserver host, print the nameserver ip
		imagefttext($im, $fontsize, 0, $x1, $y1 + $fontsize * 1.5, $black, $font_file, " IP: " . $my_nameserver_ip);

		// draw square around nameserers
		$y1 = $y1 - ($fontsize * 1.5);
		$x2 = $x1 + $nameservers_involved_horizontal - 45;
		$y2 = $nameservers_involved_virtical + ($fontsize * 2); 
		imagerectangle($im,$x1,$y1,$x2,$y2, $black);		

		// write "A RECORDS"
		imagefttext($im, $fontsize, 0, $top_left, $nameservers_involved_virtical + 32, $black, $font_file, "A RECORDS");
		imagefttext($im, $fontsize, 0, $top_left, $nameservers_involved_virtical + 43, $black, $font_file, "(website)");
		// write "MX RECORDS"
		imagefttext($im, $fontsize, 0, $top_left + 110, $nameservers_involved_virtical + 32, $black, $font_file, "MX RECORDS");
		imagefttext($im, $fontsize, 0, $top_left + 110, $nameservers_involved_virtical + 43, $black, $font_file, "(email)");

		// loop through the A RECORDS
		/*$my_final_a_toloop = $my_final_a[$nameserver_number];
		foreach($my_final_a_toloop as $my_a_value)
		{
			imagefttext($im, $fontsize, 0, $top_left, $nameservers_involved_virtical + 50, $black, $font_file, $my_a_value);
		}
		*/
		for($a = 0; $a <= sizeof($my_final_a[$nameserver_number]) - 1; $a++)
		{
			$x1 = $top_left;
			$y1 = $nameservers_involved_virtical + 60 + ($a * 20);

			// A record to print
			$print_a = $my_final_a[$nameserver_number][$a];
			imagefttext($im, $fontsize, 0, $x1, $y1, $black, $font_file, $print_a);
			// draw a line
			imageline($im, $x1, $y1, $server_coord_x[$print_a], $server_coord_y[$print_a], $red);
		}
		
		// loop through MX records
		for($b = 0; $b <= sizeof($my_final_mx[$nameserver_number]) - 1; $b++)
		{
			// coords
			$x1 = $top_left + 110;
			$y1 = $nameservers_involved_virtical + 60 + ($b * 20);
			// print the mx record
			$print_mx = $my_final_mx[$nameserver_number][$b];
			imagefttext($im, $fontsize, 0, $x1, $y1, $black, $font_file, $print_mx);
			// draw the line to connect the mx to the server at the bottom
			// convert the mx to the ip
			$print_mx_a = trim($my_final_mx_a[$nameserver_number][$b]);
				// testing feel free to delete this indent
				$print_mx_a = explode("\n",$print_mx_a);
				sort($print_mx_a);
				$print_mx_a = implode("\n",$print_mx_a);
			imageline($im, $x1, $y1, $server_coord_x[$print_mx_a], $server_coord_y[$print_mx_a], $blue);
		}

		$nameserver_number++;
}


// Output image to the browser

header('Content-Type: image/png');

imagepng($im);
imagedestroy($im);

?>
