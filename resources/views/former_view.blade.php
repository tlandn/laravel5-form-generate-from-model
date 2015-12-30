<!-- resources/views/song/create.blade.php -->

@extends('app')
    Day la former_view.blade.php
@section('content')
    <?= Former::open()->method('GET') ?>
    <?= Former::text('name')->required() ?>
    <?= Former::close() ?>
@endsection