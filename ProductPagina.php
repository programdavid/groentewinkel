<?php include 'header.html' ?>

<div id="content">
	<button id=terugKnopnop> Terug </button>	
	<div id=productOverizcht>
		<img src="img/broccoli.jpg" alt="img/delete.jpg"> 
		<div>
			<h2>Broccoli</h2>
			<h3>15.19 Euro</h3>
			<p >Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. Nullam sagittis. </p>
			<b id=vooraad >op vooraad: ja </b>
			<br>
				<b>Aantal: </b>
				<input>
				<button> Toevoegen aan winkelwagen </button>
		</div>	
	</div>
	<div id=productDisplay>
		<div class= "gerelateerdproduct">
			<img src="img/komkommer.jpg" alt="img/delete.jpg">
			<p> Komkommer. </p>
			<p> 36,70</p> <button > In winkelwagen </button>
		</div>
		<div class= "gerelateerdproduct">
			<img src="img/Courgette.jpg" alt="img/delete.jpg"> 
			<p>Courgette </p>
			<p> 36,70</p> <button > In winkelwagen </button>
			</div> 
		<div class= "gerelateerdproduct">
			<img src="img/Groene-asperges.jpg" alt="img/delete.jpg"> 
			<p>Groene asperges </p>
			<p> 36,70</p> <button> In winkelwagen </button>
		</div>
	</div>
</div>

<?php 
 include 'adbar.html' 
 include 'footer.html' 
?>