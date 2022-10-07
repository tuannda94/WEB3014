<!-- Kế thừa lại layout master -->
<?php $_shouldextend[1]=1; ?>

<!-- Truyền giá trị cho những phần thay đổi -->
<!-- yield(tên)  ~ section(tên, giá trị) -->
<?php $this->startSection('title', 'Danh sách sản phẩm'); ?>

<!-- yield(tên) ~ section(tên) nội dung endsection -->
<?php $this->startSection('content-title', 'ABC'); ?>
<?php $this->startSection('content'); ?>

THƯ VIỆN BLADE ONE PHP2
<!-- <?php echo $name ?> -->
<!-- <?php echo $price ?> -->

<!-- Với blade -->
<?php echo \htmlentities($name??'', ENT_QUOTES, 'UTF-8', false); ?>

<?php echo \htmlentities(strlen($name) > 2 ? "Do dai lon hon 2" : "Do dai nho hon 2"??'', ENT_QUOTES, 'UTF-8', false); ?>


<?php echo \htmlentities($price??'', ENT_QUOTES, 'UTF-8', false); ?>

<?php if($price > 10000000): ?>
 <p>Lon hon 10tr</p>
<?php else: ?>
 <p>Nho hon 10 tr</p>
<?php endif; ?>

<ul>
 <?php $__currentLoopData = $array; $this->addLoop($__currentLoopData);$this->getFirstLoop();
 foreach($__currentLoopData as $item): $loop = $this->incrementLoopIndices();  ?>
 <li><?php echo \htmlentities($item??'', ENT_QUOTES, 'UTF-8', false); ?></li>
 <?php endforeach; $this->popLoop(); $loop = $this->getFirstLoop(); ?>
</ul>

<?php $this->stopSection(); ?>

<?php if (isset($_shouldextend[1])) { echo $this->runChild('layouts.master'); } ?>