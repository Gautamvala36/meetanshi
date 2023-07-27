<?php
include "include/connection.php";
$connection = new connection();
?>


<!--Show data-->

<div id="tab3show" class="table">
    <h2>Contact Us</h2>
    <hr>
    <br>
    <table class="hidden">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Data</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $contactget = $connection->contactget();
            if ($contactget->num_rows > 0) {
                while ($value = $contactget->fetch_assoc()) {
            ?>
                    <tr>
                        <td>
                            <?= $value['id'] ?>
                        </td>
                        <td>
                            <?= $value['name'] ?>
                        </td>
                        <td>
                            <?php echo $value['email'] ?>
                        </td>
                        <td>
                            <?php echo $value['message'] ?>
                        </td>
                        <td>
                            <?php echo date('d-m-Y  h:i:s a', strtotime($value['date'])) ?>
                        </td>
                        <td class=".btn">
                            <!-- <a href="user_details.php?id=<?php echo $value['id'] ?>"> -->
                            <button class="delete" type="button" id="<?php echo $value['id'] ?>">Delete</button>
                            <!-- </a> -->
                        </td>
                    </tr>
            <?php
                }
            } else {
                echo '<td colspan="6" style="text-align: center;">Data Not Found</td>';
            }
            ?>
        </tbody>
    </table>

</div>