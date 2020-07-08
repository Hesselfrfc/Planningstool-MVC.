<?

?>

<form name="create" validate method="post" action="<?=URL?>public/planning/createPlanning"><div style=" width: 500px; margin-left: 250px;">
	


	<label for="gameId"></label>
		<select placeholder="Kies een game" class="form-control" name="gameId" required>
			<option value=""> Kies een game  </option>
			<? foreach ($data as $data) { ?>
  			<option value="<?= $data["id"];?>" > <?= $data["name"];?> (aantal spelers: <?= $data["min_players"];?>-<?= $data["max_players"];?>)</option>
  			<? } ?>
		</select>
		<div class="invalid-feedback">Kies een game.</div>
			

<div class=" mt-4" style="margin: 0 auto;">
	<div class="col-md-12">
		<label for="tijd">Kies een tijd:</label>
			<input class="form-control" class="timepicker" type="time" id="tijd" name="tijd" min="09:00" max="22:00" required>
			<div class="invalid-feedback">Kies een geldige tijd tussen 9:00 en 22:00.</div>
	</div>

	<div class="col-md-12">
		<label for="tijd">Kies een datum:</label>
			<input class="form-control" class="datepicker" type="date" id="datum" name="datum" required>
			<div class="invalid-feedback">Kies een geldige datum.</div>
	</div>


	<div class="col-md-12">
		<label for="uitlegger">Wie legt het spel uit:</label>
			<input class="form-control" type="text" id="uitlegger" name="uitlegger" placeholder="Wie legt uit?" required>
			<div class="invalid-feedback">Kies een persoon die de game uitlegt.</div>
	</div>

	<div class="col-md-12">
		<label for="meedoen">Wie doen mee:</label>
			<input class="form-control" type="text" id="meedoen" name="meedoen" placeholder="Wie doen mee?"  required>
			<div class="invalid-feedback">Kies minimaal 1 persoon die meedoet.</div>
	</div>
	
</div>
<? $planningAll = readPlanning();

	if(sizeof($planningAll) <10){ ?>
	<button style="margin-top: 50px; margin-left: 0px;" type="submit" class="btn btn-primary">Planning toevoegen</button>
	<? }
	else{ ?>
	<button style="margin-top: 50px; margin-left: 0px;" class = "detailButton"><a href="<?= URL ?>public/planning/index">Home pagina</a></button>	
	<? } ?>
	
</form>



