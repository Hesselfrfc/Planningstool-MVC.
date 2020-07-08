<?php

?>


<form name="delete" action="<?=URL?>public/planning/deletePlanning"><div style=" width: 600px; margin-left: 250px;">

	


	<label for="gameId"></label>
		<select placeholder="Kies een game" class="form-control" name="gameId" required readonly>
			
  			<option value="<?= $data["id"];?>" > <?= $data["name"];?> (aantal spelers: <?= $data["min_players"];?>-<?= $data["max_players"];?>)</option>
  			
		</select>
		<div class="invalid-feedback">Kies een game.</div>
			

<div class=" mt-4" style="margin: 0 auto;">

	<div class="col-md-12">
		<label for="tijd">Kies een tijd:</label>
			<input class="form-control" class="timepicker" type="time" id="tijd" name="tijd" min="09:00" max="22:00" value="<?= $data["tijd"];?>" required readonly>
			<div class="invalid-feedback">Kies een geldige tijd tussen 9:00 en 22:00.</div>
	</div>

	<div class="col-md-12">
		<label for="tijd">Kies een datum:</label>
			<input class="form-control" class="datepicker" type="date" id="datum" name="datum" value="<?= $data["datum"];?>" required readonly>
			<div class="invalid-feedback">Kies een geldige datum.</div>
	</div>

	<div class="col-md-12">
		<label for="uitlegger">Wie legt het spel uit:</label>
			<input class="form-control" type="text" id="uitlegger" name="uitlegger" placeholder="Wie legt uit?" value="<?= $data["uitlegger"];?>" required readonly>
			<div class="invalid-feedback">Kies een persoon die de game uitlegt.</div>
	</div>

	<div class="col-md-12">
		<label for="meedoen">Wie doen mee:</label>
			<input class="form-control" type="text" id="meedoen" name="meedoen" placeholder="Wie doen mee?" value="<?= $data["meedoen"];?>"  required readonly>
			<div class="invalid-feedback">Kies minimaal 1 persoon die meedoet.</div>
	</div>

</div>
	
	<div class = "detailButton"><a href = "<?= URL ?>public/planning/deletePlanning/<?=$data["planningId"]?>"> Planning verwijderen</a></div>
</form>