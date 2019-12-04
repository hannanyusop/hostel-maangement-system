<?php
include('auth.php');
?>
<html lang="en">
    <?= include('include/header.php'); ?>
    <div id="main">
      <h2>HOSTEL MANAGEMENT</h2>
      <div id="profile"><b id="welcome">Welcome : <i><?= $auth['name']; ?></i></b></div>
    </div>
    </body>
</html>