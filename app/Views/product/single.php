<?= $this->extend('layout') ?>


<?= $this->section('content') ?>


<div class="container-fluid single_page">
    <div class="row ">
        <div class="col-4 image_section">
            <img id="imagesalert" width="250px" height="300px" src="<?= base_url('storage/' . $info['image']) ?>" alt="">
        </div>
        <div class="col-5">
            <div class="pbody">
                <h3><?= $info['title'] ?></h3>
                <h5><?= $info['price'] ?></h5>
                <p>Size Chart</p>
                <p><?= $info['description']?></p>
            </div>
        </div>
        <div class="col-3 delivery_section">
            <h4>DELIVERY CHARGE</h4>
            <p> Delivery Charge 100TK <br> All Bangladesh</P>
            <p>Must Advance Pay</p>
            <br>
            <h6>DELIVERY TIME</h6>
            <P>3 TO 5 WORKING DAYS</P>

        </div>
    </div>
    <!-- <div>
        <ul>
            <li>
                <?= anchor('description', 'DESCRIPTION', ['class' => 'aditional']) ?>
                <?= anchor('dash', 'ADDITIONAL INFORMATION', ['class' => 'aditional']) ?>
                <?= anchor('dash', 'REVIEW', ['class' => 'aditional']) ?>
            </li>
        </ul>
    </div> -->
    <div id="description" style="margin-top: 20px;">
    <p><?= $info['description']?></p>
    </div>
</div>


<?= $this->endSection('content') ?>


