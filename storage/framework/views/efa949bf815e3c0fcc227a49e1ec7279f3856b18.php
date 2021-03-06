
<?php $__env->startSection('page_title'); ?>
    <?php echo e(__("Cart")); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="shopping-cart-steps">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="cart-steps">
						<ul class="clearfix">
							<li class="active">
								<div class="inner">
									<span class="step">01</span> <span class="inner-step"><?php echo e(__("Shopping Cart")); ?></span>
								</div>
							</li>
							<li>
								<div class="inner">
									<span class="step">02</span> <span class="inner-step"><?php echo e(__("Checkout")); ?> </span>
								</div>
							</li>
							<li>
								<div class="inner">
									<span class="step">03</span> <span class="inner-step"><?php echo e(__("Order Completed")); ?> </span>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="shopping-cart-area">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="table-responsive">
                        <?php if($cart_items): ?>
						<table class="cart-table table table-responsive">
							<thead>
								<tr>
									<th><?php echo e(__("Image")); ?></th>
									<th><?php echo e(__("Product Name")); ?></th>
									<th><?php echo e(__("Color")); ?></th>
									<th><?php echo e(__("Price")); ?></th>
									<th><?php echo e(__("Quantity")); ?></th>
									<th><?php echo e(__("Total")); ?></th>
									<th class="text-center"><i class="fa fa-times" aria-hidden="true"></i></th>
								</tr>
							</thead>

                                <tbody>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cart_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>
                                            <td>
                                                <div class="cart-product-thumb">
                                                    <a href="#"><img src="" alt="" ></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart-product-name">
                                                    <h5><a href="<?php echo e(url(app()->getLocale().'/product-details')); ?>"> <?php echo e($cart_item->product_name); ?></a></h5>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart-product-name">
                                                    <h5><a href="<?php echo e(url(app()->getLocale().'/product-details')); ?>"> <?php echo e(@$cart_items[$cart_item->id]['color']); ?></a></h5>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="cart-product-price">$<?php echo e(number_format($cart_item->product_sales_price)); ?></span>
                                            </td>
                                            <td>
                                                <div class="cart-quantity-changer">
                                                    <a class="value-decrease qtybutton" data-product-id="<?php echo e($cart_item->id); ?>">-</a>
                                                    <input type="text" id="cartItem<?php echo e($cart_item->id); ?>" value=<?php echo e($cart_item->quantity); ?> >
                                                    <a class="value-increase qtybutton" data-product-id="<?php echo e($cart_item->id); ?>" >+</a>
                                                </div>
                                            </td>
                                            <td>
											<span class="cart-product-price">$<?php echo e(number_format($cart_item->total)); ?> <small class="text-success"><?php echo e($cart_item->discounted?'coupon':''); ?></small></span>
                                            </td>
                                            <td>
                                                <div class="product-remove">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-times" onclick="removeItem(this)" aria-hidden="true" data-product-id="<?php echo e($cart_item->id); ?>"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>

						</table>
					</div>
				</div>
			</div>
			<div class="row mt-30">
				<div class="col-lg-6">
					<div class="cart-update">
						<a href="<?php echo e(url(app()->getLocale())); ?>/shop" class="btn-common"><?php echo e(__("CONTINUE SHOPPING")); ?></a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="cart-update pull-right">
						<a href="javascript:void(0)" id="update-cart" class="btn-common"><?php echo e(__("UPDATE CART")); ?></a>
					</div>
				</div>
			</div>
			<div class="row mt-40">
				<div class="col-lg-4 d-none">
					<div class="cart-box shpping-tax">
						<h5><?php echo e(__("Estimate Shipping And Tax")); ?></h5>
						<div class="cart-box-inner">
							<p><?php echo e(__("Enter your destination to get shipping & tax")); ?></p>
							<table class="table">
								<tr>
									<td>
										<label><?php echo e(__("COUNTRY")); ?> *:</label>
									</td>
									<td>
										<select>
											<option><?php echo e(__("Select options")); ?></option>
											<option><?php echo e(__("United States")); ?></option>
											<option><?php echo e(__("China")); ?></option>
											<option><?php echo e(__("Canada")); ?></option>
										</select>
									</td>
								</tr>
								<tr>
									<td>
										<label><?php echo e(__("STATE / PROVINCE")); ?> *:</label>
									</td>
									<td>
										<select>
											<option><?php echo e(__("Select options")); ?></option>
											<option><?php echo e(__("United States")); ?></option>
											<option><?php echo e(__("China")); ?></option>
											<option><?php echo e(__("Canada")); ?></option>
										</select>
									</td>
								</tr>
								<tr>
									<td>
										<label><?php echo e(__("ZIP / POSTAL CODE")); ?> *:</label>
									</td>
									<td>
										<select>
											<option><?php echo e(__("Select options")); ?></option>
											<option><?php echo e(__("United States")); ?></option>
											<option><?php echo e(__("China")); ?></option>
											<option><?php echo e(__("Canada")); ?></option>
										</select>
									</td>
								</tr>
							</table>
							<a href="#" class="btn-common"><?php echo e(__("GET A QUOTE")); ?></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="cart-box cart-coupon fix">
						<h5><?php echo e(__("Promotional Code")); ?></h5>
						<div class="cart-box-inner">
							<p><?php echo e(__("Enter your coupon code if you have one")); ?></p>
							<input type="text" id="coupon" name="coupon" value="">
							<p></p>
							<a href="#" onclick="applyCoupon()" class="btn-common"><?php echo e(__("Apply")); ?></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="cart-box cart-total">
						<h5><?php echo e(__("Cart Total")); ?></h5>
						<div class="cart-box-inner">
							<table class="table">
								<tr>
									<td><?php echo e(__("SUB TOTAL")); ?>:</td>
									<td><span>$<?php echo e(number_format($total)); ?></span></td>
								</tr>x
								<tr>
									<td><?php echo e(__("GRAND TOTAL")); ?>:</td>
									<td><span>$<?php echo e(number_format($total)); ?></span></td>
								</tr>
							</table>
							<div class="proceed-checkout">



								<div class="col-lg-12">
									<a href="<?php echo e(url(app()->getLocale())); ?>/checkout" class="btn-common"><?php echo e(__("PROCEED TO CHECK OUT")); ?></a>
								</div>
							</div>
						</div>
					</div>
                    <?php else: ?>
                        <h3> <?php echo e(__("Your Cart is  empty,")); ?> <a href="<?php echo e(url(app()->getLocale())); ?>/shop"><?php echo e(__("start shopping")); ?></a></h3>
                    <?php endif; ?>

				</div>

			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>

 function removeItem(el) {
			return swal("<?php echo e(__("Do you want to remove this from cart?")); ?>").then((yes)=>{

					if(yes){
						const response = fetch(`/cart/remove/${el.getAttribute('data-product-id')}`,
						{
                    method: 'GET',
                    headers: {
                        'Accept':'application/json'
                    }
				}).then(e=>{
					console.log(e);

                if(e.status == 200){
                    return swal({
                        title: 'Success',
                        text: '<?php echo e(__("Product removed from cart successfully")); ?>',
                        icon: 'success'
                    }).then( () => window.location.reload());
                }
				});	}
				})
		}

		function applyCoupon(){
			var coup = document.getElementById('coupon').value;
			makeRequest('/cart/add-coupon',{code:coup}).then((e)=>{
				if(e.success){
					return swal("<?php echo e(__("Your coupon has been added - proceed to checkout")); ?>").then(e=>{
						window.location.reload()
					})
				}
				return swal("<?php echo e(__("Invalid coupon code added")); ?>")
			})
		}

		// public function increase(id){

		// }




        [...document.getElementsByClassName('value-increase')].map(element => {
            element.onclick = e => {
				const cart_quantity_element = document.getElementById(`cartItem${e.target.getAttribute('data-product-id')}`);
				console.log(cart_quantity_element.value);
                // cart_quantity_element.value = parseInt(cart_quantity_element.value) - parseInt(1)
                fetch(`/cart/increase/${e.target.getAttribute('data-product-id')}/${cart_quantity_element.value}`, {
                    method: 'GET',
                    headers: {
                        'Accept':'application/json'
                    }
                })
            }
        });

            [...document.getElementsByClassName('value-decrease')].map(element => {
            element.onclick = e => {
                const cart_quantity_element = document.getElementById(`cartItem${e.target.getAttribute('data-product-id')}`);
                if(cart_quantity_element.value === 1) return;
                // cart_quantity_element.value =  parseInt(cart_quantity_element.value)  - parseInt(1);
                fetch(`/cart/decrease/${e.target.getAttribute('data-product-id')}/${cart_quantity_element.value}`, {
                    method: 'GET',
                    headers: {
                        'Accept':'application/json'
                    }
                })
            }
        });

        document.getElementById('update-cart').onclick = e => {
            window.location.reload();
        }

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bloomzon_v1\resources\views/front/cart.blade.php ENDPATH**/ ?>