<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Ubah Kategori
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.kategori') }}" class="btn btn-success pull-right">Semua
                                    Kategori</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="updateCategory">
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Nama Kategori</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Nama Kategori"
                                        wire:model="nama_kategori" wire:keyup="generateslug" required>
                                    @error('nama_kategori')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Slug Kategori</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Slug Kategori"
                                        disabled readonly wire:model="slug" required>
                                    @error('slug')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>