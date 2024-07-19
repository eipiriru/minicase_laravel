@extends('layout')
@section('konten')
                <div class="container">
                    <div class="card mt-5">
                        <div class="card-header text-center">
                            List Document
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
                                        <th>OPSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($document as $p)
                                    <tr>
                                        <td>{{ $p->name }}</td>
                                        <td>{{ $p->pegawai_id }}</td>
                                        <td>{{ $p->mime }}</td>
                                        <td><img src="data:image/jpeg;base64,{{ $p->file }}" width="100px"/></td>
                                        <td>
                                            <a href="/document/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
@endsection

                