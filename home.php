<?php

    include("database.php");
    include("functions.php");
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style1.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
</head>
<body>
    <div class="container">
    <nav class="navbar">
        <h2>Hugly.Dev</h2>
        <button class="button" name="login">Log in</button>
        <button class="button1" name="signup">Sign up</button>
    </nav>
    <div class="banner">
        <div class="contents">
        <h1>Connecting every corner <br/>of your business</h1>
        <h1></h1>
        <p>Join thousands of business owners using Hugly to get paid and<br/>grow. We've got industry-leading APIs for, online payments,
        <br/>business tools and expert 7-day support</p>
        <button class="button2">Learn More <i class="fa-solid fa-chevron-right"></i></button>
        <button class="button3">Contact Sales</button>
        </div>
    </div>
    <div class="start">
        <i class="fa-solid fa-rocket"></i> 
        <h3>Get Started</h3>
        <p>Resources and guides to help you through every step of the development journey</p>
    </div>
    <div class="start1">
        <div class="get">
            <h3>Find your ideal solution <i class="fa-solid fa-list"></i></h3>
            <p>Business quick start guide <i class="fa-solid fa-chevron-right"></i></p>
            <p>Pricing guide <i class="fa-solid fa-chevron-right"></i></p>
            <p>Availability guide <i class="fa-solid fa-chevron-right"></i></p>
        </div>
        <div class="get">
            <h3>Videos and learning materials <i class="fa-solid fa-play"></i></h3>
            <p>Tutorials <i class="fa-solid fa-chevron-right"></i></p>
            <p>Webinars <i class="fa-solid fa-chevron-right"></i></p>
        </div>
        <div class="get">
            <h3>Build and launch resources <i class="fa-solid fa-wrench"></i></h3>
            <p>Developer quick start guides <i class="fa-solid fa-chevron-right"></i></p>
            <p>API references <i class="fa-solid fa-chevron-right"></i></p>
            <p>Project launch guide <i class="fa-solid fa-chevron-right"></i></p>
        </div>
        <div class="get">
            <h3>Help and Support tools <i class="fa-solid fa-circle-question"></i></h3>
            <p>Ask the community <i class="fa-solid fa-chevron-right"></i></p>
            <p>Support and FAQ <i class="fa-solid fa-chevron-right"></i></p>
            <p>Contact Us <i class="fa-solid fa-chevron-right"></i></p>
        </div>
    </div><br/><br/>
    <div class="container1">
        <div class="use-case">
            <h5>Use Cases</h5>
            <h2>Join the #1 partner for small & large businesses today</h2>
            <p>Check out various use cases and examples to see how our APIs can solve your problems</p>
        </div><br/>
    <div class="useCases">
        <div class="useList">
            <p id="large">Large Enterprises</p>
            <p id="small">Small businesses</p>
            <p id="merch">Merchant</p>
            <p id="indi">Individual</p>
        </div>
        <div class="useOpt">
        <div class="uses">
            <img src="/meeting.jpg"/>
            <h5>Use case i <i class="fa-solid fa-chevron-right"></i></h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
        </div>
        <div class="uses">
            <img src=""/>
            <h5>Use case ii <i class="fa-solid fa-chevron-right"></i></h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
        </div>
        <div class="uses">
            <img src=""/>
            <h5>Use case iii <i class="fa-solid fa-chevron-right"></i></h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
        </div>
        <div class="uses">
            <img src=""/>
            <h5>Use case iv <i class="fa-solid fa-chevron-right"></i></h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
        </div>
        </div>
    </div>
    <div class="list">
        <ul>
            <li><a href="">Seamless Integation <i class="fa-solid fa-plus"></i></a></li>
            <li><a href="">Real-Time Payment Notifications <i class="fa-solid fa-plus"></i></a></li>
            <li><a href="">Enhanced Payment Acceptance <i class="fa-solid fa-plus"></i></a></li>
            <li><a href="">Customizable Payment flow <i class="fa-solid fa-plus"></i></a></li>
        </ul>
    </div>
    </div><br/><br/>
    <div class="container2">
    <div class="touts">
        <h4>7-day expert support <i class="fa-solid fa-headphones"></i></h4>
        <p>Get the help you need from our expert support team on the phone, via live chat, on WhatsApp or over email.
        </p>
    </div>
    <div class="touts">
        <h4>Fast, secure payments <i class="fa-solid fa-shield"></i></h4>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos assumenda dignissimos, harum minima nemo itaque nisi reprehenderit</p>
    </div>
    <div class="touts">
        <h4>Actionable insights to grow <i class="fa-solid fa-table-cells-large"></i></h4>
        <p>Get relevant highlights and detailed dashboards about your business</p>
    </div>
    <div class="touts">
        <h4>Seamless management <i class="fa-solid fa-arrow-trend-up"></i></h4>
        <p>Manage your products, staff, business, details, cash flow and more</p>
    </div>
    </div><br/><br/>
    <div class="story">
        <i class="fa-solid fa-quote-right"></i>
        <h2>Customer Success Stories</h2>
        <p>See what other companies have build using Hugly's APIs</p>
    </div>
    <div class="success">
        <div class="co">
            <h3>Hugly Studio <i class="fa-solid fa-chevron-right"></i></h3>
            <p>Hugly Group partners with Hugly Pay to provide its internal applications customers with a fully branded
                end-to-end payment solution
            </p>
            <img src="/h-1.png"/>
        </div>
        <div class="co">
            <h3>WeCut <i class="fa-solid fa-chevron-right"></i></h3>
            <p>WeCut shortens payment times for disbursements, reduces costs, and increases consumer satisfaction with Hugly Send</p>
            <img src="/wecut11.jpg"/>
        </div>
        <div class="co">
            <h3>Google Zimbabwe <i class="fa-solid fa-chevron-right"></i></h3>
            <p>Google increases card-on-life (CoF) approval rates 2.5 by updating Hugly Pay accounts in real time via the Automatic Billing Updating (ABU) API</p>
            <img src="/google1.png"/>
        </div>
    </div><br/><br/>
    <div class="started">
        <div class="example">
        <i class="fa-solid fa-arrow-trend-up"></i>
        <h2>Ready to grow</h2>
        <p>It takes just 5 minutes to create a Hugly Developer profile</p>
        <button>Get Started ></button>
        </div>
    </div><br/><br/>
    <div class="social">
        <div class="soc">
        <i class="fa-brands fa-whatsapp"></i>
        <h3>WhatsApp</h3>
        <p>Connect with the Hugly Developers community on WhatsApp</p>
        </div>
        <div class="soc">
        <i class="fa-brands fa-facebook"></i>
        <h3>Facebook</h3>
        <p>Follow @HuglyDev on Facebook</p>
        </div>
        <div class="soc">
        <i class="fa-brands fa-youtube"></i>
        <h3>YouTube</h3>
        <p>Subscribe to Hugly Developers on YouTube</p>
        </div>
        <div class="soc">
        <i class="fa-brands fa-x-twitter"></i>
        <h3>X</h3>
        <p>Follow @HuglyDev on X</p>
        </div>
        <div class="soc">
        <i class="fa-brands fa-linkedin"></i>
        <h3>LinkedIn</h3>
        <p>Connect with the Hugly Developers community on LinkedIn</p>
        </div>
    </div><br/><br/>
    <footer>
        <p class="term">Terms & Conditions | Privacy Policy | Manage Cookies </p>
        <p>&copy;Copyright 2024 Hugly Group (Pvt) Ltd</p>
    </footer>
    </div>
</body>
</html>

<script>
    const large = document.getElementById('large');
    const small = document.getElementById('small');
    const merch = document.getElementById('merch');
    const indi = document.getElementById('indi');

    large.addEventListener("click", () => {
        large.classList.toggle("background");
    })

    small.addEventListener("click", () => {
        small.classList.toggle("background");
    })

    merch.addEventListener("click", () => {
        merch.classList.toggle("background");
    })

    indi.addEventListener("click", () => {
        indi.classList.toggle("background");
    })
</script>