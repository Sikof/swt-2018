<?php

$niza = ['Aleksandar' , 'Marko' , 'Marin' , 'Mario' , 'Aleksandra' , 'Stefan' , 'Vektor' , 'Teodor' , 'Magdalena' , 'Simona'];
foreach ($niza as $i ) {
if (strlen($i) > 7) {
	echo $i;
}
}
echo "<br/>";

$student = [
'ime' => 'Bojan',
'prezime' => 'Gavrovski',
'prosek' => 6.4

];
echo "<br/>";
echo $student['ime'];

foreach ($student as $key => $value) {
	echo $key;
}


	
echo "<br/>";

echo '<ul>';

foreach ($student as $k => $v) {
	echo "<li>";
	echo "<b>" .$k.': </b>';
	echo $v;
	echo '</li>';
	echo "<li><b>" .$k.': </b>'.$v.'</li>';
}

echo "</ul";

?>

<ul>
	<?php foreach ($student as $k => $v) { ?>
		<li>
			<b>
				<?=$k ?>: 
			</b>
			<?=$v ?>
		</li>
		<?php } ?>
	}
</ul>



	
<br/>


<?php 

$studenti = [
['ime' => 'Pero' , 'prezime' => 'Perovski'],
['ime' => 'Ivan' , 'prezime' => 'Ivanovski'],
['ime' => 'Janko' , 'prezime' => 'Jankovski']
];
echo $studenti[1]['prezime'];
echo $studenti[2]['ime'];
echo $studenti[0]['prezime'];
?>









<table border="1">
	<tr>
		<td>Ime</td>
		<td>Prezime</td>
	</tr>
	<?php foreach ($studenti as $student) { ?>
		<tr>
			<td><?=$student['ime']; ?></td>
			<td><?=$student['prezime']; ?></td>
		</tr>
		<?php } ?>
	
</table>



<br/>



<table border="1">
	<tr>
		<?php foreach ($studenti[0] as $k => $v) { ?>
			<th><?=$k?></th>
			<?php } ?>
		
		
	</tr>
	<?php foreach ($studenti as $student) { ?>
		<tr>
			<td><?=$student['ime']; ?></td>
			<td><?=$student['prezime']; ?></td>
		</tr>
		<?php } ?>
	
</table>


