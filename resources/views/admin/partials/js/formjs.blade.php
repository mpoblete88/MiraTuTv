<script>

    {{--function deleteForm(e) {--}}

    {{--var name = $(e).data('name');--}}
    {{--var token = "{!! csrf_token() !!}";--}}
    {{--var url = $(e).data('url');--}}

    {{--var txt;--}}
    {{--var r = confirm("Desea eliminar el registro: " + name + "?");--}}
    {{--if (r == true) {--}}
    {{--$.ajax({--}}

    {{--url: url,--}}
    {{--type: 'post',--}}
    {{--data: {_method: 'delete', _token: token},--}}
    {{--success: function (response) {--}}

    {{--$(e).closest('tr').fadeOut();--}}
    {{--},--}}
    {{--error: function (response) {--}}

    {{--alert("Error");--}}
    {{--}--}}
    {{--});--}}
    {{--} else {--}}
    {{--txt = "Has cancelado la Eliminación!";--}}
    {{--alert(txt);--}}
    {{--}--}}
    {{--}--}}


    function deleteForm(e) {

        var name = $(e).data('name');
        var token = "{!! csrf_token() !!}";
        var url = $(e).data('url');

        var txt;

        alertify.confirm("Desea eliminar el registro: " + name + "?", function () {
            //user clicked "ok"
            $.ajax({

                url: url,
                type: 'post',
                data: {_method: 'delete', _token: token},
                success: function (response) {

                    if (e.closest('li') != null) {
                        $(e).closest('li').fadeOut().remove();
                    }

                    if (e.closest('tr') != null) {
                        $(e).closest('tr').fadeOut().remove();
                    }
                },
                error: function (response) {

                    alertify.alert("Error");
                }
            });
        }, function () {
            //user clicked "cancel"
            txt = "Has cancelado la Eliminación!";
            alertify.alert(txt);
        })
    }
</script>