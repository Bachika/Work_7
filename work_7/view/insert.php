<?php
    if(isset($_POST['insertbutton'])){
    $Name = $_POST['Name'];
    $Lastname = $_POST['Lastname'];
    $Age = $_POST['Age'];
    $BirthDay = $_POST['BirthDay'];
    $Reg_Date = $_POST['Reg_Date'];
    $Password = $_POST['Password'];
    $Gender = $_POST['Gender'];
    $sql = "INSERT INTO users (Name, Lastname, Age, BirthDay, Reg_Date, Password, Gender)
    VALUES ('$Name',
    '$Lastname', 
    '$Age',
    '$BirthDay',
    '$Reg_Date',
    '$Password',
    '$Gender')"; 
    mysqli_query($connection, $sql);
    header('Location: ?top=insert');
    }
?>
<article>
    <h1>INSERT</h1>
    <form action="" style = "padding:20px" method="post">
    Name
    <br>
    <input type="text" name="Name">
    <br><br>
    Lastname
    <br>
    <input type="text" name="Lastname">
    <br><br>
    Age
    <br>
    <input type="number" name="Age">
    <br><br>
    BirthDay
    <br>
    <input type="date" name="BirthDay">
    <br><br>
    Reg_Date
    <br>
    <input type="date" name="Reg_Date">
    <br><br>
    Password
    <br>
    <input type="password" name="Password">
    <br><br>
    Gender
    <br>
    <input type="text" name="Gender">
    <br><br>
    <input type="submit" name="insertbutton" value="INSERT">
    </form>
</article>