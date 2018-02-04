
    @if($selected!=null)
        {!! Form::select($name, $options, $selected, array_merge(['name' => $name , 'id' => $name, 'class' => 'active form-control select2'], $attributes)) !!}
    @else
        {!! Form::select($name, $options, $selected, array_merge(['name' => $name , 'id' => $tag ? substr($name,0,-2) : $name ,'class' => 'form-control select2'], $attributes)) !!}

    @endif
    <div class="error_{{$name}} errorMessage"></div>
