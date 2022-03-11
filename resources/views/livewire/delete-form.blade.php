<div>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Product</h5>
                <button type="button" class="close" wire:click="closeModal"><span>&times;</span>
                </button>
            </div>
            <input type="hidden" wire:model="modalId">
            <div class="modal-body">
                <div class="form-row">
                    <button type="button" wire:click="closeModal" class="btn btn-danger light" data-dismiss="modal" id="closeModal">Close</button>
                    <button type="button" wire:click="delete" class="btn btn-primary" form="inputForm">Delete</button>
                </div>
                <div class="form-row">
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
