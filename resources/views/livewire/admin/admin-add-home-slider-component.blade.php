<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Tambah Slider Baru
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.slider') }}" class="btn btn-success pull-right">Semua
                                    Slider</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="storeSlide" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Nama Slider</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Nama Slider"
                                        wire:model="nama_slider" required>
                                    @error('nama_slider')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Foto</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="foto" required>
                                    @if ($foto)
                                    <br>
                                    <img src="{{ $foto->temporaryUrl() }}" alt="" width="120">
                                    @endif
                                    @error('foto')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Status</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="status">
                                        <option value="0">Nonaktif</option>
                                        <option value="1">Aktif</option>
                                    </select>
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