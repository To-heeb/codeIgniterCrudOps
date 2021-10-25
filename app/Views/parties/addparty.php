<h3>Add New Party</h3>
<?= \Config\Services::validation()->listErrors() ?>
<?php if (isset($msg)) {
    echo esc($msg);
}?>
<form action="/party/add" method="post">
    <?= csrf_field() ?>

    <label for="title">Party Shorthand</label>
    <input type="input" name="partyTitle" /><br />

    <input type="submit" name="submit" value="Add Party" />
</form>