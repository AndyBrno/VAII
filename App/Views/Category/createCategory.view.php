<?php
    /**
     *@var Array $data
     * @var \App\Models\Category $category
     * @var \App\Core\LinkGenerator $link
     */
?>
<form method="post" action="<?= $link->url('category.save') ?>">


    <label for="post-text" class="form-label">Názov kategórie</label>
    <div class="input-group has-validation mb-3 ">
        <input type="text" name="newCategory">
    </div>

    <button type="submit" class="btn btn-primary">Uložiť</button>
</form>