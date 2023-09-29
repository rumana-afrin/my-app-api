<?= $this->extend('layout'); ?>;

<?= $this->section('owlCarousel'); ?>


<div class="container" style="margin-top: 30px;margin-bottom:30px">
    <div class="owl-carousel owl-theme">
        <?php foreach ($C_data['c_data'] as $row) { ?>
            <div class="item" style="text-align: center;">
                <a href=""><img src="<?= base_url('storage/' . $row['image']) ?>" alt="" style="width:200px;height:200px;border-radius:50%;margin:auto"></a>
                <h5><?= anchor('salwar_kameez', $row['name'], ['class' => "itemline"]) ?></h5>
            </div>
        <?php } ?>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <img src="<?= base_url() ?>/image/banner-1.jpg" alt="" class="bannerimage1">
        </div>
        <div class="col-4">
            <div>
                <img src="<?= base_url() ?>/image/image-1.jpg" alt="" class="bannerimage2">
            </div>
            <div>
                <img src="<?= base_url() ?>/image/image-2.jpg" alt="" class="bannerimage2 banner3">
            </div>
        </div>
    </div>
</div>

<div class="container swiper">
    <div class="row">
        <div class="col d-flex">
            <div class="shipping-box">
                <span><i class="bi bi-truck"></i></span>
            </div>
            <?= anchor('cancelation', 'Cancellation & Returns If products not matched', ['class' => 'shipp-text']) ?>
        </div>
        <div class="col d-flex">
            <div class="shipping-box">
                <span><i class="bi bi-wallet-fill"></i></span>
            </div>
            <?= anchor('cancelation', 'Privacy Policy Check before dealing', ['class' => 'shipp-text']) ?>
        </div>
        <div class="col d-flex">
            <div class="shipping-box">
                <span><i class="bi bi-currency-exchange"></i></span>
            </div>
            <?= anchor('cancelation', 'EMI Policy We provide 0% EMI facilities*', ['class' => 'shipp-text']) ?>
        </div>
        <div class="col d-flex">
            <div class="shipping-box">
                <span><i class="bi bi-chat-left-text-fill"></i></span>
            </div>
            <?= anchor('cancelation', 'Customer Support Call us at 09613800800', ['class' => 'shipp-text']) ?>
        </div>
    </div>
</div>
<?= $this->include('phome'); ?>

<?= $this->endSection('owlCarousel'); ?>