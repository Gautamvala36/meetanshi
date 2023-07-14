<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Table </title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"
            integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
</head>

<?php
include 'connection.php';
$connection = new database();

$id = (isset($_POST['id']) ? $_POST['id'] : "");
$page = (isset($_GET['page']) ? $_GET['page'] : 1);
$limit = (isset($_GET['limit']) ? $_GET['limit'] : 20);
$name = (isset($_POST['name']) ? $_POST['name'] : "");
$email = (isset($_POST['email']) ? $_POST['email'] : "");
$number = (isset($_POST['number']) ? $_POST['number'] : "");


// insert data
if ($name && $email && $number) {
    if ($id) {
        $connection->update($id, $name, $email, $number);
    } else {
        $connection->insertdata($name, $email, $number);
    }
}

//select data
$getdata = $connection->selectdata($page, $limit);



?>

<div class="table">
   <div class="pages">
       <form action="submit.php" id="pageination">
           <input type="text" id="limit" name="limit" placeholder="Page">
           <button id="page">Go</button>
       </form>
       <?php for($i = 1; $i<=$connection->getselectRecords($limit); $i++) :?>
           <div class="pagination">
               <a href="<?php echo 'submit.php?page='.$i.'&limit='.$limit;?>"
                  id="<?php echo 'page-'.$i;?>">
                   <?php echo $i;?>
               </a>
           </div>
       <?php endfor;?>
   </div>
    <table>
        <thead>
        <tr>
        <tr>
            <a href="index.php" class="btn"><span>Please Registration</span></a>
        </tr>
        <th id="id">ID</th>
        <th id="name">Name</th>
        <th id="email">email</th>
        <th id="number">Mobile number</th>
        <th id="action">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($getdata as $key => $value) : ?>
            <tr id="row-<?php echo $value[0] ?>">
                <?php foreach ($value as $k => $v): ?>
                    <td><?php echo $v ?></td>
                <?php endforeach; ?>
                <td class="action">
                    <button type="button" class="delete" id="<?php echo $value[0] ?>">DELETE</button>
                    <button type="button" class="update" name="update" id="<?php echo 'up-' . $value[0] ?>">UPDATE
                    </button>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    $('.delete').click(function () {
        // var id = ('#row-'+ $(this).attr('id'));
        // $.ajax
        // ({
        //     url: "delete.php?id=" + $(this).attr('id'),
        //     success: function (response) {
        //         $(id).remove();
        //         console.log(response);
        //     }
        //
        // });
        location.href = "delete.php?id=" + $(this).attr('id');
    });
    $('.update').click(function () {
        location.href = "index.php?id=" + $(this).attr('id');
    })
    
</script>
