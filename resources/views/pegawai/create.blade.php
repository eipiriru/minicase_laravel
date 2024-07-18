
@extends('layout')

@section('konten')
        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card mt-5">
                            <div class="card-body">
                                <h3 class="text-center">Tambah Data Pegawai</h3>
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
                                <form action="{{ route('pegawai.create') }}" method="post" enctype="multipart/form-data" id="formDropzone" class="dropzone">
                                    {{ csrf_field() }}
    
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                                    </div>
                                    <div>
                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                        <input class="form-control" type="text" name="tgl_lahir" value="" />
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaan">pekerjaan</label>
                                        <input class="form-control" type="text" name="pekerjaan" value="{{ old('pekerjaan') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input class="form-control" type="text" name="alamat" value="{{ old('alamat') }}">
                                    </div>
                                    <div class="">
                                        <label for="department">Department</label>
                                        <select class="js-example-basic-single" name="department">
                                            <option value="IT">Department IT</option>
                                            <option value="RP">Department Financial</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input class="btn btn-primary" type="submit" value="Proses">
                                    </div>
                                </form>
    
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    $(document).ready(function() {
                        $('.js-example-basic-single').select2();
                    });

                    $(function() {
                        $('input[name="tgl_lahir"]').daterangepicker({                            
                            singleDatePicker: true,
                            showDropdowns: true,
                            minYear: 1901,
                            maxYear: parseInt(moment().format('YYYY'),10)
                        });
                    });

                </script>
@endsection