
var url = "";
var edit_url = "{{ route($route.'.edit', ':ID:') }}";
var delete_url = '{{ Form::open(array("route" => array($route.".destroy", ":ID:"), "method" => "delete")) }}' +
'<button type="submit" class="btn btn-danger btn-xs" title="{{ trans('general.action.delete')}}" onclick="return delete_confirm()"><i class="fa fa-minus-circle" aria-hidden="true"></i></button>' +
'{{ Form::close() }}';

edit_url = edit_url.replace(':ID:', data.id);
delete_url = delete_url.replace(':ID:', data.id);
url += delete_url;
url += '<a href="' + edit_url + '" class="btn btn-success btn-xs" title="{{ trans('general.action.edit')}}"><i class="fas fa-edit" aria-hidden="true"></i></a>';

return url;