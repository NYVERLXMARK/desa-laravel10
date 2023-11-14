<x-app>
    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="card shadow mb-4">
                        <div class="card-header text-center">
                            <strong>Laporan Tindak Lanjut SKM</strong>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="dataTable" class="table table-striped table-bordered nowrap" width="100%">
                                    <thead>
                                        <th>No</th>
                                        <th>Nama Dokumen</th>
                                        <th>Unduh</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($publikasi as $publik)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $publik->judul_publikasi }}</td>
                                                <td style="text-align: center"><a href="" target="_blank" class="btn btn-success float-right"><i
                                                    class="fas fa-fw fa-print"></i><strong> Unduh Data</strong></a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
</x-app>
