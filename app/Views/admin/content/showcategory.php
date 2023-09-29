<?= $this->extend('admin/dashboard'); ?>

<?= $this->section('showCategory'); ?>

<table class="table table-hover">

    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Category</th>
            <th scope="col">image</th>
            <th scope="col">status</th>
            <th scope="col">quantity</th>
            <th scope="col">manage</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categoryData['pdata'] as $row) { ?>
            <tr>
                <th><?= $row['id'] ?></th>
                <td><?= $row['name'] ?></td>
                <td><img src="<?=base_url('storage/'  . $row['image'] )?>" alt="" width="50px" height="50px"></td>
                
                <td><?= $row['status'] ?></td>
                
                <td><?= $row['quantity'] ?></td>

                <td>
                    <?= anchor('delete', "Delete", ['class' => 'deleteBtn']) ?>
                </td>
            </tr>
        <?php } ?>
    </tbody>

</table>



<?= $this->endSection('showCategory'); ?>