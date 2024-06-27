@extends('layouts.app')

@section('content')
    <div class="contaoner-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Create Planning') }}
                    </div>
                    <div class="card-body">
                        <form action="planningstore" method="post">
                            @csrf
                            <table class="table table-bordered table-stripped">

                                <tr>
                                    <td>Planning Name</td>
                                    <td><input type="text" name="name" class="form-control" placeholder="Input Planning Here"></td>
                                </tr>
                                <tr>
                                    <td>Date</td>
                                    <td><input type="date" name="dateform" class="form-control" placeholder="Choose The Date"></td>

                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td><input type="text" class="form-control" name="desc"
                                            placeholder="Input Description of Planning Here"></td>
                                </tr>
                                <tr>
                                    <td>&nbsp</td>
                                    <td><button type="submit" class="btn btn-primary">Create</button></td>
                                </tr>

                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
