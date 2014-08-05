@extends('site.layouts.default')
@section('content')
<div class="container-fluid">
    <form id="form_create_link"  class="form-horizontal">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group" id="main-group">
                    <label class="control-label col-sm-3" for="lonk_link"> Paste your URL here:</label>
                    <div class="col-sm-9">
                        <input id="long_link" name="lonk_link" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <a id="button_create_link"  class="btn btn-primary" > Short Link </a>
            </div>
        </div>
    </form>

</div>

@stop