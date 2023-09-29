<?= $this->extend('admin/dashboard'); ?>

<?= $this->section('show_product'); ?>


    <table class="table table-hover">

        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Category</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Discount Price</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Sku</th>
                <th scope="col">Quantity</th>
                <th scope="col">Manage</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($data['pdata'] as $row) { ?>
            <tr>
                <th><?= $row['id'] ?></th>
                <td><?= $row['category'] ?></td>
                <td><?= $row['title'] ?></td>
                <td><?= $row['price'] ?></td>
                <td><?= $row['d_price'] ?></td>
                <td><?= $row['description']?></td>
                <td><img src="<?=base_url('storage/'.$row['image'])?>" alt="" width="50px" height="50px"></td>
                <td><?= $row['sku'] ?></td>
                <td><?= $row['quantity'] ?></td>
                <td>
                
                <a href="<?= base_url('admin/delete/'.$row['id']) ?>" class="btn allpbutton" style="width: 100%;">Delete</a>
                    
                </td>
            </tr>
            <?php } ?>
        </tbody>

    </table>


<?//php// } ?>

<?= $this->endSection('show_product'); ?>