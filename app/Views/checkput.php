<?= $this->extend('layout'); ?>

<?= $this->section('checkout'); ?>
<div style="text-align: center;padding:20px;">
    <h2>Checkout</h2>
</div>

<div class="container">
    <div class="row d-flex justify-content-between border p-5" style="margin:0px 0px 63px 0px;">
        <div class="col-8">
            <div class="main d-flex p-3  border-left-o border-right-0 border-top-0">
                <div class="col-1 border border-left-0 border-top-0 border-bottom-0">
                    <img src="<?= base_url('storage/') ?>${e.image}" class="w-100" alt="" style="width:20px;height:50px" />
                </div>

                <div id="title" class="col-2 d-flex flex-wrap align-content-center" style="margin-left:122px;">
                    <h6>${e.title}</h6>
                </div>

                <div class="col-3 d-flex flex-wrap align-content-center" style="margin-left:15px;">
                    <input type="number" id="myNumber" style="width:90px">
                </div>

                <div class="col-2 d-flex flex-wrap align-content-center" id="t_price" style="margin-left:3px;">
                    <h6 class="mt-2 d-flex"><span> $ </span> <span class="cart_item_price"> ${e.price} </span></h6>
                </div>

                <div class="col-1 d-flex flex-wrap align-content-center">
                    <span class="close removeItem" style="cursor:pointer;font-size:25px" data-item='${e.id}'>&times;</span>
                </div>
                <div class="col-2 d-flex flex-wrap align-content-center" id="t_price" style="margin-left:3px;">
                    <h6 class="mt-2 d-flex"><span> $ </span> <span class="cart_item_price"> $258</span></h6>
                </div>
            </div>
            <div class="col-9 d-flex justify-content-between">
                <div class="col-11"></div>
                <div class="col-1" style="margin-left: 121px;font-size: 18px;">Total:= <span id="grandtotal"></span></div>
            </div>
        </div>
        <div class="col-3" style="margin-left: 5px;">
            <form action="" method="post" enctype="multipart/form-data">
                <h5>YOUR INFORMATION</h5>
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">Address</label>
                        <input type="text" id="inputemail" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">Phone</label>
                        <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                </div>
                <div style="margin-top: 40px;">
                    <h5>PAYMENT OPTIONS</h5>
                </div>
                <div>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">bKash</option>
                        <option value="2">Visa</option>
                        <option value="3">PayPal</option>
                        <option value="3">Sure Cash</option>
                        <option value="3">iPay</option>
                    </select>
                </div>
                <div>
                <button type="button" class="btn btn" style="margin-top: 20px;padding:10px;width:200px;background-color: #7e0404;color:rgb(232, 229, 225);">Buy Now</button>
                </div>
            </form>
           
        </div>
    </div>
</div>


<?= $this->endSection('checkout'); ?>