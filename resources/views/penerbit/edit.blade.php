@include('layout.header')
<h3>Edit Penerbit</h3>
<form action="{{ route('penerbit.update', $penerbit->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nama_penerbit">Nama Penerbit:</label>
        <input type="text" id="nama_penerbit" name="nama_penerbit" value="{{ old('nama_penerbit', $penerbit->nama_penerbit) }}" required>
    </div>
    <button type="submit" class="tombol">Update</button>
    <a href="{{ route('penerbit.index') }}" class="tombol">Kembali</a>
</form>
@include('layout.footer')
