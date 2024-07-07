@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div>
                <!-- Very little is needed to make a happy life. - Marcus Aurelius -->

                <h1 class="row justify-content-center">Create New Listing</h1>
                <form method="POST"
                    action="{{ url('/home/list') }}">
                    @csrf
                    <div class="form-grouprow">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" placeholder="Enter Name...">
                    </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Enter Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="Enter Email">
            </div>
        </div>


        <div class="form-group row">
            <label for="inputMessage" class="col-sm-2 col-form-label">Description</label>
            <textarea class="form-control" id="inputMessage" rows="5">Type here</textarea>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">save</button>
            </div>
        </div>
        </form>
    </div>
    </div>
    </div>
@endsection
