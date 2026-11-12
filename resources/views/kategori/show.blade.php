@include('layout.header')
<h3>Detail Kategori</h3>
<p><strong>ID:</strong> {{ $kategori->id }}</p>
<p><strong>Nama Kategori:</strong> {{ $kategori->nama_kategori }}</p>
<div>
    <a href="{{ route('kategori.index') }}" class="tombol">Kembali</a>
    <a href="{{ route('kategori.edit', $kategori->id) }}" class="tombol">Edit</a>
</div>
@include('layout.footer')
