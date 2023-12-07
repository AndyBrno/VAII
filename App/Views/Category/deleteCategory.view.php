<?php
/**
 *@var Array $data
 * @var \App\Models\Category $category
 * @var \App\Core\LinkGenerator $link
 */
?>
<div class="container text-center">
    <h1>Vyber kategóriu, ktorú chceš vymzať</h1>
    <form method="post" action="<?= $link->url('category.delete') ?>">
        <?php foreach ($data["categories"] as $category):?>
            <input type="radio" name="id" value="<?=$category->getId()?>">
            <label><?= $category->getName()?></label><br>
        <?php endforeach; ?>
        <button>Vymaž</button>
    </form>
</div>