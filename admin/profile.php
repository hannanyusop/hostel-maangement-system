<?php
include 'auth.php';
include 'include/header.php';

?>

<div id="main">
  <h2>HOSTEL MANAGEMENT</h2>
  
  <div id="profile">
      <b id="welcome">Welcome : <i><?= $auth['username']; ?></i></b>
  </div>

</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
   
</body>
</html>