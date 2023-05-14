@extends('layouts.master')

@section('content')
<div class="alert alert-success" style="display:none" id="div_success">Download Complete - Generating item list</div>
<div class="alert alert-danger" style="display:none" id="div_fail">Download Failed</div>
Item list
<ul id='item_list'>
</ul>

<script>
const fetchPromise = fetch(
  "https://mdn.github.io/learning-area/javascript/apis/fetching-data/can-store/products.json"
);

fetchPromise
  .then((response) => {
    if (!response.ok) {
      throw new Error(`HTTP error: ${response.status}`);
    }

    div_success.style.display = "block";
    return response.json();
  })
  .then((data) => {
    data.forEach(appendItem);
  })
  .catch((error) => {
    div_fail.style.display = "block";
  });

  function appendItem(item){
    item_list.innerHTML = item_list.innerHTML + "<li>"+item.name+"</li>"
  }
</script>
@endsection

@section('async', 'active')