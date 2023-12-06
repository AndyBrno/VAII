<?php

/** @var Array $data
 *  @var \App\Models\Category $category
 *  @var \App\Models\Note $note*/


/** @var \App\Core\LinkGenerator $link */
?>

<div class="dark-mode">
    <div class="text-center">
        <h1 class="py-3 poznamky-mode">Všetky poznámky a myšlienky na jednom mieste!</h1>
    </div>

    <div class="row">
        <div class="col-4 fixed-position">
            <h3 class="text-center background py-3">Kategórie:</h3>
            <div id="list-example" class="list-group">
                <?php foreach ($data["categories"] as $category):?>
                    <a class="list-group-item list-group-item-action" href="#<?= $category->getId()?>"><?= $category->getName()?></a>
                <?php endforeach?>
                <a class="list-group-item list-group-item-action text-center" href="#"><strong>+ PRIDAŤ KATEGÓRIU +</strong></a>
                <a class="list-group-item list-group-item-action text-center" href="#"><strong>+ PRIDAŤ POZNÁMKU +</strong></a>
                <a class="list-group-item list-group-item-action text-center" href="#"><strong>- ODSTRÁNIŤ KATEGÓRIU -</strong></a>
                <a class="list-group-item list-group-item-action text-center" href="#"><strong>- ODSTRÁNIŤ POZNÁMKU -</strong></a>
            </div>
        </div>

        <div class="col-4"></div>

        <div class="col-8 text-center">
            <h3 class="background py-3">Poznámky:</h3>
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                <div class="row justify-content-around">
                    <?php foreach ($data["categories"] as $category):?>
                        <h4 id="<?= $category->getId()?>" class="my-2 poznamky-mode"><?= $category->getName()?></h4>
                        <?php foreach ($data["notes"] as $note):?>
                            <?php if ($category->getId() == $note->getIdCat()) {?>
                                <div class="card my-3" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $note->getNadpis()?></h5>
                                        <p class="card-text text-left"><?= $note->getPoznamka()?></p>
                                    </div>
                                </div>
                            <?php }?>
                        <?php endforeach?>
                    <?php endforeach?>
                </div>
            </div>
        </div>
    </div>

    <div>
        <h1 class="py-3 poznamky-mode"></h1>
    </div>
</div>