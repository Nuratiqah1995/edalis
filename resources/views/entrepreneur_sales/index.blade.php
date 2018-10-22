@include('includes.upper')

 <div class="content-wrapper">
 <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Sales Info <a href="{{ route('entrepreneur-sales.index') }}" class="btn btn-info">Reset Search</a> </h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <!-- <input type="text" name="table_search" class="form-control float-right" placeholder="Search"> -->
					<!-- <form action="">
                    <input type="text" name="search" class="form-control float-right" placeholder="Search Name" value="{{request()->search}}">
					</form> -->

                    <!-- <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div> -->
					{{ $sales->links() }}
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tr>
					<th>Owner</th>
                    <th>Company Name</th>
                    <th>Modal</th>
                    <th>Sales</th>
                    <th>Submitted Date</th>
                    <th>Action</th>
                  </tr>
				  @foreach($sales as $sale)
                  <tr>
					<td>{{ @$sale->user->name }}</td>
                    <td>{{ @$sale->user->business->company_name }}</td>
                    <td>MYR {{ number_format((float)@$sale->modal, 2, '.', '') }}</td>
                    <td>MYR {{ number_format((float)@$sale->sales, 2, '.', '') }}</td>
                    <td>{{ @$sale->created_at->toDateString() }}</td>
                    <td>
						<a href="{{route('entrepreneur-info.show', ['entrepreneur_info' => $sale->id])}}">View Sales Info</a>
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
