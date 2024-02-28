<?php
require "database/database.php";
require "models/admin.model.php";

if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    if (isset($_GET['query'])) {
        $text = $_GET['query'];
        $categories = $text?searchCategory($text):getData();
        $id = 1;
        foreach ($categories as $category) :
    
?>
        <tr> 
                <td><?=  $category['category_id']?></td> 
                <td><?=  $category['category_name']?></td> 
                <td> 
                    <a onclick="return confirm('Do you want to delete this category?')" class="btn btn-sm btn-primary" href="controllers/admin/category/admin_delete_categories.controller.php?id=<?= $category['category_id'] ?>"><i class="bi bi-trash-fill"></i></a> 
                    <button type='button' class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#edit-modal<?= $category['category_id'] ?>"><i class="bi bi-pencil-square"></i></button> 
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
                  <input type="hidden" class="form-control" value="<?=  $category['category_id'] ?>" id="id" name="id"> 
                      <div class="form-floating mb-3"> 
                          <input type="text" class="form-control" value="<?= $category['category_name'] ?>" id="name" name="name"> 
                          <label for="floatingInput">Category Name</label> 
                      </div> 
                      <div class="form-floating mb-4"> 
                          <input type="text" class="form-control" value="<?=  $category['category_description'] ?>" id="description" name="description"> 
                          <label for="floatingPassword">Description</label> 
                      </div> 
                      <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Add Category</button> 
                </form> 
<?php
    endforeach;
}
}

