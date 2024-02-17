
<div class="table-responsive">
    <h2 class="m-3">Users List</h2>
    <table class="table text-start align-middle table-bordered table-hover mb-0">
        <thead>
            <tr class="text-white">
                <th scope="col"><input class="form-check-input" type="checkbox"></th>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require "models/employee.model.php";
                $statement = $connection->prepare('SELECT * FROM users');
                $statement->execute();
                $users = $statement->fetchAll();
                foreach($users as $user):
            ?>
            
            <tr>
                <td><input class="form-check-input" type="checkbox"></td>
                <td><?= $user['user_id'];?></td>
                <td><?= $user['username'];?></td>
                <td><?= $user['email'];?></td>
                <td><?= $user['role_id'];?></td>
                <td>
                    <a class="btn btn-sm btn-primary" href="">Delete</a>
                    <a class="btn btn-sm btn-primary" href="">Edit</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>