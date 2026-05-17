<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', sans-serif;
        background: linear-gradient(135deg, #0f172a, #1e293b);
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card {
        background: #ffffff;
        border-radius: 16px;
        width: 400px;
        padding: 40px 30px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        text-align: center;
    }

    .icon-wrap {
        width: 72px;
        height: 72px;
        background: #f0fdf4;
        border: 2px solid #bbf7d0;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 24px;
    }

    .icon-wrap svg {
        width: 32px;
        height: 32px;
        stroke: #16a34a;
        fill: none;
        stroke-width: 2.5;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .badge {
        display: inline-block;
        background: #f0fdf4;
        color: #15803d;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 0.05em;
        text-transform: uppercase;
        padding: 4px 12px;
        border-radius: 20px;
        border: 1px solid #bbf7d0;
        margin-bottom: 16px;
    }

    .card h1 {
        font-size: 22px;
        font-weight: 700;
        color: #0f172a;
        margin: 0 0 8px;
    }

    .card p {
        font-size: 14px;
        color: #64748b;
        margin: 0 0 28px;
        line-height: 1.6;
    }

    .divider {
        border: none;
        border-top: 1px solid #e2e8f0;
        margin: 0 0 24px;
    }

    .btn {
        display: block;
        width: 100%;
        padding: 13px;
        background: #0f172a;
        color: #ffffff;
        font-weight: 600;
        font-size: 19px;
        border-radius: 8px;
        text-decoration: none;
        box-sizing: border-box;
        transition: 0.2s ease;
    }

    .btn:hover {
        background: #1e293b;
    }

    .subtext {
        margin-top: 14px;
        font-size: 12px;
        color: #94a3b8;
    }
</style>
<body>

    <div class="card">
        <div class="icon-wrap">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <polyline points="20 6 9 17 4 12"/>
            </svg>
        </div>

        <span class="badge">Registration complete</span>
        <h1>You're all set!</h1>
        <p>Your account has been created successfully</p>
        <hr class="divider">
        <a href="login.php" class="btn">Log in to your account</a>
    </div>

</body>
</html>