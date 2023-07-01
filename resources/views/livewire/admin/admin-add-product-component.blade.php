<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Tambah Produk Baru
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.produk') }}" class="btn btn-success pull-right">Semua
                                    Produk</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="storeProduct" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Nama Produk</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Nama Produk"
                                        wire:model="nama_produk" wire:keyup="generateslug">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Slug</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Slug" disabled
                                        readonly wire:model="slug">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Harga Normal</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder=""
                                        wire:model="harga_normal">
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
                                    <select class="form-control" wire:model="featured">
                                        <option value="0">Tidak</option>
                                        <option value="1">Ya</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Jumlah Stok</label>
                                <div class="col-md-4">
                                    <input type="number" class="form-control input-md" placeholder=""
                                        wire:model="jumlah_stok">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Foto</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="image">
                                    @if ($image)
                                    <div class="col col-md-12 mt-5"><img src="{{ $image->temporaryUrl() }}" alt=""
                                            width="120">
                                    </div>
                                    @endif
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
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Deskripsi Singkat</label>
                                <div class="col-md-4">
                                    <textarea class="form-control input-md" placeholder="Deskripsi Singkat"
                                        wire:model="deskripsi_singkat"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Deskripsi</label>
                                <div class="col-md-4">
                                    <textarea rows="10" class="form-control input-md" placeholder="Deskripsi"
                                        wire:model="deskripsi"></textarea>
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