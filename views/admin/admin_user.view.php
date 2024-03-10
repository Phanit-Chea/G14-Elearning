<link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css"/> 
<div class="table-responsive p-5 pt-3">
    <h2>Users List</h2>
    <div class="container w-50 pt-5"></div>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
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
            $statement = $connection->prepare('SELECT * FROM users_list');
            $statement->execute();
            $users = $statement->fetchAll();
            $id = 1;

            foreach ($users as $user) :
            ?>

                <tr>
                    <td>
                        <?= $id; ?>
                        <?php $id++; ?>
                    </td>
                    <td>
                        <?= $user['username']; ?>
                    </td>
                    <td>
                        <?= $user['email']; ?>
                    </td>
                    <td>
                        <?= $user['role_type']; ?>
                    </td>
                    <td>
                        <a onclick="return confirm('Do you want to delete this user?')" class="btn btn-sm btn-primary" href="/controllers/admin/admin_crud_user/delete_user.controller.php?id=<?= $user['user_id']; ?>"><i class="bi bi-trash-fill"></i></a>
                        <a class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?= $user['user_id']; ?>"><i class="bi bi-pencil-square"></i></a>

                        <div class="modal fade" id="edit<?= $user['user_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">

                                <div class="modal-content bg-secondary">
                                    <div class="modal-header ">
                                        <h5 class="modal-title text-warning" id="exampleModalLabel">Edit User</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <form action="controllers\admin\admin_crud_user\edit_user.controller.php" method="POST">
                                            <input type="hidden" value="<?= $user['user_id']; ?>" name="id">
                                            <div class="form-floating mb-3">
                                                <input type="name" class="form-control" id="floatingInput" placeholder="name@example.com" name="username" value="<?= $user['username']; ?>" required>
                                                <label for="floatingInput">Name</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="<?= $user['email']; ?>" required>
                                                <label for="floatingInput">Email address</label>
                                            </div>

                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-warning text-black">Save changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<script defer src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script defer src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
<script defer src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap4.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>