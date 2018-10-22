@include('includes.upper')

 <div class="content-wrapper">
 <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Entrepreneur Profiles <a href="{{ route('entrepreneur-info.index') }}" class="btn btn-info">Reset Search</a></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
				  <form action="">
                    <input type="text" name="search" class="form-control float-right" placeholder="Search Name" value="{{request()->search}}">
					</form>
                    <!-- <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div> -->
					{{ $users->links() }}
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Action</th>
                  </tr>
				  @foreach($users as $user)
                  <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone_no }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>
						<a href="{{route('entrepreneur-info.show', ['entrepreneur_info' => $user->id])}}">View User</a>
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
