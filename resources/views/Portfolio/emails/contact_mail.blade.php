<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>📩 New Message From Portfolio</title>
    <style>
        body {
            font-family: 'Tahoma', sans-serif;
            background-color: #eef2f7;
            margin: 0;
            padding: 20px;
        }
        .email-container {
            background-color: #ffffff;
            max-width: 650px;
            margin: auto;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            direction: rtl;
            text-align: right;
            border: 1px solid #e0e0e0;
        }
        .email-header {
            background: linear-gradient(135deg, #1abc9c, #16a085);
            padding: 25px;
            color: #fff;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            letter-spacing: 0.5px;
        }
        .email-header span {
            font-size: 30px;
            display: block;
            margin-bottom: 8px;
        }
        .email-body {
            padding: 25px;
        }
        .info-card {
            background-color: #f9fafc;
            padding: 15px 18px;
            border-radius: 8px;
            margin-bottom: 12px;
            border: 1px solid #e5eaf0;
            display: flex;
            align-items: center;
        }
        .info-icon {
            font-size: 18px;
            margin-left: 10px;
            color: #1abc9c;
        }
        .label {
            font-weight: bold;
            color: #1abc9c;
            min-width: 75px;
        }
        .info-card a {
            color: #333;
            text-decoration: none;
        }
        .info-card a:hover {
            text-decoration: underline;
            color: #1abc9c;
        }
        .message-box {
            background-color: #ffffff;
            padding: 18px;
            border-radius: 8px;
            border: 1px solid #e5eaf0;
            margin-top: 15px;
            white-space: pre-wrap;
            line-height: 1.8;
        }
        .email-footer {
            background-color: #f8f9fa;
            padding: 18px;
            font-size: 13px;
            text-align: center;
            color: #777;
            border-top: 1px solid #e0e0e0;
        }
    </style>
</head>
<body>
<div class="email-container">
    <div class="email-header">
        <span>📩</span>New Message From Portfolio
    </div>
    <div class="email-body">
        <div class="info-card">
            <div class="info-icon">👤</div>
            <div><span class="label">Full Name:</span> {{ $data['name'] }}</div>
        </div>
        <div class="info-card">
            <div class="info-icon">📧</div>
            <div><span class="label">Mail:</span> {{ $data['email'] }}</div>
        </div>
        <div class="info-card">
            <div class="info-icon">📞</div>
            <div>
                <span class="label">Phone:</span>
                <a href="tel:{{ $data['phone'] }}">{{ $data['phone'] }}</a>
            </div>
        </div>
        <div class="info-card">
            <div class="info-icon">📝</div>
            <div><span class="label">Subject:</span> {{ $data['subject'] }}</div>
        </div>
        <div>
            <span class="label">💬 Message:</span>
            <div class="message-box">
                {{ $data['message'] }}
            </div>
        </div>
    </div>
    <div class="email-footer">
        This message was sent through the contact form in your portfolio.
    </div>
</div>
</body>
</html>
