<div>
    <div class="card-body">
        <div class="table-responsive" id="list">
            @if($products->count())
                <table id="list-products" class="table table-striped table-responsive-sm" style="min-width: 845px">
                    <thead>
                        <tr>
                            <th>Produk</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="products">
                        @foreach($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->category->name}}</td>
                            <td>Rp. {{$product->price}}</td>
                            <td>
                                <button class="btn btn-info" id="editButton">Edit</button>
                                <button class="btn btn-danger delete" >Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Produk</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
                {{$products->links()}}
            @endif
        </div>
    </div>    
</div>