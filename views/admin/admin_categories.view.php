<?php
require "models/admin.model.php";
?>
<div class="table-responsive p-5 pt-3">
    <div class = "mb-3 d-flex justify-content-between align-items-center">
        <h2>Users List</h2>

        <!-- Button trigger modal --> 
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-modal"> 
        Create Category 
        </button> 

    </div>
    <table class="table text-start align-middle table-bordered table-dark table-hover mb-0">
        <thead>
            <tr class="text-white">
                <th scope="col">ID</th>
                <th scope="col">Categories Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <!-- ==================Edit Category ============== -->
            <tbody> 
            <?php 
                $categories = getData(); 
                foreach ($categories as $category): 
 
            ?> 
            <tr> 
                <td><?= $category['category_id']?></td> 
                <td><?= $category['category_name']?></td> 
                <td> 
                    <a onclick="return confirm('Do you want to delete this category?')" class="btn btn-sm btn-primary" href="controllers/admin/category/admin_delete_categories.controller.php?id=<?= $category['category_id'] ?>">Delete</a> 
                    <button type='button' class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#edit-modal<?= $category['category_id'] ?>">Edit</button> 
                </td> 
            </tr> 
            <div class="modal fade" id="edit-modal<?= $category['category_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
              <div class="modal-dialog"> 
                <div class="modal-content"> 
                  <div class="modal-header"> 
                    <h5 class="modal-title text-primary" id="exampleModalLabel">Modal title</h5> 
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
                  </div> 
                  <div class="modal-body"> 
                  <form action="controllers/admin/category/admin_edit_categories.controller.php" method="post"> 
                  <input type="hidden" class="form-control" value="<?= $category['category_id'] ?>" id="id" name="id"> 
                      <div class="form-floating mb-3"> 
                          <input type="text" class="form-control" value="<?= $category['category_name'] ?>" id="name" name="name"> 
                          <label for="floatingInput">Category Name</label> 
                      </div> 
                      <div class="form-floating mb-4"> 
                          <input type="text" class="form-control" value="<?= $category['category_description'] ?>" id="description" name="description"> 
                          <label for="floatingPassword">Description</label> 
                      </div> 
                      <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Add Category</button> 
                </form> 
      </div> 
    </div> 
  </div> 
</div> 
            <?php endforeach;?> 
        </tbody>
            
            
        </tbody>
    </table>
</div>

<!-- ========================= show popup form when create category ================= -->
<!-- Modal --> 
<div class="modal fade" id="add-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
  <div class="modal-dialog"> 
    <div class="modal-content"> 
      <div class="modal-header"> 
        <h5 class="modal-title text-primary" id="exampleModalLabel">New Category</h5> 
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
      </div> 
      <div class="modal-body"> 
      <form action="controllers/admin/category/admin_add_categories.controller.php" method="post"> 
                    <div class="form-floating mb-3"> 
                        <input type="text" class="form-control" id="name" name="name"> 
                        <label for="floatingInput">Category Name</label> 
                    </div> 
                    <div class="form-floating mb-4"> 
                        <input type="text" class="form-control" id="description" name="description"> 
                        <label for="floatingPassword">Description</label> 
                    </div> 
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4"  style="background-color: orange;">Add Category</button> 
                </form> 
      </div> 
    </div> 
  </div> 
</div>

