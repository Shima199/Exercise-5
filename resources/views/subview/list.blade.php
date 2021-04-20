@extends('subview/master')
@section('title', 'Available books')
@section('content')
 <h1>List of the available books in the application</h1>
<br/>
<p><b>Name of the book | ISBN Code | Category | No of Pages</b></p>
 @foreach ($books as $date => $array)
 @foreach ($array as $item) {{$item}} ,
 @endforeach
 <br/>
  @endforeach
  <p>Shima Haidar Alatas</p>
  <p>1725900</p>
@endsection
