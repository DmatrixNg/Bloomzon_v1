@extends('layouts.dashboard.subadmin')
@section('page_title')
    Sub Admin Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
            <div class="row mb-5 mt-5">
                <div class="col-md-12 text-center">
                    <h2>Create New User</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-3">
                    <form name="subAdminCreateNewUserForm">
                        <div class="form-group text-center">
                            <img src="subadmin_asset/img/profile.png" alt="" height="105" width="105">
                        </div>
                        <div class="form-group">
                            <label for="name" style="color: #02499B;"><strong>Upload User Picture</strong></label>
                            <input style="border: 2px solid #02499B ;color: #02499B;" name="profile_pic_url" id="profile_pic_url" class="form-control" type="file" placeholder="Input User ID">
                        </div>
                        <div class="form-group">
                            <label for="name" style="color: #02499B;"><strong>Full Name</strong></label>
                            <input style="border: 2px solid #02499B ;color: #02499B;" id="name" name="name" class="form-control" type="text" placeholder="Input full name">
                        </div>
                        <div class="form-group">
                            <label for="name" style="color: #02499B;"><strong>Company Name(Optional)</strong></label>
                            <input style="border: 2px solid #02499B ;color: #02499B;" id="company_name" name="company_name" class="form-control" type="text" placeholder="Input company name">
                        </div>
                        <div class="form-group">
                            <label for="account" style="color: #02499B;"><strong>Account Type</strong></label>
                            <select name="account_type" style="border: 2px solid #02499B ;color: #02499B;" id="account" class="form-control" type="text">
                               <option value="manufacturer">Manufacturer</option>
                               <option value="seller">Seller</option>
                               <option value="buyer">Buyer</option>
                               <option value="networkingAgent">Networking Agent</option>
                               <option value="professionalService">Professional Service</option> 
                               <option value="shopper">Shopper</option> 
                               <option value="grocery">Fast Food Groceries</option> 
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="account" style="color: #02499B;"><strong>Operating Currency</strong></label>
                            <select name="operating_currency" style="border: 2px solid #02499B ;color: #02499B;" id="operating_currency" class="form-control" type="text">
                                <option value="naira">Naira</option>
                                <option value="pound">Pounds</option>
                                <option value="dollar">Dollars</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="username" style="color: #02499B;"><strong>Phone</strong></label>
                            <input style="border: 2px solid #02499B ;color: #02499B;" id="phone" name="phone" class="form-control" type="text" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="username" style="color: #02499B;"><strong>Email</strong></label>
                            <input style="border: 2px solid #02499B ;color: #02499B;" id="username" name="email" class="form-control" type="email" placeholder="">
                        </div>


                        <div class="form-group">
                            <label for="userpass" style="color: #02499B;"><strong>Password</strong></label>
                            <input style="border: 2px solid #02499B ;color: #02499B;" id="userpass" name="password" class="form-control" type="password" placeholder="Enter password">
                        </div>


                        <div class="form-group">
                            <label for="agentinput" style="color: #02499B;"><strong>Agent ID</strong></label>
                            <input style="border: 2px solid #02499B ;color: #02499B;" name="agent_id" id="agentinput" class="form-control" disabled type="text" value="{{Auth::user()->id}}" placeholder="">
                        </div>
                        <br>
                        <div class="form-group text-center">
                            <button class="btn bloomzon_btn m-auto">CREATE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endsection

@push('scripts')
    <script>
        FormHandler('subAdminCreateNewUserForm', {
            requestUrl:'/api/v1/crud/users',
            requestType: 'POST',
            cb: response => {
                if(response.success){
                    return swal({
                        title: 'Success!',
                        text: 'User created successfully!',
                        icon: 'success',
                        button: 'Ok'
                    })
                }
                console.log(response);
                return swal({
                    title: 'Error!',
                    text: 'Error occurred creating user',
                    icon: 'error',
                    button: 'Try Again'
                })
            }
        })
    </script>
@endpush
