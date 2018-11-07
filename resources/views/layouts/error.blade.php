@if ($errors->any())
    <div class="flex items-center mb-2 bg-red text-white text-sm font-bold px-4 py-3" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif