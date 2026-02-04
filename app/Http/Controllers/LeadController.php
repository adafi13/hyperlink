<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        // 1. CEK DATA MASUK (Hapus baris ini nanti kalau sudah fix)
        // Jika layar menjadi hitam dan muncul tulisan data, berarti form berfungsi.
        // dd($request->all());

        // 2. Validasi (Saya longgarkan sedikit untuk testing)
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required',
            'address' => 'required',
            // package_name kadang kosong jika JS error, kita handle di bawah
            'package_name' => 'nullable|string', 
        ]);

        // 3. Simpan ke Database
        // Gunakan try-catch agar jika error kita tahu kenapa
        try {
            $lead = Lead::create([
                'name' => $request->name,
                'phone_number' => $request->phone_number,
                'address' => $request->address,
                // Beri nilai default jika package_name kosong
                'package_name' => $request->package_name ?? 'Umum/Tanpa Paket',
                'status' => 'Baru' // Jika ada kolom status di database
            ]);
        } catch (\Exception $e) {
            // Jika error database, tampilkan errornya
            dd("Gagal Simpan Database: " . $e->getMessage());
        }

        // 4. Format Pesan WhatsApp
        $packageName = $lead->package_name;
        $message = "Halo Admin HyperLink, perkenalkan saya *{$lead->name}*.\n\n";
        $message .= "Saya berminat berlangganan paket: *{$packageName}*.\n";
        $message .= "Alamat pemasangan: {$lead->address}\n";
        $message .= "Mohon info ketersediaan jaringan. Terima kasih.";

        $waNumber = '6285283089638'; 
        $url = "https://wa.me/{$waNumber}?text=" . urlencode($message);

        return redirect()->away($url);
    }
}