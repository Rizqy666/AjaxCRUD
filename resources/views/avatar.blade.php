<form action="{{ route('avatar.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="avatar">Pilih Avatar</label>
        <input type="file" name="avatar" class="form-control-file" accept="image/*">
        @error('avatar')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
