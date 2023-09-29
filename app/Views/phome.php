<?php
$db = \Config\Database::connect();

$query = $db->query("SELECT * FROM newproduct LIMIT 8");
$results = $query->getResultArray();

?>
<!-- ------------------------------------------------ -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url('image/banner-3.jpg'); ?>" class="d-block w-100" alt="..." style="height:600px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('image/banner-4.jpg'); ?>" class="d-block w-100" alt="..." style="height:600px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('image/banner-5.jpg'); ?>" class="d-block w-100" alt="..." style="height:600px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!-- --------------------------------------------------- -->

<div class="container">

  <div class="row d-flex justify-content-around align-items-center" style="padding: 30px 0px 30px 0px;margin-left: -12px;">

    <?php foreach ($results as $row) {
    ?>
      <div class="col-4 border" style="width: 18rem;margin:5px;">
   
          <div class="d-flex">
            <div class="shipping-box">
              <span><img src="<?= base_url('storage/' . $row['image']) ?>" alt="" style="width:100px;height:120px;"></span>
            </div>
            <?= anchor('cancelation', substr($row['title'], 0, 50), ['class' => 'newproduct']) ?>
          </div>
   

      </div>
    <?php } ?>
  </div>
</div>