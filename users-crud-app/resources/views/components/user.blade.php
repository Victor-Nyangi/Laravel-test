@props(['user' => $user])


<div>
    @auth
        @if (!$user->role_id == 1)
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            Id
                        </th>
                        <td>
                            {{ $user->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Name
                        </th>
                        <td>
                            {{ $user->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Email
                        </th>
                        <td>
                        {{ $user->email ?? ''}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Phone Number
                        </th>
                        <td>
                        {{ $user->phone_number ?? ''}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Created at
                        </th>
                        <td>
                        {{ $user->created_at->diffForHumans() }}
                        </td>
                    </tr>
                </tbody>
            </table>
        @else
            <div class="flex justify-center"><p class="text-red-500 mt-2 text-sm">No access</p></div>
        @endif
    @endauth
</div>