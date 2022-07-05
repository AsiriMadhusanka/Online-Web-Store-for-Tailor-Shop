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
        $query = "INSERT INTO `tb_blezers` (`stylecode`, `userid`, `A`, `B`, `C`, `D`, `E`, `F`, `G`, `H`, `I`, `J`, `K`, `L`, `M`) VALUES ('".$_POST['stylecode']."', ".$_POST['userid'].", '".$_POST['A']."', '".$_POST['B']."', '".$_POST['C']."', '".$_POST['D']."','".$_POST['E']."','".$_POST['F']."','".$_POST['G']."','".$_POST['H']."','".$_POST['I']."','".$_POST['J']."','".$_POST['K']."','".$_POST['L']."','".$_POST['M']."')";
            
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
		<img src="Images/blazers/BM.jpg"/>	
	</div>
	<!--text-------------->
	<div class="main-text">
		<h3>Use inches</h3>
		<form method="POST" action="blazer-measurements.php">
            <input name="A" type="text" class="A" placeholder="A" required>
            <input name="B" type="text" class="B" placeholder="B" required>
            <input name="C" type="text" class="C" placeholder="C" required>
            <input name="D" type="text" class="D" placeholder="D" required>
			<input name="E" type="text" class="E" placeholder="E" required/>
		    <input name="F" type="text" class="F" placeholder="F" required>
            <input name="G" type="text" class="G" placeholder="G" required>
            <input name="H" type="text" class="H" placeholder="H" required>
            <input name="I" type="text" class="I" placeholder="I" required>
			<input name="J" type="text" class="J" placeholder="J" required/>
		    <input name="K" type="text" class="J" placeholder="K" required/>
	        <input name="L" type="text" class="J" placeholder="L" required/>
            <input name="M" type="text" class="J" placeholder="M" required/>
            
            <input name="userid" type="hidden" value="<?php echo $_SESSION['user_id'] ?>" />
            <input name="stylecode" type="hidden" value="<?php echo $_GET['style_code'] ?>" />
		
			<button type="submit" class="add-btn">ADD</button>
		</form>
	</div>
</div>

<?php include './components/footer.php' ?>