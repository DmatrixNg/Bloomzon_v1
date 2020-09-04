@extends('layouts.dashboard.admin')
@section('page_title')
    Shipping Returns
@endsection

        @section('content')
        <div class="col-md-10">
        <div class="row mb-5 mt-5">
            <div class="col-md-12 text-center">
                <h2>Shipping Returns</h2>
            </div>
        </div>
             <div class="row mb-5" style="background-color: white; height: 450px;  padding: 50px;">
                <div class="col-md-10 offset-1 text-center">
                    <textarea class="form-control mb-5" id="pp" rows="40">{{ \App\SiteConfig::find(1)->shippingreturns }}</textarea>
                <button class="bottom_btn mb-5" onclick="saveInput()">Save </button>
            </div>
         </div>
     </div>
    @endsection
    @push('scripts')
        <script>
            function saveInput(){
                var data = document.getElementById('pp').value
                makeRequest("/admin/save-setting",{data: data,type: 'shippingreturns'}).then((e)=>{
                    console.log(e)
                    if(e.success){
                        return swal("Data Updated")
                    }
                    return swal("unable to update")
                })
            }
        </script>
    @endpush