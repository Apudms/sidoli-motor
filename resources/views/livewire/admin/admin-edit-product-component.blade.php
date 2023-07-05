<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Ubah Produk
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.produk') }}" class="btn btn-success pull-right">Semua
                                    produk</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="updateProduct" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Nama Produk</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Nama Produk"
                                        wire:model="nama_produk" wire:keyup="generateslug" required>
                                    @error('nama_produk')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Slug</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Slug" disabled
                                        readonly wire:model="slug" required>
                                    @error('slug')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Harga Normal</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder=""
                                        wire:model="harga_normal" required>
                                    @error('harga_normal')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Harga Sebelum Diskon</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder=""
                                        wire:model="harga_diskon">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">SKU</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="SKU" wire:model="SKU">
                                    @error('SKU')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Status Stok</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="status_stok">
                                        <option value="Tersedia">Tersedia</option>
                                        <option value="Kosong">Kosong</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Fitur</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="fitur">
                                        <option value="0">Tidak</option>
                                        <option value="1">Ya</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Jumlah Stok</label>
                                <div class="col-md-4">
                                    <input type="number" class="form-control input-md" placeholder=""
                                        wire:model="jumlah_stok" required>
                                    @error('jumlah_stok')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Foto</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="newImage">
                                    @if ($newImage)
                                    <br>
                                    <img src="{{ $newImage->temporaryUrl() }}" width="120">
                                    @else
                                    <br>
                                    <img src="{{ asset('assets/images/products') }}/{{ $image }}" width="120">
                                    @endif
                                    @error('newImage')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Kategori</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="category_id">
                                        <option value="">Pilih Kategori</option>
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Deskripsi Singkat</label>
                                <div class="col-md-4">
                                    <textarea class="form-control input-md" placeholder="Deskripsi Singkat"
                                        wire:model="deskripsi_singkat"></textarea>
                                    @error('deskripsi_singkat')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Deskripsi</label>
                                <div class="col-md-4">
                                    <textarea rows="10" class="form-control input-md" placeholder="Deskripsi"
                                        wire:model="deskripsi"></textarea>
                                    @error('deskripsi')
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