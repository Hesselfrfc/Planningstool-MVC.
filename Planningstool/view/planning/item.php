<?php

?>


<div class="detail col-sm-12">
        <div class="left">
            <? printf("<img class=\"avatar\" src=\"public/afbeeldingen/%s\" style=\"height:300px\">" , $data["image"]);?> 
            <div class="stats" style="background-color: grey ">
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
            <br><div class = "detailButton"><a href = "<?= URL ?>public/planning/delete/<?=$data["planningId"]?>"><i class="fas fa-trash-alt"></i> Planning verwijderen</a><br><a href = "<?= URL ?>public/planning/update/<?=$data["planningId"]?>"><i class="fas fa-edit"></i> Planning aanpassen</a></div><br>
        </div>
        <div class="right">
            <p>
               <?= $data["description"] ?>
            </p>
            <p>
               <?= $data["youtube"] ?>
            </p>
        </div>
        <div style="clear: both"></div>



</div>

</div>