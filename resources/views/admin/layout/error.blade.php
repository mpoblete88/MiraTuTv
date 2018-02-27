@if ($errors->any())
    <script>
        @foreach ($errors->all() as $error)
        toastr.error('{!! $error !!}')
        @endforeach
    </script>
@endif