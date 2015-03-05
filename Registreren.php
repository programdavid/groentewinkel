<?php include 'header.html' ?>

<div id="content">
	<h2 id="title"> Registreren</h2>
	<h3>Vul uw gegevens in: </h3>
	 <table>
		<tr>
			<th>Accountgegevens </th>
			<th>Factuuradres </th>
		</tr>
		
		<tr>
			<td>
				<p>Gebruikersnaam *</p>
				<input type="text">
				<p>Wachtwoord *</p>
				<input type="password">
				<p>Herhaal wachtwoord *</p>
				<input type="password">
			</td>
		
			<td>
				<div>
					<p>Aanhef *</p>
					<select>
						<option value="dhr.">Dhr.</option>
						<option value="mr.">Mr.</option>
						<option value="mvr.">Mvr.</option>
					</select> 
				</div>
				<div>
					<p>Voornaam *</p>
					<input type="text">
				</div>
				<div>
					<p>Tussenv.</p>
					<input type="text" size="10">
				</div>
				<div>
					<p>Achternaam *</p>
					<input type="text">
				</div>
				<div>
					<p>Emailadres *</p>
					<input type="text" size="40">
				</div>
				<div class="clear"></div>
				<div>
					<p>Straatnaam *</p>
					<input type="text">
				</div>
				<div>
					<p>Huisnummer *</p>
					<input type="text" size="10">
				</div>
				<div class="clear"></div>
				<div>
					<p>Postcode *</p>
					<input type="text">
				</div>
				<div>
					<p>Plaatsnaam *</p>
					<input type="text" size="10">
				</div>
				<div class="clear"></div>
				<div>
					<p>Telefoon *</p>
					<input type="text" size="10">
				</div>
			</td>
		</tr>
	 </table>
	 <div id ="submitbtn">
	 <input type="submit" value="Opslaan">
	 </div>
</div>

<?php include 'adbar.html' ?>
<?php include 'footer.html' ?>