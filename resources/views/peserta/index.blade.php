@extends('app')
@section('content')
                <div align="right" class="mb-3">
                    <a href="{{ url('create') }}" class="btn btn-primary">Tambah Peserta</a>
                    {{-- kalo url menggunakan /
                    sedangkan route menggunakan . --}}
                </div>
                <table class="table table-bordered">
                    {{-- ini get --}}
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pesertas as $index => $value)
                            <tr>
                                <td>{{ $index += 1 }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->age }}</td>
                                <td>Edit | Delete</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

@endsection
