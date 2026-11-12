@include('layout.header')
<h3>Detail Buku</h3>
<p><strong>Judul:</strong> {{ $buku->judul }}</p>
<p><strong>Pengarang:</strong> {{ $buku->pengarang }}</p>
<p><strong>Tahun Terbit:</strong> {{ $buku->tahun_terbit }}</p>
<p><strong>Kategori:</strong> {{ $buku->kategori?->nama_kategori ?? '-' }}</p>
<p><strong>Penerbit:</strong> {{ $buku->penerbit?->nama_penerbit ?? '-' }}</p>
<div>
    <a href="{{ route('buku.index') }}" class="tombol">Kembali</a>
    <a href="{{ route('buku.edit', $buku->id) }}" class="tombol">Edit</a>
</div>
@include('layout.footer')
