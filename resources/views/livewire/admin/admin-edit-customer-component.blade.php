<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Ubah Data Customer
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.customer') }}" class="btn btn-success pull-right">Semua
                                    Customer</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="updateCustomer">
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Nama Customer</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Nama Customer"
                                        wire:model="name" required>
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Email</label>
                                <div class="col-md-4">
                                    <input type="email" class="form-control input-md" placeholder="Email"
                                        wire:model="email" required>
                                    @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Password</label>
                                <div class="col-md-4">
                                    <input type="password" class="form-control input-md" placeholder="Password"
                                        wire:model="password" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <input type="checkbox" value="1" wire:model="editPassword">
                                    <span>Ubah Password?</span>
                                </div>
                            </div>
                            <input type="hidden" wire:model="email_verified_at">
                            <input type="hidden" wire:model="remember_token">
                            @if ($editPassword)
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Password Baru</label>
                                <div class="col-md-4">
                                    <input type="password" class="form-control input-md"
                                        placeholder="Masukkan Password Baru" wire:model="newPassword" required>
                                    @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            @endif
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