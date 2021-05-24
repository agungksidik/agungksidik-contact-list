@extends('layouts.back')

@section('content')
    <div class="container">
        <div class="col-md-5">
        <div class="card mb-2">
            <div class="card-header">Update Navigation</div>
            <div class="card-body">
                <form action="{{ route('contact.update', $contact) }}" method="post">
                    @method("PUT")
                    @include('contact.partials.form-edit')
                </form>
            </div>
        </div>
        </div>
    </div>
    
@endsection
