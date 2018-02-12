@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header">Kalenteri</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <kalenteri-component />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
