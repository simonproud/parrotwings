
@extends('layouts.app')

@section('content')
<div class="panel panel-inverse" data-sortable-id="ui-widget-1">
  <div class="panel-heading">
    <div class="panel-heading-btn">
      <a href="#" class="btn btn-xs btn-icon btn-circle btn-default"
        data-click="panel-expand">
        <i class="fa fa-expand"></i>
      </a>
    </div>
    <h4 class="panel-title">Транзакции</h4>
  </div>
  <div class="panel-body">
    <p><example-component></example-component></p>
  </div>
</div>
@endsection
