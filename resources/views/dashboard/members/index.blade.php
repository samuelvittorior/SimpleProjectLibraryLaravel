@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Daftar Member</h1>
</div>

  @if(session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
  @endif
<div class="table-responsive col-lg-8">
    <a href="members/create" class="btn btn-primary mb-3">Add New Member</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Tgl Lahir</th>
          <th scope="col">No Telp</th>
          <th scope="col">Alamat</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($members as $member)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $member->nama }}</td>
          <td>{{ $member->tgl_lahir }}</td>
          <td>{{ $member->no_telp }}</td>
          <td>{{ $member->alamat }}</td>
          <td>
            <a href="{{ url("/dashboard/posts/$post->slug") }}" class="badge bg-info"><span data-feather="eye"></span></a>
            <a href="{{ url("/dashboard/posts/$post->slug/edit") }}" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="{{ url("/dashboard/posts/$post->slug") }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>

@endsection