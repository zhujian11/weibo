<form action="{{ route('statuses.store') }}" method="post">
  @include('shared._errors')
  @csrf
  <textarea class="form-control" rows="3" placeholder="聊聊新鲜事儿..." name="content">{{ old('content') }}</textarea>
  <div class="text-end">
    <button class="btn btn-primary mt-3" type="submit">发布</button>
  </div>
</form>
