<?php
include "config.php";
include "session.php";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script >
        function myFunction() {
            if(!confirm("Do you want to delete the product?"))
            {
                return false;
            }
        }
    </script>

</head>

<body>
    <!--navbar-->

    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../homepage.php">Main Page</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <div class='container'><br>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
        <?php

        //fetching data//

        $sql = "SELECT * FROM `product` WHERE 1";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_all($result);
        $count = 0;

        echo '<table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Product Code</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Stock Available</th>
                    <th scope="col">Sales Made</th>
                    <th scope="col">MRP</th>
                    <th scope="col">Wholesale Rate</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>';

        foreach ($data as $values) {

            
                echo "<tr>
                <th scope='row'>$values[0]</th>
                <td>$values[1]</td>
                <td>$values[2]</td>
                <td>$values[3]</td>
                <td>$values[4] rs</td>
                <td>$values[5] rs</td>
                <td><form action='_editproduct2.php' method='POST'><button  type='submit' name='p_code' class='btn btn-primary' value=$values[0]>Update</button></form>
                    <form action='_deleteproduct.php' method='POST' onsubmit='return myFunction()'><button type='submit' class='btn btn-danger' name='p_code' value=$values[0]>Delete</button></form>
              </tr>";
            
        }

        ?>


    </div>
</body>

</html>