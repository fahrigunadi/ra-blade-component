@push('modal')
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <form class="modal-content" method="post" action="#">
                @method('DELETE')
                @csrf
                <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">
                    <i class="fas fa-trash"></i> Delete
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    Are you sure it will be deleted?
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Yes, Delete</button>
                </div>
            </form>
        </div>
    </div>
@endpush

@push('js')
    <script>
        $(function(){
            $('#deleteModal').on('show.bs.modal', function (event) {
                let button = $(event.relatedTarget)
                let recipient = button.data('link')
                let modal = $(this)
                modal.find('.modal-content').attr('action', recipient)
            })
        });
    </script>
@endpush
