
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
<a href="products">Back</a><br><br>
  <form action="products" method="POST">
      @csrf
<table id="customers">
<tr>
<td>Name</td>
<td><input type="textname" name="name"></td> <br><br>
<td>Description</td>
<td><textarea name="detail" id="" cols="30" rows="10"></textarea></td>
</tr>

<tr>
<td><input type="submit" name="submit"></td>

</tr>



</table>


  </form>