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
            <h1>My Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sales Info</li>
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
          <div class="col-md-5">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sales</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start --> 
              <form role="form" action="{{route('sales-info.sales')}}" method="POST"  >
                <div class="card-body">
                <div class="form-group">
                    <label for="type">Sales by</label>
                    <select name="type" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" required>
                        <option value="" selected>Please Select</option>
                        <option value="Weeks" {{ Helper::setSelect('Weeks', @$sale->type) }} >Week</option>
                        <option value="Months" {{ Helper::setSelect('Months', @$sale->type) }} >Month</option>
                        <option value="Years" {{ Helper::setSelect('Years', @$sale->type) }} >Month</option>
                    </select>
                  </div>
                <div class="form-group">
                    <label for="market_target">Market Target</label>
                    <input type="market_target" class="form-control" name="market_target" value="{{ @$sale->market_target }}" placeholder="Enter Market Target (Qty)" required>
                  </div>
                  <div class="form-group">
                    <label for="modal">Modal</label>
                    <input type="modal" class="form-control" name="modal" value="{{ @$sale->modal }}"  placeholder="Enter Modal" required>
                  </div>
                  <div class="form-group">
                    <label for="sales">Sales</label>
                    <input type="sales" class="form-control" name="sales" value="{{ @$sale->sales }}"  placeholder="Enter Sales" required>
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
    
</div>


  @include('includes.footer')