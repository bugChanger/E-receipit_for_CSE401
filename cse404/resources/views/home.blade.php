@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <div class="panel-heading">Dashboard</div>
            </br>

<body>
        <form action="store" method="post">
            <tr>
            <!-- {{ csrf_field() }} -->
            <td>Product Name: </td><td><input type="text" name="p_name" required></td></tr></br>
            <tr><td>Product Quantity: </td><td><input type="text" name="p_quan" required></td></tr></br>
            <tr><td>Product Price: </td><td><input type="text" name="p_price" required></td></tr></br>
            <!-- <tr><td>Total:</td><td><input type="text" name="total" required></td></tr>
            <tr><td>Contact:</td><td><input type="text" name="cont" required></td></tr>
            <tr><td>Password:</td><td><input type="Password" name="pass1" required></td></tr>
            <tr><td>Confirm Password:</td><td><input type="Password" name="pass2" required></td></tr> -->

<!--             <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->

<?php echo csrf_field();?>

            <tr><td><input type="submit" name="submit"></td></tr>
            
        </form>
    </body>
    </br>
                    </div>

<!--                 <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div> -->
        </div>
    </div>
</div>


@endsection