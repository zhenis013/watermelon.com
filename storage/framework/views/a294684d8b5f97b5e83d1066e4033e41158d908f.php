
<?php $__env->startSection('content'); ?>
<div class="hero-wrap hero-bread" style="background-image: url('https://sun9-55.userapi.com/c857224/v857224704/17ef53/WPhss7IvafE.jpg');">

</div>

  <div>
    <div>
      <div>
        <div class="cart-list">
          <table class="table">
            <thead class="thead-primary">
              <tr class="text-center">
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>Product name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr class="text-center">
                <td><a href="<?php echo e(route('remove', ['id'=> $product['item']->id])); ?>"><span class="iconify" data-icon="ion-ios-close-circle-outline" data-inline="false" data-width="32" data-height="32"></span></a></td>
                <td><a href="<?php echo e(route('add', ['id'=> $product['item']->id])); ?>"><span class="iconify" data-icon="ant-design:plus-circle-filled" data-inline="false" data-width="32" data-height="32"></span></a></td>

                <td class="image-prod"><div class="img" style="background-image:url(<?php echo e($product['item']->photo); ?>);"></div></td>

                <td class="product-name">
                  <h3><?php echo e($product['item']->name); ?></h3>
                </td>

                <td class="price">$<?php echo e($product['item']->price); ?></td>
                <td class="quantity"><?php echo e($product['qty']); ?></td>

                <td class="total">$<?php echo e($product['item']->price * $product['qty']); ?></td>
              </tr><!-- END TR-->
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div >
      <div>
        <div class="cart-total mb-3">
          <h3>Coupon Code</h3>
          <p>Enter your coupon code if you have one</p>
          <form action="<?php echo e(URL::to('promo')); ?>" class="info" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
              <label for="">Coupon code</label>
              <input type="text" class="form-control text-left px-3" placeholder="" name = 'code'>
              <button class="btn btn-primary py-3 px-4" type = 'submit'>Apply Coupon</button>
            </div>
          </form>
        </div>

      </div>
      <div>
        <div class="cart-total mb-3">
          <h3>Cart Totals</h3>
          <p class="d-flex">
            <span>Subtotal</span>
            <span>$<?php echo e($totalprice); ?></span>
          </p>
          <p class="d-flex">
            <span>Delivery</span>
            <span>$<?php echo e(count($products)*2); ?></span>
          </p>
          <hr>
          <p class="d-flex total-price">
            <span>Total</span>
            <span>$<?php echo e($totalprice + count($products)*2); ?></span>
          </p>
        </div>
        <p><a href="checkout" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watermelon.com\resources\views/cart.blade.php ENDPATH**/ ?>