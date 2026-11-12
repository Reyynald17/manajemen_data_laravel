<form action="{{ route('buku.update', $buku->id) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="judul" value="{{ $buku->judul }}">

    <select name="kategori_id">
        @foreach ($kategori as $row)
            <option value="{{ $row->id }}" {{ ($row->id == $buku->kategori_id) ? 'selected' : '' }}>
                {{ $row->nama_kategori }}
            </option>
        @endforeach
    </select>
    <button type="submit" class="tombol">Update</button>
</form>
