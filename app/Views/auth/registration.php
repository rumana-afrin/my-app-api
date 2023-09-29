<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<form class=" p-3 mx-auto formmargin" method="post" enctype="multipart/form-data">
        <h4 class='text'>Register</h4>
        <p class='text'>Create your account. It's free and only takes a minute.</p>
        <!-- <div class="form-floating">
          <input type="hidden" name="id" value="" class="form-control" id="floatingInput" />
        </div> -->
        <!-- <div class="form-floating mb-2 d-flex"> -->
          <div class="form-floating mb-2">
            <input type="text" class="form-control" id="floatingname" name="name" placeholder="First Name" value="<?= set_value('name') ?>"/>
            <label for="floatingname">First Name</label>
          </div>
          <!-- <div class="form-floating mb-2 widthh width2">
            <input type="text" class="form-control" id="floatingname" name="name" placeholder="Last Name" />
            <label for="floatingname">Last Name</label>
          </div> -->
        <!-- </div> -->
        <div class="form-floating mb-2">
          <input type="email" class="form-control" id="floatingemail" name="email" placeholder="Email" value="<?= set_value('email') ?>"/>
          <label for="floatingprice">Email</label>
        </div>    
        <div class="form-floating mb-2">
          <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required/>
          <label for="floatingQuantity">Password</label>
        </div>
        <div class="form-floating mb-2">
          <input type="password" class="form-control" id="floatingPassword" name="password2" placeholder="Password" required/>
          <label for="floatingQuantity">Conform Password</label>
        </div>
       
        <div>
          <!-- {/* <input type="submit" class="" id="floatingsubmit" value="submit" name="submit" /> */} -->
          <button class="btn btn-success" type="submit">Register</button>
        </div>

      </form>

<?= $this->endSection('content') ?>