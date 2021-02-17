<div class="form-group {{$topclass}}">
    <label for="{{$id}}">{{$label}}</label>
    <input type="text" class="{{$inputclass}} form-control datetimepicker-input @error($name) is-invalid @enderror"
    name="{{$name}}" id="{{$id}}"
    data-toggle="datetimepicker" data-target="#{{$id}}"
    placeholder="{{$placeholder}}" value="{{$value}}"
    {{($required) ? 'required' : '' }}
    {{($disabled) ? 'disabled' : '' }}
    {{$attributes}}/>

    @error($name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

@section('js')
    @parent
    <script>
    $(()=>{
        // $.fn.datetimepicker.Constructor.Default = $.extend({}, $.fn.datetimepicker.Constructor.Default, { icons: { time: 'fas fa-clock', date: 'fas fa-calendar', up: 'fas fa-arrow-up', down: 'fas fa-arrow-down', previous: 'fas fa-caret-left', next: 'fas fa-caret-right', today: 'far fa-calendar-check-o', clear: 'far fa-trash', close: 'far fa-times' } });
        $('#{{$id}}').datetimepicker({
            format: '{{$format}}',
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                previous: "fa fa-chevron-left",
                next: "fa fa-chevron-right",
                today: "fa fa-clock-o",
                clear: "fa fa-trash-o"
            }
        });
    })
    </script>
@endsection
