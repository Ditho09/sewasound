<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>HOREGG ENTRY | OTID1929 AUDIO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Plus+Jakarta+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        :root {
            --horeg-black: #050505;
            --horeg-red: #ff0000;
            --horeg-cyan: #00f2ff;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--horeg-black);
            background-image: 
                radial-gradient(circle at 50% 50%, rgba(255, 0, 0, 0.08) 0%, transparent 80%),
                url('https://www.transparenttextures.com/patterns/carbon-fibre.png');
            color: #e2e8f0;
        }

        .header-font { font-family: 'Orbitron', sans-serif; }

        .horeg-card {
            background: rgba(15, 15, 15, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid #222;
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.8);
            position: relative;
        }

        .horeg-card::before {
            content: "";
            position: absolute;
            top: 0; left: 0; right: 0; height: 1px;
            background: linear-gradient(90deg, transparent, var(--horeg-cyan), var(--horeg-red), transparent);
        }

        .input-horeg {
            background: #0f0f0f;
            border: 1px solid #333;
            color: #fff;
            transition: all .3s ease;
        }

        .input-horeg:focus {
            border-color: var(--horeg-cyan);
            box-shadow: 0 0 15px rgba(0, 242, 255, 0.2);
            outline: none;
        }

        .btn-bass-boost {
            background: linear-gradient(45deg, #ff0000, #990000);
            color: white;
            font-family: 'Orbitron', sans-serif;
            font-weight: 700;
            text-transform: uppercase;
            transition: .3s;
        }

        .btn-bass-boost:hover {
            transform: scale(1.02);
            box-shadow: 0 0 20px rgba(255, 0, 0, 0.5);
            animation: horeg-getar 0.1s infinite;
        }

        @keyframes horeg-getar {
            0% { transform: translate(1px, 1px); }
            50% { transform: translate(-1px, -1px); }
            100% { transform: translate(1px, -1px); }
        }

        .btn-back {
            border: 1px solid #444;
            color: #888;
            transition: .3s;
        }

        .btn-back:hover {
            border-color: var(--horeg-cyan);
            color: var(--horeg-cyan);
            background: rgba(0, 242, 255, 0.05);
        }

        .led-indicator {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--horeg-red);
            box-shadow: 0 0 8px var(--horeg-red);
            display: inline-block;
            margin-right: 10px;
        }
    </style>
</head>

<body class="antialiased">

<div class="min-h-screen flex flex-col justify-center py-10 px-4">

    <div class="sm:mx-auto sm:w-full sm:max-w-2xl">

        <div class="flex items-center justify-between mb-8">
            <div class="flex items-center">
                <div class="p-3 bg-zinc-900 border border-zinc-700 rounded-lg mr-4">
                    <i class="fas fa-sliders-h text-xl text-cyan-400"></i>
                </div>
                <div>
                    <h2 class="header-font text-2xl font-black text-white tracking-tighter italic">
                        OTID1929<span class="text-red-600">AUDIO</span>
                    </h2>
                    <p class="text-[9px] text-zinc-500 font-bold tracking-[0.3em] uppercase">
                        Glagah Arum System Registration
                    </p>
                </div>
            </div>
            
            <button onclick="history.back()" class="btn-back px-4 py-2 rounded-md text-[10px] font-bold uppercase tracking-widest">
                <i class="fas fa-arrow-left mr-2"></i> Kembali
            </button>
        </div>
