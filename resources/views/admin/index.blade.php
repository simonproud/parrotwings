
@extends('layouts.app')

@section('content')
<div class="col-lg-12">
			    	<!-- begin nav-tabs -->
    <ul class="nav nav-tabs">
        <li class="nav-items">
            <a href="#default-tab-1" data-toggle="tab" class="nav-link active">
                <span class="d-sm-none">Tab 1</span>
                <span class="d-sm-block d-none">Пользователи</span>
            </a>
        </li>
        <li class="nav-items">
            <a href="#default-tab-2" data-toggle="tab" class="nav-link">
                <span class="d-sm-none">Tab 2</span>
                <span class="d-sm-block d-none">Транзакции</span>
            </a>
        </li>
    </ul>
    <!-- end nav-tabs -->
    <!-- begin tab-content -->
    <div class="tab-content">
        <!-- begin tab-pane -->
        <div class="tab-pane fade active show" id="default-tab-1">
            <h3 class="m-t-10"><i class="fa fa-user"></i>Пользователи</h3>
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>PW</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $k=>$user)
                    <tr>
                        <td><?=$user['id']?></td>
                        <td><?=$user['name']?></td>
                        <td><?=$user['email']?></td>
                        <td><?=money_format('%.2n', $user['wallet']->wallet)?> PW</td>
                        <td class="with-btn" nowrap="">
                            @if($user['active'] == 1)
                            <a href="/admin/action/ban?id=<?=$user['id']?>" class="btn btn-sm btn-warning width-60 m-r-2">Ban</a>
                            @else
                            <a href="/admin/action/unban?id=<?=$user['id']?>" class="btn btn-sm btn-primary width-60 m-r-2">Unban</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <!-- end tab-pane -->
        <!-- begin tab-pane -->
        <div class="tab-pane fade" id="default-tab-2">
               <h3 class="m-t-10"><i class="fa fa-money-bill-alt"></i>Транзакции</h3>
        </div>
        <!-- end tab-pane -->
    </div>
    <!-- end tab-content -->


					<!-- end tab-content -->
</div>

@endsection
