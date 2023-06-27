<?php
include 'database.php';
$object = new database();

var_dump($_POST);
extract($_POST);
$id = $_POST["id"];
var_dump($id);
// $object->delete("delete from project where id = '$id' ");
// $object->delete('project', "id = $id");
$object->delete('project', "id = $id");
print_r($object->getResult());



// echo "<br>Delete Result is : ";
// print_r($object->getResult());
// echo "<br>Delete Result is : ";

// echo "<br>Delete Result is : ";
// print_r($object->getResult());

// $delete_data"delete from project where id = '$id' ";
// $database->exec($delete_data);
// $host = 'localhost';
// $username = 'root';
// $password = '';
// $database = 'registration';

// if (isset($_POST['id'])) {
//     $id = $_POST['id'];
//     $result = $object->delete('project', 'id="?"');
//     // $result = $object->delete('soc_dev_excel', array('id' => $id), array('%d'));
//     if ($result) {
//         echo "success";
//         exit();
//     }
// }

// if ($_POST["action"] == "Delete") {
    //   $query = "DELETE FROM project WHERE id = '".$_POST["id"]."'";
//   $object->execute_query($query);
//   echo 'Data Deleted';
// $object->delete('project', 'id="16"');
// }
?>