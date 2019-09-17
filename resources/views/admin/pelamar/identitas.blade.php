<div class=" row">
    <div class="col-md-4">
        <div class="panel panel-flat">
            <div class="panel-heading">
            </div>
            <div class="panel-body">
                <div class="thumbnail">
                    <p class="text-semibold no-margin">Foto Profil</p>

                    <div class="thumb thumb-rounded thumb-slide">
                        <img src="{{ asset($foto) }}" alt="">
                        <div class="caption">
                            <span>
                                <a href="{{ asset($foto) }}" class="btn bg-green-300 btn-icon" data-popup="lightbox"><i
                                        class="icon-zoomin3"></i></a>

                            </span>
                        </div>
                    </div>

                    <div class="caption text-center">
                        <p class="text-semibold no-margin">{{ $user->name }}</p>
                        <ul class="icons-list mt-15">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="panel panel-flat">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td> : {{ $user->name }} </td>
                    </tr>
                    <tr>
                        <td>TTL</td>
                        <td> : {{ $user->tempat_lahir }},
                            {{ Carbon\Carbon::parse($user->tgl_lahir)->formatLocalized('%d %B %Y') }} </td>
                    </tr>

                    <tr>
                        <td>Umur</td>
                        <td> : {{ $pelamar->umur }}</td>
                    </tr>

                    <tr>
                        <td>IPK</td>
                        <td> : {{ $pelamar->ipk }}</td>
                    </tr>

                    <tr>
                        <td>Hasil Tes</td>
                        <td> : {{ $pelamar->umum }}</td>
                    </tr>

                    <tr>
                        <td>E-Mail</td>
                        <td> : {{ $user->email }}</td>
                    </tr>

                    <tr>
                        <td>Berkas</td>
                        <td>
                            <a href="?file=cv" class="btn btn-success">CV</a>
                            <a href="?file=lamaran" class="btn btn-danger">Lamaran</a>
                            <a href="?file=ijasah" class="btn">Ijasah</a>
                        </td>
                    </tr>

                </table>
                @if ($pelamar->status == 1)
                    <a href="{{ url('admin/pelamar/lolos/') }}/{{ $pelamar->id }}" class="btn btn-success">Lolos Tahap
                        Selanjutnya</a>
                    <a href="{{ url('admin/pelamar/gagal/') }}/{{ $pelamar->id }}" class="btn btn-danger">Gagal</a>
                @endif
                
            </div>
        </div>
    </div>
</div>
