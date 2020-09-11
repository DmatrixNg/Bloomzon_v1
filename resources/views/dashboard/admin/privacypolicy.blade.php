

@extends('layouts.dashboard.admin')
@section('page_title')
    Privacy Policy
@endsection

        @section('content')
        <div class="col-md-10">
        <div class="row mb-5 mt-5">
            <div class="col-md-12 text-center">
                <h2>Bloomzon Privacy Policy</h2>
            </div>
        </div>
             <div class="row" style="background-color: white; height: 450px;  padding: 50px;">
                <div class="col-md-10 offset-1 text-center">
                    <textarea id="pp" class="form-control" rows="40">{{\App\SiteConfig::find(1)->privacy_policy }}

               </textarea>
                    <button class="bottom_btn mt-5" onclick="saveInput()">Save </button>
                </div>
             </div>
         </div>
        @endsection

        @push('scripts')
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
        @endpush
