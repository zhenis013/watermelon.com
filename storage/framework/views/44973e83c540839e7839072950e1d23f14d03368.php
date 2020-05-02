<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
  <div class="container py-4">
    <div class="row d-flex justify-content-center py-5">
      <div class="col-md-6">
        <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
        <span>Get e-mail updates about our latest shops and special offers</span>
      </div>
      <div class="col-md-6 d-flex align-items-center">
          <form action="<?php echo e(URL::to('subscribe')); ?>" class="billing-form" method = 'post'>
            <?php echo csrf_field(); ?>
          <div class="form-group d-flex">
            <input type="text" name = 'email' class="form-control" placeholder="Enter email address">
            <button class="btn btn-primary py-3 px-4"type = 'submit'>Subscribe</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<footer class="ftco-footer ftco-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md">
        <div class="ftco-footer-widget mb-4 ml-md-5">
          <h2 class="ftco-heading-2">Menu</h2>
          <ul class="list-unstyled">
            <li><a href="/home" class="py-2 d-block">Home</a></li>
            <li><a href="/shop" class="py-2 d-block">Shop</a></li>
            <li><a href="/cart" class="py-2 d-block">Cart</a></li>
            <li><a href="/checkout" class="py-2 d-block">Checkout</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <p>
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
        </p>
      </div>
    </div>
  </div>
</footer>
<?php /**PATH C:\xampp\htdocs\watermelon.com\resources\views/layouts/footer.blade.php ENDPATH**/ ?>