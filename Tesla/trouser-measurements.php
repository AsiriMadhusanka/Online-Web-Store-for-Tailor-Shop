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
        $query = "INSERT INTO `tbl_trousers` (`stylecode`, `userid`, `waist`, `outseam`, `inseam`, `frontrise`, `backrise`, `hip`, `thigh`, `knee`, `sura`, `opening`) VALUES ('".$_POST['stylecode']."', ".$_POST['userid'].", '".$_POST['waist']."', '".$_POST['outseam']."', '".$_POST['inseam']."', '".$_POST['frontrise']."','".$_POST['backrise']."','".$_POST['hip']."','".$_POST['thigh']."','".$_POST['knee']."','".$_POST['sura']."','".$_POST['opening']."')";
            
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
		<img src="Images/trousers/TM.jpg"/>	
	</div>
    <!--text-------------->
	<div class="main-text">
		<h3>Use inches</h3>
		<form method="POST" action="trouser-measurements.php">
		    <input name="waist" type="text" class="waist" placeholder="1 - waist" required>
            <input name="outseam" type="text" class="outseam" placeholder="2 - outseam" required>
            <input name="inseam" type="text" class="inseam" placeholder="3 - inseam" required>
            <input name="frontrise" type="text" class="frontrise" placeholder="4 - front rise" required>
			<input name="backrise" type="text" class="backrise" placeholder="5 - backrise" />
		    <input name="hip" type="text" class="hip" placeholder="6 - hip" required>
            <input name="thigh" type="text" class="thigh" placeholder="7 - thigh" required>
            <input name="knee" type="text" class="knee" placeholder="8 - knee" required>
            <input name="sura" type="text" class="sura" placeholder="9 - sura" required>
            <input name="opening" type="text" class="opening" placeholder="10 - opening" />
            <input name="userid" type="hidden" value="<?php echo $_SESSION['user_id'] ?>" />
            <input name="stylecode" type="hidden" value="<?php echo $_GET['style_code'] ?>" />
		
			<button type="submit" class="add-btn">ADD</button>
		</form>
	</div>
</div>

<?php include './components/footer.php' ?>