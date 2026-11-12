@include('layout.header')
<h3>Detail Penerbit</h3>
<p><strong>ID:</strong> {{ $penerbit->id }}</p>
<p><strong>Nama Penerbit:</strong> {{ $penerbit->nama_penerbit }}</p>
<div>
    <a href="{{ route('penerbit.index') }}" class="tombol">Kembali</a>
    <a href="{{ route('penerbit.edit', $penerbit->id) }}" class="tombol">Edit</a>
</div>
@include('layout.footer')
