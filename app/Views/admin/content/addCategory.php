<?= $this->extend('admin/dashboard'); ?>

<?= $this->section('addCategory'); ?>

<div class="container-fluid px-4">

    <form action="addCategory" class=" p-3 mx-auto fstyle" method="post" enctype="multipart/form-data">
        <h2>Category Management</h2>
        <div class="form-floating mb-3">
            <input type="hidden" class="form-control" id="floatingInput" name="category" placeholder="title">
            <label for="floatingInput">Category Id</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="name" placeholder="title">
            <label for="floatingInput">Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="file" class="form-control" id="floatingimage" name="image" placeholder="image">
            <label for="floatingimage">Image</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingPrice" name="status" placeholder="discount price">
            <label for="floatingPassword">Status</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingDescription" name="quantity" placeholder="description">
            <label for="floatingPassword">Quantity</label>
        </div>
        <input type="submit" class="form-control" id="floatingbutton" placeholder="quantity" value="Add Category">


    </form>

</div>


<?= $this->endSection('addCategory'); ?>