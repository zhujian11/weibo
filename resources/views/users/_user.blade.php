<div class="list-group-item">
  <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="me-3" width=32>
  <a href="{{ route('users.show', $user) }}">{{ $user->name }}</a>
  @can('destroy', $user)
    <form action="{{ route('users.destroy', $user->id) }}" method="post" class="float-end">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-sm btn-danger delete-btn">删除</button>
    </form>
  @endcan
</div>
