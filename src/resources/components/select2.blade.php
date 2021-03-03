<div class="form-group {{$topclass}}">
    <label for="{{$id}}">{{$label}}</label>
    <div wire:ignore>
        <select class="form-control {{$inputclass}} @error($name) is-invalid @enderror"
            id="{{$id}}" name="{{$name}}" style="width:100%"
            {{($required) ? 'required' : '' }}
            {{($disabled) ? 'disabled' : '' }}
            {{($multiple) ? 'multiple' : '' }}>
            {{$slot}}
        </select>
    </div>


    @error(str_replace("[]","", $name))
        <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
    @enderror
</div>

@section('js')
    @parent
    <script>
        $(()=>{ $('#{{$id}}').select2(); })
    </script>
@endsection
