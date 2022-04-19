<?php
include './dbconnect.php';
$s=$_GET['s'];
$d=$_GET['d'];
$sel_district=mysqli_query($dbcon,"select * from padmin_data where sid='$s' and did='$d'");
if(mysqli_num_rows($sel_district)>0)
{
    ?>
<select name="pan" class="form-control" required="required">
<option value="">Choose One</option>
<?php
while($r_district=mysqli_fetch_row($sel_district))
{
    ?>
<option value="<?php echo $r_district[0] ?>"><?php echo $r_district[3] ?></option>
<?php
}
?>
</select>
<?php
}
else{
    ?>
<select name="pan" class="form-control" required="required">
<option value="">Choose One</option>
  </select>
<?php
}
?>