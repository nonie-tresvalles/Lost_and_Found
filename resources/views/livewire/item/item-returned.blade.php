<div>

    <!DOCTYPE html>
    <html lang="en" dir="ltr">

    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>
        <link rel="stylesheet" href="dashboard.css">
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
                transition: background 0.3s;
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

            .table-header {
                display: flex;
                align-items: center;
                margin-bottom: 15px;
                margin-top: 90px;
            }

            .table-section {
                padding: 10px;
                margin-left: 20px;
                margin-right: 20px;
            }

            .table-section h2 {
                padding: 10px;
                font-size: 24px;
                color: black;
            }

            .table-section table {
                width: 100%;
                border-collapse: collapse;
                height: 400px;
            }

            .table-section th,
            .table-section td {
                max-width: 100px;
                border: 1px solid #ddd;
                padding: 15px;
                text-align: left;
                height: 60px;
                vertical-align: top;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: normal;
            }

            .table-section th {
                background-color: #0A2558;
                color: white;
                font-weight: bold;
            }

            .table-section tr:nth-child(even) {
                background-color: #f9f9f9;
            }

            .table-section tr:hover {
                background-color: #f1f1f1;
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
                    <a href="{{ route('about-us') }}">
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
            </ul>
        </div>

        <section class="home-section">
            <nav>
                <div class="sidebar-button">
                    <i class='bx bx-menu sidebarBtn'></i>
                    <span class="item">Items</span>
                </div>
                <div class="search-box">
                    <input type="text" placeholder="Search...">
                    <i class='bx bx-search'></i>
                </div>
            </nav>

            <div class="table-section">
                <div class="table-header">
                    <h2>Returned Items</h2>
                </div>
                <table>
                    <thead>
                        <tr>
                        <tr>
                            <th>Name</th>
                            <th>Item Name</th>
                            <th>Image</th>
                            <th>Date/Time</th>
                            <th>Location</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Julito M. Tarroma</td>
                            <td>Wallet</td>
                            <td><img src="wallet.jpg" alt="Wallet" width="50"></td>
                            <td>2024-09-25 10:30 AM</td>
                            <td>Library</td>
                            <td>Black leather wallet with cards inside</td>
                        </tr>
                        <tr>
                            <td>Saivel Lucre</td>
                            <td>Umbrella</td>
                            <td><img src="umbrella.jpg" alt="Umbrella" width="50"></td>
                            <td>2024-09-24 3:00 PM</td>
                            <td>Cafeteria</td>
                            <td>Red umbrella with floral pattern</td>
                        </tr>
                        <tr>
                            <td>Dianne Cama</td>
                            <td>Notebook</td>
                            <td><img src="notebook.jpg" alt="Notebook" width="50"></td>
                            <td>2024-09-22 1:15 PM</td>
                            <td>Room 305</td>
                            <td>Blue notebook with math notes</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

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
    </body>

    </html>

</div>
