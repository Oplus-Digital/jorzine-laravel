@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mb-3 text-center" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

        </button>
        {{ session()->get('success') }}
    </div>
@endif


@if(session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

        </button>
        {{ session()->get('error') }}
    </div>
@endif


@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

        </button>
        <ul>
        @foreach ($errors->all() as $error)
           <li> {{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif





