<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validation</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="my-3">Data Rekam Medis Pasien</h3>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Foto</td>
                                <td><img src="{{ $data->Foto }}" alt="" width="200px"></td>
                            </tr>
                            <tr>
                                <td style="width:150px">No Pendaftaran</td>
                                <td>{{ $data->No_Pendaftaran }}</td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>{{ $data->Nama }}</td>
                            </tr>
                            <tr>
                                <td>Tempat Lahir</td>
                                <td>{{ $data->Tempat_Lahir }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>{{ $data->Tanggal_Lahir}}</td>
                            </tr>
                            <tr>
                                <td>Alamat Tinggal</td>
                                <td>{{ $data->Alamat_Tinggal}}</td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>{{ $data->Pekerjaan}}</td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>{{ $data->Jenis_Kelamin}}</td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td>{{ $data->Agama}}</td>
                            </tr>
                            <tr>
                                <td>NIK</td>
                                <td>{{ $data->NIK }}</td>
                            </tr>
                            <tr>
                                <td>Golongan Darah</td>
                                <td>{{ $data->Golongan_Darah}}</td>
                            </tr>
                            <tr>
                                <td>No Hp</td>
                                <td>{{ $data->No_Hp}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $data->email}}</td>
                            </tr>
                            <tr>
                                <td>Klinik</td>
                                <td>{{ $data->Klinik}}</td>
                            </tr>
                        </table>

                        <a href="register" class="btn btn-primary">Kembali</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html> 