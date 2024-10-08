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
                padding-left: 60px;
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

            .home-section {
                flex-wrap: wrap;
                display: flex;

            }

            .container {
                width: 1200px;
                margin: auto;
                margin-top: 8%;
                margin-bottom: 4%;
                position: relative;
                background: #fff;
                padding: 25px;
                border-radius: 8px;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            }

            .container header {
                padding: 30px;
                font-size: 1.5rem;
                color: #0A2558;
                font-weight: 700;
                text-align: center;
            }

            .container .form {
                margin-top: 30px;
                text-align: left;
            }

            .form .input-box {
                width: 100%;
                margin-top: 20px;
            }

            .input-box label {
                color: #333;
            }

            .form :where(.input-box input, .select-box) {
                position: relative;
                height: 50px;
                width: 100%;
                outline: none;
                font-size: 1rem;
                color: #707070;
                margin-top: 8px;
                border: 1px solid #ddd;
                border-radius: 6px;
                padding: 0 15px;
            }

            .input-box input:focus {
                box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
            }

            .form .column {
                display: flex;
                column-gap: 15px;
            }

            .description :where(input, .select-box) {
                margin-top: 15px;
                margin-bottom: 10px;
                padding: 30px;
                border-radius: 8px;
            }

            .form-button-group {
                display: flex;
                justify-content: center;
                margin-top: 30px;
            }

            .form-button-group button {
                height: 55px;
                width: 100px;
                /* Ensures both buttons have the same width */
                color: #fff;
                font-size: 1rem;
                font-weight: 400;
                margin: 0 10px;
                /* Adds space between buttons */
                border: none;
                border-radius: 8px;
                cursor: pointer;
                transition: all 0.2s ease;
                background: #0A2558;
            }

            .form-button-group button.cancel-button {
                background: #E3413F;
                /* Red color for Cancel button */
            }

            .form-button-group button.cancel-button:hover {
                background: #C32F2E;
                /* Darker red on hover */
            }

            .file-uploader {
                width: 500px;
                background: #fff;
            }

            .uploader-header .uploader-title {
                font-size: 1.2rem;
                font-weight: 700;
                text-transform: uppercase;
            }

            .uploader-header .file-completed-status {
                font-size: 1rem;
                font-weight: 500;
                color: #333;
            }

            .file-uploader .file-list {
                list-style: none;
                width: 100%;
                padding-bottom: 10px;
                max-height: 400px;
                overflow-y: auto;
                scrollbar-color: #999 transparent;
                scrollbar-width: thin;
            }

            .file-uploader .file-list:has(li) {
                padding: 20px;
            }

            .file-list .file-item {
                display: flex;
                gap: 14px;
                margin-bottom: 22px;
            }

            .file-list .file-item:last-child {
                margin-bottom: 0px;
            }

            .file-list .file-item .file-extension {
                height: 50px;
                width: 50px;
                color: #fff;
                display: flex;
                text-transform: uppercase;
                align-items: center;
                justify-content: center;
                border-radius: 15px;
                background: #0A2558;
            }

            .file-list .file-item .file-content-wrapper {
                flex: 1;
            }

            .file-list .file-item .file-content {
                display: flex;
                width: 100%;
                justify-content: space-between;
            }

            .file-list .file-item .file-name {
                font-size: 1rem;
                font-weight: 600;
            }

            .file-list .file-item .file-info {
                display: flex;
                gap: 5px;
            }

            .file-list .file-item .file-info small {
                color: #5c5c5c;
                margin-top: 5px;
                display: block;
                font-size: 0.9rem;
                font-weight: 500;
            }

            .file-list .file-item .file-info .file-status {
                color: #0A2558;
            }

            .file-list .file-item .cancel-button {
                align-self: center;
                border: none;
                outline: none;
                background: none;
                cursor: pointer;
                font-size: 1.4rem;
            }

            .file-list .file-item .cancel-button:hover {
                color: #E3413F;
            }

            .file-list .file-item .file-progress-bar {
                width: 100%;
                height: 3px;
                margin-top: 10px;
                border-radius: 30px;
                background: #d9d9d9;
            }

            .file-list .file-item .file-progress-bar .file-progress {
                width: 0%;
                height: inherit;
                border-radius: inherit;
                background: #0A2558;
            }

            .file-uploader .file-upload-box {
                min-height: 150px;
                width: 1150px;
                display: flex;
                align-items: center;
                border-radius: 5px;
                justify-content: center;
                border: 2px dashed #B1ADD4;
                transition: all 0.2s ease;
            }

            .file-uploader .file-upload-box.active {
                border: 2px solid #0A2558;
                background: #F3F6FF;
            }

            .file-uploader .file-upload-box .box-title {
                font-size: 1.05rem;
                font-weight: 500;
                color: #626161;
            }

            .file-uploader .file-upload-box.active .box-title {
                pointer-events: none;
            }

            .file-upload-box .box-title .file-browse-button {
                color: #0A2558;
                cursor: pointer;
            }

            .file-upload-box .box-title .file-browse-button:hover {
                text-decoration: underline;
            }

            .form button:hover {
                background: #081D45;
            }

            /*Responsive*/
            @media screen and (max-width: 500px) {
                .form .column {
                    flex-wrap: wrap;
                }

                .form :where(.gender-option, .gender) {
                    row-gap: 15px;
                }
            }
            .error-message {
        color: red;
        font-size: 0.9em;
        display: block;
        margin-top: 5px;
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
                    <a class="" href="{{ route('about-us') }}">
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
                    <span class="Post">Post</span>
                </div>
                <div class="search-box">
                    <input type="text" placeholder="Search...">
                    <i class='bx bx-search'></i>
                </div>
            </nav>
            <section class="container">
                <header>REPORT FOUND</header>
                <form action="#" class="form" onsubmit="return validateForm()">
                    <div class="input-box">
                        <label>First Name</label>
                        <input type="text" id="first-name" placeholder="Enter First name" required />
                        <span id="first-name-error" class="error-message"></span> <!-- Error message for first name -->
                    </div>
                    <div class="input-box">
                        <label>Last Name</label>
                        <input type="text" id="last-name" placeholder="Enter last name" required />
                        <span id="last-name-error" class="error-message"></span> <!-- Error message for last name -->
                    </div>
                    <div class="input-box">
                        <label>Middle Initial</label>
                        <input type="text" id="middle-initial" placeholder="Enter Middle initial" required />
                        <span id="middle-initial-error" class="error-message"></span> <!-- Error message for middle initial -->
                    </div>
                
                    <div class="input-box">
                        <label>Email or Phone no.</label>
                        <input type="text" placeholder="Enter Email or Phone no." required />
                    </div>
                    <div class="column">
                        <div class="input-box">
                            <label>Date</label>
                            <input type="date" placeholder="Enter Date" />
                            <label>Time</label>
                            <input type="time" placeholder="Enter Time" />
                        </div>
                        <div class="input-box">
                            <label>Location</label>
                            <input type="location" placeholder="Enter Location Found" />
                        </div>
                    </div>
                    <div class="input-box description">
                        <label>Description</label>
                        <input type="text" placeholder="Enter Description" required />
                    </div>
                    <div class="file-uploader">
                        <div class="uploader-header">
                            <h4 class="file-completed-status"></h4>
                        </div>
                        <ul class="file-list"></ul>
                        <div class="file-upload-box">
                            <h2 class="box-title">
                                <span class="file-instruction">Drag files here or</span>
                                <span class="file-browse-button">browse</span>
                            </h2>
                            <input class="file-browse-input" type="file" multiple hidden>
                        </div>
                    </div>
                    <div class="form-button-group">
                        <button type="button" class="cancel-button" onclick="handleCancel()">Cancel</button>
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </section>

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

    const fileList = document.querySelector(".file-list");
    const fileBrowseButton = document.querySelector(".file-browse-button");
    const fileBrowseInput = document.querySelector(".file-browse-input");
    const fileUploadBox = document.querySelector(".file-upload-box");
    const fileCompletedStatus = document.querySelector(".file-completed-status");

    let totalFiles = 0;
    let completedFiles = 0;

    // Function to create HTML for each file item
    const createFileItemHTML = (file, uniqueIdentifier) => {
        // Extracting file name, size, and extension
        const {
            name,
            size
        } = file;
        const extension = name.split(".").pop();
        const formattedFileSize = size >= 1024 * 1024 ? `${(size / (1024 * 1024)).toFixed(2)} MB` :
            `${(size / 1024).toFixed(2)} KB`;

        // Generating HTML for file item
        return `<li class="file-item" id="file-item-${uniqueIdentifier}">
                <div class="file-extension">${extension}</div>
                <div class="file-content-wrapper">
                <div class="file-content">
                    <div class="file-details">
                    <h5 class="file-name">${name}</h5>
                    <div class="file-info">
                        <small class="file-size">0 MB / ${formattedFileSize}</small>
                        <small class="file-divider">•</small>
                        <small class="file-status">Uploading...</small>
                    </div>
                    </div>
                    <button class="cancel-button">
                    <i class="bx bx-x"></i>
                    </button>
                </div>
                <div class="file-progress-bar">
                    <div class="file-progress"></div>
                </div>
                </div>
            </li>`;
    }

    // Existing script content...

    // Function to handle cancel button click
    function handleCancel() {
        // Clear all input fields in the form
        document.querySelector('.form').reset();
        // Optionally, you can also reset the file list
        fileList.innerHTML = '';
        completedFiles = 0; // Reset completed files count
        totalFiles = 0; // Reset total files count
        fileCompletedStatus.innerText = ''; // Clear file completed status
    }

    // Existing script content...


    // Function to handle file uploading
    const handleFileUploading = (file, uniqueIdentifier) => {
        const xhr = new XMLHttpRequest();
        const formData = new FormData();
        formData.append("file", file);

        // Adding progress event listener to the ajax request
        xhr.upload.addEventListener("progress", (e) => {
            // Updating progress bar and file size element
            const fileProgress = document.querySelector(`#file-item-${uniqueIdentifier} .file-progress`);
            const fileSize = document.querySelector(`#file-item-${uniqueIdentifier} .file-size`);

            // Formatting the uploading or total file size into KB or MB accordingly
            const formattedFileSize = file.size >= 1024 * 1024 ?
                `${(e.loaded / (1024 * 1024)).toFixed(2)} MB / ${(e.total / (1024 * 1024)).toFixed(2)} MB` :
                `${(e.loaded / 1024).toFixed(2)} KB / ${(e.total / 1024).toFixed(2)} KB`;

            const progress = Math.round((e.loaded / e.total) * 100);
            fileProgress.style.width = `${progress}%`;
            fileSize.innerText = formattedFileSize;
        });

        // Opening connection to the server API endpoint "api.php" and sending the form data
        xhr.open("POST", "api.php", true);
        xhr.send(formData);

        return xhr;
    }

    // Function to handle selected files
    const handleSelectedFiles = ([...files]) => {
        if (files.length === 0) return; // Check if no files are selected
        totalFiles += files.length;

        files.forEach((file, index) => {
            const uniqueIdentifier = Date.now() + index;
            const fileItemHTML = createFileItemHTML(file, uniqueIdentifier);
            // Inserting each file item into file list
            fileList.insertAdjacentHTML("afterbegin", fileItemHTML);
            const currentFileItem = document.querySelector(`#file-item-${uniqueIdentifier}`);
            const cancelFileUploadButton = currentFileItem.querySelector(".cancel-button");

            const xhr = handleFileUploading(file, uniqueIdentifier);

            // Update file status text and change color of it 
            const updateFileStatus = (status, color) => {
                currentFileItem.querySelector(".file-status").innerText = status;
                currentFileItem.querySelector(".file-status").style.color = color;
            }

            xhr.addEventListener("readystatechange", () => {
                // Handling completion of file upload
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                    completedFiles++;
                    cancelFileUploadButton.remove();
                    updateFileStatus("Completed", "#00B125");
                    fileCompletedStatus.innerText =
                        `${completedFiles} / ${totalFiles} files completed`;
                }
            });

            // Handling cancellation of file upload
            cancelFileUploadButton.addEventListener("click", () => {
                xhr.abort(); // Cancel file upload
                updateFileStatus("Cancelled", "#E3413F");
                cancelFileUploadButton.remove();
            });

            // Show Alert if there is any error occured during file uploading
            xhr.addEventListener("error", () => {
                updateFileStatus("Error", "#E3413F");
                alert("An error occurred during the file upload!");
            });
        });

        fileCompletedStatus.innerText = `${completedFiles} / ${totalFiles} files completed`;
    }

    // Function to handle file drop event
    fileUploadBox.addEventListener("drop", (e) => {
        e.preventDefault();
        handleSelectedFiles(e.dataTransfer.files);
        fileUploadBox.classList.remove("active");
        fileUploadBox.querySelector(".file-instruction").innerText = "Drag files here or";
    });

    // Function to handle file dragover event
    fileUploadBox.addEventListener("dragover", (e) => {
        e.preventDefault();
        fileUploadBox.classList.add("active");
        fileUploadBox.querySelector(".file-instruction").innerText = "Release to upload or";
    });

    // Function to handle file dragleave event
    fileUploadBox.addEventListener("dragleave", (e) => {
        e.preventDefault();
        fileUploadBox.classList.remove("active");
        fileUploadBox.querySelector(".file-instruction").innerText = "Drag files here or";
    });

    fileBrowseInput.addEventListener("change", (e) => handleSelectedFiles(e.target.files));
    fileBrowseButton.addEventListener("click", () => fileBrowseInput.click());
    
    function validateForm() {
        let isValid = true;

        let firstName = document.getElementById('first-name').value.trim();
        let lastName = document.getElementById('last-name').value.trim();
        let middleInitial = document.getElementById('middle-initial').value.trim();

        let namePattern = /^[A-Za-z]+$/; // Pattern to disallow numbers
        
        // Clear previous error messages
        document.getElementById('first-name-error').textContent = "";
        document.getElementById('last-name-error').textContent = "";
        document.getElementById('middle-initial-error').textContent = "";

        // Validate First Name
        if (!namePattern.test(firstName)) {
            document.getElementById('first-name-error').textContent = "First name should not contain numbers.";
            isValid = false;
        }

        // Validate Last Name
        if (!namePattern.test(lastName)) {
            document.getElementById('last-name-error').textContent = "Last name should not contain numbers.";
            isValid = false;
        }

        // Validate Middle Initial (should be one letter, no numbers)
        if (!namePattern.test(middleInitial) || middleInitial.length !== 1) {
            document.getElementById('middle-initial-error').textContent = "Middle initial should be a single letter.";
            isValid = false;
        }

        return isValid; // Only submit if all validations pass
    }
</script>

</section>
</body>

</html>
</div>
