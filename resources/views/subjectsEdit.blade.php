@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="panel-body pt-5">
            <h1>editieren der Fächer</h1>
            <!-- Display Validation Errors -->
            @include('common.errors')

            <form action="/homework" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                <div class="form-group mb-3">
                    <label for="homework-subject" class="col-sm-3 control-label">Subject zum auswählen</label>

                    <div class="col-sm-6">
                        <select name="subject" id="homework-subject" class="form-control">
                            <option value="Mathematik">Mathematik</option>
                            <option value="Deutsch">Deutsch</option>
                            <option value="Englisch">Englisch</option>
                            <option value="Naturwissenschaften">Naturwissenschaften</option>
                        </select>                        
                    </div>

                    <div class="form-group mb-3">
                    <label for="homework-task" class="col-sm-3 control-label">new topic</label>

                    <div class="col-sm-6">
                        <input type="text" name="task" id="homework-task" class="form-control">
                    </div>
                
                    

                </div>

                
                
                

                <div class="form-group mb-3">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Save Changes
                        </button>
                    </div>
                </div>
            </form>
        </div>

       
    </div>

@endsection
