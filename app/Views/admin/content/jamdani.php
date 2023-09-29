<?= $this->extend('admin/dashboard') ?>

<?= $this->section('jamdani') ?>
<div class="container-fluid pt-4 px-4">

    <form action="addjamdani" class=" p-3 mx-auto fstyle" method="post" enctype="multipart/form-data">
        <div style="text-align: center;" style="padding:10px;">
        <h4>Jamdani Shari</h4>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="category" placeholder="title">
            <label for="floatingInput">Category</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="title" placeholder="title">
            <label for="floatingInput">Title</label>
        </div>
        <div class="form-floating  mb-3">
            <input type="text" class="form-control" id="floatingprice" name="price" placeholder="price">
            <label for="floatingprice">Price</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingPrice" name="d_price" placeholder="discount price">
            <label for="floatingPrice">Discount Price</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="description"></textarea>

            <!-- <input type="textarea" class="form-control" id="floatingDescription" name="description" placeholder="description"> -->
            <label for="floatingTextarea">Description</label>
        </div>
        <div class="form-floating mb-3">
            <input type="file" class="form-control" id="floatingimage" name="image" placeholder="image">
            <label for="floatingimage">Image</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingsku" name="sku" placeholder="sku">
            <label for="floatingsku">sku</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingQuantity" name="quantity" placeholder="quantity">
            <label for="floatingQuantity">Quantity</label>
        </div>
        <input type="submit" class="form-control" id="floatingbutton" placeholder="quantity" value="Add">


    </form>

</div>


<?= $this->endSection('jamdani') ?>