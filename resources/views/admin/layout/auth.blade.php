@extends('admin.layout.master')

@section('content-master')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    @if (session()->has('message'))
                        <div class="alert alert-{{ session('message')['type'] }}">
                            {{ session()->get('message')['content'] }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
@endsection

