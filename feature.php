<!DOCTYPE html>
<html>
<head>
    <style>
        .maint {
            text-align: center;
            margin-bottom: 20px;
            margin-top: 40px;
            font-size: 24px;
            color: #333;
        }
        
        .features {
            display: flex;
            justify-content: space-between;
            margin-bottom: 60px;
            margin-left: 100px;
            margin-right: 100px;
        }
        .feature {
            width: 15%;
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #b9f3ec;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }

        .feature:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }

        .feature i {
            font-size: 36px;
            color: #009688;
        }

        .feature h4 {
            margin-top: 10px;
            font-size: 18px;
            color: #333;
        }

        .feature p {
            font-size: 14px;
            color: #555;
        }

        .feature:last-child {
            margin-right: 0;
        }

    </style>
</head>
<body>
    <h1 class="maint">FEATURES</h1>
    <div class="features">
        <div class="feature">
                <i class="fa fa-phone"></i>
                <h4>Phone Support</h4>
                <p>Reach our support agents by phone for personalized help.</p>
        </div>
        <div class="feature">
                <i class="fa fa-question-circle"></i>
                <h4>FAQ Resources</h4>
                <p>Explore our frequently asked questions for quick answers.</p>
        </div>
        <div class="feature">
                <i class="fa fa-envelope"></i>
                <h4>Email Support</h4>
                <p>Contact us via email for assistance or inquiries.</p>
        </div>
        <div class="feature">
            <i class="fa fa-headphones"></i>
            <h4>Exceptional Support</h4>
            <p>24/7 dedicated customer support for your peace of mind.</p>
        </div>
        <div class="feature">
            <i class="fa fa-lock"></i>
            <h4>Secure and Reliable</h4>
            <p>Your data and payments handled with the highest security standards.</p>
        </div>
    </div>
</body>
</html>
