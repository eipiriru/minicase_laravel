@extends('layout')
@section('konten')
                <div class="container">
                    <div class="card mt-5">
                        <div class="card-header text-center">
                            <h1>List Pegawai</h1>
                        </div>
                        <div class="card-body">
                            <a href="/pegawai/create" class="btn btn-primary">Tambah Data Pegawai</a>
                            <br/>
                            <br/>
                            <table id="myTable" class="table table-bordered table-hover table-striped display">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Pekerjaan</th>
                                        <th>Alamat</th>
                                        <th>Country</th>
                                        <th>Tanggal Lahir</th>
                                        <th>OPSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pegawai as $p)
                                    <tr>
                                        <td>{{ $p->name }}</td>
                                        <td>{{ $p->pekerjaan }}</td>
                                        <td>{{ $p->alamat }}</td>
                                        <td>{{ $p->country }}</td>
                                        <td>{{ date('d-m-Y', strtotime($p->tgl_lahir)) }}</td>
                                        <td>
                                            <a href="/pegawai/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                            <a href="/pegawai/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
@endsection

                