<form method="POST" enctype="multipart/form-data" class="space-y-6">
    {% csrf_token %} <!-- <-- Tambahkan ini jika pakai Django -->
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="col-span-2">
            <label class="flex items-center text-[10px] font-bold uppercase text-zinc-500 mb-2 tracking-widest">
                <span class="led-indicator"></span> Nama Unit / Vendor Audio
            </label>
            <input type="text" name="nama_bus" required
                class="input-horeg block w-full px-4 py-3 rounded-lg text-sm"
                placeholder="Masukkan nama sound system...">
        </div>

        <div>
            <label class="flex items-center text-[10px] font-bold uppercase text-zinc-500 mb-2 tracking-widest">
                <span class="led-indicator"></span> Kode Inventaris
            </label>
            <input type="text" name="no_plat" required
                class="input-horeg block w-full px-4 py-3 rounded-lg text-sm font-bold header-font uppercase text-center"
                placeholder="EXP: SUB-01">
        </div>

        <div>
            <label class="flex items-center text-[10px] font-bold uppercase text-zinc-500 mb-2 tracking-widest">
                <span class="led-indicator"></span> Kapasitas (Box)
            </label>
            <input type="number" name="kapasitas" required
                class="input-horeg block w-full px-4 py-3 rounded-lg text-sm"
                placeholder="0">
        </div>

        <div class="col-span-2 grid grid-cols-2 gap-4 bg-zinc-900/50 p-4 rounded-xl border border-zinc-800">
            <div class="col-span-2 mb-1">
                <label class="text-[10px] font-bold uppercase text-zinc-500 tracking-widest">Biaya Rental (IDR)</label>
            </div>
            <input type="number" name="harga_dalam_kota" required
                class="input-horeg px-4 py-3 rounded-lg text-sm"
                placeholder="Harga Lokal">
            <input type="number" name="harga_luar_kota" required
                class="input-horeg px-4 py-3 rounded-lg text-sm"
                placeholder="Harga Luar">
        </div>

        <div class="col-span-2 grid grid-cols-2 gap-4">
            <label class="flex flex-col items-center justify-center py-4 bg-zinc-900 border border-zinc-700 rounded-lg cursor-pointer hover:border-cyan-500 transition group">
                <i class="fas fa-camera text-zinc-600 group-hover:text-cyan-400 mb-1"></i>
                <span class="text-[9px] uppercase font-bold text-zinc-500 file-name-display">Foto Unit</span>
                <input type="file" name="foto" accept="image/*" class="hidden file-input-element" required>
            </label>

            <label class="flex flex-col items-center justify-center py-4 bg-zinc-900 border border-zinc-700 rounded-lg cursor-pointer hover:border-red-500 transition group">
                <i class="fas fa-play-circle text-zinc-600 group-hover:text-red-500 mb-1"></i>
                <span class="text-[9px] uppercase font-bold text-zinc-500 video-name-display">Video Horeg</span>
                <input type="file" name="video" accept="video/*" class="hidden video-input-element">
            </label>
        </div>
    </div>

    <div class="flex justify-between items-center pt-6 border-t border-zinc-800">
        <button type="reset" class="text-[10px] font-bold text-zinc-600 hover:text-white uppercase tracking-widest">
            <i class="fas fa-sync-alt mr-1"></i> Reset
        </button>

        <button type="submit" class="btn-bass-boost px-8 py-3 rounded-lg text-xs shadow-lg">
            Simpan ke Gudang <i class="fas fa-bolt ml-2 text-yellow-400"></i>
        </button>
    </div>
</form>
    </div> <!-- Tutup sm:mx-auto sm:w-full sm:max-w-2xl -->
</div> <!-- Tutup min-h-screen -->

<script>
    // Handling UI for File Selection
    const handleFileInput = (inputClass, displayClass, activeColor) => {
        const input = document.querySelector(inputClass);
        const display = document.querySelector(displayClass);
        if(input && display) {
            input.addEventListener('change', function() {
                if(this.files.length > 0) {
                    display.textContent = this.files[0].name;
                    display.classList.remove('text-zinc-500');
                    display.classList.add(activeColor, 'font-bold');
                }
            });
        }
    };

    handleFileInput('.file-input-element', '.file-name-display', 'text-cyan-400');
    handleFileInput('.video-input-element', '.video-name-display', 'text-red-500');
</script>

</body>
</html>