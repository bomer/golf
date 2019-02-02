<?php

function renderTable($data){


	echo "<table>";
	
	//header cells
	echo "<tr>";
	foreach ($data[0] as $key => $value) {
		echo "<th>$key</th>";
	}
	echo "<th>Delete</th>";
	echo "</tr>";

	//Data cells in rows
	foreach ($data as $row) {
		echo "<tr>";
		foreach ($row as $col) {
			echo "<td>$col</td>";
		}
		echo "<td><a href='/delete?id=" . $row['id'] ."''>Delete </a></td>";
		echo "</tr>";
	}
	echo "</table>";
}