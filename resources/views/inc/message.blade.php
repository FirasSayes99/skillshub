@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($errors -> any())
    <div class="alert alert-danger">
       @foreach ($errors->all() as $error )
           {{ $error }}
       @endforeach
    </div>
@endif

@if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif