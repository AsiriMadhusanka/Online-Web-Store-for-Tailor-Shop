<?php
    $title = 'Tesla - About us';
?>

<?php include './components/header.php' ?>

<?php
    if(!isset($_SESSION['user_id']))
    {
        header('Location: login.php');
    }
?>

<?php
    require './database/connection.php';

    if (!empty($_POST))
    {
        $query = "INSERT INTO `tbl_shirts` (`stylecode`, `userid`, `BustChest`, `Waist`, `BottomHem`, `Collar`, `Sleevlenght`, `Shoulder`, `Backlenght`, `Frontlenght`) VALUES ('".$_POST['stylecode']."', ".$_POST['userid'].", '".$_POST['BustChest']."', '".$_POST['Waist']."', '".$_POST['BottomHem']."','".$_POST['Collar']."','".$_POST['Sleevlenght']."','".$_POST['Shoulder']."','".$_POST['Backlenght']."','".$_POST['Frontlenght']."')";
            
        mysqli_query($connection, $query);

        $alert = "Your order has been submitted successfully.";

        mysqli_close($connection);
    }
?>

<?php
if (isset($alert))
{
?>
<div class="alert">
    <?php echo $alert  ?>
</div>
<?php
}
?>

<div class="measurements-content">
	<!--model--------------->
	<div class="model">
		<img src="Images/shirts/SM.jpg"/>	
	</div>
	<!--text-------------->
	<div class="main-text">
		<h3>Use inches</h3>
		<form method="POST" action="shirt-measurements.php">
		    <input name="BustChest" type="text" class="Bust/Chest" placeholder="1 - Bust/Chest" required>
            <input name="Waist" type="text" class="Waist" placeholder="2 - Waist" required>
            <input name="BottomHem" type="text" class="Bottomhem" placeholder="3 - Bottom hem" required>
            <input name="Collar" type="text" class="Collar" placeholder="4 - Collar" required>
			<input name="Sleevlenght" type="text" class="Sleevlenght" placeholder="5 - Sleev lenght" />
		    <input name="Shoulder" type="text" class="Shoulder" placeholder="6 - Shoulder" required>
            <input name="Backlenght" type="text" class="Backlenght" placeholder="7 - Back lenght" required>
            <input name="Frontlenght" type="text" class="Frontlenght" placeholder="8 - Front lenght" required>

            <input name="userid" type="hidden" value="<?php echo $_SESSION['user_id'] ?>" />
            <input name="stylecode" type="hidden" value="<?php echo $_GET['style_code'] ?>" />
		
			<button type="submit" class="add-btn">ADD</button>
		</form>
	</div>
</div>

<?php include './components/footer.php' ?>