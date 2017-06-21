@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>
        Create Election
    </h1>
    <ol class="breadcrumb">
        <li class=""><a href="{{route('coop.election')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a href="{{route('coop.election')}}"></i> Elections</a></li>
        <li class="active"><a href="#"></i> Create Election</a></li>
    </ol>
@stop

@section('content')
    <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a id="election_tab" href="#election_info" data-toggle="tab">Election Infomation</a></li>
              <li><a id="position_tab" href="#positions" data-toggle="tab">Positions</a></li>
              <li><a id="candidate_tab" href="#candidates" data-toggle="tab">Candidates</a></li>
              <li><a id="voters_tab" href="#voters" data-toggle="tab">Voters</a></li>
            </ul>
            <div class="tab-content">

              <!-- tab-pane Election Information start-->
              <div class="active tab-pane" id="election_info">
                <form role="form" method="post" action="{{route('coop.election.add.election.info')}}">
                  {{ csrf_field() }}
                  <div class="box-body">
                    
                      <div class="form-group has-error">
                        <label>Election Title</label>
                        <input type="text" class="form-control" id="inputError" placeholder="Enter ...">
                        <span class="help-block">Help block with error</span>
                      </div>

                     <div class="form-group">
                        <label>Logo</label>
                        <input id="logo" type="file" name="logo">
                      </div>

                      <div class="form-group">
                        <label>Header</label>
                        <input type="text" class="form-control" name="header" placeholder="Enter Election Header ...">
                      </div>

                      <div class="form-group">
                        <label>Date Start</label>
                        <input type="text" class="form-control" name="election_start_date" placeholder="Enter Election Start ...">
                      </div>
                      
                      <div class="form-group">
                        <label>Date End</label>
                        <input type="text" class="form-control" name="election_end_date" placeholder="Enter Election End ...">
                      </div>
                     
                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" name="description" placeholder="Enter Description ..."></textarea>
                      </div>
                      <div class="form-group">
                        <label>Active</label>
                        <select class="form-control" name="active">
                            <option value="">Select Status</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                      </div>
                  </div>
                  <!-- /.box-body -->
                    <div class="box-footer">
                      <button type="button" class="btn btn-cancel btn-default">Cancel</button>
                      <button type="button" id="submitElectionInfo" class="btn btn-primary pull-right">Next</button>
                    </div>
                </form>
              </div>
              <!-- /.tab-pane Election Information end-->

              <!-- tab-pane Positions start-->
              <div class="tab-pane" id="positions">
                <div class="box-header with-border">
                    <button type="button" id="add_more" class="btn btn-primary btn-sm pull-right">Add More</button>
                </div>
                <form role="form" method="post" action="{{route('coop.sysparam.update')}}">
                  {{ csrf_field() }}
                  <div class="box-body" id="candidates_container">
                    <div class="row" id="candidate_0">
                      <div class="col-sm-5">
                        <div class="form-group">
                          <label>Position Name</label>
                          <input type="text" class="form-control" name="position_name[]" placeholder="Enter Position Name ...">
                        </div>
                      </div>     
                      <div class="col-sm-5">
                        <div class="form-group">
                          <label>Candidate Limit</label>
                          <input type="text" class="form-control" name="position_limit[]" placeholder="Enter Candidate Limit ...">
                        </div>
                      </div>
                      <div class="col-sm-2 btn-side">
                        <div class="form-group">
                          <button type="button" onclick="delete_candidate(this)" id="btnDelete_0" class="btn btn-danger btn-sm">&times;</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                    <div class="box-footer">
                      <button type="button" class="btn btn-default">Previous</button>
                      <button type="submit" class="btn btn-primary pull-right">Next</button>
                    </div>
                </form>
              </div>
              <!-- /.tab-pane Positions end-->

              <!-- tab-pane Candidates start-->
              <div class="tab-pane" id="candidates">
                <form role="form" method="post" action="{{route('coop.sysparam.update')}}">
                  {{ csrf_field() }}
                  <div class="box-body">
                    <div id="candidate_position_container_1">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <h3>President</h3>
                            <button type="button" class="btn btn-primary btn-sm pull-right">Add Candidate</button>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Candidate Name</label>
                        <input type="text" class="form-control" name="stie_acronym" placeholder="Enter Candidate Name ...">
                      </div>
                     
                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" name="thank_you_msg" placeholder="Enter Description..."></textarea>
                      </div>
                    </div>
                    <div id="candidate_position_container_2">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <h3>Vice President</h3>
                            <button type="button" class="btn btn-primary btn-sm pull-right">Add Candidate</button>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Candidate Name</label>
                        <input type="text" class="form-control" name="stie_acronym" placeholder="Enter Candidate Name ...">
                      </div>
                     
                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" name="thank_you_msg" placeholder="Enter Description..."></textarea>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                    <div class="box-footer">
                      <button type="button" class="btn btn-default">Previous</button>
                      <button type="submit" class="btn btn-primary pull-right">Next</button>
                    </div>
                </form>
              </div>
              <!-- /.tab-pane Candidates end-->

              <!-- tab-pane Voters start-->
              <div class="tab-pane" id="voters">
                <form role="form" method="post" action="{{route('coop.sysparam.update')}}">
                  {{ csrf_field() }}
                  <div class="box-body">
                    
                      <div class="form-group">
                        <label>Select Voters</label>
                        <select class="form-control">
                          <option value="New">New Voters</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Upload</label>
                        <input type="file">
                      </div>
                      
                  </div>
                  <!-- /.box-body -->
                    <div class="box-footer">
                      <button type="button" class="btn btn-default">Previous</button>
                      <button type="submit" class="btn btn-primary pull-right">Save</button>
                    </div>
                </form>
              </div>
              <!-- /.tab-pane Voters end-->

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!--/.col (right) -->
    </div>
    @push('js')
      <script>
      function delete_candidate(elem)
      {
        var delete_id               = elem.id;
        var arr_id                  = delete_id.split("_");
        var id                      = delete_id.split("_").pop();
        var candidates_container    = 'candidate_'+id;
        $('#' + candidates_container).remove();
      }
      $(function () {
        $("#submitElectionInfo").on('click', function (){

        });
        $('.btn-cancel').click(function (){
          window.history.back();
        });
        var counter = 1;
        $('#add_more').on('click', function() {
          $('#candidates_container').append(
          '<div class="row" id="candidate_'+counter+'">'+
              '<div class="col-sm-5">'+
                '<div class="form-group">'+
                  '<label>Position Name</label>'+
                  '<input type="text" class="form-control" name="position_name[]" placeholder="Enter Position Name ...">'+
                '</div>'+
              '</div>     '+
              '<div class="col-sm-5">'+
                '<div class="form-group">'+
                  '<label>Candidate Limit</label>'+
                  '<input type="text" class="form-control" name="position_limit[]" placeholder="Enter Candidate Limit ...">'+
                '</div>'+
              '</div>'+
              '<div class="col-sm-2 btn-side">'+
                '<div class="form-group">'+
                  '<button type="button" onclick="delete_candidate(this)" id="btnDelete_'+counter+'" class="btn btn-danger btn-sm">&times;</button>'+
                '</div>'+
              '</div>'+
            '</div>'
          );
          counter++;
        });
      });
      </script>
    @endpush
@stop