@extends('layout.master')
@section('title','Members')
@section('page_head')

@endsection

@section('bredscrum')

@endsection

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Members</h3>
                        <button type="button" class="btn btn-warning pull-right" data-toggle="modal"
                                data-target="#addmodal">Add
                        </button>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="members" class="table table-bordered table-striped table-responsive">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                            </tfoot>
                        </table>


                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

    <div class="modal fade" id="addmodal">
        <div class="modal-dialog" role="document" style="min-width:95%;">
            <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="/add" method="post" role="form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="">Name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                   placeholder="Enter Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Age</label>
                                            <input type="text" class="form-control" id="age" name="age"
                                                   placeholder="Enter Age">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="">Contact No.</label>
                                            <input type="text" class="form-control" id="contact" name="contact"
                                                   placeholder="Enter Contact No." maxlength="10">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Height</label>
                                            <input type="text" class="form-control" id="height" name="height"
                                                   placeholder="Enter Height">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Address</label>
                                        <textarea name="address" id="input" placeholder="Enter Address" name="address"
                                                  class="form-control" rows="6"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                           placeholder="Enter Email">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Weight</label>
                                    <input type="text" class="form-control" id="weight" name="weight"
                                           placeholder="Enter Weight">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Reference</label>
                                    <input type="text" class="form-control" id="reference" name="reference"
                                           placeholder="Enter Reference">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Marital Status</label>
                                    <select name="married" id="married" class="form-control">
                                        <option value="married">Married</option>
                                        <option value="unmarried">Unmarried</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Current Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="housewife">Housewife</option>
                                        <option value="employed">Employed</option>
                                        <option value="student">Student</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Your Goal</label>
                                    <input type="text" class="form-control" id="goal" name="goal"
                                           placeholder="Enter Your Goal">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="">Medical History</label>
                                    <input type="text" class="form-control" id="medical" name="medical"
                                           placeholder="Enter Medical History">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Comments</label>
                                    <input type="text" class="form-control" name="comments" id="comments"
                                           placeholder="Enter Comments">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>You Want To All Update By</label>
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <div class="checkbox">
                                                <input type="checkbox" id="Checkbox_1">
                                                <label for="Checkbox_1">Whatsapp</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="checkbox">
                                                <input type="checkbox" id="Checkbox_2">
                                                <label for="Checkbox_2">SMS</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="checkbox">
                                                <input type="checkbox" id="Checkbox_3">
                                                <label for="Checkbox_3">Email</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="checkbox">
                                                <input type="checkbox" id="Checkbox_4">
                                                <label for="Checkbox_4">Call</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="">Joining Date</label>
                                    <input type="text" class="form-control" name="join" id="join"
                                           placeholder="Enter Joining Date">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Followup By</label>
                                    <input type="text" class="form-control" name="followby" id="followby"
                                           placeholder="Enter Followup By">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Remarks</label>
                                    <input type="text" class="form-control" name="remarks" id="remarks"
                                           placeholder="Enter Remarks">
                                </div>
                            </div>
                            <div class="row">
                               <div class="form-group col-md-4">
                                    <label for="">Type of Services</label>
                                    <select name="service" id="service" class="form-control col-md-11"  style="float:left;">
                                        <option>Personal/General Training</option>
                                        <option>Weight Losss Batch</option>
                                        <option>Inch-Loss Therapy</option>
                                        <option>Weekly Weight Loss Sessions</option>
                                        <option>PCOS/PCOD Solutions</option>
                                        <option>Pregnancy Yoga</option>
                                        <option>Kids Batch</option>
                                        <option>Only Diet Sessions</option>
                                        <option>Diabetes & Thyroid Sessions</option>
                                        <option>Exercises for People Above 40 Years</option>
                                        <option>Stamina Batch</option>
                                    </select>
                                   <a class="btn btn-primary" id="addservice" style="float:right;"><i class="fa fa-plus"></i></a>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Next Followup</label>
                                    <input type="text" class="form-control" name="nextfollowup" id="nextfollowup" placeholder="Enter Next Followup">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Comment</label>
                                    <input type="text" class="form-control" name="comment" id="comment" placeholder="Enter Comment">
                                </div>
                            </div>
                            <div class="row" id="servicescontent">
                            </div>
                            <div class="modal-footer  float-right">
                                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Close</button>
                                <button type="Submit" class="btn btn-primary btn-lg float-right">Add</button>
                            </div>
                        </form>
                    </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>
@endsection

@section('page_script')
    <!-- DataTables -->
    <script src="{{asset('assets/vendor_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>


    <!-- This is data table -->
    <script src="{{asset('assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js')}}"></script>

    <!-- minimal_admin for Data Table -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#members').DataTable();

            $("#addservice").click(function(){
                var service = $('#service').val();
                var data = "<div class='row col-md-12'><div class='form-group col-md-4'><input class='form-control' name='services[]' " +
                    "type='text' value='"+service+"' readonly></div>" +
                    "<div class='form-group col-md-7'><input class='form-control' name='servicescomments[]' type='text'></div>" +
                    "<a class='btn btn-danger removeservice' style='float:right;height:35px;'><i class='fa fa-minus'></i></a></div>";
                $("#servicescontent").append(data);
            });

            $("body").on("click",".removeservice", function(){
                $(this).parent('div').remove();
            });

        });
    </script>
@endsection
