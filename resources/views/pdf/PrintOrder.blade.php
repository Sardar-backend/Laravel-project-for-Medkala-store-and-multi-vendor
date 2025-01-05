<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فاکتور سفارش</title>
    <style>
        @font-face {
        font-family: Vazirmatn;
        src: url('{{ public_path('assets\font\Vazirmatn-RD-FD-Medium.woff2') }}') format('woff2');
        font-weight: normal;
        font-style: normal;
    }
        body {
            font-family: Vazirmatn , sans-serif;
            direction: rtl;
            margin: 0;
            padding: 0;
            color: #333;
            font-size: 14px;
            line-height: 1.6;
        }
        header {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #ccc;
            padding-bottom: 10px;
        }
        header h1 {
            font-size: 24px;
            margin: 0;
            color: #d32f2f;
        }
        .order-details {
            margin: 20px 0;
        }
        .order-details h2 {
            font-size: 18px;
            color: #555;
            margin-bottom: 10px;
        }
        .order-details p {
            margin: 5px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        table th {
            background-color: #f5f5f5;
            color: #333;
        }
        table td {
            font-size: 13px;
        }
        .summary {
            margin-top: 20px;
            text-align: left;
        }
        .summary p {
            margin: 5px 0;
            font-weight: bold;
        }
        footer {
            margin-top: 30px;
            text-align: center;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>
    <header>
        <h1>asdasdadasd</h1>
        <p>فروشگاه اینترنتی {{ config('app.name') }}</p>
    </header>

    <div class="order-details">
        <h2>جزئیات سفارش</h2>
        <p><strong>شماره سفارش:</strong> {{ $order->id }}</p>
        <p><strong>تاریخ سفارش:</strong> {{ jdate($order->created_at)->format('Y/m/d') }}</p>
        <p><strong>نام مشتری:</strong> {{ $order->user->name }}</p>
        <p><strong>آدرس:</strong> asdsad</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>ردیف</th>
                <th>نام محصول</th>
                <th>تعداد</th>
                <th>قیمت واحد (تومان)</th>
                <th>تخفیف (تومان)</th>
                <th>جمع کل (تومان)</th>
            </tr>
        </thead>
        <tbody>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

        </tbody>
    </table>

    <div class="summary">
        <p>جمع کل محصولات:  تومان</p>
        <p>تخفیف کل:  تومان</p>
        <p>هزینه ارسال:  تومان</p>
        <p>مبلغ نهایی:  تومان</p>
    </div>

    <footer>
        <p>این فاکتور به صورت سیستمی ایجاد شده و نیاز به مهر یا امضا ندارد.</p>
        <p>برای اطلاعات بیشتر به سایت  مراجعه کنید.</p>
    </footer>
</body>
</html>
