<?php
	include_once 'header.php';
?>

    <style>
table {
  width:100%;

}
.center{
	margin-left: auto;
  	margin-right: auto;
  	color: black;
}
table, th, td {
  border: 10px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 20px;
  text-align: center;
}
#t01 tr:nth-child(even) {
  background-color: grey;
}
#t01 tr:nth-child(odd) {
 background-color: white;
}
#t01 th {
  background-color: black;
  color: white;
}
</style>
			<br><br>
			<center><h2 style="color: black">Mass Timings</h2></center>
			<br>

			<table id="t01"  class="center" style="font-weight: bold;">
  <tr>
    <th>DAY</th>
    <th>TIMINGS</th> 
    
  </tr>
  <tr>
    <td>MONDAY</td>
    <td>6.00pm to 8.00pm</td>
  </tr>
  <tr>
    <td>TUESDAY</td>
    <td>6.00pm to 8.00pm</td>
  </tr>
  <tr>
    <td>WEDNESDAY</td>
    <td>6.00pm to 8.00pm</td>
  </tr>
  <tr>
    <td>Thursday</td>
    <td>6.00pm to 8.00pm</td>
  </tr>
  <tr>
    <td>FRIDAY</td>
    <td>6.00pm to 8.00pm</td>
  </tr>
  <tr>
    <td>SATURDAY</td>
    <td>6.00pm to 8.00pm</td>
  </tr>
  <tr>
    <td>SUNDAY</td>
    <td>6.00pm to 8.00pm</td>
  </tr>
</table>
<br>

<?php
	include_once 'footer.php';
?>
