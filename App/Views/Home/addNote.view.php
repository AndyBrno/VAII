<?php
    /**
     * @var Array $data
     * @var \App\Models\Category $category
     * @var \App\Core\LinkGenerator $link
     */
    $categories = $data["categories"];
?>
<div class="text-center container">
    <form method="post" action="<?= $link->url('note.save') ?>">
        <label for="fname">Kategória:</label><br>
        <select name="Note Category">
            <?php foreach ($categories as $category):?>
                <option value="<?=$category->getId()?>"> <?= $category->getName()?></option>
            <?php endforeach; ?>
        </select><br>
        <label for="fname">Nadpis:</label><br>
        <input type="text" name="newNadpis"><br>
        <label for="fname">Poznámka:</label><br>
        <input class="container" type="text" name="newPoznamka"><br>
        <button>pridaj</button>
    </form>
</div>