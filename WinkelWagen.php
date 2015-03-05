<?php include 'header.html' ?>

<div id=winkelwagenContent>
	<button> Verder winkelen</button>
	<h1>Winkelwagen</h1>
	<table> 
		<tr>
			<td> </td>
			<td>Productnaam</td>
			<td>Prijs</td>
			<td>Aantal</td>
			<td>Subtotaal</td>
			<td>verwijderen</td>
		</tr>
		<tr>
			<td><img src="img/Groene-asperges.jpg" width="175" height="175" alt="asperges"> </td>
			<td>Groene asperges</td>
			<td>24,48</td>
			<td><input></td>
			<td>24,48</td>
			<td><img src="img/delete.jpg" height="50" width="50" alt="delete"></td>
		</tr>
		<tr>
			<td><img src="img/komkommer.jpg" width="175" height="175" alt="komkommer"> </td>
			<td>Komkommer</td>
			<td>18,82</td>
			<td><input></td>
			<td>56,46</td>
			<td><img  src="img/delete.jpg" height="50" width="50" alt="delete"></td>
		</tr>
	</table>
	<div id=WinkelwagenTotaal>
		<button>Herbereken bedrag </button>
		<table> 
			<tr>
				<td>Eindtotaal </td>
				<td>80,94 </td>
			</tr>
		</table>
		<button id=Afrekenen> Afrekenen</button>
	</div>
</div>

<?php include 'adbar.html' ?>
<?php include 'footer.html' ?>