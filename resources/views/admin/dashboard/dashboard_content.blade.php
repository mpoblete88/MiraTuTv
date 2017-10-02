@if($maintenance->status == 'false')
    <div class="alert alert-info" role="alert">
        <strong>Mantención Inactiva:</strong> Si quieres activar la Mantención ve a la configuración de Sistema.
    </div>
@else
    <div class="alert alert-danger" role="alert">
        <strong>Mantención Activa</strong>
        Verifique el Estado de la Mantención
        <a href="{{route('admin_maintenance_edit',$maintenance->id)}}" class="alert-link">Editar </a>

    </div>
@endif

@if($articleDate == date("d-m-Y"))
    <div class="alert alert-info" role="alert">
        <strong>Estado Comunidad: </strong>Hoy publicaste un artículo!
    </div>
@else
    <div class="alert alert-danger" role="alert">
        <strong>Estado Comunidad:</strong>
        Hoy no has publicado ningún Artículo, la última vez publicaste un Artículo llamado: {{$lastArticle->title}},
        el día: {{$articleDate}}
        <a href="{{route('admin.articles.create')}}" class="alert-link">Publicar </a>
    </div>

@endif