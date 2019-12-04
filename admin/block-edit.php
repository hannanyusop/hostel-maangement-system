<?php
    include 'auth.php';

    if(isset($_GET['id'])){

        $query = $link->query("SELECT * FROM block WHERE id=$_GET[id]");
        $block = $query->fetch_assoc();

        if(!$block){
            echo "<script>alert('Invalid block!');window.location='block-list.php'</script>";
        }

        if(isset($_POST['submit'])){

            $update_q = $link->query("UPDATE block SET name='$_POST[name]',gender='$_POST[gender]' WHERE id=$_GET[id]");
            if(!$update_q){
                echo "<script>alert('Failed to update!');window.location='block-edit.php?id=$_GET[id]'</script>";
                exit();
            }

            echo "<script>alert('Data updated!');window.location='block-edit.php?id=$_GET[id]'</script>";
            exit();
        }
    }else{
        echo "<script>alert('Invalid parameter!');window.location='block-list.php'</script>";
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
                        <input type="text" name="name" value="<?= $block['name'] ?>">
                    </p>
                    <p class="left">
                        <label for="gender">Gender</label>
                        <input type="radio" name="gender" value="M"  <?= ($block['gender'] == 'M')? 'CHECKED ' : ' ' ?>required>Male
                        <input type="radio" name="gender" value="F" <?= ($block['gender'] == 'F')? 'CHECKED ' : ' ' ?>required>Female
                    </p>
                    <li>
                        <input type="submit" name="submit" value="Submit">
                        <a href="block-list.php">Back</a>
                        <small>or press <strong>enter</strong></small>
                    </li>
                </ul>
            </div>
        </form>
    </div>
</html>

