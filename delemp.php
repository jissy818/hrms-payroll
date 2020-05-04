
<?php
include 'connection.php';
$id=$_GET['id'];
$a=mysql_query("update tbl_employee set status='0' where id='".$id."'");
if($a)
{
    echo'<script>alert("Deleted............")</script>';
  echo '<script>location.href="employee.php"</script>';
}
?>