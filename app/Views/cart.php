<?= $this->extend('layout') ?>


<?= $this->section('content') ?>

<div class="container">
    <!-- 
    <table id="product_table" class="table table-responsive">
        <tr>

            <th>Name</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Item Total</th>
            <th>Action</th>
        </tr>
        <tbody id="dyn_tr"></tbody>
        <tfoot>
            <tr>
                <td colspan="8"></td>
                <td colspan="2">Total: <span id="grandtotal"></span></td>
            </tr>

        </tfoot>

    </table> -->



    <div class=" row pr-5 d-flex justify-content-center">
        <div class="col-9 mr-5 border p-3 pd-4 bg-white ml-0" id="cart" style="margin: 30px;">
            <div class="d-flex">
                <div class="col-3">
                    <h4>product</h4>
                </div>
                <div class="col-3 d-flex flex-wrap align-content center">
                    <h4>Title</h4>
                </div>
                <div class="col-3 d-flex flex-wrap align-content center">
                    <h4>quantity</h4>
                </div>
                <div class="col-2 d-flex flex-wrap align-content center">
                    <h4>price</h4>
                </div>
            </div>
            <div id="dyn_tr" style="overflow: auto;height: auto;">

            </div>
            <div class="col-9 d-flex justify-content-between">
                <div class="col-10"></div>
                <div class="col-1">Total:= <span id="grandtotal"></span></div>

            </div>


            <div id="cart-footer">
                <div id="order_btn" class="text-center text-white w-100  p-2 font-weight-blod">
                <a href="checkout"><button class="btn allpbutton cart_btn" style="width: 100%;">order</button></a>
                </div>

            </div>

        </div>

    </div>

    <!-- <div class="shipping-area d-flex justify-content-end">
        <? //= anchor('checkout', '<button class="view-btn color-2 mt-10"><span>Proceed</span></button>') 
        ?>

    </div> -->
</div>


<?= $this->endSection('content') ?>
<?= $this->section('myscript') ?>

<script>
    $(document).ready(function() {

        let showCart = new Cart();
        console.log(showCart.getItems());
        let cartInfo = showCart.getItems();
        let html = "";
        cartInfo.forEach(e => {
            html +=
                ` <div class="main d-flex p-3 border border-left-o border-right-0 border-top-0">
                        <div class="col-1 border border-left-0 border-top-0 border-bottom-0">
                            <img src="<?= base_url('storage/') ?>${e.image}"   class="w-100" alt="" style="width:20px;height:50px"/>
                        </div>
    
                        <div id="title" class="col-3 d-flex flex-wrap align-content-center" style="margin-left:122px;">
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
                    </div>`;

            return html;

        });
        $('#dyn_tr').html(html);
        $(".cart-single-item").html(html);
        $(".removeItem").click(function() {
            console.log($(this).data("item"));
            if (confirm("Are you sure you want to remove")) {
                showCart.removeItem($(this).data("item"));
                location.reload();
            }
        });


    });
</script>

<?= $this->endSection('myscript') ?>