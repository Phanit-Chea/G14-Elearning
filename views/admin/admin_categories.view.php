<?php
require "models/admin.model.php";
?>
<div class="table-responsive p-5 pt-3">
  <!-- <div class = "mb-3 d-flex justify-content-between align-items-center"> -->
  <h2>Categories List</h2>

  <div class="d-flex justify-content-between w-100 mb-3">

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary h-50 d-flex mt-3" data-bs-toggle="modal" data-bs-target="#add-modal">
      Create Category
    </button>

    <!-- input search -->
    <form class="d-none d-md-flex  mt-3">
      <input class="form-control bg-secondary border-0 w-100" id="search" name="search" type="search" placeholder="Search">
    </form>
  </div>
  <!-- </div> -->
  <table class="table text-start align-middle table-bordered table-dark table-hover mb-0">
    <thead>
      <tr class="text-white">
        <th scope="col">ID</th>
        <th scope="col">Categories Name</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>

    <!-- ==================Edit Category ============== -->
    <tbody id="search_category">
      <?php
      $categories = getData();
      foreach ($categories as $num => $category) :

      ?>
        <tr>
          <td><?= $num + 1 ?></td>
          <td><?= $category['category_name'] ?></td>
          <td><img class="rounded-circle" src="../../assets/images/categories/<?= $category['category_image'] ?>" alt="" style="width: 50px; width: 50px;"></td>
          <td>

            <a onclick="return confirm('Do you want to delete this category?')" class="btn btn-sm btn-primary" href="controllers/admin/category/admin_delete_categories.controller.php?id=<?= $category['category_id'] ?>"><i class="bi bi-trash-fill"></i></a>
            <button type='button' class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#edit-modal<?= $category['category_id'] ?>"><i class="bi bi-pencil-square"></i></button>
          </td>
        </tr>
        <div class="modal fade" id="edit-modal<?= $category['category_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-secondary">
                <h5 class="modal-title text-warning " id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body bg-secondary">
                <form action="controllers/admin/category/admin_edit_categories.controller.php" method="post" enctype="multipart/form-data">
                  <input type="hidden" class="form-control" value="<?= $category['category_id'] ?>" id="id" name="id">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control text-white" value="<?= $category['category_name'] ?>" id="name" name="name">
                    <label for="floatingInput">Category Name</label>
                  </div>

                  <!--image  -->
                  <div class="form-floating mb-3">
                    <label for="image" class="form-label"></label>
                    <input type="file" name="image" class="form-control bg-dark text-white" id="image">
                  </div>

                  <div class="form-floating mb-4">
                    <input type="text" class="form-control text-white" value="<?= $category['category_description'] ?>" id="description" name="description">
                    <label for="floatingPassword">Description</label>
                  </div>
                  <button type="submit" class="btn btn-warning text-black py-3 w-100 mb-4">Update Category</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </tbody>


    </tbody>
  </table>
</div>

<!-- ========================= show popup form when create category ================= -->
<!-- Modal -->
<div class="modal fade " id="add-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-secondary">
        <h5 class="modal-title text-primary" id="exampleModalLabel">New Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body bg-secondary">
        <form action="/controllers/admin/category/admin_add_categories.controller.php" method="post" enctype="multipart/form-data">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="name" name="name">
            <label for="floatingInput">Category Name</label>
          </div>

          <!--image  -->
          <div class="form-floating mb-3">
            <label for="image" class="form-label"></label>
            <input type="file" name="image" class="form-control bg-dark text-white" id="image">
          </div>

          <div class="form-floating mb-4">
            <input type="text" class="form-control" id="description" name="description">
            <label for="floatingPassword">Description</label>
          </div>
          <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Add Category</button>
        </form>
      </div>
    </div>
  </div>
</div>