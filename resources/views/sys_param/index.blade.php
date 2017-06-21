@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>
        System Parameters
    </h1>
    <ol class="breadcrumb">
        <li class=""><a href="{{route('coop.election')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#"> System Parameters</a></li>
    </ol>
@stop

@section('content')
    <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <!-- general form elements disabled -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Site Settings</h3>
            </div>
            <!-- /.box-header -->
            <form role="form" method="post" action="{{route('coop.sysparam.update')}}">
                {{ csrf_field() }}
                <div class="box-body">
                  @foreach($settings as $setting)
                    <!-- Title -->
                    @if($setting->name === 'site_title')
                    <div class="form-group">
                      <label>Site Title</label>
                      <input type="text" class="form-control" value="{{$setting->plain_value}}" name="site_title" placeholder="Enter Title ...">
                    </div>
                    @endif
                    <!-- Site Acronym -->
                    @if($setting->name === 'stie_acronym')
                    <div class="form-group">
                      <label>Site Acronym</label>
                      <input type="text" class="form-control" value="{{$setting->plain_value}}" name="stie_acronym" placeholder="Enter Acronym ...">
                    </div>
                    @endif

                    <!-- Tally -->
                    @if($setting->name === 'tally_refresh')
                    <div class="form-group">
                      <label>Tally Refresh</label>
                      <input type="text" class="form-control" value="{{$setting->plain_value}}" name="tally_refresh" placeholder="Enter Tally Refresh ...">
                    </div>
                    @endif

                    <!-- Thank you message -->
                    @if($setting->name === 'thank_you_msg')
                    <div class="form-group">
                      <label>Thank you message</label>
                      <textarea class="form-control" rows="3" name="thank_you_msg" placeholder="Enter Thank you message ...">{{$setting->plain_value}}</textarea>
                    </div>
                    @endif
                  @endforeach
                </div>
                <!-- /.box-body -->
                  <div class="box-footer">
                    <button type="button" class="btn btn-cancel btn-default">Cancel</button>
                    <button type="submit" class="btn btn-primary pull-right">Save</button>
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
          $('.btn-cancel').click(function (){
            window.location = "{{url('admin/home')}}";
          });
        });
      </script>
    @endpush
@stop