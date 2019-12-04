<?php
    include 'auth.php';

    if(isset($_GET['id'])){

        $query = $link->query("SELECT * FROM block WHERE id=$_GET[id]");
        $block = $query->fetch_assoc();

        if(!$block){
            echo "<script>alert('Invalid block!');window.location='room-list.php'</script>";
        }
    }else{
        echo "<script>alert('Invalid parameter!');window.location='room-list.php'</script>";
    }

?>
<html>
    <head>
        <link href="../asset/style2.css" rel="stylesheet" type="text/css">
    </head>
    <div class="container">
        <form method="post">

            <div class="row header">
                <h1>Manage Block</h1>
                <h3>Fill out the form below to learn more!</h3>
            </div>

            <div class="row body">
                <ul>
                    <p class="left">
                        <label for="roomno">Name</label>
                        <input type="text" name="roomno" value="<?= $block['name'] ?>">
                    </p>
                    <p class="left">
                        <label for="gender">Gender</label>
                        <input type="radio" name="gender" value="M"  <?= ($block['gender'] == 'M')? 'CHECKED ' : ' ' ?>required>Male
                        <input type="radio" name="gender" value="F" <?= ($block['gender'] == 'F')? 'CHECKED ' : ' ' ?>required>Female
                    </p>
                    <li>
                        <input type="submit" name="Submit" value="Submit">
                        <a href="student.php">Back</a>
                        <small>or press <strong>enter</strong></small>
                    </li>
                </ul>
            </div>
        </form>
    </div>
</html>

