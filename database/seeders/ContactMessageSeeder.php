<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContactMessage;

class ContactMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactMessage::firstOrCreate([
            'email' => 'ahmad.rahman@email.com',
            'subject' => 'Pertanyaan tentang project Laravel',
        ], [
            'name' => 'Ahmad Rahman',
            'message' => 'Halo Awaludin, saya tertarik dengan project Laravel yang Anda buat. Apakah bisa saya minta source code nya untuk referensi? Terima kasih.',
            'read_at' => now(),
        ]);

        ContactMessage::firstOrCreate([
            'email' => 'siti.nurhaliza@email.com',
            'subject' => 'Kolaborasi Mobile App Development',
        ], [
            'name' => 'Siti Nurhaliza',
            'message' => 'Assalamualaikum, saya melihat portfolio Anda dan tertarik untuk berkolaborasi dalam project mobile app menggunakan Flutter. Saya punya ide aplikasi kesehatan yang menarik. Mari kita diskusikan lebih lanjut.',
        ]);

        ContactMessage::firstOrCreate([
            'email' => 'budi.santoso@email.com',
            'subject' => 'Lowongan Kerja',
        ], [
            'name' => 'Budi Santoso',
            'message' => 'Selamat pagi, saya HRD dari PT Teknologi Maju. Kami tertarik dengan background Anda di bidang web development. Apakah Anda tertarik untuk bergabung dengan tim kami?',
        ]);

        ContactMessage::firstOrCreate([
            'email' => 'maya.sari@email.com',
            'subject' => 'Konsultasi Web Development',
        ], [
            'name' => 'Maya Sari',
            'message' => 'Halo, saya ingin membuat website untuk bisnis kecil saya. Saya lihat Anda berpengalaman dengan Laravel dan modern web technologies. Berapa estimasi biaya dan waktu pengerjaan untuk website company profile?',
        ]);

        ContactMessage::firstOrCreate([
            'email' => 'rizki.pratama@email.com',
            'subject' => 'Feedback Portfolio Website',
        ], [
            'name' => 'Rizki Pratama',
            'message' => 'Website portfolio Anda sangat bagus dan clean design nya! Saya suka dengan dark mode feature dan responsive design. Ada beberapa saran: mungkin bisa ditambahkan animasi loading yang lebih smooth dan section skills yang lebih detail.',
            'read_at' => now()->subDays(1),
        ]);
    }
}
