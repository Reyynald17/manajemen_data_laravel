@include('layout.header')
<h3>Edit Buku</h3>
<form action="{{ route('buku.update', $buku->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="judul">Judul Buku:</label>
        <input type="text" id="judul" name="judul" value="{{ old('judul', $buku->judul) }}" required>
    </div>
    <div class="form-group">
        <label for="pengarang">Pengarang:</label>
        <input type="text" id="pengarang" name="pengarang" value="{{ old('pengarang', $buku->pengarang) }}" required>
    </div>
    <div class="form-group">
        <label for="tahun_terbit">Tahun Terbit:</label>
        <input type="number" id="tahun_terbit" name="tahun_terbit" value="{{ old('tahun_terbit', $buku->tahun_terbit) }}" min="1900" max="2100" required>
    </div>
    <div class="form-group">
        <label for="kategori_id">Kategori:</label>
        <select id="kategori_id" name="kategori_id" required>
            @foreach ($kategori as $row)
                <option value="{{ $row->id }}" {{ old('kategori_id', $buku->kategori_id) == $row->id ? 'selected' : '' }}>
                    {{ $row->nama_kategori }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="penerbit_id">Penerbit:</label>
        <select id="penerbit_id" name="penerbit_id" required>
            @foreach ($penerbit as $row)
                <option value="{{ $row->id }}" {{ old('penerbit_id', $buku->penerbit_id) == $row->id ? 'selected' : '' }}>
                    {{ $row->nama_penerbit }}
                </option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="tombol">Update</button>
    <a href="{{ route('buku.index') }}" class="tombol">Kembali</a>
</form>
@include('layout.footer')
