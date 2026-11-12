<form action="{{ route('buku.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label>Judul Buku:</label>
        <input type="text" name="judul" placeholder="Masukkan judul buku">
    </div>
    <div class="form-group">
        <label>Penerbit:</label>
        <select name="penerbit_id">
            @foreach ($penerbit as $row)
                <option value="{{ $row->id }}">{{ $row->nama_penerbit }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Kategori:</label>
        <select name="kategori_id">
            @foreach ($kategori as $row)
                <option value="{{ $row->id }}">{{ $row->nama_kategori }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="tombol">Submit</button>
</form>