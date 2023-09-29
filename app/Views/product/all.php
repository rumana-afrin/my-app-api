<?= $this->extend('layout') ?>


<?= $this->section('content') ?>

<div class="container ptitle">
    <h6>HOME / SALWAR KAMEEZ</h6>
</div>

<div class="container pall_container">

    <div class="row">
        <div class="pagination">
            <?= $allProduct['pager']->links() ?>
        </div>

        <?php foreach ($allProduct['product'] as $row) {
        ?>
            <div class="col-3">
                <div class="card p_card" style="width: 18rem;height: 450px;">
                    <img src="<?= base_url('storage/' . $row['image']) ?>" class="card-img-top" alt="" width="120px" height="250px">
                    <div class="card-body" style="height:220px;">
                        <p class="card-title"><?= substr($row['title'], 0, 50) ?></p>
                        <p class="card-price">Tk: <?= $row['price'] ?></p>
                        <!-- <p class="card-text"><?= substr($row['description'], 0, 100) ?></p> -->

                    </div>
                    <div class="d-flex justify-content-between" style="width: 100%;padding:10px">
                        <a href="<?= base_url('single/' . $row['id']) ?>" class="btn allpbutton" style="width: 40%;">Details</a>
                        <a href="javascript:void(0)" data-product-id="<?=  $row['id']?>" class="addto_cart"><button class="btn allpbutton cart_btn" style="width: 100%;">Add to Cart</button></a>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="pagination">
            <?= $allProduct['pager']->links() ?>
        </div>

    </div>
</div>


<?= $this->endSection('content') ?>