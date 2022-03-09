@foreach($products as $product)
    <tr>
        <td>{{$product->name}}</td>
        <td>{{$product->category->name}}</td>
        <td>Rp. {{$product->price}}</td>
        <td>
            <button class="btn btn-info" target="{{route('product.edit',$product->id)}}" onclick="edit({{$product->id}})" id="editButton">Edit</button>
            <button class="btn btn-danger delete" href="{{route('product.delete',$product->id)}}">Delete</button>
        </td>
    </tr>
@endforeach