<div class="modal fade modal-danger" id="modal-delete-confirmation" tabindex="-1" role="dialog" aria-labelledby="delete-confirmation-title" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="delete-confirmation-title">Title</h4>
            </div>
            <div class="modal-body">
                Test Message
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline btn-flat" data-dismiss="modal"> cancel</button>
                <form class="pull-left">
                    <button type="submit" class="btn btn-outline btn-flat"><i class="fa fa-trash"></i> Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $( document ).ready(function() {
        $('#modal-delete-confirmation').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var actionTarget = button.data('action-target');
            var modal = $(this);
            modal.find('form').attr('action', actionTarget);
        });
    });
</script>
