

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Table</title>
    <?php include 'link.php' ?>
  <?php include 'style.css' ?>

</head>
<body>
    
    <div class="main">
        <h1>List of candidates for Ragister Form</h1>
    </div>

    <div class="center_div">
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>email Id</th>
                        <th>study</th>
                        <th>password</th>
                        <th colspan="2">Operation</th>
                    </tr>
                </thead>


                <tbody>
                <?php
                include 'connection.php';

                // ******SELECT FROM******

                $selectquery = " SELECT * FROM `ragister` ";

                $query = mysqli_query($con, $selectquery);


                $nums = mysqli_num_rows($query);

                // ****Numbered rows ****

                // echo $nums;



                while($res = mysqli_fetch_array($query))
                {

                    ?>

                    <tr>
                        <td><?php echo $res['id']; ?></td>
                        <td><?php echo $res['name']; ?></td>
                        <td><span class="email-style"><?php echo $res['email']; ?></span></td>
                        <td><?php echo $res['study']; ?></td>
                        <td><?php echo $res['password']; ?></td>
                        <td><a href="updates.php?id=<?php echo $res['id']; ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="UPDATE"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                        <td><a href="delete.php?id=<?php echo $res['id']; ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="DELETE"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>
            <?php
                }
                ?>  
                </tbody>
            </table>
        </div>
    </div>

<script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
</body>
</html>