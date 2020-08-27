@extends('layouts.dashboard.admin')
@section('page_title')
    Admin Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
                <div class="row mb-3 " style="background-color: #000 !important; padding: 20px; ">
                    <div class="col-md-6 p-5 offset-3 ">
                    <form action="{{route("admin.set-config")}}">
                            
                            <div class="form-group ">
                                <label for="name " style="font-size: 16px; color: #fff; font-weight: 500; ">Base Currency</label><br>
                                <select name="base_currency" class="form-control">
                                    <option @if($config->base_currency == 'USD') selected @endif value="USD">USD</option>
                                    <option @if($config->base_currency == 'NAIRA') selected @endif value="NAIRA">NAIRA</option>
                                    <option @if($config->base_currency == 'POUND') selected @endif value="POUND">POUND</option>
                                    <option @if($config->base_currency == 'EURO') selected @endif value="EURO">EURO</option>
                                </select>

                                @error('base_currency')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            </div>
                            <div class="form-group ">
                                <label for="phone" style="font-size: 16px; color: #fff; font-weight: 500; ">Naira Value</label><br>
                                <input type="text"  class="form-control " id="naira" name="naira" value="{{$config->naira}}" style="height: 40px; ">
                                @error('naira')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            </div>
                            <div class="form-group ">
                                <label for="email" style="font-size: 16px; color: #fff; font-weight: 500; ">Pound value</label><br>
                                <input type="text" name="pound" class="form-control " id="pound" value="{{$config->pound}}"  style="height: 40px; ">

                                @error('pound')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            </div>
                            <div class="form-group ">
                                <label for="address" style="font-size: 16px; color: #fff; font-weight: 500; ">Euro</label><br>
                                <input type="text" name="euro"  class="form-control " id="euro" value="{{$config->euro}}" style="height: 40px; ">
                                @error('euro')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            </div>
                            <div class="form-group ">
                                <label for="address" style="font-size: 16px; color: #fff; font-weight: 500; ">USD</label><br>
                                <input type="text" name="usd"  class="form-control " id="usd" value="{{$config->usd}}" style="height: 40px; ">
                                @error('usd')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            </div>
                            <div class="form-group ">
                                <label for="address" style="font-size: 16px; color: #fff; font-weight: 500; ">1 week advert-price</label><br>
                                <input type="text" name="ad1_week"  class="form-control " id="usd" value="{{$config->ad1_week}}" style="height: 40px; ">
                                @error('ad1_week')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            </div>
                            <div class="form-group ">
                                <label for="address" style="font-size: 16px; color: #fff; font-weight: 500; ">2 week advert-price</label><br>
                                <input type="text" name="ad2_week"  class="form-control " id="usd" value="{{$config->ad2_week}}" style="height: 40px; ">
                                @error('ad2_week')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            </div>
                            <div class="form-group ">
                                <label for="address" style="font-size: 16px; color: #fff; font-weight: 500; ">3 week advert-price</label><br>
                                <input type="text" name="ad2_week"  class="form-control " id="usd" value="{{$config->ad4_week}}" style="height: 40px; ">
                                @error('ad4_week')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            </div>

                            {{-- <div class="form-group ">
                                <label for="service_description" style="font-size: 16px; color: #fff; font-weight: 500; ">Service Description</label><br>
                                <textarea class="form-control" disabled id="service_description" value="" rows="5"></textarea>
                            </div> --}}
                           <div class="form-group text-center">--}}
                               <button class="btn btn-danger btn-lg  ">Save</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        @endsection
