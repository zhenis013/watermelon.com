<?php $__env->startSection('content'); ?>

<div style = 'text-align: center;'>
  <span>Taste Our NEW Products</span>
  <h2 >Our Products</h2>
  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
</div>
<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="product">
  <img class="img-fluid" src="<?php echo e($product->photo); ?>" height = '200px' width = '180px'alt="Colorlib Template">
    <div class="overlay"></div>
  <div class="text py-3 pb-4 px-3 text-center">
    <h3><?php echo e($product->name); ?></h3>
    <div class="d-flex">
      <div class="pricing">
        <p class="price"><span class="price-sale">$ <?php echo e($product->price); ?></span></p>
      </div>
    </div>
    <div class="bottom-area d-flex px-3">
      <div class="m-auto d-flex">
        <a href="<?php echo e(route('add',['id' => $product->id] )); ?>" class="buy-now d-flex justify-content-center align-items-center mx-1">
          <span class="iconify" data-icon="ion-ios-cart" data-inline="false"></span>
        </a>
      </div>
    </div>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watermelon.com\resources\views/home.blade.php ENDPATH**/ ?>