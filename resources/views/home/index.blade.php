@extends('layouts.template')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>

    @php
    $message = "Hoc.tv";
    @endphp

   {{ $message }}


   @datetime(now())


@disk('local')
    <!-- The application is using the local disk... -->
    <p> a </p>
@elsedisk('s3')
    <!-- The application is using the s3 disk... -->
    <p> b </p>
@else
    <!-- The application is using some other disk... -->
    <p> c </p>
@enddisk


@endsection


@push('scripts', '<script>alert("Hello!")</script>')

@push('scripts')
    <script>
        alert("Hello again!")
    </script>
@endpush

@prepend('scripts')
    <script>
        alert("Hello again!0123")
    </script>
@endprepend


