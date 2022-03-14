<div>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Product</h5>
                <button type="button" class="close" wire:click="closeModal"><span>&times;</span>
                </button>
            </div>
            <input type="hidden" wire:model="modalId">
            <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <img src="{{asset($path)}}" alt="" class="img-fluid mt-4 mb-4 w-100">
                    </div>
                    <input wire:model="path" type="hidden">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Foto Produk</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input wire:model="image" type="file" class="custom-file-input" name="image">
                                <label class="custom-file-label"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Nama Produk</label>
                        <input wire:model="name" type="text" class="form-control form-control-sm" name="name" placeholder="Nama Produk">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Harga</label>
                        <input wire:model="price" type="number" class="form-control form-control-sm" name="price" placeholder="Harga Produk">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Kategori</label>
                        <select wire:model="categoryId" class="form-control default-select" id="sel1" name="category">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" @if($categoryId == $category->id) selected="selected" @endif>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click="closeModal" class="btn btn-danger light" data-dismiss="modal" id="closeModal">Close</button>
                <button type="button" wire:click="save" class="btn btn-primary" form="inputForm">Save changes</button>
            </div>
        </div>
    </div>
</div>
