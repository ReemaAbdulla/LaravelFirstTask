<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1> Welcome to IT </h1>
	<table border="4">
		<tr>
			<th>Employee Name </th>
		</tr>
			<?php 
			/*foreach($employees as $emp){
			 echo"<tr>";
			 echo "<td>$emp</td>";
			 echo "</tr>";
			 			}*/

			?>
			@foreach($employees as $emp)
			<tr>
				<td>{{$emp}} </td>
			</tr>
			@endforeach




	</table>

</body>
</html>