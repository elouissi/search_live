<?php
include("config.php");
if(isset($_POST['input'])){
    $input = $_POST['input'];
     //query
     $query="SELECT * FROM searchperson WHERE name LIKE '{$input}%'";
    $result =mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){?>
    <table class="table table-bordered table-striped mt-4">
        <thead>
            <tr>
            <th>id</th>
            <th>name</th>
            <th>age</th>
            <th>country</th>
            <th>email</th>
            <th>occupation</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['age'] ?></td>
                <td><?php echo $row['country'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['occupation'] ?></td>
            </tr>
            <?php
        }
    }else{
        echo "no data found";
    }
}
        ?>
        </tbody>

    </table>
    ?>