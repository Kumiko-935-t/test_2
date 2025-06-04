@extends('layouts.default')

@section('title')

@section('content')
<table>
  
  @foreach ($products as $product)
  <tr>
  <td><img src="{{ asset('/img/' . $product->image) }}" alt="{{ $product->name }}" width="100"></td>

    <td>{{$product->name}}</td>
    <td>{{$product->price}}</td>
  </tr>
  @endforeach
</table>
@endsection
</body>
</html> 