@extends('layouts.public')

@section('content')
    <main class="h-screen w-screen bg-slate-900 text-slate-100">
        <section class="container p-24 mx-auto">
            <h1 class="text-4xl">Getting started</h1>
            <div class="flex gap-2 items-center">
                <p class="my-3">You can edit this page in</p>

                <a href="{{ $editorUrl }}"
                    class="inline-flex h-6 rounded-full bg-gradient-to-r from-sky-400/30 via-sky-400 to-sky-400/30 p-px font-medium text-sky-300">
                    <div class="flex items-center rounded-full px-2.5 bg-slate-800">resources/views/index.blade.php</div>
                </a>
            </div>
        </section>
    </main>
@endsection
