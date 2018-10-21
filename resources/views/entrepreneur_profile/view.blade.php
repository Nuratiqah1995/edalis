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
              <li class="breadcrumb-item active">My Profile</li>
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
          <div class="col-md-3">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Personal</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('profile.personal')}}" method="POST">
                <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="name" class="form-control" name="name" value="{{ $user->name }}" placeholder="Enter Full Name" required disabled>
                  </div>
                  <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gender" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" required disabled>
                        <option value="Male" {{ Helper::setSelect('Male', $user->gender) }}>Male</option>
                        <option value="Female" {{ Helper::setSelect('Female', $user->gender) }}>Female</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="ic_number">IC Number</label>
                    <input type="ic_number" class="form-control" name="ic_number" value="{{ $user->ic_number }}" placeholder="Enter IC Number" required disabled>
                  </div>

                  <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="phone_number" class="form-control" name="phone_number" value="{{ $user->phone_number }}" placeholder="Enter Phone Number" required disabled>
                  </div>
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}" placeholder="Enter email" required disabled>
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

              <div class="col-md-3">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Study</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('profile.study')}}" method="POST">
                <div class="card-body">
                <div class="form-group">
                    <label for="campus">Campus</label>
                    <select name="campus" class="form-control{{ $errors->has('campus') ? ' is-invalid' : '' }}" required disabled>
                        <option value="" selected>Please Select</option>
                        <option value="BIS" {{ Helper::setSelect('BIS', @$profile->campus) }}>BIS</option>
                        <option value="BMI" {{ Helper::setSelect('BMI', @$profile->campus) }}>BMI</option>
                        <option value="MESTECH" {{ Helper::setSelect('MESTECH', @$profile->campus) }} >MESTECH</option>
                        <option value="MFI" {{ Helper::setSelect('MFI', @$profile->campus) }}>MFI</option>
                        <option value="MIAT" {{ Helper::setSelect('MIAT', @$profile->campus) }}>MIAT</option>
                        <option value="MICET" {{ Helper::setSelect('MICET', @$profile->campus) }}>MICET</option>
                        <option value="MIDI" {{ Helper::setSelect('MIDI', @$profile->campus) }}>MIDI</option>
                        <option value="MIIT" {{ Helper::setSelect('MIIT', @$profile->campus) }}>MIIT</option>
                        <option value="MIMET" {{ Helper::setSelect('MIMET', @$profile->campus) }}>MIMET</option>
                        <option value="MSI" {{ Helper::setSelect('MSI', @$profile->campus) }}>MSI</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="programme">Programme</label>
                    <select name="programme" class="form-control{{ $errors->has('programme') ? ' is-invalid' : '' }}" required disabled>
                        <option value="" selected>Please Select</option>
                        <option style="font-weight: bold;">-----------Campus BIS--------</option>
                        <option value="Bachelor in Accounting (Hons.)" {{ Helper::setSelect('B_Accounting', @$profile->programme) }}>Bachelor in Accounting (Hons.)</option>
                        <option value="Bachelor of Business Administration (Hons.) in Islamic Finance" {{ Helper::setSelect('B_Islamic', @$profile->programme) }}>Bachelor of Business Administration (Hons.) in Islamic Finance</option>
                        <option value="Master of Business Administration" {{ Helper::setSelect('MBA', @$profile->programme) }}>Master of Business Administration</option>
                        <option value="Master of Business Administration (Enterpreneurship)" {{ Helper::setSelect('B_Entrepreneur', @$profile->programme) }}>Master of Business Administration (Enterpreneurship)</option>
                        <option style="font-weight: bold;">-----------Campus BMI--------</option>
                        <option value="Diploma of Engineering Technology in Electrical and Electronics" {{ Helper::setSelect('Electrical_Electronics', @$profile->programme) }}>Diploma of Engineering Technology in Electrical and Electronics</option>
                        <option value="Bachelor of Engineering Technology (Hons.) in Electronics" {{ Helper::setSelect('B.Electronics', @$profile->programme) }}>Bachelor of Engineering Technology (Hons.) in Electronics</option>
                        <option value="Bachelor of Engineering Technology (Hons.) in Medical Electronics" {{ Helper::setSelect('B_Medical_Electronics', @$profile->programme) }}>Bachelor of Engineering Technology (Hons.) in Medical Electronics</option>
                        <option value="Bachelor of Engineering Technology (Hons.) in Electrical" {{ Helper::setSelect('B_Electrical', @$profile->programme) }}>Bachelor of Engineering Technology (Hons.) in Electrical</option>
                        <option value="Bachelor of Engineering Technology (Hons) in Telecommunication" {{ Helper::setSelect('B_Telecommunication', @$profile->programme) }}>Bachelor of Engineering Technology (Hons) in Telecommunication</option>
                        <option value="Bachelor of Engineering with Honours (Electrical)" {{ Helper::setSelect('B_H_Electrical', @$profile->programme) }}>Bachelor of Engineering with Honours (Electrical)</option>
                        <option value="Bachelor of Engineering with Honours (Electrical)" {{ Helper::setSelect('MEE', @$profile->programme) }}>Bachelor of Engineering with Honours (Electrical)</option>
                        <option value="Doctor of Philosophy in Engineering Technology (Electric/Electronic)" {{ Helper::setSelect('PEE', @$profile->programme) }}>Doctor of Philosophy in Engineering Technology (Electric/Electronic)</option>
                        <option style="font-weight: bold;">-----------Campus MESTECH--------</option>
                        <option value="Diploma in Medical Assistant" {{ Helper::setSelect('MA', @$profile->programme) }}>Diploma in Medical Assistant</option>
                        <option value="Diploma of Medical Laboratory Technology" {{ Helper::setSelect('LT', @$profile->programme) }}>Diploma of Medical Laboratory Technology</option>
                        <option value="Bachelor of Biomedical Science (Honours)CSS" {{ Helper::setSelect('B_Bio', @$profile->programme) }}>Bachelor of Biomedical Science (Honours)</option>
                        <option value="Bachelor of Medical Science Technology (Honours) in Environmental Healthcare" {{ Helper::setSelect('B_Bio_Health', @$profile->programme) }}>Bachelor of Medical Science Technology (Honours) in Environmental Healthcare</option>
                        <option style="font-weight: bold;">-----------Campus MFI--------</option>
                        <option value="Diploma of Engineering Technology in Air Conditioning and Refrigeration" {{ Helper::setSelect('Air_Conditioning', @$profile->programme) }}>Diploma of Engineering Technology in Air Conditioning and Refrigeration</option>
                        <option value="Diploma of Engineering Technology in Automotive Maintenance" {{ Helper::setSelect('Automation_Maintenance', @$profile->programme) }}>Diploma of Engineering Technology in Automotive Maintenance</option>
                        <option value="Diploma of Engineering Technology in Welding" {{ Helper::setSelect('Welding', @$profile->programme) }}>Diploma of Engineering Technology in Welding</option>
                        <option value="Bachelor of Engineering Technology (Hons.) in Air Conditioning and Industrial Refrigeration" {{ Helper::setSelect('B_Air_Conditioning', @$profile->programme) }}>Bachelor of Engineering Technology (Hons.) in Air Conditioning and Industrial Refrigeration</option>
                        <option value="Bachelor of Engineering Technology (Hons.) in Industrial Automation and Robotics" {{ Helper::setSelect('B_Automation_Robotics', @$profile->programme) }}>Bachelor of Engineering Technology (Hons.) in Industrial Automation and Robotics</option>
                        <option value="Bachelor of Engineering Technology (Hons.) in Mechatronics" {{ Helper::setSelect('B_Mechatrinics', @$profile->programme) }}>Bachelor of Engineering Technology (Hons.) in Mechatronics</option>
                        <option value="Bachelor of Engineering Technology (Hons.) in Automotive Maintenance" {{ Helper::setSelect('B_Automation_Maintenance', @$profile->programme) }}>Bachelor of Engineering Technology (Hons.) in Automotive Maintenance</option>
                        <option value="Bachelor of Engineering Technology (Hons.) in Machine Tools Manufacturing" {{ Helper::setSelect('B_Machine_Tools', @$profile->programme) }}>Bachelor of Engineering Technology (Hons.) in Machine Tools Manufacturing</option>
                        <option value="Bachelor of Engineering Technology (Hons.) in Welding and Quality Inspection" {{ Helper::setSelect('B_Welding', @$profile->programme) }}>Bachelor of Engineering Technology (Hons.) in Welding and Quality Inspection</option>
                        <option value="Bachelor of Engineering Technology (Hons) in Electromechanical System" {{ Helper::setSelect('B_Electromechanical', @$profile->programme) }}>Bachelor of Engineering Technology (Hons) in Electromechanical System</option>
                        <option value="Bachelor of Mechanical Engineering (Hons.)" {{ Helper::setSelect('B_Chemical_System', @$profile->programme) }}>Bachelor of Mechanical Engineering (Hons.)</option>
                        <option value="Master of Science (Water and Hydropower Engineering / Hydraulic Engineering and River Basin Development)" {{ Helper::setSelect('M_Hydraulic', @$profile->programme) }}>Master of Science (Water and Hydropower Engineering / Hydraulic Engineering and River Basin Development)</option>
                        <option value="Master of Engineering Technology (Industrial Automation)" {{ Helper::setSelect('M.Industrial_Automation', @$profile->programme) }}>Master of Engineering Technology (Industrial Automation)</option>
                        <option value="Master of Engineering Technology (Mechanical)" {{ Helper::setSelect('B_Mechanical', @$profile->programme) }}>Master of Engineering Technology (Mechanical)</option>
                        <option value="Doctor of Philosophy (Industrial Automation)" {{ Helper::setSelect('P.Industrial', @$profile->programme) }}>Doctor of Philosophy (Industrial Automation)</option>
                        <option value="Doctor of Philosophy (Mechanical)" {{ Helper::setSelect('P_Philosophy', @$profile->programme) }}>Doctor of Philosophy (Mechanical)</option>
                        <option style="font-weight: bold;">-----------Campus MIAT--------</option>
                        <option value="Diploma of Engineering Technology in Aeroplane Maintenance" {{ Helper::setSelect('DAM', @$profile->programme) }}>Diploma of Engineering Technology in Aeroplane Maintenance</option>
                        <option value="Diploma of Engineering Technology in Avionics Maintenance" {{ Helper::setSelect('D_Aviation', @$profile->programme) }}>Diploma of Engineering Technology in Avionics Maintenance</option>
                        <option value="Diploma of Engineering Technology in Helicopter Maintenance" {{ Helper::setSelect('D_Heli', @$profile->programme) }}>Diploma of Engineering Technology in Helicopter Maintenance</option>
                        <option value="Bachelor of Aircraft Engineering Technology (Honours) in Avionics" {{ Helper::setSelect('B_Avionics', @$profile->programme) }}>Bachelor of Aircraft Engineering Technology (Honours) in Avionics</option>
                        <option value="Bachelor of Aircraft Engineering Technology (Hons.) in Mechanical" {{ Helper::setSelect('B_Aircraft_M', @$profile->programme) }}>Bachelor of Aircraft Engineering Technology (Hons.) in Mechanical</option>
                        <option value="Bachelor of Aviation Management (Hons.)" {{ Helper::setSelect('B_A_Management', @$profile->programme) }}>Bachelor of Aviation Management (Hons.)</option>
                        <option value="Aircraft Maintenance License Program – EASA Part 66" {{ Helper::setSelect('License', @$profile->programme) }}>Aircraft Maintenance License Program – EASA Part 66</option>
                        <option style="font-weight: bold;">-----------Campus MICET--------</option>
                        <option value="Diploma in Chemical Engineering Technology (Bioprocess)" {{ Helper::setSelect('Bioprocess_Tech', @$profile->programme) }}>Diploma in Chemical Engineering Technology (Bioprocess)</option>
                        <option value="Bachelor of Engineering Technology (Hons.) in Biosystem" {{ Helper::setSelect('B.Biosystem', @$profile->programme) }}>Bachelor of Engineering Technology (Hons.) in Biosystem</option>
                        <option value="Master of Engineering Technology (Chemical Engineering)" {{ Helper::setSelect('MCE', @$profile->programme) }}>Master of Engineering Technology (Chemical Engineering)</option>
                        <option style="font-weight: bold;">-----------Campus MIDI--------</option>
                        <option value="Diploma in Electrical and Electronic Engineering" {{ Helper::setSelect('EEE', @$profile->programme) }}>Diploma in Electrical and Electronic Engineering</option>
                        <option value="Diploma in Mechanical Engineering" {{ Helper::setSelect('ME', @$profile->programme) }}>Diploma in Mechanical Engineering</option>
                        <option value="Bachelor of Engineering Technology (Hons.) in Industrial Design" {{ Helper::setSelect('BINDD', @$profile->programme) }}>Bachelor of Engineering Technology (Hons.) in Industrial Design</option>
                        <option value="Bachelor of Engineering Technology Honours in Railway System" {{ Helper::setSelect('B_Railway', @$profile->programme) }}>Bachelor of Engineering Technology Honours in Railway System</option>
                        <option style="font-weight: bold;">-----------Campus MIIT--------</option>
                        <option value="Diploma in Animation" {{ Helper::setSelect('DIA', @$profile->programme) }}>Diploma in Animation</option>
                        <option value="Diploma in Multimedia" {{ Helper::setSelect('DIM', @$profile->programme) }}>Diploma in Multimedia</option>
                        <option value="Bachelor of Business Technology (Hons.) in Computer Entrepreneurial Management" {{ Helper::setSelect('BCEM', @$profile->programme) }}>Bachelor of Business Technology (Hons.) in Computer Entrepreneurial Management</option>
                        <option value="Bachelor of Engineering Technology (Hons.) in Computer System" {{ Helper::setSelect('BCE', @$profile->programme) }}>Bachelor of Engineering Technology (Hons.) in Computer System</option>
                        <option value="Bachelor of Engineering Technology (Hons.) in Networking Systems" {{ Helper::setSelect('BNS', @$profile->programme) }}>Bachelor of Engineering Technology (Hons.) in Networking Systems</option>
                        <option value="Bachelor of Information Technology (Hons.) in Software Engineering" {{ Helper::setSelect('BSE', @$profile->programme) }}>Bachelor of Information Technology (Hons.) in Software Engineering</option>
                        <option value="Bachelor of Information Technology (Hons) in Computer System Security" {{ Helper::setSelect('BCSS', @$profile->programme) }}>Bachelor of Information Technology (Hons) in Computer System Security</option>
                        <option value="Bachelor of Multimedia Technology (Hons.) in Computer Animation" {{ Helper::setSelect('BCA', @$profile->programme) }}>Bachelor of Multimedia Technology (Hons.) in Computer Animation</option>
                        <option value="Bachelor of Multimedia Technology (Hons.) in Interactive Multimedia Design" {{ Helper::setSelect('BIMD', @$profile->programme) }}>Bachelor of Multimedia Technology (Hons.) in Interactive Multimedia Design</option>
                        <option value="Master in Computer Science" {{ Helper::setSelect('MCA', @$profile->programme) }}>Master in Computer Science</option>
                        <option value="Master of Information Technology" {{ Helper::setSelect('MIT', @$profile->programme) }}>Master of Information Technology</option>
                        <option value="Doctor of Philosophy (Information Technology)" {{ Helper::setSelect('PIT', @$profile->programme) }}>Doctor of Philosophy (Information Technology)</option>
                        <option style="font-weight: bold;">-----------Campus MIMET--------</option>
                        <option value="Diploma of Engineering Technology in Ship Design" {{ Helper::setSelect('Ship_Design', @$profile->programme) }}>Diploma of Engineering Technology in Ship Design</option>
                        <option value="Diploma of Engineering Technology in Marine Engineering" {{ Helper::setSelect('Marine', @$profile->programme) }}>Diploma of Engineering Technology in Marine Engineering</option>
                        <option value="Bachelor of Maritime Operations (Hons)" {{ Helper::setSelect('B_Maritime', @$profile->programme) }}>Bachelor of Maritime Operations (Hons)</option>
                        <option value="Bachelor of Engineering Technology (Hons.) in Naval Architecture & Shipbuilding" {{ Helper::setSelect('B_Naval', @$profile->programme) }}>Bachelor of Engineering Technology (Hons.) in Naval Architecture & Shipbuilding</option>
                        <option style="font-weight: bold;">-----------Campus MSI--------</option>
                        <option value="Diploma of Engineering Technology in Automated Regulation and Control" {{ Helper::setSelect('Regulation_Control', @$profile->programme) }}>Diploma of Engineering Technology in Automated Regulation and Control</option>
                        <option value="Diploma of Engineering Technology In Mechanical Design & Development" {{ Helper::setSelect('MDD', @$profile->programme) }}>Diploma of Engineering Technology In Mechanical Design & Development</option>
                        <option value="Bachelor of Engineering Technology (Hons.) in Mechanical (Automotive)" {{ Helper::setSelect('B.Mechanical.A', @$profile->programme) }}>Bachelor of Engineering Technology (Hons.) in Mechanical (Automotive)</option>
                        <option value="Bachelor of Engineering Technology (Hons) in Mechanical Design" {{ Helper::setSelect('B_Mechanical_Design', @$profile->programme) }}>Bachelor of Engineering Technology (Hons) in Mechanical Design</option>
                        <option value="Bachelor of Mechanical Engineering with Honours" {{ Helper::setSelect('B_E_H', @$profile->programme) }}>Bachelor of Mechanical Engineering with Honours</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="semester">Semester</label>
                    <select name="semester" class="form-control{{ $errors->has('semester') ? ' is-invalid' : '' }}" required disabled>
                        <option value="" selected>Please Select</option>
                        <option value="1" {{ Helper::setSelect('1', @$profile->semester) }}>1</option>
                        <option value="2" {{ Helper::setSelect('2', @$profile->semester) }}>2</option>
                        <option value="3" {{ Helper::setSelect('3', @$profile->semester) }}>3</option>
                        <option value="4" {{ Helper::setSelect('4', @$profile->semester) }}>4</option>
                        <option value="5" {{ Helper::setSelect('5', @$profile->semester) }}>5</option>
                        <option value="6" {{ Helper::setSelect('6', @$profile->semester) }}>6</option>
                        <option value="7"" {{ Helper::setSelect('7', @$profile->semester) }}>7</option>
                        <option value="8" {{ Helper::setSelect('8', @$profile->semester) }}>8</option>
                        <option value="none" {{ Helper::setSelect('Graduated', @$profile->semester) }}>Graduated</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="level_study">Level Of Study</label>
                    <select name="level_study" class="form-control{{ $errors->has('level_study') ? ' is-invalid' : '' }}" required disabled>
                        <option value="" selected>Please Select</option>
                        <option value="diploma" {{ Helper::setSelect('Diploma', @$profile->level_study) }}>Diploma</option>
                        <option value="bachelor" {{ Helper::setSelect('Bachelor', @$profile->level_study) }}>Bachelor</option>
                        <option value="degree" {{ Helper::setSelect('Degree', @$profile->level_study) }}>Degree</option>
                        <option value="master" {{ Helper::setSelect('Master', @$profile->level_study) }}>Master</option>
                        <option value="phd" {{ Helper::setSelect('PhD', @$profiles->level_study) }}>PhD</option>
                    </select>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" style=>Update</button>
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
              <form role="form" action="{{route('profile.address')}}" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="address1">Address 1</label>
                    <input type="address1" class="form-control" name="address_1" value="{{ @$address->address_1 }}" placeholder="Enter Address 1" required disabled>
                  </div>
                  <div class="form-group">
                    <label for="address2">Address 2</label>
                    <input type="address2" class="form-control" name="address_2" value="{{ @$address->address_2 }}" placeholder="Enter Address 2" required disabled>
                  </div>
                  <div class="form-group">
                    <label for="state">State</label>
                    <select name="state" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" required disabled>
                        <option value="" selected>Please Select</option>
                        <option value="kedah" {{ Helper::setSelect('kedah', @$address->state) }}>Kedah</option>
                        <option value="penang" {{ Helper::setSelect('penang', @$address->state) }}>Penang</option>
                        <option value="perak" {{ Helper::setSelect('perak', @$address->state) }}>Perak</option>
                        <option value="perlis" {{ Helper::setSelect('perlis', @$address->state) }}>Perlis</option>
                        <option value="kelantan" {{ Helper::setSelect('kelantan', @$address->state) }}>Kelantan</option>
                        <option value="terengganu" {{ Helper::setSelect('terengganu', @$address->state) }}>Terengganu</option>
                        <option value="pahang" {{ Helper::setSelect('pahang', @$address->state) }}>Pahang</option>
                        <option value="kuala_lumpur" {{ Helper::setSelect('kuala_lumpur', @$address->state) }}>Kuala Lumpur</option>
                        <option value="selangor" {{ Helper::setSelect('selangor', @$address->state) }}>Selangor</option>
                        <option value="negeri_sembilan" {{ Helper::setSelect('negeri_sembilan', @$address->state) }}>Negeri Sembilan</option>
                        <option value="melaka" {{ Helper::setSelect('melaka', @$address->state) }}>Melaka</option>
                        <option value="johor" {{ Helper::setSelect('johor', @$address->state) }}>Johor</option>
                        <option value="sabah" {{ Helper::setSelect('sabah', @$address->state) }}>Sabah</option>
                        <option value="sarawak" {{ Helper::setSelect('sarawak', @$address->state) }}>Sarawak</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="city">City</label>
                    <input type="city" class="form-control" name="city" value="{{@$address->city }}" placeholder="Enter City" required disabled>
                  </div>
                  <div class="form-group">
                    <label for="postcode">Postcode</label>
                    <input type="postcode" class="form-control" name="postcode" value="{{ @$address->postcode }}" placeholder="Enter Postcode" required disabled>
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
                <h3 class="card-title">Father Info</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('profile.parent')}}" method="POST">
              <input type="hidden" name="type" value="1">
              <input type="hidden" name="address_type" value="2">
                <div class="card-body">
                <div class="form-group">
                    <label for="name">Father Name</label>
                    <input type="name" class="form-control" name="name" value="{{ @$father->name }}" placeholder="Enter Father Name" required disabled>
                  </div>
                  <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="phone_number" class="form-control" name="phone_number" value="{{ @$father->phone_no }}" placeholder="Enter Father Number" required disabled>
                  </div>
                <div class="form-group">
                    <label for="address_1">Address 1</label>
                    <input type="address_1" class="form-control" name="address_1" value="{{ @$father->address->address_1 }}" placeholder="Enter Address 1" required disabled>
                  </div>
                  <div class="form-group">
                    <label for="address_2">Address 2</label>
                    <input type="address_2" class="form-control" name="address_2" value="{{ @$father->address->address_2 }}" placeholder="Enter Address 2" required disabled>
                  </div>
                  <div class="form-group">
                    <label for="state">State</label>
                    <select name="state" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" required disabled>
                        <option value="" selected>Please Select</option>
                        <option value="kedah" {{ Helper::setSelect('kedah', @$father->address->state) }}>Kedah</option>
                        <option value="penang" {{ Helper::setSelect('penang', @$father->address->state) }}>Penang</option>
                        <option value="perak" {{ Helper::setSelect('perak', @$father->address->state) }}>Perak</option>
                        <option value="perlis" {{ Helper::setSelect('perlis', @$father->address->state) }}>Kelantan</option>
                        <option value="terengganu" {{ Helper::setSelect('terengganu', @$father->address->state) }}>Terengganu</option>
                        <option value="pahang" {{ Helper::setSelect('pahang', @$father->address->state) }}>Pahang</option>
                        <option value="kuala_lumpur" {{ Helper::setSelect('kuala_lumpur', @$father->address->state) }}>Kuala Lumpur</option>
                        <option value="selangor" {{ Helper::setSelect('selangor', @$father->address->state) }}>Selangor</option>
                        <option value="negeri_sembilan" {{ Helper::setSelect('negeri_sembilan', @$father->address->state) }}>Negeri Sembilan</option>
                        <option value="melaka" {{ Helper::setSelect('melaka', @$father->address->state) }}>Melaka</option>
                        <option value="johor" {{ Helper::setSelect('johor', @$father->address->state) }}>Johor</option>
                        <option value="sabah" {{ Helper::setSelect('sabah', @$father->address->state) }}>Sabah</option>
                        <option value="sarawak" {{ Helper::setSelect('sarawak', @$father->address->state) }}>Sarawak</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="city">City</label>
                    <input type="city" class="form-control" name="city" value="{{ @$father->address->city }} "placeholder="Enter City" required disabled>
                  </div>
                  <div class="form-group">
                    <label for="postcode">Postcode</label>
                    <input type="postcode" class="form-control" name="postcode" value="{{ @$father->address->postcode }}" placeholder="Enter Postcode" required disabled>
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
                <h3 class="card-title">Mother Info</h3>
              </div>
              <!-- /.card-header -->
              <form role="form" action="{{route('profile.parent')}}" method="POST">
              <input type="hidden" name="type" value="2">
              <input type="hidden" name="address_type" value="3">
                <div class="card-body">
                <div class="form-group">
                    <label for="name">Mother Name</label>
                    <input type="name" class="form-control" name="name" value="{{ @$mother->name }}" placeholder="Enter Mother Name" required disabled>
                  </div>
                  <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="phone_number" class="form-control" name="phone_number" value="{{ @$mother->phone_no }}" placeholder="Enter Phone Number" required disabled>
                  </div>
                <div class="form-group">
                    <label for="address1">Address 1</label>
                    <input type="address1" class="form-control" name="address_1" value="{{ @$mother->address->address_1 }}" placeholder="Enter Address 1" required disabled>
                  </div>
                  <div class="form-group">
                    <label for="address2">Address 2</label>
                    <input type="address2" class="form-control" name="address_2" value="{{ @$mother->address->address_2 }}" placeholder="Enter Address 2" required disabled>
                  </div>
                  <div class="form-group">
                    <label for="state">City</label>
                    <select name="state" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" required disabled>
                        <option value="" selected>Please Select</option>
                        <option value="kedah" {{ Helper::setSelect('kedah', @$mother->address->state) }}>Kedah</option>
                        <option value="penang" {{ Helper::setSelect('penang', @$mother->address->state) }}>Penang</option>
                        <option value="perak" {{ Helper::setSelect('perak', @$mother->address->state) }}>Perak</option>
                        <option value="perlis" {{ Helper::setSelect('perlis', @$mother->address->state) }}>Perlis</option>
                        <option value="kelantan" {{ Helper::setSelect('kelantan', @$mother->address->state) }}>Kelantan</option>
                        <option value="terengganu" {{ Helper::setSelect('terengganu', @$mother->address->state) }}>Terengganu</option>
                        <option value="pahang" {{ Helper::setSelect('pahang', @$mother->address->state) }}>Pahang</option>
                        <option value="kuala_lumpur" {{ Helper::setSelect('kuala_lumpur', @$mother->address->state) }}>Kuala Lumpur</option>
                        <option value="selangor" {{ Helper::setSelect('selangor', @$mother->address->state) }}>Selangor</option>
                        <option value="negeri_sembilan" {{ Helper::setSelect('negeri_sembilan', @$mother->address->state) }}>Negeri Sembilan</option>
                        <option value="melaka" {{ Helper::setSelect('melaka', @$mother->address->state) }}>Melaka</option>
                        <option value="johor" {{ Helper::setSelect('johor', @$mother->address->state) }}>Johor</option>
                        <option value="sabah" {{ Helper::setSelect('sabah', @$mother->address->state) }}>Sabah</option>
                        <option value="sarawak" {{ Helper::setSelect('sarawak', @$mother->address->state) }}>Sarawak</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="city">City</label>
                    <input type="city" class="form-control" name="city" value="{{ @$mother->address->city }}" placeholder="Enter City" required disabled>
                  </div>
                  <div class="form-group">
                    <label for="postcode">Postcode</label>
                    <input type="postcode" class="form-control" name="postcode" value="{{ @$mother->address->postcode }}" placeholder="Enter Postcode" required disabled>
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
