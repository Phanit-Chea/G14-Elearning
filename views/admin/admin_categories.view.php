
<div class="table-responsive">
    <table class="table text-start align-middle table-bordered table-hover mb-0">
        <thead>
            <tr class="text-white">
                <th scope="col"><input class="form-check-input" type="checkbox"></th>
                <th scope="col">ID</th>
                <th scope="col">Categories Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $statement = $connection->prepare('SELECT * from categories');
                $statement->execute();
                $categories = $statement->fetchAll();
                foreach ($categories as $category):
            ?>
            <tr>
                <td><input class="form-check-input" type="checkbox"></td>
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
