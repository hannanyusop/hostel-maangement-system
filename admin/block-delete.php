<?php

require_once 'config.php';

//delete data
$var_matricno=$_GET['matricno'];
$result=mysqli_query($link,"DELETE FROM regstud WHERE matricno='".$_GET['matricno']."'");
echo "DELETE FROM regstud WHERE matricno='".$_GET['matricno']."'";

if ($result)
{
echo "DELETE SUCCESFULLY !";
?>
					<script type="text/javascript">alert("Your data has been deleted!");window.
					location ="student.php";</script>
					<?php

}
else
{
echo "PROBLEM OCCURED !";
header("location:form.php");
}
?>

