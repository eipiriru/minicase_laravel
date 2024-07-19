@extends('layout')

@section('konten')
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card mt-5">
                            <div class="card-body">
                                <h3 class="text-center">Edit Data Pegawai</h3>
                                <a href="/" class="btn btn-primary">Kembali</a>
                                <br/>
    
                                {{-- menampilkan error validasi --}}
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
    
                                <br/>
                                <!-- form validasi -->
                                <form action="/pegawai/edit/update/{{ $pegawai->id }}" method="post">
                                    {{ csrf_field() }}
    
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input class="form-control" type="text" name="name" value="{{ $pegawai->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <input class="form-control" type="text" name="pekerjaan" value="{{ $pegawai->pekerjaan }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input class="form-control" type="text" name="alamat" value="{{ $pegawai->alamat }}">
                                    </div>
                                    <div class="col-md-5">
                                        <label for="country" class="form-label">Country</label>
                                        <select class="form-select" id="country" required>
                                            <option value="United States">United States</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Singapore">Singapore</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid country.
                                        </div>
                                    </div>
                                    @foreach($pegawai->documents as $doc)
                                        <img src="data:image/jpeg;base64,{{ $doc->file }}" width="100px"/>
                                    @endforeach
                                    <div class="form-group">
                                        <input class="btn btn-primary" type="submit" value="Update">
                                    </div>
                                </form>
    
                            </div>
                        </div>
                    </div>
                </div>
@endsection