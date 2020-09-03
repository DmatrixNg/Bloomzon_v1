        

<?php $__env->startSection('page_title'); ?>
    Privacy Policy
<?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
        <div class="row mb-5 mt-5">
            <div class="col-md-12 text-center">
                <h2>Bloomzon Privacy Policy</h2>
            </div>
        </div>
             <div class="row" style="background-color: white; height: 450px;  padding: 50px;">
                <div class="col-md-10 offset-1 text-center">
                    <textarea id="pp" class="form-control" rows="40">Privacy Policies are legally binding agreements you are required to post on your website if you’re collecting any sort of personal information from your site’s visitors
                   or customers.

                   A Privacy Policy is an important legal document that lets users understand the
                   various ways a website might be collecting personal information. The purpose
                   of a Privacy Policy is to inform users of your data collection practices in order
                   to protect the customer’s privacy.

                   Your Privacy Policy should disclose how the website/app collects information,
                   how the information is used, whether or not it is shared with third parties and
                   how it is protected and stored.

                   There are 3 main reasons for having a Privacy Policy: (1) you’re required by law,
                   (2) you’re required by third party services, (3) you want to be transparent.
                   Privacy Policy is an important legal document that lets users understand the
                   various ways a website might be collecting personal information. The purpose
                   of a Privacy Policy is to inform users of your data collection practices in order
                   to protect the customer’s privacy.

                   Your Privacy Policy should disclose how the website/app collects information,
                   how the information is used, whether or not it is shared with third parties and
                   how it is protected and stored.



                   Your Privacy Policy should disclose how the website/app collects information,
                   how the information is used, whether or not it is shared with third parties and
                   how it is protected and stored.

                   There are 3 main reasons for having a Privacy Policy: (1) you’re required by law,
                   (2) you’re required by third party services, (3) you want to be transparent.
                   Privacy Policy is an important legal document that lets users understand the
                   various ways a website might be collecting personal information. The purpose
                   of a Privacy Policy is to inform users of your data collection practices in order
                   to protect the customer’s privacy.

                   Your Privacy Policy should disclose how the website/app collects information,
                   how the information is used, whether or not it is shared with third parties and
                   how it is protected and stored.
                   
               </textarea>
                    <button class="bottom_btn mt-5" onclick="saveInput()">Save </button>
                </div>
             </div>
         </div>
        <?php $__env->stopSection(); ?>
    
        <?php $__env->startPush('scripts'); ?>
        <script>
            function saveInput(){
                var data = document.getElementById('pp').value
                makeRequest("/admin/save-setting",{data: data,type: 'privacy_policy'}).then((e)=>{
                    console.log(e)
                    if(e.success){
                        return swal("Data Updated")
                    }
                    return swal("unable to update")
                })
            }
        </script>
        <?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.dashboard.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bloomzon_v1\resources\views/dashboard/admin/privacypolicy.blade.php ENDPATH**/ ?>