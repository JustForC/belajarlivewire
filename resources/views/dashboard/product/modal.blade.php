<form id="inputForm" enctype="multipart/form-data" method="POST" action="{{ $product->exists ? route('product.update', $product->id) : route('product.store') }}">
    @csrf
    {{ method_field($product->exists ? 'PUT' : 'POST') }}
    @if($product->exists)
    <div class="form-row">
        <div class="form-group col-md-12">
            <img src="{{asset($product->path)}}" alt="" class="img-fluid mt-4 mb-4 w-100">
        </div>
        <input type="hidden" name="path" value="{{$product->path}}">
    </div>
    @endif
    <div class="form-row">
        <div class="form-group col-md-12">
            <label>Foto Produk</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image">
                    <label class="custom-file-label"></label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label>Nama Produk</label>
            <input type="text" class="form-control form-control-sm" name="name" value="{{$product->name}}" placeholder="Nama Produk">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label>Harga</label>
            <input type="number" class="form-control form-control-sm" name="price" value={{$product->price}} placeholder="Harga Produk">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label>Kategori</label>
            <select class="form-control default-select" id="sel1" name="category">
                @foreach($categories as $category)
                    <option value="{{$category->id}}" @if($product->category_id == $category->id) selected="selected" @endif>{{$category->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
</form>