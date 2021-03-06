<div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Basic Datatable</h4>
            <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#basicModal">Tambah Produk</button>
        </div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input wire:model="search" type="text" class="form-control form-control-sm">
                </div>
            </div>
            <div class="table-responsive" id="list">
                @if($products->count())
                    <table id="list-products" class="table table-striped table-responsive-sm" style="min-width: 845px">
                        <thead>
                            <tr>
                                <th wire:click="sorting('name')">Produk</th>
                                <th wire:click="sorting('category_id')">Kategori</th>
                                <th wire:click="sorting('price')">Harga</th>
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
                                    <button class="btn btn-info" wire:click="selectItem({{ $product->id }}, 'update')" id="editButton">Edit</button>
                                    <button class="btn btn-danger" wire:click="selectItem({{ $product->id }}, 'delete')" >Delete</button>
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
                    <nav>
                        <ul class="pagination">
                            {{$products->links()}}
                        </ul>
                    </nav>
                @endif
            </div>
        </div> 
    </div>   
</div>