@include('layout.header')
<h3>Tambah Penerbit</h3>
<form action="{{ route('penerbit.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama_penerbit">Nama Penerbit:</label>
        <input type="text" id="nama_penerbit" name="nama_penerbit" value="{{ old('nama_penerbit') }}" required>
    </div>
    <button type="submit" class="tombol">Simpan</button>
    <a href="{{ route('penerbit.index') }}" class="tombol">Kembali</a>
</form>
@include('layout.footer')
