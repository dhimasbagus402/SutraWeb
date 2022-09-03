@extends('layouts.default2')
@section('content2')

        
                <main>
                    <div class="container-fluid px-4" style="margin-top: 30px;">
                        <h1 class="mt-4">User List</h1>
                        <ol class="breadcrumb mb-4">
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data User
                            </div>
                            <br>
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </div>
                            @endif
                            <div class="card-body">
                                <div class="pull-right">
                                    
                                </div>

                                <table id="datatablesSimple"> 
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>@sortablelink('name')</th>
                                        <th>@sortablelink('email')</th>
                                        <th>@sortablelink('type')</th>
                                        <th>@sortablelink('created_at')</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                    @if($users->count())
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td><img src="/storage/userimg/{{ $user->image }}" width="100px"></td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->type }}</td>
                                                <td>{{ $user->created_at->format('d-m-Y') }}</td>
                                                <td>
                                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">

                                                        <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}">Edit</a>

                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </table>

                                <div class="d-flex justify-content-center">
                                {!! $users->links('pages.paginator') !!}
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </main>
       

@stop