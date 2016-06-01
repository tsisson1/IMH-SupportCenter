<?


/**
 * return "global function" variables
 * This is going to be used mainly to help between dev and prod environments
 */
function rgfv()
{
        $server_name = gethostname();
        $s = new stdClass();

        switch($server_name)
        {
		// DEV ENVIRONMENT
                case "ash-cct-pro-srv1.inmotionhosting.com":
			$s->user_ip = $_SERVER['REMOTE_ADDR'];
			$s->server = "dev";
                        break;
		// PROD ENVIRONMENT
                default:
			$s->user_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			$s->server = "prod";
                        break;
        }

        return $s;
}






function return_staff_ips()
{
        $allowed_ips = array(
        "173.50.70.149", // Arnel
        "68.10.230.179",  // JohnPaul 2014.05.12 (TIMR)
        "216.54.31.83", // Office 11-Sep-2013-11-21
        "70.174.61.152", // jeffma 2013.09.25
        "70.177.231.78", // BradMa 2013.10.10
        "70.184.183.53", // office 2013.11.26
        "74.110.108.17", // ScottM - 2014.01.30
        "70.174.47.67", // JeffMa - 2014.02.24.1403
        "216.54.31.82", // new office ip 2014.04.03.0941
        "74.110.114.253", // scottm 2014.04.07.1211
        "74.99.86.254",         // bradm        2014.06.16
        "173.71.153.155",       // scottm       2014.06.23
	"108.17.150.219",	// scottm	2014.09.09
	"108.17.128.165",	// scottm	2014.09.24
        "68.225.32.81",         // jeffma       2014.07.14
        "68.10.230.67",         // johnpaulb    2014.07.22
	"71.120.217.51",        //scottm 	2016.02.08
	"207.98.175.24",	//TJ		2015.11.02
	"NEW_IP_TEXT");
	        
// if you updated the ip list above, you need to also update the ip list in:
        // * components/com_communitysupport/prechat_survey_data_2.php

        return $allowed_ips;
}


?>
