
<?php
require "models/admin.model.php";
?>
<div class="table-responsive p-5 pt-3">
    <div class = "mb-3 d-flex justify-content-between align-items-center">
        <h2>Users List</h2>
        <a class="btn btn-primary" href="/add_category">Open modal for @mdo</a>
    </div>
    <table class="table text-start align-middle table-bordered table-dark table-hover mb-0">
        <thead>
            <tr class="text-white">
                <th scope="col">ID</th>
                <th scope="col">Categories Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $categories = getData();
                foreach ($categories as $category):

            ?>
            <tr>
                <td><?= $category['category_id']?></td>
                <td><?= $category['category_name']?></td>
                <td>
                <a class="btn btn-sm btn-primary" href="">Delete</a>
                <a class="btn btn-sm btn-primary" href="">Edit</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
