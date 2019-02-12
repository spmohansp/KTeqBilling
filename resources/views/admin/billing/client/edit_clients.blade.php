@extends('admin.billing.layouts.master')

@section('Current-Page')
Add Clients
@endsection

@section('Parent-Menu')
Clients
@endsection

@section('Menu')
Add Clients
@endsection

@section('content')
    
    <div class="tile">
      <div class="pad">
       
        <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8 ">
          <div class="">
            <div class="row">
              <div class="col-lg-12">
                <form action="{{ route('admin.updateClient',$Client->id) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <input class="form-control form-control-lg" id="" type="" aria-describedby="emailHelp" placeholder="Enter Client Name" name="name" value="{{ $Client->name }}">
                  </div>
                  <div class="form-group">
                    <input class="form-control form-control-lg" id="" type="" aria-describedby="emailHelp" placeholder="Enter Business Name" name="business_name" value="{{ $Client->business_name }}" >
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <input class="form-control form-control-lg" id="" type="email" aria-describedby="emailHelp" placeholder="Enter Email Id" name="email" value="{{ $Client->email }}">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <input class="form-control form-control-lg" id="" type="text" aria-describedby="emailHelp" placeholder="Enter Phone number" name="phone_no" value="{{ $Client->phone_no }}">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control form-control-lg" id="exampleTextarea" placeholder="Enter Address" rows="3" name="address"> {{ $Client->address }}</textarea>
                  </div>
                  <div class="form-group">
                    <input class="form-control form-control-lg" id="" type="number" aria-describedby="emailHelp" placeholder="Enter GST Number" name="gst" value="{{ $Client->gst }}" >
                  </div>
                  <div class="form-group">
                    <input class="form-control form-control-lg" id="" type="" aria-describedby="emailHelp" placeholder="Enter Notes" name="notes" value="{{ $Client->notes }}" >
                  </div>
            </div>
            </div>
            <div class="">
              <button class="btn btn-primary" type="submit">Update</button>
            </div>
            </form>
          </div>
        </div>
        <div class="col-md-2">

        </div>
      </div>
      </div>
    </div>
  @endsection