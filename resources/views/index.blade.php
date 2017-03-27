@extends ('layout.template')
@section ('content')
    @foreach ($posts as $post)
    <div>
        @include('post')
    </div>
    @endforeach


@endsection
