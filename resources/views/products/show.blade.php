
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
<a href="product_create">Add Record</a><br><br>
{{session('msg')}}
<br>
    <table id="customers">
<tr>
<th>id</th>
<th>Name</th>
<th>Descripition</th>
<th>Created At</th>
<th>Action</th>

</tr>
@foreach($ProductArr as $product)
<tr>
<th>{{$product->id}}</th>
<th>{{$product->name}}</th>
<th>{{$product->detail}}</th>
<th>{{$product->created_at}}</th>
<th>
<a href="products/{{$product->id}}">Delete</a>
<a href="product_edit/{{$product->id}}">Edit</a>
</th>

</tr>
@endforeach

    </table>