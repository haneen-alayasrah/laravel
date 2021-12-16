<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<table style="background-color:#00FF00">
  <tr>
    <th>products</th>
    <th>price</th>

    @foreach ($products as $product)
<tr>
<td>  {{$product['name'] }}  </td>
<td>  {{$product['price'] }}  </td>
</tr>
@endforeach
</table>


</body>
</html>





