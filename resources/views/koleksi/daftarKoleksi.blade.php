<x-app-layout>

// Aruno Bagaskoro(6706223143) //

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Koleksi') }}
        </h2>
    </x-slot>

@section('content')
<div class="container">
    <div class="card dark:bg-gray-800 text-white">
        <div class="">
        </div>
        <div class="flex justify-end card-header text-white dark:bg-gray-700">
            <a  href="{{ route('koleksi.registrasi') }}">Registrasi Koleksi</a>
        </div>
        <div class="card-body">
            {{ $dataTable->table() }}
        </div>
    </div>  
</div>
@endsection

@push('scripts')
{{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
</x-app-layout>


