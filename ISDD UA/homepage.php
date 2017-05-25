
<?php
	include 'header.html';
	echo "Welcome to the official Wild Scot Trust Website!"."<br>";
	include "about the trust.txt";

?>

<br><br>
	
<FORM ="<?php echo $_SERVER['PHP_SELF']; ?> ACTION="searchbar.php" method="get">
	  Search our database: <input type="text" name="search" />
	  <input type="submit" value="Submit" />
</form>



<?php
	include 'footer.html';	
?>