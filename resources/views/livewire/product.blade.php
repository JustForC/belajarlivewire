<div>
    <div class="modal fade" id="basicModal">
        <livewire:create-form></livewire:create-form>
    </div>

    <div class="modal fade" id="updateModal">
        <livewire:update-form></livewire:update-form>
    </div>

    <div class="modal fade" id="deleteModal">
        <livewire:delete-form></livewire:delete-form>
    </div>
    
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, welcome back!</h4>
                        <p class="mb-0">Your business dashboard template</p>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
                    </ol>
                </div>
            </div>
    
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Basic Datatable</h4>
                            <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#basicModal">Tambah Produk</button>
                        </div>
                        <livewire:table></livewire:table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
