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
    <div class="container-sm">
    </br>
		<div class="card">
			<div class="card-body">
                <div class="form-group">
                    <h4>Edit Mahasiswa</h4>
	                @foreach($mahasiswa as $p)
                    <form action="/update" method="post">
                    {{ csrf_field() }}
		                <input type="hidden" name="id" value="{{ $p->id }}"> <br/>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="{{ $p->nama }}">
                        </div>
                        <div class="mb-3">
                            <label for="nim" class="form-label">Nim</label>
                            <input type="text" class="form-control" name="nim" id="nim" value="{{ $p->nim }}">
                        </div>
                        <div class="mb-3">
                            <label for="Jurusan" class="form-label">Jurusan</label>
                            <input type="text" class="form-control" name="jurusan" id="jurusan" value="{{ $p->jurusan }}">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Simpan Data">
                    </form>
	                @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
</html>