@extends('admin.layouts.base')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
<style>
    body {
        background-color: #F7FAFC;
    }

</style>
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-2 nopadding">
            @include('admin.component.sidebar')
        </div>
        <div class="col-10 nopadding">
            @include('admin.component.header')

            <div class="container mt-4">
                {{-- alert --}}
                <div class="row">
                    <div class="col">
                        @if (session()->has('status'))
                        <div class="alert alert-success">
                            {{ session()->get('status') }}
                        </div>
                        @endif
                    </div>
                </div>
                {{-- Insight user --}}
                <div class="row justify-content-betwen gy-3">
                    <div class="col">
                        <div class=" d-flex bg-white align-items-center px-3 py-4 border-r-sedang h-100">
                            <i class="bi bi-people-fill fs-3 p-1 me-2 text-primary"></i>
                            <div>
                                <span class="text-secondary">Total User</span>
                                <span class="d-block fw-bold">{{ $users_total }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class=" d-flex bg-white align-items-center px-3 py-4 border-r-sedang h-100">
                            <i class="bi bi-calendar2 fs-3 p-1 me-2 text-primary"></i>
                            <div>
                                <span class="text-secondary">User Bulan Ini</span>
                                <span class="d-block fw-bold">{{ $users_month }}</span>
                            </div>
                        </div>
                    </div>
                    @foreach ($usersubs as $subscription)
                    <div class="col">
                        <div class=" d-flex bg-white align-items-center px-3 py-4 border-r-sedang h-100">
                            @if ($subscription->name == "Free User")
                            <i class="bi bi-person-check fs-3 p-1 me-2 text-primary"></i>
                            @endif
                            @if ($subscription->name == "User Sekali Bayar")
                            <i class="bi bi-currency-dollar fs-3 p-1 me-2 text-primary"></i>
                            @endif
                            @if ($subscription->name == "User Berlangganan")
                            <i class="bi bi-currency-exchange fs-3 p-1 me-2 text-primary"></i>
                            @endif
                            @if ($subscription->name == "Enterprise")
                            <i class="bi bi-building fs-3 p-1 me-2 text-primary"></i>
                            @endif
                            <div>
                                <span class="text-secondary">{{ $subscription->name }}</span>
                                <span class="d-block fw-bold">{{ $subscription->users->count() }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>


                <div class="row mt-3">
                    <div class="bg-white border-r-sedang">
                        <div class="body border-r-sedang">
                            <table class="table table-no-border-head align-middle">
                                <thead>
                                    <tr class="fw-bold">
                                        <td scope="col">Nama</td>
                                        <td scope="col">Email</td>
                                        <td scope="col">Role</td>
                                        <td scope="col">Subscription</td>
                                        <td scope="col" class="">Actions</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    @if ($user->role_id == 1)
                                    @php
                                    continue;
                                    @endphp
                                    @endif
                                    <tr>
                                        @if ($user->profile != null)
                                        <td>{{ $user->nama_lengkap }}</td>
                                        @else
                                        <td>{{ $user->nama_lengkap }}</td>
                                        @endif
                                        <td>{{ $user->email }}</td>
                                        @if ($user->role_id != null && $user->role != null)
                                        <td>{{ $user->role->name }}</td>
                                        @else
                                        <td>No Role Selected</td>
                                        @endif
                                        @if ( $user->subscription != null)
                                        <td>{{ $user->subscription->name }}</td>
                                        @else
                                        <td>-</td>
                                        @endif
                                        {{-- <td class="text-nowrap">
                            <a href="{{ route('admin.users.notify', $user->id) }}"
                                        class="btn btn-sm btn-success">Notify</a>
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                                            onsubmit="return confirm('Are you sure?');">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                        </form>
                                        </td> --}}
                                        <td scope="col" class="text-end pe-3">
                                            <a href="#" role="button" id="dropdown-manage-news"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots fs-3 text-secondary"></i>
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdown-manage-news">
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.users.profile', $user->id) }}">Show/update</a>
                                                </li>
                                                <li>
                                                    <form action="{{ route('admin.users.destroy', $user->id) }}"
                                                        method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="dropdown-item"
                                                            onclick="return confirm('Apakah kamu yakin ingin menghapus?')">Delete</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>


@endsection
