<?php $__env->startSection('content'); ?>
    <div class="wrap">
      <?php echo $__env->make('partials/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <section class="OrderBg">
          <div class="container">
            <div class="row">
              <div class="reservation height">
                <div class="reservationTitle">
                  <h1>Order</h1>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section>
          <div class="container">
            <br>
            <br>
            <div class="row">
              <?php if(Session::has('info')): ?>
              <div class="row">
                  <div class="alert alert-info">
                      <?php echo e(Session::get('info')); ?>

                  </div>
              </div>
              <?php endif; ?>
              <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <div class="alert alert-warning row">
                    <span>
                        <strong><?php echo e($message); ?></strong>
                    </span>
                  </div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>
            <div class="row">
              <div class="reserve-form">
                <form method="post" id="orderForm" action="<?php echo e(route("newBooking")); ?>" class="form-horizontal">
                  <div class="form-group">
                    <label for="SelectPeople" class="col-sm-2 control-label">
                      People 
                    </label>
                    <div class="col-sm-8">
                      <select class="form-control" id="SelectPeople" name="numPerson">
                        <option value="1">1 people</option>
                        <option value="2">2 people</option>
                        <option value="3">3 people</option>
                        <option value="4">4 people</option>
                        <option value="5">5 people</option>
                        <option value="6">6 people</option>
                        <option value="7">7 people</option>
                        <option value="8">8 people</option>
                        <option value="9">9 people</option>
                        <option value="10">10 people</option>
                        <option value="11">more...</option>
                      </select> 
                  </div>
                  </div>
                  <div class='form-group'>
                    <label for="time" class="col-sm-2 control-label">
                      Time
                    </label>
                    <div class="col-sm-8">
                      <input type="time" placeholder="hh:mm" name="time" class="form-control" >
                    </div>
                  </div>
                  
                  <div class='form-group'>
                    <label for="time" class="col-sm-2 control-label">
                      Date
                    </label>
                    <div class="col-sm-8">
                      <input type="date" name="date" class="form-control">
                    </div>
                  </div>
                  <div class="row">                 
                      <?php echo csrf_field(); ?>
                    <input type="hidden" name ="id" value="<?php echo e(Auth::user()->id); ?>">
                      <input
                        class="sign-sms"
                        type="text"
                        name="message"
                        placeholder="Message"
                      />
                    <div class="products-btn contact-btn ">
                      <div class="products-btn reserve-btn">
                        <a class="creative" onclick="document.getElementById('orderForm').submit();">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Book</a>
                    </div>
                    </div>
                  </div>                  
                </form>
                <div class="order-img">
                  <img src="<?php echo e(asset('img/order-img.png')); ?>" alt="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="panel panel-primary">
                <div class="panel-heading">Saved Orders</div>
                             
                <!-- Table -->
                <table class="table">
                  <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>User</th>
                  </tr>
                  <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr id="ajax<?php echo e($order->id); ?>">
                      
                        <th><?php echo e($order->id); ?></th>
                        <th><?php echo e($order->date); ?></th>
                        <th><?php echo e($order->price); ?></th>
                        <th>  
                          <?php if($order->status==0): ?>
                          Processing
                          <?php endif; ?> 
                          <?php if($order->status==1): ?>
                            Paid
                          <?php endif; ?>
                          <?php if($order->status==2): ?>
                          Done
                          <?php endif; ?>
                          <?php if($order->status==-1): ?>
                          Cancel
                          <?php endif; ?> 
                        </th>
                        <th><?php echo e($order->user_id->name); ?></th>
                        <th>
                          <a class="btn btn-danger deleteButton" jsId="<?php echo e($order->id); ?>">Delete</a>
                        </th>
                        <th>
                          <a class="btn btn-info" href="<?php echo e(route('getEdit',['id'=>$order->id])); ?>">Update</a>
                        </th>
                      </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
              </div>
            </div>
          </div>
        </section>
     <?php echo $__env->make('partials/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
  <?php $__env->stopSection(); ?>   
<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sanjar/ip-project/resources/views/order/order.blade.php ENDPATH**/ ?>