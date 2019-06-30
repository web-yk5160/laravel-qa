@extends('layouts.app')

@section('content')
<div class="container footer">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="color:#FFF;">ダッシュボード</div>

                <div class="card-body" style="text-align:center;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    ログインしました。&nbsp;&nbsp;<br>
                    <a class="navbar-brand" href="{{ url('/') }}">
                    &nbsp;マイページはこちら！
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
