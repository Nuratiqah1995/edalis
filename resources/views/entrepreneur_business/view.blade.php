@include('includes.upper')
<?php

use App\Support\Helper;
?>
 <div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Business Info</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('entrepreneur-business.index')}}">Index</a></li>
              <li class="breadcrumb-item active">Business Info</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Type Company</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('profile.personal')}}" method="POST">
                <div class="card-body">
                <div class="form-group">
                    <label for="business_type">Business Type</label>
                    <select name="business_type" class="form-control{{ $errors->has('business_type') ? ' is-invalid' : '' }}" required disabled>
                        <option value="" selected>Please Select</option>
                        <option value="Service" {{ Helper::setSelect('Service', @$business->business_type) }}>Service</option>
                        <option value="Product" {{ Helper::setSelect('Product', @$business->business_type) }}>Product</option>
                    </select>
                  </div>
                <div class="form-group">
                    <label for="company_name">Company Name</label>
                    <input type="company_name" class="form-control" value="{{ @$business->company_name }}" name="company_name" placeholder="Enter Full Company Name" required disabled>
                  </div>
                  <div class="form-group">
                    <label for="registration_no">Company Registration Number</label>
                    <input type="registration_no" class="form-control" value="{{ @$business->registration_no }}" name="registration_no" placeholder="Enter Company Registration Number" required disabled>
                  </div>
                  <div class="form-group">
                    <label for="capital">Business Capital / Modal </label>
                    <input type="capital" class="form-control" name="capital" value="{{ @$business->capital }}" placeholder="Enter Capital or Modal" required disabled>
                  </div>
                  <div class="form-group">
                    <label for="company_type">Company Type</label>
                    <select name="company_type" class="form-control{{ $errors->has('company_type') ? ' is-invalid' : '' }}" required disabled>
                        <option value="" selected>Please Select</option>
                        <option value="Personal_Private" {{ Helper::setSelect('Personal_Private', @$business->company_type) }}>Personal / Private</option>
                        <option value="Partnership" {{ Helper::setSelect('Partnership', @$business->company_type) }}>Partnership</option>
                        <option value="Family_Heritage_Business" {{ Helper::setSelect('Family_Heritage_Business', @$business->company_type) }}>Family Heritage Business</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="business_field">Product's Field </label>
                    <input type="business_field" class="form-control" name="business_field" value="{{ @$business->business_field }}" placeholder="Enter Full Name" required disabled>
                  </div>
                </div>
                <!-- /.card-body -->

                <!-- <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div> -->
              </form>
            </div>
            <!-- /.card -->
              </div>

             <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Address</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form"  method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="address1">Address 1</label>
                    <input type="address1" class="form-control" name="address_1"  placeholder="Enter Address 1" value="{{ @$business->address->address_1 }}" required disabled>
                  </div>
                  <div class="form-group">
                    <label for="address2">Address 2</label>
                    <input type="address2" class="form-control" name="address_2"  placeholder="Enter Address 2" value="{{ @$business->address->address_2 }}" required disabled>
                  </div>
                  <div class="form-group">
                    <label for="state">State</label>
                    <select name="state" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" required disabled>
                        <option value="" selected>Please Select</option>
                        <option value="kedah" {{ Helper::setSelect('kedah', @$business->address->state) }}>Kedah</option>
                        <option value="penang" {{ Helper::setSelect('penang', @$business->address->state) }}>Penang</option>
                        <option value="perak" {{ Helper::setSelect('perak', @$business->address->state) }}>Perak</option>
                        <option value="perlis" {{ Helper::setSelect('perlis', @$business->address->state) }}>Perlis</option>
                        <option value="kelantan" {{ Helper::setSelect('kelantan', @$business->address->state) }}>Kelantan</option>
                        <option value="terengganu" {{ Helper::setSelect('terengganu', @$business->address->state) }}>Terengganu</option>
                        <option value="pahang" {{ Helper::setSelect('pahang', @$business->address->state) }}>Pahang</option>
                        <option value="kuala_lumpur" {{ Helper::setSelect('kuala_lumpur', @$business->address->state) }}>Kuala Lumpur</option>
                        <option value="selangor" {{ Helper::setSelect('selangor', @$business->address->state) }}>Selangor</option>
                        <option value="negeri_sembilan" {{ Helper::setSelect('negeri_sembilan', @$business->address->state) }}>Negeri Sembilan</option>
                        <option value="melaka" {{ Helper::setSelect('melaka', @$business->address->state) }}>Melaka</option>
                        <option value="johor" {{ Helper::setSelect('johor', @$business->address->state) }}>Johor</option>
                        <option value="sabah" {{ Helper::setSelect('sabah', @$business->address->state) }}>Sabah</option>
                        <option value="sarawak" {{ Helper::setSelect('sarawak', @$business->address->state) }}>Sarawak</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="city">City</label>
                    <input type="city" class="form-control" name="city"  placeholder="Enter City" value="{{ @$business->address->city }}" required disabled>
                  </div>
                  <div class="form-group">
                    <label for="postcode">Postcode</label>
                    <input type="postcode" class="form-control" name="postcode"  placeholder="Enter Postcode" value="{{ @$business->address->postcode }}" required disabled>
                  </div>
                </div>
                <!-- /.card-body -->

                <!-- <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div> -->
              </form>
            </div>
            <!-- /.card -->
              </div>
              </div>

              </div>
 </section>


  @include('includes.footer')
