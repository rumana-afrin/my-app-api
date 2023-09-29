 <?= $this->extend('layout'); ?>

 <?= $this->section('shari'); ?>
 
 <div class="container shari">
     <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="<?= base_url();?>">Home</a></li>
             <li class="breadcrumb-item"><a href="<?= base_url('shari');?>">Shari</a></li>
             <li class="breadcrumb-item active abc" aria-current="page">Jamdani</li>
         </ol>
     </nav>
 </div>
 <div class="container pall_container">
     <div class="row">
         <div class="pagination">
             <?= $data['pager']->links() ?>
         </div>

         <?php foreach ($data['pdata'] as $row) {
            ?>
             <div class="col-3">
                 <div class="card p_card" style="width: 18rem;height: 450px;">
                     <img src="<?= base_url('storage/' . $row['image']) ?>" class="card-img-top" alt="..." width="200" height="200">
                     <div class="card-body">
                         <h5 class="card-title"><?=substr($row['title'], 0, 50)?></h5>
                         <p class="card-text"><?= substr($row['description'], 0, 50) ?></p>
                         <p class="card-text"><?= $row['price'] ?></p>
                         <a href="<?= base_url('single/'. $row['id']);?>" class="btn btn allpbutton">Details</a>
                     </div>
                 </div>
             </div>
         <?php } ?>
         <div class="pagination">
             <?= $data['pager']->links() ?>
         </div>

     </div>
 </div>


 <?= $this->endSection('shari'); ?>