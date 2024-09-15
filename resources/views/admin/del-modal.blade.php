<!-- Modal -->
<div class="modal fade" id="delModal-{{$value->id}}" tabindex="-1" aria-labelledby="delModal-Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="delModal-Label">Delete Confirmation</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div class="modal-body">
                Are You Really want to delete this item ??
            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="confirmDelete({{ $value->id }})">Yes</button>
        </div>
      </div>
    </div>
  </div>
