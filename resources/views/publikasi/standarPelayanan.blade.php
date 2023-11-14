<x-app>
    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="card shadow mb-4">
                        <div class="card-header text-center">
                            <strong>Standar Pelayanan</strong>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="dataTable" class="table table-striped table-bordered nowrap" width="100%">
                                    <thead>
                                        <th>No</th>
                                        <th>Nama Dokumen</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($publikasi as $publik)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><a href="{{url('dokumen-publik', $publik->slug)}}" target="_blank">{{ $publik->judul_publikasi }}</a></td>
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
