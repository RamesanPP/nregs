<?php
include '../dbconnect.php';
$x=$_GET['x'];
$sel_district=mysqli_query($dbcon,"select * from district where StCode='$x'");
if(mysqli_num_rows($sel_district)>0)
{
    ?>
<select name="dist" class="form-control" required="required" onchange="loadpanch(this.value)">
<option value="">Choose One</option>
<?php
while($r_district=mysqli_fetch_row($sel_district))
{
    ?>
<option value="<?php echo $r_district[0] ?>"><?php echo $r_district[2] ?></option>
<?php
}
?>
</select>
<?php
}
else{
    ?>
<select name="dist" class="form-control" required="required">
<option value="">Choose One</option>
  </select>
<?php
}
?>