<?php $__env->startSection('page_title'); ?>
    Admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="col-md-10">
    <div class="row align-items-center mt-5 mb-5">
        <div class="col-lg-8 col-sm-5 col-5 ">
            <h2 class="">Manufacturers Management</h2>
        </div>
    </div>
    <div class="row mt-5 mb-5">
        <div class="col-md-12">
            <div class="panel panel-white">
              <div class="panel-body">
                  <div class="table-responsive">
                      <table id="chat_table" class="display" style="width:100%" class="table table-responsive" style="width: 100%; cellspacing: 0;">
                          <thead style="background-color: #AF2E1D; color: white;">
                            <tr>
                                <th>Customer Names</th>
                                <th>Emails</th>
                                <th>Phone No.</th>
                                <th>Request</th>
                                <th>Last Message</th>
                                <th>Manufacturer Email</th>
                                <th>Manufacturer Company Name</th>
                                <th>Reply</th>
                                <th>Send Request To Manufacturer</th>
                            </tr>
                          </thead>

                          <tbody>
                            <?php $__currentLoopData = $chats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                  <td><?php echo e($chat->customer_full_name); ?></td>
                                  <td><?php echo e($chat->customer_email); ?></td>
                                  <td><?php echo e($chat->customer_phone_number); ?></td>
                                  <td><?php echo e($chat->chat_topic); ?></td>
                                  <td><?php echo e($chat->chat_replies->last()->message); ?></td>
                                  <td><?php echo e($chat->manufacturer->email); ?></td>
                                  <td><?php echo e($chat->manufacturer->company_name); ?></td>
                                  <td>
                                    <a href="<?php echo e(url('/admin/manufacturer-replies', $chat->id)); ?>" target="_blank" style="background-color: #AF2E1D; color: white; border-radius: 20px; border: 1px solid white; display: block; padding: 10px;">View Replies</a></th>
                                  </td>
                                  <td>
                                    
                                    <?php if($chat->has_request()): ?>
                                      
                                      <button style="background-color: blue; color: white; border-radius: 20px; border: 1px solid white; display: block; padding: 10px;" 
                                      data-toggle="modal"
                                      data-target="#editReqeust"
                                      data-request_id="<?php echo e($chat->has_request()->id); ?>"
                                      data-supply_request="<?php echo e($chat->has_request()->supply_request); ?>" 
                                      data-payment_method="<?php echo e($chat->has_request()->payment_method); ?>"
                                      data-service_description="<?php echo e($chat->has_request()->service_description); ?>"
                                      data-amount="<?php echo e($chat->has_request()->amount); ?>">Edit Request</button>

                                    <?php else: ?>

                                      <button style="background-color: green; color: white; border-radius: 20px; border: 1px solid white; display: block; padding: 10px;" data-toggle="modal" data-target="#exampleModal" data-manufacturer_id="<?php echo e($chat->manufacturer->id); ?>" data-chat_id="<?php echo e($chat->id); ?>" data-product_id="<?php echo e($chat->product->id); ?>">Send Request</button>
                                      
                                    <?php endif; ?>
                                  </td>
                              </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </tbody>
                      </table>
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>





<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form  method="POST" action="<?php echo e(url('/admin/send-request')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Request</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Attache Document</label>
            <input type="file" class="form-control" id="" name="attached_document" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Supply Request</label>
            <input type="text" class="form-control" id="recipient-name" name="supply_request" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Payment Methos</label>
            <input type="text" class="form-control" id="recipient-name" name="payment_method" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Amount</label>
            <input type="text" class="form-control" id="recipient-name" name="amount">
          </div>
          <div class="form-group">
            <input type="hidden" class="form-control" id="manufacturer_id" name="manufacturer_id">
            <input type="hidden" class="form-control" id="product_id" name="product_id">
            <input type="hidden" class="form-control" id="chat_id" name="chat_id">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Service Description</label>
            <textarea class="form-control" id="message-text" name="service_description" required></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Send Request">
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="editReqeust" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form  method="POST" action="<?php echo e(url('/admin/send-update')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Request</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Attache Document</label>
            <input type="file" class="form-control" id="" name="attached_document">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Supply Request</label>
            <input type="text" class="form-control" id="supply_request" name="supply_request" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Payment Methos</label>
            <input type="text" class="form-control" id="payment_method" name="payment_method" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Amount</label>
            <input type="text" class="form-control" id="amount" name="amount">
          </div>
          <div class="form-group">
            <input type="hidden" class="form-control" id="request_id" name="request_id">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Service Description</label>
            <textarea class="form-control" id="service_description" name="service_description" required></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Update Request">
      </div>
      </form>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script>

  $(document).ready( function () {
    $('#chat_table').DataTable();
  });

  $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) 
    var manufacturer_id = button.data('manufacturer_id')
    var product_id = button.data('product_id')
    var chat_id = button.data('chat_id')
    var modal = $(this)
    modal.find('#manufacturer_id').val(manufacturer_id)
    modal.find('#product_id').val(product_id)
    modal.find('#chat_id').val(chat_id)
  })


  $('#editReqeust').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) 
    var request_id = button.data('request_id')
    var supply_request = button.data('supply_request')
    var payment_method = button.data('payment_method')
    var service_description = button.data('service_description')
    var amount = button.data('amount')


    var modal = $(this)
    modal.find('#request_id').val(request_id)
    modal.find('#supply_request').val(supply_request)
    modal.find('#payment_method').val(payment_method)
    modal.find('#service_description').val(service_description)
    modal.find('#amount').val(amount)
  })
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.dashboard.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/dashboard/admin/manufacturers_mng.blade.php ENDPATH**/ ?>