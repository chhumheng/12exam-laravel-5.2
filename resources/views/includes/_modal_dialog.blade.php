<div id="modalDelete" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body"><p id="modalDeleteMessage"></p></div>
            <div class="modal-footer">
                {!! Form::open([
                    'method' => 'DELETE',
                    'id' => 'confirmDel',
                    'style'=>'display:inline-block',
                ]) !!}
                {!! Form::submit( trans('text_lang.yes'), ['class' => 'btn btn-success'] ) !!}
                {!! Form::close() !!}
                <button type="button" class="btn btn-danger" data-dismiss="modal">{{ trans('text_lang.no')}}</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
    $(document).ready(function() {
        $('.btndelete').click(function(e) {
            var href = $(this).attr('href');
            var message = $(this).attr('data-content');
            var title = $(this).attr('data-title');

            $('.modal-title').text(title);
            $('#modalDeleteMessage').text(message);
            $('#confirmDel').attr("action", href);
            $('#modalDelete').modal();
        });
    });
</script>