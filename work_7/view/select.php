<article>
        <?php
            echo $_GET["cat"];
            $cat = $_GET["cat"];
            $query = "SELECT * FROM users WHERE Name = '$cat'";
            $result = mysqli_query($connection, $query);
            $row = mysqli_fetch_assoc($result);
        ?>
        <div>
            <br><?=$row["Lastname"]?>
        </div>
        <div>
            <br><?=$row["Age"]?>
        </div>
        <div>
            <br><?=$row["BirthDay"]?>
        </div>
        <div>
            <br><?=$row["Reg_Date"]?>
        </div>
        <div>
            <br><?=$row["Password"]?>
        </div>
        <div>
            <br><?=$row["Gender"]?>
        </div>
    </article>