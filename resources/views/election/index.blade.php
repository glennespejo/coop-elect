@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>
        Elections
    </h1>
    <ol class="breadcrumb">
    </ol>
@stop

@section('content')
    <div class="row">
        <!-- right column -->
        <div class="col-xs-12">
          <!-- general form elements disabled -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Election List</h3>
                <a href="{{route('coop.election.create')}}" class="btn btn-primary btn-sm pull-right">Create Election</a>
            </div>
            <!-- /.box-header -->
            <form role="form" method="post" action="{{route('coop.sysparam.update')}}">
                {{ csrf_field() }}
                <div class="box-body">
                  <table id="election_table" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>Electio Name</th>
                      <th>Description</th>
                      <th>Election Start</th>
                      <th>Election End</th>
                      <th>Status</th>
                      <th class="no-sort">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($elections)
                      @foreach($elections as $key => $election)
                        <tr>
                          <td>{{$election['election_name']}}</td>
                          <td>
                            @if(strlen($election['description']) > 30)
                              {{substr($election['description'],0,30)}} . . .
                            @else
                              {{$election['description']}}
                            @endif
                          </td>
                          <td>{{$election['election_start_date']}}</td>
                          <td>{{$election['election_end_date']}}</td>
                          <td>{{ $election['active'] ? 'Active' : 'In-active'}}</td>
                          <td>
                            {!!view('actions', ['itemID'=>$election['election_name']])->render()!!}
                          </td>
                        </tr>
                      @endforeach
                    @endif
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>Electio Name</th>
                      <th>Description</th>
                      <th>Election Start</th>
                      <th>Election End</th>
                      <th>Status</th>
                      <th class="no-sort">Action</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>

              </form>
              <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
    </div>
    @push('js')
      <script>
        $(function () {
          $('#election_table').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "columnDefs": [ {
              "targets": 5,
              "orderable": false
            } ]
          });
          
        });
      </script>
    @endpush
@stop