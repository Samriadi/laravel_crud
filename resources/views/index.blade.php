<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    </br>
		<div class="card">
			<div class="card-body">
                <div class="form-group">
                        <h3>Data Mahasiswa</h3>
                        <form action="/cari"" method="GET" class="row g-3">
                            <div class="col-auto">
                                <input class="form-control" type="text" name="cari" placeholder="Cari Mahasiswa .." value="{{ old('cari') }}">
                            </div>
                            <div class="col-auto">
                                <input class="btn btn-primary ml-3" type="submit" value="Cari">
                            </div>
                        </form>
                    </div>
                    </br>
                <a class="btn btn-success" href="tambah" role="button">Tambah</a>
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Nim</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mahasiswa as $p)
                    <tr>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->nim }}</td>
                        <td>{{ $p->jurusan }}</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="/edit/{{ $p->id }}">Edit</a>
                            <a class="btn btn-danger btn-sm" href="/hapus/{{ $p->id }}">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>