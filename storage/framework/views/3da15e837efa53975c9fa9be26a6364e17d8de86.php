
<?php $__env->startSection('content'); ?>
<div class="hero-wrap hero-bread" style="background-image: url('https://sun9-14.userapi.com/c856124/v856124578/224708/wGhSrX_ZSYo.jpg');">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products</span></p>
        <h1 class="mb-0 bread">Products</h1>
      </div>
    </div>
  </div>
</div>


    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">

          <div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
    					<li><a href='/shop'>All</a></li>
    					<li><a href=<?php echo e(route('sort',['category' => 1] )); ?>>Vegetables</a></li>
    					<li><a href=<?php echo e(route('sort',['category' => 2] )); ?>>Fruits</a></li>
    					<li><a href=<?php echo e(route('sort',['category' => 3] )); ?>>Juice</a></li>
    					<li><a href=<?php echo e(route('sort',['category' => 4] )); ?>>Dried</a></li>
    				</ul>
    			</div>
    		</div>


    		<div class="row">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    				<div class="product">
    					<img class="img-fluid" src=<?php echo e($product->photo); ?> height = '100px' width = '80px'alt="Colorlib Template">
    						<div class="overlay"></div>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#"><?php echo e($product->name); ?></a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="price-sale">$ <?php echo e($product->price); ?></span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="<?php echo e(route('add',['id'=>$product->id])); ?>" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span class="iconify" data-icon="ion-ios-cart" data-inline="false"></span>
	    							</a>
    							</div>
    						</div>
    				</div>
    			</div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php echo e($products->links()); ?>

    		</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watermelon.com\resources\views/shop.blade.php ENDPATH**/ ?>