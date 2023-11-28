<?php
require "db.php";
require "templates/header.php";
$connection->select_db("php_tutorial");

// **************************************************************************
// ********************** code for deleting user ************************
// **************************************************************************

if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $user_id = intval($_GET["id"]);
?>

<div class="confirmation">
    <h3 class="ask">Are you sure you want to delete this Record? 
        <a href="delete_user.php?id=<?php echo $user_id; ?>&confirm=1" class="choice">Yes</a>
        <a href="delete_user.php?id=<?php echo $user_id; ?>&confirm=0" class="choice">No</a>
    </h3>
</div>

<?php
    if (isset($_GET["confirm"]) && ($_GET["confirm"] === '1')) {
        $sql = "DELETE FROM users WHERE user_id = $user_id";

        if ($connection->query($sql)) {
            echo "Record has been deleted.";
        } else {
            echo "Query not executed: " . $connection->error;
        }
    } else if ($_GET["confirm"] === '0') {
        echo "Deletion canceled.";
    } else {
        echo "No confirmation provided.";
    }
} else {
    echo "No User selected";
}

$connection->close();
?>
