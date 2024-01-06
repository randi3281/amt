<div class="row mt-4 justify-content-center">
    <div class="col-md-11">
        <h5>Buat Tugas</h5>
        <hr>
        <div class="row">
            <div class="col-md-5">
                <form action="">
                    <div class="form-group">
                        <label for="matakuliah">Mata Kuliah</label>
                        <select class="form-control" id="matakuliah">
                            <option>Matematika Diskrit</option>
                            <option>Algoritma dan Struktur Data</option>
                            <option>Struktur Diskrit</option>
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <label for="kelas">Kelas</label>
                        <input type="text" class="form-control" id="judul" placeholder="Kelas">
                    </div>
                    <div class="form-group mt-2">
                        <label for="judul">Judul Tugas</label>
                        <input type="text" class="form-control" id="judul" placeholder="Judul Tugas">
                    </div>
            </div>
            <div class="col-md-7">
                <div class="form-group mt-2">
                    <label for="deskripsi">Deskripsi Tugas</label>
                    <textarea class="form-control" id="deskripsi" rows="3"></textarea>
                </div>
                <div class="form-group mt-2">
                    <label for="deadline">Deadline</label>
                    <input type="date" class="form-control" id="deadline">
                </div>
                <div class="row justify-content-center">

                    <input type="submit" class="btn btn-success mt-3 w-50" value="Buat">
                </div>
                </form>
            </div>
        </div>


        <h5 class="mt-5">Daftar Tugas</h5>
        <hr>
        <table class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th scope="col">No.</th>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Judul Tugas</th>
                    <th scope="col">Deskripsi Tugas</th>
                    <th scope="col">Deadline</th>
                    <th scope="col" style="width: 125px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Matematika Diskrit</td>
                    <td>IF-43-01</td>
                    <td>UAS</td>
                    <td>UAS Matematika Diskrit</td>
                    <td>20 Desember 2021</td>
                    <td>
                        <a href="" class="btn btn-sm btn-success">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Algoritma dan Struktur Data</td>
                    <td>IF-43-01</td>
                    <td>UAS</td>
                    <td>UAS Algoritma dan Struktur Data</td>
                    <td>20 Desember 2021</td>
                    <td>
                        <a href="" class="btn btn-sm btn-success">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Struktur Diskrit</td>
                    <td>IF-43-01</td>
                    <td>UAS</td>
                    <td>UAS Struktur Diskrit</td>
                    <td>20 Desember 2021</td>
                    <td>
                        <a href="" class="btn btn-sm btn-success">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
