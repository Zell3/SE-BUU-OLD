@extends('layouts.default')

@section('title', 'Homepage')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>#HTML-FORM</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">WORKSHOP</a></li>
              <li class="breadcrumb-item active">#HTML-FORM</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">workshop # html-form</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="InputName">Name</label>
                      <input type="name" class="form-control" id="InputName" placeholder="Enter Name" required />
                    </div>
                    <div class="form-group">
                      <label for="exampleInputLastName">สกุล</label>
                      <input type="lname" class="form-control" id="InputLastName" placeholder="Enter Lastname" required />
                    </div>
                    <!-- Date -->
                    <div class="form-group">
                        <label>วัน/เดือน/ปีเกิด</label>
                        <div class="input-group date" id="birthdate" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#birthdate" required />
                            <div class="input-group-append" data-target="#birthdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>เพศ</label>
                        <div class="row">
                            <div class="col-md-3 mb-2">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="customRadio1" name="gender" value="male">
                                    <label for="customRadio1" class="custom-control-label">ชาย</label>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="customRadio2" name="gender" value="female">
                                    <label for="customRadio2" class="custom-control-label">หญิง</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                    <label>รูปภาพ</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="picture">
                            <label class="custom-file-label" for="picture">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>สีที่ชอบ</label>
                        <select class="custom-select rounded-0" id="color">
                          <option>สีแดง</option>
                          <option>สีเหลือง</option>
                          <option>สีเขียว</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>แนวเพลงที่ชอบ</label>
                        <div class="row">
                            <div class="col-md-3 mb-2">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="customRadio4" name="genre" value="forlife">
                                    <label for="customRadio4" class="custom-control-label">เพื่อชีวิต</label>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="customRadio5" name="genre" value="country">
                                    <label for="customRadio5" class="custom-control-label">ลูกทุ่ง</label>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="customRadio6" name="genre" value="etc">
                                    <label for="customRadio6" class="custom-control-label">อื่นๆ</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="check">
                        <label class="form-check-label" for="check">ยินยอมให้เก็บข้อมูล</label>
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary ml-2">Reset</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
    </div>
@endsection
