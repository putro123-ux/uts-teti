@extends('layout.app_modern')

@section('content')
<div class="container-fluid">
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Dashboard Overview -->
    <div class="row mb-3">
        <div class="col-12">
            <h4 class="fw-bold text-primary mb-1">Dashboard Klinik Al-Hidayah</h4>
            <p class="text-muted small mb-2">Sistem Informasi Manajemen Klinik Terpadu</p>
            <hr class="opacity-25 my-2">
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row g-3 mb-3">
        <div class="col-xl-3 col-sm-6">
            <div class="card border-0 bg-primary bg-gradient text-white">
                <div class="card-body py-2">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <i class="ti ti-users"></i>
                        </div>
                        <div class="flex-grow-1 ms-2">
                            <div class="small fw-semibold">Total Pasien</div>
                            <div class="fs-5">1,234</div>
                            <div class="small opacity-75">+12% dari bulan lalu</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card border-0 bg-success bg-gradient text-white">
                <div class="card-body py-2">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <i class="ti ti-stethoscope"></i>
                        </div>
                        <div class="flex-grow-1 ms-2">
                            <div class="small fw-semibold">Kunjungan Hari Ini</div>
                            <div class="fs-5">48</div>
                            <div class="small opacity-75">23 sudah selesai</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card border-0 bg-info bg-gradient text-white">
                <div class="card-body py-2">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <i class="ti ti-calendar"></i>
                        </div>
                        <div class="flex-grow-1 ms-2">
                            <div class="small fw-semibold">Jadwal Dokter</div>
                            <div class="fs-5">12</div>
                            <div class="small opacity-75">4 dokter bertugas hari ini</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card border-0 bg-warning bg-gradient text-white">
                <div class="card-body py-2">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <i class="ti ti-report-medical"></i>
                        </div>
                        <div class="flex-grow-1 ms-2">
                            <div class="small fw-semibold">Total Layanan</div>
                            <div class="fs-5">8</div>
                            <div class="small opacity-75">2 layanan baru</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Statistics Row -->
    <div class="row g-3 mb-3">
        <div class="col-xl-4 col-md-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-transparent py-2">
                    <h6 class="card-title mb-0">Status Antrian</h6>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <div class="text-muted small">Sedang Menunggu</div>
                            <div class="fs-4 fw-bold text-danger">15</div>
                        </div>
                        <div>
                            <div class="text-muted small">Dalam Pemeriksaan</div>
                            <div class="fs-4 fw-bold text-warning">8</div>
                        </div>
                        <div>
                            <div class="text-muted small">Selesai</div>
                            <div class="fs-4 fw-bold text-success">25</div>
                        </div>
                    </div>
                    <div class="progress" style="height: 8px;">
                        <div class="progress-bar bg-danger" style="width: 31%"></div>
                        <div class="progress-bar bg-warning" style="width: 17%"></div>
                        <div class="progress-bar bg-success" style="width: 52%"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-transparent py-2">
                    <h6 class="card-title mb-0">Ketersediaan Dokter</h6>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <div>
                                <i class="ti ti-circle-filled text-success me-2"></i>
                                dr. Ahmad Yani
                            </div>
                            <span class="badge bg-success">Tersedia</span>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <div>
                                <i class="ti ti-circle-filled text-danger me-2"></i>
                                dr. Sarah Husna
                            </div>
                            <span class="badge bg-danger">Sedang Praktik</span>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <div>
                                <i class="ti ti-circle-filled text-warning me-2"></i>
                                dr. Rudi Hartono
                            </div>
                            <span class="badge bg-warning">Istirahat</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-12">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-transparent py-2">
                    <h6 class="card-title mb-0">Stok Obat Menipis</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm mb-0">
                            <thead>
                                <tr>
                                    <th>Nama Obat</th>
                                    <th>Sisa Stok</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Paracetamol 500mg</td>
                                    <td>15 strip</td>
                                    <td><span class="badge bg-warning">Menipis</span></td>
                                </tr>
                                <tr>
                                    <td>Amoxicillin 500mg</td>
                                    <td>8 strip</td>
                                    <td><span class="badge bg-danger">Kritis</span></td>
                                </tr>
                                <tr>
                                    <td>Vitamin C</td>
                                    <td>20 strip</td>
                                    <td><span class="badge bg-warning">Menipis</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="row g-3">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-transparent py-2">
                    <h6 class="card-title mb-0">Statistik Kunjungan</h6>
                </div>
                <div class="card-body">
                    <canvas id="visitChart" style="max-height: 300px"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-transparent py-2 d-flex justify-content-between align-items-center">
                    <h6 class="card-title mb-0">Pengumuman Terkini</h6>
                    <span class="badge bg-primary">2 Baru</span>
                </div>
                <div class="card-body">
                    <div class="timeline-item border-start border-primary border-2 ps-2 pb-2">
                        <div class="text-primary small fw-semibold">20 Juni 2023</div>
                        <div class="fw-bold small mb-1">Protokol Kesehatan</div>
                        <p class="text-muted small mb-0">Penerapan protokol kesehatan ketat untuk keamanan pasien dan staff</p>
                    </div>
                    <div class="timeline-item border-start border-primary border-2 ps-2">
                        <div class="text-primary small fw-semibold">18 Juni 2023</div>
                        <div class="fw-bold small mb-1">Layanan Baru</div>
                        <p class="text-muted small mb-0">Penambahan layanan spesialis anak setiap hari Senin & Rabu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.card {
    transition: all 0.3s ease;
    border-radius: 0.5rem;
}
.card:hover {
    transform: translateY(-2px);
}
.timeline-item {
    position: relative;
    padding-bottom: 1rem;
}
.timeline-item:last-child {
    padding-bottom: 0;
}
.text-primary {
    color: #5D87FF !important;
}
.bg-primary {
    background-color: #5D87FF !important;
}
.shadow-sm {
    box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.05) !important;
}
.progress {
    border-radius: 1rem;
    overflow: hidden;
}
.list-group-item {
    border: none;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('visitChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
            datasets: [{
                label: 'Kunjungan Pasien',
                data: [650, 590, 800, 810, 960, 870],
                borderColor: '#5D87FF',
                tension: 0.1,
                fill: true,
                backgroundColor: 'rgba(93, 135, 255, 0.1)'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        display: true,
                        drawBorder: false
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });
});
</script>
@endsection
