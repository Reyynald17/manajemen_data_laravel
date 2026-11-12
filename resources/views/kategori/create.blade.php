@include('layout.header')
<h3>Tambah Kategori</h3>
<form action="{{ route('kategori.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama_kategori">Nama Kategori:</label>
        <input type="text" id="nama_kategori" name="nama_kategori" value="{{ old('nama_kategori') }}" required>
    </div>
    <button type="submit" class="tombol">Simpan</button>
    <a href="{{ route('kategori.index') }}" class="tombol">Kembali</a>
</form>
@include('layout.footer')
