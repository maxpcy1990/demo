@extends('layouts.master')

@section('content')
<div class="alert alert-success" id=result>Insert successfully</div>
<div class="alert alert-danger" id=failed></div>

<form id="item_form">
  <div class="mb-3">
    <label class="form-label">Item name</label>
    <input type="text" class="form-control" name="item_name" >
  </div>
  <div class="mb-3">
    <label class="form-label">Quantity</label>
    <input type="text" class="form-control" name="quantity">
  </div>
  <button name='button1' type="submit" class="btn btn-primary">Submit</button>
</form>

<script>
$( "#result" ).hide();
$( "#failed" ).hide();

$( "#item_form" ).submit(function( event ) {
    $( "#result" ).hide();
    $( "#failed" ).hide();

    // Stop form from submitting normally
    event.preventDefault();

    // Get some values from elements on the page:
    var $form = $( this ),
    item_name = $form.find( "input[name='item_name']" ).val(),
    quantity = $form.find( "input[name='quantity']" ).val()

    if (!$.trim(item_name) || !$.trim(quantity)){   
        $( "#failed" ).html("Contain Empty data");
        $( "#failed" ).show();
    }else{
        url = "/api/items";

        //Ajax Function to send a post request
        $.ajax({
            type: "POST",
            url: url,
            data: {item_name, quantity},
            success: function(response){
                //if request is made successfully then the response represent the data
                if(response['status'] == false){
                    $( "#failed" ).html(response['message']);
                    $( "#failed" ).show();
                } else {
                    $( "#result" ).show();
                }
            }
        });
    }
});
</script>
@endsection

@section('ajax', 'active')