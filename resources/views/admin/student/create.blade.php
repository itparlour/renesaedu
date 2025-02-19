@extends('layouts.admin')
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{route('admin.student.index')}}">Students</a></li>
    <li class="breadcrumb-item active">Create</li>
</ol>
@endsection
@section('content')
create
@endsection
