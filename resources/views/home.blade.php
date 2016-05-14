@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!<br>
                    <h3>Book Listing:</h3>
                    <?php
                    foreach ($books as $book) {
                        echo "[".$book->name."]<br>\n";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
