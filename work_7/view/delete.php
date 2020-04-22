<?php
  $query = "SELECT id, Name FROM users";
  $result = mysqli_query($connection, $query);
  if(isset($_GET['remove'])){
     // echo $_GET['remove'];
     $remove = $_GET['remove'];
     $delete_query = "DELETE FROM users WHERE id='$remove'";
     mysqli_query($connection,  $delete_query);

    header('Location: ?top=delete');
    }
?>
<article>
    <h1>DELETE</h1>
    <?php
        while($row = mysqli_fetch_assoc($result)){
            if($row["Name"]==""){
                $row["Name"] = "delete me!!!";
             }
           echo "<p><a href='?top=delete&remove=".$row["id"]."'>".$row["Name"]."</a></p>";
        }
    ?>
</article>