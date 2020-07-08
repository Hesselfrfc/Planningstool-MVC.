

</header>
<div id="container">
        <? foreach ($data as $data) { ?>
      <div class = " justify-content-center">      
       <a href="<?= URL ?>public/planning/item/<?=$data["planningId"]?>">
        <div class="left">
                   </div>
        <div class="right mr-5 ml-5">
            <h2> <?= $data["name"]?> </h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="far fa-calendar"></i></span> <?= $data["datum"] ?> </li>
                    <li><span class="fa-li"><i class="far fa-clock"></i></span> <?= $data["tijd"] ?> </li>
                    <li><span class="fa-li"><i class="fas fa-user-tie"></i></span> <?= $data["uitlegger"] ?> </li>
                    <li><span class="fa-li"><i class="fas fa-users"></i></span> <?= $data["meedoen"] ?> </li>
                    <li><span class="fa-li"><i class="fas fa-school"></i></span> <?= $data["explain_minutes"] ?> minuten </li>
                    <li><span class="fa-li"><i class="fas fa-play"></i></span> <?= $data["play_minutes"] ?> minuten </li>
                    <li><span class="fa-li"><i class="fas fa-stopwatch"></i></span> <?= $data["play_minutes"]+$data["explain_minutes"] ?> minuten </li>
                   
                </ul>
            </div>
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>
        <? } ?>
    </div>
</div>
	
 	