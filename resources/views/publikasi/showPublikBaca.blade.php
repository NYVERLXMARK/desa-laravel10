<x-app>
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="inner" style="height: 550px; overflow: hidden;">
                        <img src="http://kantorkite.ketapangkab.go.id/public/{{$publikasi->foto}}" alt="image not found!" class="mx-auto d-block" style="height: 100%; object-fit: cover;">
                    </div>
                    <hr>
                    {{-- <ul class="meta-info">
                        <li>
                            <i class="fa fa-user text-primary me-2"></i>
                            <small>by {{ $opd->singkatan_website }}</small>
                        </li>
                        <li>
                            <i class="fa fa-calendar text-primary me-2"></i>
                            <small>{{$publikasi->created_at->translatedFormat('d F Y')}}</small>
                        </li>
                    </ul> --}}
                    <p>
                        <small><i class="fa fa-calendar text-primary me-2"></i>{{$publikasi->created_at->translatedFormat('d F Y')}}</small>
                    </p>
                    <h3>{{$publikasi->judul_publikasi}}</h3>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="table-responsive">
                        <table id="dataTabel" class="table table-striped table-bordered nowrap" width="100%">
                            <thead>
                                <th>No</th>
                                <th>Nama Dokumen</th>
                                <th style="text-align: center">Unduh</th>
                            </thead>
                            <tbody>
                                @foreach ($list_file as $file)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $file->nama_file}}</td>
                                        <td style="text-align: center"><a href="http://kantorkite.ketapangkab.go.id/public/app/{{ $file->file }}" target="_blank" class="btn btn-success float-right"><i
                                            class="fas fa-fw fa-print"></i><strong> Unduh</strong></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
</x-app>
