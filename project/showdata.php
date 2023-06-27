<?php
include 'database.php';

$object = new database();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="showdata.css">
  <title>Show Data</title>
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
</head>

<body>
  <div class="container">

    <form action="" method="post">
      <div class="btn">
        <a href="from.php"> <button type="submit" id="new_outlet" class="new_outlet"><span>New
              Outlet</span></button></a>
      </div>
      <div class="headar">
        <div class="records">
          <?php
          $count = $object->field('project');
          echo $count['count'] . " " . "Record found ";
          ?>
        </div>
      </div>
      <div class="table">
        <table>
          <thead>
            <tr>
              <th id="id">ID</th>
              <th id="outlet_name">Outlet Name</th>
              <th id="status">Status</th>
              <th id="action">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $count = $object->show('project');

            foreach ($count as $value) {
              ?>
              <tr class="delete_mem">
                <td>
                  <?php echo $value["id"]; ?>
                </td>
                <td>
                  <?php echo $value["outlet_name"]; ?>
                </td>
                <td>
                  <?php if ($value["status"] == 0) {
                    echo "NOT LIVE";
                  } else {
                    echo "LIVE";
                  }
                  ?>
                </td>
                <td>
                  <a href="#" class="action-link">Select<span class="toggle-arrow"></span></a>
                  <div class="action-box">
                    <a href="from.php?id=<?php echo $value['id']; ?>">Edit</a>
                    <a name="delete" class="delete btn-danger" id="<?php echo $value['id']; ?>">Delete</a>
                    <!-- <a href="#" class="delete" id="delete" data-id='<?= $id; ?>'>Delete</a> -->
                    <!-- <a href="#" id="delete_button<?php echo $result->id; ?>" onclick="delete_row('<?php echo $result->id; ?>');">Delete</a> -->
                  </div>
                  </a>
                </td>
              </tr>
              <?php
            }
            ?>

          </tbody>
        </table>
      </div>
    </form>
  </div>
  <script src="script.js"></script>
  <script type="text/javascript">
    // $(document).ready(function () {
    //   $('.btn-danger').on('click', function () {
    //     var id = $(this).attr("id");
    //     var info = 'id=' + id;
    //     // $(this).parents('.delete_mem').fadeOut();
    //     if (confirm("Are you sure you want to delete this Member?")) {
    //       $.ajax({
    //         type: "POST",
    //         url: "dalete.php",
    //         data: {
    //           id: id
    //         },
    //         cache: false,
    //         success: function () {

    //           // $(".delete_mem" + id).html(1500);
    //           // // $(".delete_mem" + id).html(response);
    //           // console.log(response);
    //         }
    //       });
    //       $(this).parents(".record").animate("fast").animate({
    //         opacity: "hide"
    //       }, "slow");
    //     } else {
    //       return false;
    //     }
    //   });
    // });

    $(document).ready(function () {
      $('.btn-danger').on('click', function () {
        var id = $(this).attr("id");
        // $(this).parents('.delete_mem').fadeOut();
        if (confirm("Are you sure you want to delete this Member?")) {
          $.ajax({
            type: "POST",
            url: "dalete.php",
            data: {
              id: id
            },
            cache: false,
            success: function (response) {

              $(".delete_mem" + id).html(1500);
              // $(".delete_mem" + id).html(response);
              console.log(response);
            }
          });

        } else {
          return false;
        }
      });
    });


  </script>
</body>

</html>