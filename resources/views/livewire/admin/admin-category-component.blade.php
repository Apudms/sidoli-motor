<div>
    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Semua Kategori
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.tambahkategori') }}" class="btn btn-success pull-right">Tambah
                                    Kategori</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Kategori</th>
                                    <th>Slug</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->nama_kategori }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td>
                                        <a href="{{ route('admin.ubahkategori', ['id' => $category->id]) }}"><i
                                                class="fa fa-edit fa-2x"></i>
                                        </a>
                                        <a href="#" style="margin-left:10px;"
                                            onclick="confirm('Yakin ingin menghapus {{ $category->nama_kategori }}?') || event.stopImmediatePropragation()"
                                            wire:click.prevent="deleteCategory('{{ $category->id }}')"><i
                                                class="fa fa-trash fa-2x text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>