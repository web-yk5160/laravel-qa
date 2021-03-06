@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="d-flex align-items-center">
                    <h2 class="list">質問の編集</h2>
                    <div class="ml-auto">
                      <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary">質問一覧へ戻る</a>
                    </div>
                  </div>

                </div>

                <div class="card-body">
                  <form action="{{ route('questions.update', $question->id) }}" method="post">
                    {{ method_field('PUT') }}
                    @include ('questions._form', ['buttonText' => "質問を更新する"])
                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
