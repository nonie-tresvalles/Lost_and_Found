<div>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">

    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>
        <link rel="stylesheet" href="dasboard.css">
        <!-- Boxicons CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Include SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <style>
            /* Googlefont Poppins CDN Link */
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
            }

            .sidebar {
                position: fixed;
                height: 100%;
                width: 240px;
                background: #0A2558;
                transition: all 0.5s ease;
            }

            .sidebar.active {
                width: 60px;
            }

            .sidebar .logo-details {
                height: 80px;
                display: flex;
                align-items: center;
            }

            .sidebar .logo-details i {
                font-size: 28px;
                font-weight: 500;
                color: #fff;
                min-width: 60px;
                text-align: center;
            }

            .sidebar .logo-details .logo_name {
                color: #fff;
                font-size: 24px;
                font-weight: 500;
            }

            .sidebar .nav-links {
                margin-top: 10px;
            }

            .sidebar .nav-links li {
                position: relative;
                list-style: none;
                height: 50px;
            }

            .sidebar .nav-links li a {
                height: 100%;
                width: 100%;
                display: flex;
                align-items: center;
                text-decoration: none;
                transition: all 0.4s ease;
                color: #fff;
            }

            .sidebar .nav-links li a.active {
                background: #081D45;
            }

            .sidebar .nav-links li a:hover {
                background: #081D45;
            }

            .sidebar .nav-links li i {
                min-width: 60px;
                text-align: center;
                font-size: 18px;
                color: #fff;
            }

            .sidebar .nav-links li a .links_name {
                color: #fff;
                font-size: 15px;
                font-weight: 400;
                white-space: nowrap;
            }

            .sidebar .nav-links .log_out {
                position: absolute;
                bottom: 0;
                width: 100%;
            }

            .home-section {
                position: relative;
                background: #f5f5f5;
                min-height: 100vh;
                width: calc(100% - 240px);
                left: 240px;
                transition: all 0.5s ease;
            }

            .sidebar.active~.home-section {
                width: calc(100% - 60px);
                left: 60px;
            }

            .home-section nav {
                display: flex;
                justify-content: space-between;
                height: 80px;
                background: #fff;
                display: flex;
                align-items: center;
                position: fixed;
                width: calc(100% - 240px);
                left: 240px;
                z-index: 100;
                padding: 0 20px;
                box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
                transition: all 0.5s ease;
            }

            .sidebar.active~.home-section nav {
                left: 60px;
                width: calc(100% - 60px);
            }

            .home-section nav .sidebar-button {
                display: flex;
                align-items: center;
                font-size: 24px;
                font-weight: 500;
            }

            nav .sidebar-button i {
                font-size: 35px;
                margin-right: 10px;
            }

            .home-section nav .search-box {
                position: relative;
                height: 50px;
                max-width: 550px;
                width: 100%;
                margin: auto;
            }

            nav .search-box input {
                height: 100%;
                width: 100%;
                outline: none;
                background: #F5F6FA;
                border: 2px solid #EFEEF1;
                border-radius: 6px;
                font-size: 18px;
                padding: 0 15px;
            }

            nav .search-box .bx-search {
                position: absolute;
                height: 40px;
                width: 40px;
                background: #0A2558;
                right: 5px;
                top: 50%;
                transform: translateY(-50%);
                border-radius: 4px;
                line-height: 40px;
                text-align: center;
                color: #fff;
                font-size: 22px;
                transition: all 0.4s ease;
            }

            /* Dropdown Styles */
            .select-menu,
            .select-menu-post {
                width: 240px;
                position: relative;
            }

            .select-menu .select-btn,
            .select-menu-post .select-btn-post {
                color: white;
                display: flex;
                height: 55px;
                padding: 20px;
                font-size: 15px;
                font-weight: 400;
                align-items: center;
                cursor: pointer;
                /* Cursor style added */
                transition: background 0.3s;
            }

            .select-menu .select-btn:hover,
            .select-menu-post .select-btn-post:hover {
                background: #081D45;
            }

            .select-btn i,
            .select-btn-post i {
                padding-right: 23px;
                font-size: 19px;
                transition: 0.3s;
            }

            .select-menu .options,
            .select-menu-post .options-post {
                position: relative;
                display: none;
                background: #0A2558;
                margin-top: 5px;
            }

            .select-menu.active .options,
            .select-menu-post.active .options-post {
                display: block;
            }

            .options .option,
            .options-post .option-post {
                display: flex;
                height: 55px;
                cursor: pointer;
                padding: 0 60px;
                align-items: center;
                color: white;
                transition: background 1s;
            }

            .options .option:hover,
            .options-post .option-post:hover {
                background: #081D45;
            }

            .option i,
            .option-post i {
                font-size: 14px;
                margin-right: 15px;
            }

            .about-section {
                max-height: 100%;
                max-width: 100%;
                display: flex;
                align-items: center;
                margin: 0 25px 0 25px;
                padding: 0 20px;
            }

            .about-container {
                margin: auto;
                padding: 20px;
                flex: 1;
                padding: 20px;
                margin-top: 10%;
                border-radius: 10px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                text-align: center;
                position: relative;
                overflow: hidden;
                background-color: white;
            }


            .about-container h1 {
                margin-top: 40px;
                margin-bottom: 30px;
                color: #0A2558;
            }

            .about-container p {
                margin-bottom: 30px;
                line-height: 1.6;
                color: #0A2558;
            }

            .about-container h2 {
                margin: 20px 0 10px;
                color: #0A2558;
            }

            .about-container a {
                color: #17a2b8;
            }
        </style>
    </head>

    <body>
        <div class="sidebar">
            <div class="logo-details">
                <i class='bx bx-search-alt'></i>
                <span class="logo_name">Lost&Found</span>
            </div>
            <ul class="nav-links">
                <li>
                    <a class="" href="{{ route('dashboard') }}">
                        <i class='bx bx-grid-alt'></i>
                        <span class="links_name">Dashboard</span>
                    </a>
                </li>
                <div class="select-menu">
                    <div class="select-btn">
                        <i class='bx bx-list-ul'></i>
                        <span class="links_Sname">Items</span>
                        <i class='bx bx-chevron-right'></i>
                    </div>
                    <ul class="options">
                        <li class="option" id="ilost-btn">
                            <span class="option-text">Lost</span>
                        </li>
                        <li class="option" id="ifound-btn">
                            <span class="option-text">Found</span>
                        </li>
                        <li class="option" id="imatched-btn">
                            <span class="option-text">Matched</span>
                        </li>
                        <li class="option" id="ireturned-btn">
                            <span class="option-text">Returned</span>
                        </li>
                    </ul>
                </div>

                <div class="select-menu-post">
                    <div class="select-btn-post">
                        <i class='bx bx-message-square-add'></i>
                        <span class="links_name">Post</span>
                        <i class='bx bx-chevron-right'></i>
                    </div>
                    <ul class="options-post">
                        <li class="option-post" id="plost-btn">
                            <span class="option-text-post">Lost</span>

                        </li>
                        <li class="option-post" id="pfound-btn">
                            <span class="option-text-post">Found</span>
                        </li>
                    </ul>
                </div>
                <li>
                    <a class="active">
                        <i class='bx bx-group'></i>
                        <span class="links_name">About Us</span>
                    </a>
                </li>
                <li class="log_out">
                    <a id="logoutBtn" class="nav-link btn-custom" href="{{ route('login') }}" role="button">
                        <i class='bx bx-log-out-circle'></i>
                        Logout
                    </a>
                </li>
        </div>
        <section class="home-section">
            <nav>
                <div class="sidebar-button">
                    <i class='bx bx-menu sidebarBtn'></i>
                    <span class="about us">About Us</span>
                </div>
                <div class="search-box">
                    <input type="text" placeholder="Search...">
                    <i class='bx bx-search'></i>
                </div>
            </nav>

            <section id="about-us" class="about-section">
                <div class="about-container">

                    <h2>About Us</h2>
                    <p>
                        Welcome to the Lost & Found, a system designed to help reunite lost items with their
                        rightful owners. Our mission is to make the process of reporting, finding, and returning lost
                        items as seamless as
                        possible. Whether you've lost an item or found something that doesn't belong to you, our
                        platform provides an
                        easy-to-use solution for everyone involved.
                    </p>
                    <h2>Our Goal</h2>
                    <p>
                        We aim to foster a responsible and cooperative community where everyone contributes to reducing
                        the
                        stress and inconvenience of lost belongings. Our user-friendly interface allows quick reporting
                        of lost and
                        found items and ensures transparency in the matching and returning processes.
                    </p>
                    <h2>Contact Us</h2>
                    <p>
                        If you have any questions, feedback, or need assistance, feel free to reach out to our support
                        team
                        via
                        <a href="mailto:support@lostandfound.com">support@lostandfound.com</a>. We're here to help!
                    </p>
                </div>
                <script>
                    let sidebar = document.querySelector(".sidebar");
                    let sidebarBtn = document.querySelector(".sidebarBtn");

                    sidebarBtn.onclick = function() {
                        sidebar.classList.toggle("active");
                        if (sidebar.classList.contains("active")) {
                            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
                        } else {
                            sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
                        }
                    }

                    document.addEventListener('DOMContentLoaded', function() {
                        // Toggle Items Dropdown
                        const selectMenuItems = document.querySelector('.select-menu');
                        const selectBtnItems = selectMenuItems.querySelector('.select-btn');
                        selectBtnItems.addEventListener('click', () => {
                            selectMenuItems.classList.toggle('active');
                        });

                        // Get all item buttons
                        const lostButton = document.getElementById('ilost-btn');
                        const foundButton = document.getElementById('ifound-btn');
                        const matchedButton = document.getElementById('imatched-btn');
                        const returnedButton = document.getElementById('ireturned-btn');

                        // Add click event listeners
                        lostButton.addEventListener('click', () => {
                            // Your action for lost items
                            console.log("Lost items button clicked");
                            // Redirect or perform action here
                            window.location.href = "{{ route('ilost') }}"; // Change URL accordingly
                        });

                        foundButton.addEventListener('click', () => {
                            // Your action for found items
                            console.log("Found items button clicked");
                            // Redirect or perform action here
                            window.location.href = "{{ route('ifound') }}"; // Change URL accordingly
                        });

                        matchedButton.addEventListener('click', () => {
                            // Your action for matched items
                            console.log("Matched items button clicked");
                            // Redirect or perform action here
                            window.location.href = "{{ route('imatched') }}"; // Change URL accordingly
                        });

                        returnedButton.addEventListener('click', () => {
                            // Your action for returned items
                            console.log("Returned items button clicked");
                            // Redirect or perform action here
                            window.location.href = "{{ route('ireturned') }}"; // Change URL accordingly
                        });


                        // Toggle Post Dropdown
                        const selectMenuPost = document.querySelector('.select-menu-post');
                        const selectBtnPost = selectMenuPost.querySelector('.select-btn-post');
                        selectBtnPost.addEventListener('click', () => {
                            selectMenuPost.classList.toggle('active');
                        });

                        const postlostButton = document.getElementById('plost-btn');
                        const postfoundButton = document.getElementById('pfound-btn');

                        // Add click event listeners
                        postlostButton.addEventListener('click', () => {
                            // Your action for lost items
                            console.log("Lost post button clicked");
                            // Redirect or perform action here
                            window.location.href = "{{ route('plost') }}"; // Change URL accordingly
                        });

                        postfoundButton.addEventListener('click', () => {
                            // Your action for found items
                            console.log("Found post button clicked");
                            // Redirect or perform action here
                            window.location.href = "{{ route('pfound') }}"; // Change URL accordingly
                        });


                        // Activate About Us Button
                        const aboutUsLink = document.querySelector('a[href="#"]');
                        aboutUsLink.addEventListener('click', () => {
                            window.location.href =
                                "{{ route('about-us') }}"; // Change this to your actual About Us page
                        });

                        // Activate Send Feedback Button
                        const sendFeedbackLink = document.querySelector('a[href="#"]:nth-of-type(2)');
                        sendFeedbackLink.addEventListener('click', () => {
                            window.location.href = 'feedback.html'; // Change this to your actual Feedback page
                        });

                        // Logout Button Functionality
                        const logoutBtn = document.getElementById('logoutBtn');
                        logoutBtn.addEventListener('click', () => {
                            window.location.href = "{{ route('login') }}"; // Add the appropriate route or URL
                        });
                    });

                    // SweetAlert for the logout button
                    document.getElementById('logoutBtn').addEventListener('click', function(e) {
                        e.preventDefault(); // Prevent the default link behavior
                        Swal.fire({
                            title: 'Are you sure?',
                            text: "You will be logged out!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#0A2558',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes '
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = this.href; // Redirect to logout if confirmed
                            }
                        });
                    });
                </script>

            </section>
    </body>

    </html>
</div>
</div>
