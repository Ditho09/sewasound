<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Sound | BARA AUDIO</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Plus+Jakarta+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #0f0f0f;
            background-image: url('https://www.transparenttextures.com/patterns/carbon-fibre.png');
            color: #e0e0e0;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .horeg-card {
            background: rgba(25, 25, 25, 0.9);
            border: 1px solid #333;
            border-radius: 12px;
            overflow: hidden;
        }

        .header-section {
            border-bottom: 2px solid #ff0000;
            padding-bottom: 15px;
            margin-bottom: 30px;
        }

        .brand-font {
            font-family: 'Orbitron', sans-serif;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .btn-back {
            background: transparent;
            color: #00f2ff;
            border: 1px solid #00f2ff;
            font-size: 12px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-back:hover {
            background: #00f2ff;
            color: #000;
        }

        .table {
            color: #fff;
            margin-bottom: 0;
        }

        .table thead {
            background-color: #1a1a1a;
            color: #00f2ff;
        }

        .price-text {
            color: #ff0000;
            font-weight: bold;
            font-family: 'Orbitron', sans-serif;
        }

        .status-dot {
            height: 8px;
            width: 8px;
            background-color: #ff0000;
            border-radius: 50%;
            display: inline-block;
            margin-right: 5px;
            box-shadow: 0 0 8px #ff0000;
        }
    </style>
</head>
<body>

<div class="container py-5">
    
    <div class="header-section d-flex justify-content-between align-items-center">
        <div>
            <h2 class="brand-font m-0 text-white">OTID1929<span style="color: #ff0000;">AUDIO</span></h2>
            <small class="text-secondary">Inventory Unit Horeg System</small>
        </div>
        <a href="javascript:history.back()" class="btn btn-back px-4 py-2">
            <i class="fas fa-arrow-left me-2"></i> KEMBALI
        </a>
    </div>

    <div class="horeg-card shadow-lg">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th class="py-3 ps-4">UNIT SOUND</th>
                        <th class="py-3">LOKASI</th>
                        <th class="py-3 text-end pe-4">TARIF (24H)</th>
                    </tr>
                </thead>
                <tbody>
                    @php $sounds = $sounds ?? collect(); @endphp
                    
                    @forelse ($sounds as $sound)
                    <tr>
                        <td class="py-3 ps-4">
                            <div class="fw-bold mb-0">
                                <span class="status-dot"></span> {{ $sound->name }}
                            </div>
                            <small class="text-secondary small">Pro Audio Build-up</small>
                        </td>
                        <td class="py-3">
                            <i class="fas fa-map-marker-alt text-secondary me-2"></i> {{ $sound->location }}
                        </td>
                        <td class="py-3 text-end pe-4">
                            <span class="price-text">Rp {{ number_format($sound->price, 0, ',', '.') }}</span>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center py-5 text-secondary">
                            <i class="fas fa-volume-mute fa-3x mb-3 d-block"></i>
                            Gudang kosong, belum ada unit yang terdaftar.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="text-center mt-4 text-secondary small">
        <p>Copyright &copy; 2026 BARA TRANS - <span class="text-white">Glerrr Kederrr!</span></p>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>