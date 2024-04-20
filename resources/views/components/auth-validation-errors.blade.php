@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <ul class="mt-b list-none text-sm space-y-2">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
