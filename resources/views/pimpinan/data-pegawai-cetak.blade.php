<h1 align="center">DATA PEGAWAI</h1>

<table>
    <tbody>
    <tr>
        <td>ID</td>
        <td>: {{ $model->id }}</td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>: {{ $model->nama }}</td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td>: {{ $model->tanggal_lahir }}</td>
    </tr>
    <tr>
        <td>Kelamin</td>
        <td>: {{ $model->kelamin }}</td>
    </tr>
    <tr>
        <td>No. HP</td>
        <td>: {{ $model->no_hp }}</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>: {{ $model->alamat }}</td>
    </tr>
    <tr>
        <td>Daerah</td>
        <td>: {{ $dataCV->daerah }}</td>
    </tr>
    <tr>
        <td>Nama CV</td>
        <td>: {{ $dataCV->nama_cv }}</td>
    </tr>
    <tr>
        <td>Rekening</td>
        <td>: {{ $model->no_rekening }}</td>
    </tr>
    </tbody>
</table>

<script>
    print();
</script>