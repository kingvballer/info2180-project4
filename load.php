<?php
$link = mysql_connect('localhost','root','','cheapomail');
$create="";
mysql_select_db('cheapomail');
# execute a SQL query on the database
$results = mysql_query("SELECT * FROM Message", $link);
# loop through each message
while ($row = mysql_fetch_array($results)) {
  ?>
  <div class="alert alert-success" id="load">subject: <?php echo $row["subject"]; ?>
<br/>body: <?php echo $row["body"]; ?></div>
  <?php
}
?>

