
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
  <table class="table">
    <thead>
        <tr><td>Source</td><td>Destination</td><td>Money</td></tr>
    </thead>
    <tbody>
    @if(count($transactions['data']) > 0 )
        @foreach($transactions['data'] as $key=>$tran)
        <tr><td>{{$tran['source']}}</td><td>{{$tran['destination']}}</td><td>{{$tran['data']}}</td></tr>
        @endforeach
    @endif
    </tbody>
  </table>
  {{ $transactionsob->links() }}
  </div>
</div>
@endsection
