<h3>Update Party</h3>
<?= \Config\Services::validation()->listErrors() ?>

<form action="/party/update/<?= esc($id)?>" method="post">
    <?= csrf_field() ?>

    <label for="title">Party Shorthand</label>
    <input type="input" name="partyTitle" value="<?= esc($party)?>"/><br/>

    <input type="submit" name="submit" value="Update Party" />
</form>