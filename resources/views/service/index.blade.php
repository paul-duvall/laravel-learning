@extends('app')

@section('title', 'Services')

@section('content')

<h1>Services page</h1>

<p>This is all about our services!</p>

<form action="/service" method="post">
    @csrf
    <input autocomplete="off" name="name" type="text">
    <button>Add service</button>
</form>
<div style="color: red">
    @error('name') {{ $message }} @enderror
</div>


<ul>
    @forelse($services as $service)

        <li>{{ $service->name }}</li>
    @empty
        Come back later to see our services!
    @endforelse

</ul>

@endsection
