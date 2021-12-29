@extends('layouts.app')

@section('content')
    <div class="flex justify-center">

        <div class="w-8/12 bg-white p-6 rounded-lg">

            @if ($users->count())
                @foreach ($users as $user)
                    <x-user :user="$user" />
                @endforeach

                {{ $users->links() }}
            @else
                <p>There are no users</p>
            @endif
        </div>

    </div>
@endsection