
<?php
    $categories = getData();
?>
<div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                                <h3 class="text-primary">New Category</h3>   
                        </div>
                        <form action="controllers/admin/category/admin_add_categories.controller.php" method = 'post'>
                            <input type="hidden" value="<?= $categories['id'] ?>" name="id">
                            <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" name ="name" value="<?= $categories['name'] ?>">
                            <label for="floatingInput">Category Name</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" id="description"  name ="description" value="<?= $categories['description'] ?>">
                            <label for="floatingPassword">Description</label>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Add Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        