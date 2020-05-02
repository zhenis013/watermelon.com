<?php $__env->startSection('content'); ?>

<div style = 'text-align: center;'>
  <span>Taste Our NEW Products</span>
  <h2 >Our Products</h2>
  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
</div>
<?php for($i = 0; $i<3; $i++): ?>
<div class="product">
  <a href="#" class="img-prod"><img class="img-fluid" src="https://sun9-6.userapi.com/c858016/v858016732/1ea43f/UvXoSkrDEqI.jpg" height = '200px' width = '180px'alt="Colorlib Template">
    <div class="overlay"></div>
  </a>
  <div class="text py-3 pb-4 px-3 text-center">
    <h3><a href="#">Bell Pepper</a></h3>
    <div class="d-flex">
      <div class="pricing">
        <p class="price"><span class="price-sale">$80.00</span></p>
      </div>
    </div>
    <div class="bottom-area d-flex px-3">
      <div class="m-auto d-flex">
        <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
          <span class="iconify" data-icon="ion-ios-menu" data-inline="false"></span>
        </a>
        <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
          <span class="iconify" data-icon="ion-ios-cart" data-inline="false"></span>
        </a>
      </div>
    </div>
</div>
</div>
<?php endfor; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watermelon.com\resources\views/start.blade.php ENDPATH**/ ?>