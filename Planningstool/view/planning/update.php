<?


?>


<form class="needs-validation container" name="update" validate method="post" action="<?=URL?>public/planning/updatePlanning"><div style=" width: 500px; margin-left: 250px;">
	<input type="hidden" name="planningId" value="<?=$data["planning"]["planningId"];?>">

	<label for="gameId"></label>
		<select value="" placeholder="Kies een game" class="form-control" name="gameId" required>
			<option><?= $data["planning"]["name"];?></option>
			<? foreach ($data["games"] as $game) { ?>
  			<option value="<?= $game["id"];?>"> <?= $game["name"];?> (aantal spelers: <?= $game["min_players"];?>-<?= $game["max_players"];?>)</option>
  			<? } ?>
  			
  			
		</select>
		<div class="invalid-feedback">Kies een game.</div>
			

<div class=" mt-4" style="margin: 0 auto;">

	<div class="col-md-12">
		<label for="tijd">Kies een tijd:</label>
			<input class="form-control" class="timepicker" type="time" id="tijd" name="tijd" min="09:00" max="22:00" value="<?= $data["planning"]["tijd"];?>" required>
			<div class="invalid-feedback">Kies een geldige tijd tussen 9:00 en 22:00.</div>
	</div>

	<div class="col-md-12">
		<label for="tijd">Kies een datum:</label>
			<input class="form-control" class="datepicker" type="date" id="datum" name="datum" value="<?= $data["planning"]["datum"];?>" required>
			<div class="invalid-feedback">Kies een geldige datum.</div>
	</div>

	<div class="col-md-12">
		<label for="uitlegger">Wie legt het spel uit:</label>
			<input class="form-control" type="text" id="uitlegger" name="uitlegger" placeholder="Wie legt uit?" value="<?= $data["planning"]["uitlegger"];?>" required>
			<div class="invalid-feedback">Kies een persoon die de game uitlegt.</div>
	</div>

	<div class="col-md-12">
		<label for="meedoen">Wie doen mee:</label>
			<input class="form-control" type="text" id="meedoen" name="meedoen" placeholder="Wie doen mee?" value="<?= $data["planning"]["meedoen"];?>"  required>
			<div class="invalid-feedback">Kies minimaal 1 persoon die meedoet.</div>
	</div>

</div>
	<button style="margin-top: 50px; margin-left: 0px;" type="submit" class="btn btn-primary">Planning aanpassen</button>
</form>



