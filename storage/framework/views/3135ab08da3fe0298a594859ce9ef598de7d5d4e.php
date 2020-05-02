
<?php $__env->startSection('content'); ?>
<div class="hero-wrap hero-bread" style="background-image: url('https://sun9-33.userapi.com/c857220/v857220297/17a4f8/vqudeXC93Ps.jpg');">
</div>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center">
      <div>

        <form action="<?php echo e(URL::to('ordered')); ?>" class="billing-form" method = 'post'>
          <?php echo csrf_field(); ?>
          <h3 class="mb-4 billing-heading">Billing Details</h3>
          <div class="row align-items-end">
            <div class="col-md-6">
              <div class="form-group">
                <label for="firstname">Firt Name</label>
                <input type="text" class="form-control" placeholder="<?php echo e(Auth::user()->name); ?>" name = 'first'>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" class="form-control" placeholder="" name = 'last'>
              </div>
            </div>
            <div class="w-100"></div>
            <div class="w-100"></div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="streetaddress">Street Address</label>
                <input name = 'address' type="text" class="form-control" placeholder="House number and street name">
              </div>
            </div>
            <div class="w-100"></div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="emailaddress">Email Address</label>
                <input name = 'email' type="text" class="form-control" placeholder="<?php echo e(Auth::user()->email); ?>">
              </div>
            </div>
          </div>
        <!-- END -->
      </div>
      <div class="col-xl-5">
        <div class="row mt-5 pt-3">
          <div class="col-md-12 d-flex mb-5">
            <div class="cart-detail cart-total p-3 p-md-4">
              <h3 class="billing-heading mb-4">Cart Total</h3>
              <p class="d-flex">
                <span>Subtotal</span>
                <span>$<?php echo e($totalprice); ?></span>
              </p>
              <p class="d-flex">
                <span>Delivery</span>
                <span>$<?php echo e(count($products)*2); ?></span>
              </p>
              <p class="d-flex">
                <span>Discount</span>
                <span>$<?php echo e($totalprice*$disc); ?></span>
              </p>
              <hr>
              <p class="d-flex total-price">
                <span>Total</span>
                <span>$<?php echo e($totalprice*(1-$disc) + count($products)*2); ?></span>
                <input type = "hidden" name = "bill" value = <?php echo e($totalprice*(1-$disc)); ?> />
                <input type = "hidden" name = "promo" value = <?php echo e($promo); ?> />
              </p>
            </div>
          </div>
          <div class="col-md-12">
            <div class="cart-detail p-3 p-md-4">
              <button class="btn btn-primary py-3 px-4"type = 'submit'>Place an order</button>
            </div>
          </div>
          </form>
        </div>
      </div> <!-- .col-md-8 -->
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watermelon.com\resources\views//checkout.blade.php ENDPATH**/ ?>