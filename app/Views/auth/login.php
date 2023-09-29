<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<!-- <div class="p-3 mx-auto"> -->
  <form class="p-3 mx-auto formmargin" method="post" enctype="multipart/form-data">
  <?//= form_open("login") ?>
  <h4 class='text'>Login</h4>
  <!-- <div class="form-floating">
    <input type="hidden" name="id" value="" class="form-control" id="floatingInput" />
  </div> -->

  <div class="form-floating mb-2">
    <input type="email" class="form-control" id="floatingprice" name="email" placeholder="Email" value="<?= set_value('email') ?>" />
    <label for="floatingEmail">Email</label>
  </div>
  <div class="form-floating mb-2">
    <input type="password" class="form-control" id="floatingQuantity" name="password" placeholder="Password" />
    <label for="floatingQuantity">Password</label>
  </div>

  <div>
    <button class="btn btn-success" type="submit">Login</button>
  </div>
  <!-- <?//= form_close() ?> -->
  </form>
<!-- </div> -->


<?= $this->endSection('content') ?>