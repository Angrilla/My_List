@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Create Activity') }}
                    </div>
                    <div class="card-body">
                        <form action="{{ route('activity.store') }}" method="post">
                            @csrf
                            <table class="table table-bordered table-stripped">
                                <tr>
                                    <td>Activity Name</td>
                                    <td><input type="text" class="form-control" name="activityname"></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td><button type="submit" class="btn btn-primary">Update</button></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
