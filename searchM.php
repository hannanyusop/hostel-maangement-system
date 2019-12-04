<?php

echo "<h2>Search Results:</h2><p>";

//If they did not enter a search term we give them an error
if ($matricno == "")
{
echo "<p>You forgot to enter a search term!!!";
exit;
}

// Otherwise we connect to our Database
mysql_connect("localhost", "root", " ") or die(mysql_error());
mysql_select_db("dbhostel") or die(mysql_error());

// We perform a bit of filtering
$matricno = strtoupper($matricno);
$matricno = strip_tags($matricno);
$matricno = trim ($matricno);

//Now we search for our search term, in the field the user specified
$data = mysql_query("SELECT * FROM regstud WHERE upper($field) LIKE'%$matricno%'");

//And we display the results
while($result = mysql_fetch_array( $data ))
{
echo $result['studentname'];
echo " ";
echo $result['matricno'];
echo "<br>";
echo $result['yearsem'];
echo "<br>";
echo "<br>";
}

//This counts the number or results - and if there wasn't any it gives them a little message explaining that
$anymatches=mysql_num_rows($data);
if ($anymatches == 0)
{
echo "Sorry, but we can not find an entry to match your query...<br><br>";
}

//And we remind them what they searched for
echo "<b>Searched For:</b> " .$find;
//}
?>
