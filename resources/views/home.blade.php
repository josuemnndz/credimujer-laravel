@extends('layout.main')

@section('title', $page->title.' | '.setting('.site_name'))

@section('content')
    {!! $page->body !!}
@endsection

@section('Banner',$page->banner)

@section('Divcontacto')
    {!! $page->divcontacto !!}
@endsection

@section('Divpotencial')
    {!! $page->divpotencial !!}
@endsection

@section('Divqueescredimujer')
    {!! $page->divqueescredimujer !!}
@endsection

@section('Divproductos')
    {!! $page->divproductos !!}
@endsection

@section('Divnewsletter')
    {!! $page->divnewsletter !!}
@endsection

@section('Divrequisitos')
    {!! $page->divrequisitos !!}
@endsection

@section('Divpotencialdos')
    {!! $page->divpotencialdos !!}
@endsection

@section('Divcontactanos')
    {!! $page->divcontactanos !!}
@endsection

@section('Divdireccion')
    {!! $page->divdireccion !!}
@endsection

@section('Divfooter')
    {!! $page->divfooter !!}
@endsection



