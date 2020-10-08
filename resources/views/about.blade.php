@extends('layouts.app')

@section('content')
    <h1>About</h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias explicabo ullam consequatur accusantium optio nesciunt doloribus laudantium, id reiciendis tempore dolores quam, ratione repellat quod vitae cupiditate vel recusandae. Cupiditate.</p>
@endsection

@section('sidebar')
    @parent
    <h3>Home appended sidebar</h3>
@endsection