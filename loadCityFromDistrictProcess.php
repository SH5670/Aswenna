<?php

require "connection.php";

$city_rs = Database::search("SELECT * FROM `city` WHERE `district_id`='" . $_POST["district"] . "' ");

$city_num = $city_rs->num_rows;

for ($i = 0; $i < $city_num; $i++) {

    $city_data = $city_rs->fetch_assoc();

?>

<option value="<?php echo $city_data["id"]; ?>"><?php echo $city_data["cname"] ?></option>

<?php

}
?>
<option value="0">Select</option>
