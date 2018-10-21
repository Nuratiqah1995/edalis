@include('includes.upper')

 <div class="content-wrapper">
 <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Entrepreneur Profiles</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <!-- <input type="text" name="table_search" class="form-control float-right" placeholder="Search"> -->

                    <!-- <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div> -->
					{{ $businesses->links() }}
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tr>
                    <th>Company Name</th>
                    <th>Registration Number</th>
                    <th>Business Type</th>
					<th>Owner</th>
                    <th>Action</th>
                  </tr>
				  @foreach($businesses as $business)
                  <tr>
                    <td>{{ $business->company_name }}</td>
                    <td>{{ $business->registration_no }}</td>
                    <td>{{ $business->business_type }}</td>
					<td>{{ $business->user->name }}</td>
                    <td>
						<a href="{{route('entrepreneur-business.show', ['entrepreneur_business' => $business->id])}}">View Business</a>
					</td>
                  </tr>
				  @endforeach
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div><!-- /.row -->
	</div>
	</section>
</div>


  @include('includes.footer')
