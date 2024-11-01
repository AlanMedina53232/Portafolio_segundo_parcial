<?php 
    include "includes/header.php";

    require 'includes/config/connection.php';
    $db = connection();
    var_dump($_POST);

    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $query = "insert into seller (name, email, phone) values ('$name', '$email', '$phone');";

    $respose = mysqli_query($db,  $query);
    if($respose){
        echo "seller added";
    }else{
        echo "seller not added";
    }
?>
<section>
    <h2>Sellers Form</h2>
    <div>
        <form method="post" action="createSeller.php">
            <fieldset>
                <legend>Fill All Form Fields</legend>
                <div>
                    <label for="id">ID Seller</label>
                    <input type="number" id="id" name="id">
                </div>
                <div>
                    <label for="name">Seller Name</label>
                    <input type="text" id="name" name="name">
                </div>
                <div>
                    <label for="email">Seller E-mail</label>
                    <input type="email" id="email" name="email">
                </div>
                <div>
                    <label for="phone">Seller Phone</label>
                    <input type="tel" id="phone" name="phone">
                </div>
                <div>
                    <button type="submit">Create a New Seller</button>
                </div>
            </fieldset>
        </form>
    </div>

</section>


<?php include "includes/footer.php"?>
