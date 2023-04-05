@foreach ($metaValues as $key => $value)
    <div class="flex gap-1 items-center bg-slate-100">
        <label class="flex-auto w-20" for="{{ $key }}">{{ $value->label }}</label>
        <input class="flex-1" type="text" id="{{ $key }}" name="{{ $key }}" value="{{ esc_attr($value->value) }}">
    </div>
@endforeach
