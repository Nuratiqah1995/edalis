@include('includes.upper')

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
              <li class="breadcrumb-item"><a href="{{route('profile.index')}}">Home</a></li>
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
                    <select name="business_type" class="form-control{{ $errors->has('business_type') ? ' is-invalid' : '' }}" required>
                        <option value="" selected>Please Select</option>
                        <option value="Service" >Service</option>
                        <option value="Product" >Product</option>
                    </select>
                  </div>
                <div class="form-group">
                    <label for="company_name">Company Name</label>
                    <input type="company_name" class="form-control" name="company_name" placeholder="Enter Full Company Name" required>
                  </div>
                  <div class="form-group">
                    <label for="registration_no">Company Registration Number</label>
                    <input type="registration_no" class="form-control" name="registration_no" placeholder="Enter Company Registration Number" required>
                  </div>
                  <div class="form-group">
                    <label for="capital">Business Capital / Modal </label>
                    <input type="capital" class="form-control" name="capital" placeholder="Enter Capital or Modal" required>
                  </div>
                  <div class="form-group">
                    <label for="company_type">Business Type</label>
                    <select name="company_type" class="form-control{{ $errors->has('company_type') ? ' is-invalid' : '' }}" required>
                        <option value="" selected>Please Select</option>
                        <option value="Service" >Personal / Private</option>
                        <option value="Service" >Partnership</option>
                        <option value="Product" >Family Heritage Business</option>
                    </select>
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="business_field">Product's Field </label>
                    <input type="business_field" class="form-control" name="business_field" placeholder="Enter Full Name" required>
                  </div>               
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
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
                    <input type="address1" class="form-control" name="address_1"  placeholder="Enter Address 1" required>
                  </div>
                  <div class="form-group">
                    <label for="address2">Address 2</label>
                    <input type="address2" class="form-control" name="address_2"  placeholder="Enter Address 2" required>
                  </div>
                  <div class="form-group">
                    <label for="state">State</label>
                    <select name="state" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" required>
                        <option value="" selected>Please Select</option>
                        <option value="kedah" >Kedah</option>
                        <option value="penang" >Penang</option>
                        <option value="perak" >Perak</option>
                        <option value="perlis" >Perlis</option>
                        <option value="kelantan" >Kelantan</option>
                        <option value="terengganu" >Terengganu</option>
                        <option value="pahang" >Pahang</option>
                        <option value="kuala_lumpur">Kuala Lumpur</option>
                        <option value="selangor" >Selangor</option>
                        <option value="negeri_sembilan" >Negeri Sembilan</option>
                        <option value="melaka" >Melaka</option>
                        <option value="johor" >Johor</option>
                        <option value="sabah" >Sabah</option>
                        <option value="sarawak" >Sarawak</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="city">City</label>
                    <input type="city" class="form-control" name="city"  placeholder="Enter City" required>
                  </div>
                  <div class="form-group">
                    <label for="postcode">Postcode</label>
                    <input type="postcode" class="form-control" name="postcode"  placeholder="Enter Postcode" required>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
              </div>
              </div>
    
              </div>
 </section>


  @include('includes.footer')