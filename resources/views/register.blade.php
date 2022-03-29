<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rumah Sakit Cepat Sehat</title>
 
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
 
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h2 class="text-center" style="font-weight: bold">Selamat Datang!</h2>
                            <h5 class="text-center" style="font-weight: bold">Masukkan data anda dengan teliti dan benar</h5>
                            <br/>

 
                            <br/>
                             <!-- form validasi -->
                             <form action="/proses" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="Foto">Foto</label>
                                    <input type="file" class="form-control-file" id="Foto" name="Foto" accept="image/png, image/jpg, image/jpeg">
                                </div>
                            <form action="/proses" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="Suhu">Suhu Pasien</label>
                                    <input class="form-control" type="text" name="Suhu" value="{{ old('Suhu') }}">
                                    @error('Suhu')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <br/>
                            <div class="form-group">
                                <label for="Kondisi">Kondisi Kesehatan Pasien</label>
                                <input class="form-control" type="text" name="Kondisi" value="{{ old('Kondisi') }}">
                                @error('Kondisi')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <br/>
                                <div class="form-group">
                                    <label for="No_Pendaftaran">No. Pendaftaran</label>
                                    <input class="form-control" type="text" name="No_Pendaftaran" value="{{ old('No_Pendafatran') }}">
                                    @error('No_Pendaftaran')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Nama">Nama Lengkap</label>
                                    <input class="form-control" type="text" name="Nama" value="{{ old('Nama') }}">
                                    @error('Nama Lengkap')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror 
                                </div>
                                <div class="form-group">
                                    <label for="Tempat_Lahir">Tempat Lahir</label>
                                    <input class="form-control" type="text" name="Tempat_Lahir" value="{{ old('Tempat_Lahir') }}">
                                    @error('Tempat_Lahir')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Tanggal_Lahir">Tanggal Lahir</label>
                                    <input class="form-control" type="date" name="Tanggal_Lahir" value="{{ old('Tanggal_Lahir') }}">
                                    @error('Tanggal_Lahir')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror    
                                </div>
                                <div class="form-group">
                                    <label for="Alamat_Tinggal">Alamat Tinggal</label>
                                    <input class="form-control" type="text" name="Alamat_Tinggal" value="{{ old('Alamat_Tinggal') }}">
                                    @error('Alamat_Tinggal')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror 
                                </div>
                                <div class="form-group">
                                    <label for="Pekerjaan">Pekerjaan</label>
                                    <input class="form-control" type="text" name="Pekerjaan" value="{{ old('Pekerjaan') }}">
                                    @error('Pekerjaan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror    
                                </div>
                                <div class="form-group">
                                    <label for="Jenis_Kelamin">Jenis Kelamin</label>
                                    <br>
                                    <input type="radio" value="Laki-laki" id="Laki-laki" name="Jenis_Kelamin">
                                    <label for="Laki-laki">Laki-laki</label>
                                    <input type="radio" value="Perempuan" id="Perempuan" name="Jenis_Kelamin">
                                    <label for="Perempuan">Perempuan</label> 
                                    @error('Jenis_Kelamin')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                                </div>    
                                <div class="form-group">
                                    <label for="Agama">Agama</label>
                                    <br>
                                    <select name="Agama" id="Agama">
                                    <option>--Pilih Agama--</option>
                                    <option value="islam">Islam</option>
                                    <option value="katolik">Katolik</option>
                                    <option value="protestan">Kristen Protestan</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="buddha">Buddha</option>
                                    <option value="konghucu">Konghucu</option>
                                    </select>
                                    @error('Agama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror 
                                </div>
                                <div class="form-group">
                                    <label for="NIK">NIK</label>
                                    <input class="form-control" type="text" name="NIK" value="{{ old('NIK') }}">
                                    @error('NIK')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Golongan_Darah">Golongan Darah</label>
                                    <br>
                                    <select name="Golongan_Darah" id="Golongan_Darah">
                                    <option>--Pilih Golongan Darah--</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                    </select>
                                    @error('Golongan_Darah')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror 
                                </div>
                                <div class="form-group">
                                    <label for="No_Hp">No. HP</label>
                                    <input class="form-control" type="text" name="No_Hp" value="{{ old('No_Hp') }}">
                                    @error('No_Hp')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input class="form-control" type="text" name="email" value="{{ old('email') }}">
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror   
                                </div>    
                                <div class="form-group">
                                    <label for="Klinik">Klinik</label>
                                    <br>
                                    <select name="Klinik" id="Klinik">
                                    <option>--Pilih Klinik--</option>
                                    <option value="Umum">Umum</option>
                                    <option value="Anak">Anak</option>
                                    <option value="Penyakit_Dalam">Penyakit Dalam</option>
                                    <option value="Obsgyn">Obsgyn</option>
                                    <option value="Gigi_dan_Mulut">Gigi dan Mulut</option>
                                    <option value="THT">THT</option>
                                    <option value="Syaraf">Syaraf</option>
                                    <option value="Jiwa">Jiwa</option>
                                    <option value="Mata">Mata</option>
                                    <option value="Bedah_Umum">Bedah Umum</option>
                                    <option value="Bedah_Orthopedi">Bedah Orthopedi</option>
                                    <option value="Kulit_dan_Kelamin">Kulit dan Kelamin</option>
                                    </select>
                                    @error('Agama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror 
                            <br/>
                                <br>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1" >Dengan ini, saya menyetujui bahwa data yang saya isi telah benar!</label>
                                </div>
                                </div>
                                <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Proses">
                                </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>