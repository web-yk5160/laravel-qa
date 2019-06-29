<div class="media post">
  <div class="d-flex flex-column counters">
    <div class="vote">
      <strong>{{ $question->votes_count }}</strong> 投票数
    </div>
    <div class="status {{ $question->status }}">
      <strong>{{ $question->answers_count }}</strong> 回答数
    </div>
    <div class="view">
    {{ $question->views . " " . str_plural('view', $question->views) }}
    </div>
  </div>
    <div class="media-body">
      <div class="d-flex align-items-center">
      <h3 class="mt-0"><a href="{{ route('questions.show', $question->id) }}">{{ $question->title }}</a></h3>
      <div class="ml-auto">
        @can('update', $question)
          <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-sm btn-outline-info">編集</a>
        @endcan
        @can('delete', $question)
          <form class="form-delete" method="post" action="{{ route('questions.destroy', $question->id) }}">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('削除してよろしいですか?')">削除</button>
          </form>
        @endcan
      </div>
      </div>

      <p class="lead">
          <a href="{{ $question->user->url }}">{{ $question->user->name }}</a>さんからの質問
          <small class="text-muted">({{ $question->created_date }})</small>
      </p>
      <div class="excerpt">{{ $question->excerpt(350) }}</div>
    </div>
</div>