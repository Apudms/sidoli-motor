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
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Kategori</th>
                                    <th>Slug</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td>
                                        <a
                                            href="{{ route('admin.ubahkategori', ['category_slug' => $category->slug]) }}"><i
                                                class="fa fa-edit fa-2x"></i>
                                        </a>
                                        <a
                                            href="{{ route('admin.ubahkategori', ['category_slug' => $category->slug]) }}"><i
                                                class="fa fa-trash fa-2x"></i>
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