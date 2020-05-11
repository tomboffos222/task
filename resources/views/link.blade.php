
@extends('layouts.send')
@php
$links = session()->get('links');
$link = $links[$id];
$title = $link['title'];
$description = $link['description'];
$image = route('Links').$link['image'];


@endphp
@section('title'){!! $title !!}@endsection
@section('description'){!! $description !!}@endsection
@section('image'){!! $image !!}@endsection
@section('link',$link['link'])
