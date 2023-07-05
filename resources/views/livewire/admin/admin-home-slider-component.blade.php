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
                                Manajemen Slider
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.tambahslider') }}" class="btn btn-success pull-right">Tambah
                                    Slider</a>
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
                                    <th>Foto</th>
                                    <th>Nama Slider</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $slider)
                                <tr>
                                    <td>{{ $slider->id }}</td>
                                    <td><img src="{{ asset('assets/images/sliders') }}/{{ $slider->foto }}" width="120"
                                            alt="{{ $slider->nama_slider }}">
                                    </td>
                                    <td>{{ $slider->nama_slider }}</td>
                                    <td>{{ $slider->status == 1 ? 'Aktif':'Nonaktif' }}</td>
                                    <td>{{ $slider->created_at }}</td>
                                    <td>
                                        <a href="{{ route('admin.ubahslider', ['id' => $slider->id]) }}"><i
                                                class="fa fa-edit fa-2x"></i>
                                        </a>
                                        <a href="#" style="margin-left:10px; "
                                            onclick="confirm('Yakin ingin menghapus {{ $slider->nama_slider }}?') || event.stopImmediatePropragation()"
                                            wire:click.prevent="deleteSlider('{{ $slider->id }}')"><i
                                                class="fa fa-trash fa-2x text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $sliders->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>