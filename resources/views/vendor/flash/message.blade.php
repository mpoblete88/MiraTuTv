@foreach (session('flash_notification', collect())->toArray() as $message)

    <script>
        toastr.{{ $message['level'] }}(' {!! $message['message'] !!}')
    </script>


@endforeach

{{ session()->forget('flash_notification') }}
@include('admin.layout.error')