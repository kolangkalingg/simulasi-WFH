<div class="container">

    @if ($errors->any())
        <div class="pt-3">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    @if (session()->has('message'))
        <div class="pt-3">
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        </div>
    @endif
    <!-- START FORM -->
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title mb-0">Form Data Karyawan</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="my-3 p-3 bg-body rounded shadow-sm">
                        <form>
                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" wire:model='nama'>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" wire:model='email'>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" wire:model='alamat'>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                   @if ($updateData == false)
                                   <button type="button" class="btn btn-primary" name="submit" wire:click='store()' >SIMPAN</button>
                                   @else
                                   <button type="button" class="btn btn-primary" name="submit" wire:click='update()' >UPDATE</button>
                                   @endif
                                   <button type="button" class="btn btn-secondary" name="submit" wire:click='clear()' >CLEAR</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- AKHIR FORM -->

    <!-- START DATA -->
    <div class="my-3 p-3 bg-body rounded shadow-sm">
<<<<<<< HEAD
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title mb-0">Form Data Karyawan</h5>
            </div>
=======
        <h1>Data Pegawai</h1>
>>>>>>> 956de73beaf2c25c01cd2f5755bc265ceff7d0c2
        <div class="pb-3 pt-3">
            <input type="text" class="form-control mb-3 w-25" placeholder="Search.." wire:model.live='katakunci'>
        </div>

        @if ($counter_selected_id)
            <a wire:click="delete_confirmation('')" class="btn btn-danger btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal" >Del {{ count($counter_selected_id) }} data</a> 
        @endif

        {{ $dataCounters->links() }}
        <table class="table table-striped table-sortable">
            <thead>
                <tr>
                    <th></th>
                    <th class="col-md-1">No</th>
                    <th class="col-md-4 sort @if($sortColumn == 'nama') {{ $sortDirection }}@endif " wire:click="sort('nama')">Nama</th>
                    <th class="col-md-3 sort @if($sortColumn == 'email') {{ $sortDirection }}@endif" wire:click="sort('email')">Email</th>
                    <th class="col-md-2 sort @if($sortColumn == 'alamat') {{ $sortDirection }}@endif" wire:click="sort('alamat')">Alamat</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $dataCounters as $key => $value)       
                <tr>
                    <td><input type="checkbox" wire:key="{{ $value->id }}" value="{{ $value->id }}" wire:model.live="counter_selected_id"></td>
                    <td>{{ $dataCounters->firstItem() + $key }}</td>
                    <td>{{ $value->nama }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->alamat }}</td>
                    <td>
                        <a wire:click='edit({{ $value->id }})' class="btn btn-warning btn-sm">Edit</a>
                        <a wire:click='delete_confirmation({{ $value->id }})' class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" >Del</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        {{ $dataCounters->links() }}
    </div>
    <!-- AKHIR DATA -->
<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Delete</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Apakah anda yakin ingin menghapus data ini?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
          <button type="button" class="btn btn-primary" wire:click='delete()' data-bs-dismiss="modal">Hapus</button>
        </div>
      </div>
    </div>
  </div>
</div>