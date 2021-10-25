<h4>Polical Parties</h4>
<ul>
    <?php foreach ($party as $key => $value) {
        echo "<li>$value[partyname]</li><a href='/party/delete/$value[id]' class='btn btn-danger btn-sm'>Delete</a> &nbsp;<a href='/party/update/$value[id]/$value[partyname]' class='btn btn-primary btn-sm'>Update</a>";
    }?>


</ul>

<a href="/party/add" class="btn btn-success">Add New Party</a>