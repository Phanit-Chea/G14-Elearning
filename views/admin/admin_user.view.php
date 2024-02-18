<div class="table-responsive p-5 pt-3">
    <h2 >Users List</h2>
    <table class="table text-start align-middle table-bordered table-dark table-hover mb-0">
        <thead>
            <tr class="text-white">
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $statement = $connection->prepare('SELECT * FROM users');
                $statement->execute();
                $users = $statement->fetchAll();
                foreach($users as $user):
            ?>
            
            <tr>
                <td><?= $user['user_id'];?></td>
                <td><?= $user['username'];?></td>
                <td><?= $user['email'];?></td>
                <td><?= $user['role_id'];?></td>
                <td>
                    <a class="btn btn-sm btn-primary" href="/controllers/admin/admin_crud_user/delete_user.controller.php?id=<?= $user['user_id']; ?>">Delete</a>
                    <a class="btn btn-sm btn-primary" href="">Edit</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>