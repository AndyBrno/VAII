<?php
/**
 * @var Array $data
 * @var \App\Models\Note $note
 * @var \App\Core\LinkGenerator $link
 */
?>

<div class="container text-center">
    <h1>Vyber poznámku podľa nadpisu, ktorú chceš upraviť</h1>
    <form method="post" action="<?= $link->url('note.edit') ?>">
        <?php foreach ($data["notes"] as $note): ?>
            <input type="radio" name="id" value="<?=$note->getId()?>">
            <label><?= $note->getNadpis()?></label><br>
        <?php endforeach; ?>
        <button>Uprav</button>
    </form>
</div>
