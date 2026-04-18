<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Baru dari Form Kontak</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #f53003;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .header h1 {
            color: #f53003;
            margin: 0;
            font-size: 24px;
        }
        .message-info {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            border-left: 4px solid #f53003;
        }
        .info-item {
            margin-bottom: 10px;
        }
        .info-label {
            font-weight: bold;
            color: #666;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .info-value {
            color: #333;
            font-size: 16px;
            margin-top: 2px;
        }
        .message-content {
            background-color: #ffffff;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
            white-space: pre-wrap;
            line-height: 1.7;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e9ecef;
            color: #666;
            font-size: 14px;
        }
        .action-buttons {
            text-align: center;
            margin: 30px 0;
        }
        .btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: #f53003;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            margin: 0 10px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #d42d02;
        }
        .btn-secondary {
            background-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #545b62;
        }
        .timestamp {
            color: #666;
            font-size: 12px;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📬 Pesan Baru dari Website</h1>
            <p>Anda menerima pesan baru melalui form kontak</p>
        </div>

        <div class="message-info">
            <div class="info-item">
                <div class="info-label">Nama Pengirim</div>
                <div class="info-value">{{ $contactMessage->name }}</div>
            </div>

            <div class="info-item">
                <div class="info-label">Email</div>
                <div class="info-value">
                    <a href="mailto:{{ $contactMessage->email }}" style="color: #f53003; text-decoration: none;">
                        {{ $contactMessage->email }}
                    </a>
                </div>
            </div>

            <div class="info-item">
                <div class="info-label">Subjek</div>
                <div class="info-value">{{ $contactMessage->subject }}</div>
            </div>

            <div class="info-item">
                <div class="info-label">Waktu Diterima</div>
                <div class="info-value">{{ $contactMessage->created_at->format('l, d F Y H:i:s') }}</div>
            </div>
        </div>

        <div class="message-content">
            <strong>Pesan:</strong><br><br>
            {{ $contactMessage->message }}
        </div>

        <div class="action-buttons">
            <a href="mailto:{{ $contactMessage->email }}?subject=Re: {{ $contactMessage->subject }}" class="btn">
                💌 Balas Email
            </a>
            <a href="{{ url('/admin/messages/' . $contactMessage->id) }}" class="btn btn-secondary">
                👀 Lihat di Admin Panel
            </a>
        </div>

        <div class="footer">
            <p>
                <strong>Portofolio M. Awaludin Majid</strong><br>
                Website: <a href="{{ url('/') }}" style="color: #f53003;">{{ url('/') }}</a><br>
                Email ini dikirim otomatis ketika ada pesan baru dari form kontak.
            </p>
        </div>
    </div>

    <div class="timestamp">
        Email dikirim pada: {{ now()->format('d F Y H:i:s') }}
    </div>
</body>
</html>