<form action="/process" method="POST">
    @csrf
    <input type="text" name="text" placeholder="Masukkan teks" value="{{ $text ?? '' }}">
    <input type="number" name="shift" placeholder="Shift (Key)" value="{{ $shift ?? 0 }}">
    
    <select name="action">
        <option value="encrypt">Enkripsi</option>
        <option value="decrypt">Dekripsi</option>
    </select>
    
    <button type="submit">Proses</button>
</form>

@if(isset($result))
    <h3>Hasil: {{ $result }}</h3>
@endif