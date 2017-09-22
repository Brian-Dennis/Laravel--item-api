{{--  Checking for errors then display  --}}
  @if(count($errors) > 0)
    @foreach($errors->all() as $error)
      <div class="alert alert-danger">
        {{ $error }}
      </div>
    @endforeach
  @endif

{{--  Form Submission Success Message  --}}
  @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif