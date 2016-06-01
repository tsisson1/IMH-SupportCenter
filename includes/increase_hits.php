<?






// ARTICLES
if( $_POST['option'] == "com_content" AND $_POST['view'] == "article" AND is_numeric($_POST['id']) AND $_POST['id'] > 0 )
{
	// connect to the database -------------------------------------------------------------------------------------------------------------------------
        include_once("../configuration.php");
        $cg = new JConfig;
        $con = mysqli_connect("localhost",$cg->user,$cg->password,$cg->db);
        if (mysqli_connect_errno())
                die('error 201402211000');
        // setup and run query -----------------------------------------------------------------------------------------------------------------------------
        $query = "      UPDATE	`" . $cg->dbprefix . "content`
                        SET	`hits` = `hits` + 1
			WHERE	`id` = " . $_POST['id'] . "
			LIMIT 1;
        ";
        mysqli_query($con,$query);


	// now, return the updated number of hits to the article
	$query = "      SELECT	`hits`
			FROM	`" . $cg->dbprefix . "content`
                        WHERE   `id` = " . $_POST['id'] . "
                        LIMIT 1;
        ";
	$result = mysqli_query($con,$query);
        while($row = mysqli_fetch_array($result))
        {
                $new_article_count = $row['hits'];
        }

	// close the connection to the data
        mysqli_close($con);

	echo number_format($new_article_count);
}






// Questions
if( $_POST['option'] == "com_communitysupport" AND $_POST['view'] == "show_question" AND is_numeric($_POST['id']) AND $_POST['id'] > 0 )
{
        // connect to the database -------------------------------------------------------------------------------------------------------------------------
        include_once("../configuration.php");
        $cg = new JConfig;
        $con = mysqli_connect("localhost",$cg->user,$cg->password,$cg->db);
        if (mysqli_connect_errno())
                die('error 201402211000');
        // setup and run query -----------------------------------------------------------------------------------------------------------------------------
        $query = "      UPDATE  `" . $cg->dbprefix . "questions`
                        SET     `hits` = `hits` + 1
                        WHERE   `id` = " . $_POST['id'] . "
                        LIMIT 1;
        ";
        mysqli_query($con,$query);
	
	// run query to return new hit count
	$query = " SELECT `hits` FROM `" . $cg->dbprefix . "questions` WHERE `id` = " . $_POST['id'] . " LIMIT 1;";
	$result = mysqli_query($con,$query);
        while($row = mysqli_fetch_array($result))
                $new_article_count = $row['hits'];

        // close the connection to the data
        mysqli_close($con);

	echo number_format($new_article_count);
}






// USER SUBMITTED ARTICLES
if( $_POST['option'] == "com_pup" AND $_POST['view'] == "article" AND is_numeric($_POST['id']) AND $_POST['id'] > 0 )
{
        // connect to the database -------------------------------------------------------------------------------------------------------------------------
        include_once("../configuration.php");
        $cg = new JConfig;
        $con = mysqli_connect("localhost",$cg->user,$cg->password,$cg->db);
        if (mysqli_connect_errno())
                die('error 201402211000');

        // setup and run query -----------------------------------------------------------------------------------------------------------------------------
        $query = "      UPDATE  `" . $cg->dbprefix . "pup`
                        SET     `hits` = `hits` + 1
                        WHERE   `id` = " . $_POST['id'] . "
                        LIMIT 1;
        ";
        mysqli_query($con,$query);

	// grab the current hit count
	$query = "SELECT `hits` FROM `" . $cg->dbprefix . "pup` WHERE `id` = " . $_POST['id'] . " LIMIT 1;";
	$result = mysqli_query($con,$query);
        while($row = mysqli_fetch_array($result))
                $new_article_count = $row['hits'];

        // close the connection to the data
        mysqli_close($con);

	echo number_format($new_article_count);
}






?>
