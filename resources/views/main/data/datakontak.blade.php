@extends('layouts.layout')

@section('title', 'Data Semua Kontak')

@section('content')

                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-home icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Kontak
                                        <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <div class="d-inline-block dropdown"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="mb-3 card">
                                    <div class="card-header-tab card-header-tab-animation card-header">
                                        <div class="card-header-title">
                                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                            Title
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="col-sm-12 col-lg-12">
                                                <button class="btn btn-success" onclick="location.href='{{ route('expkontak') }}'">Export</button>
                                                <button class="btn btn-warning">Import</button>
                                            </div>
                                            <br>
                                            <div class="col-sm-12 col-lg-12 table-responsive">
                                                <table class="table table-striped table-bordered table-responsive" style="width: 100%">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Sapaan</th>
                                                            <th>Nama</th>
                                                            <th>No HP</th>
                                                            <th>Email</th>
                                                            <th>Tgl Lahir</th>
                                                            <th>Agama</th>
                                                            <th>Jenis Kelamin</th>
                                                            <th>Alamat</th>
                                                            <th>Pekerjaaan</th>
                                                            <th>Keterangan</th>
                                                        </tr>
                                                    </thead>
                                                    <?php $no=1; ?>
                                                    <tbody>
                                                        @foreach ($contact as $item)
                                                            <tr>
                                                                <td>{{ $no++ }}</td>
                                                                <td>{{ $item->contact_sapaan }}</td>
                                                                <td>{{ $item->contact_name }}</td>
                                                                <td>{{ $item->contact_phone }}</td>
                                                                <td>{{ $item->contact_email }}</td>
                                                                <td>{{ $item->contact_birthday }}</td>
                                                                <td>{{ $item->contact_agama }}</td>
                                                                <td>{{ $item->contact_gender }}</td>
                                                                <td>{{ $item->contact_address }}</td>
                                                                <td>{{ $item->contact_pekerjaan }}</td>
                                                                <td>{{ $item->contact_keterangan }}</td>
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

@endsection
