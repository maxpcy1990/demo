@extends('layouts.master')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">item id</th>
      <th scope="col">item name</th>
      <th scope="col">sale usd</th>
      <th scope="col">restock</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($tableData as $rowData)
        <tr>
            <th scope="row">{{$rowData->id}}</td>
            <td>{{$rowData->item_name}}</td>
            <td>{{$rowData->sale_usd}}</td>
            <td>{{$rowData->restock}}</td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection

@section('query', 'active')