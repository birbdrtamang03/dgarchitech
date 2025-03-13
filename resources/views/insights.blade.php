<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Showcase</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            overflow-x: hidden;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow-y: scroll;
            height: 100vh;
        }

        .project {
            width: 80%;
            height: 300px;
            margin: 20px 0;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: transform 0.5s ease, box-shadow 0.5s ease;
        }

        .project:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .project-content {
            font-size: 1.5rem;
            color: #333;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .project.active .project-content {
            opacity: 1;
        }

        .details-section {
            display: flex;
            width: 100%;
            height: 100vh;
            transition: transform 1s ease-in-out;
            overflow-x: auto;
            padding: 0 20px;
        }

        .details {
            flex: 0 0 60%;
            padding: 20px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-right: 20px;
        }

        .details img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .details p {
            font-size: 1.2rem;
            color: #555;
        }

        .footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: white;
        }

        /* Bouncing animation */
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }

        .project {
            animation: bounce 2s ease infinite;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="project" id="project1" onclick="showDetails('project1')">
            <div class="project-content">Project 1</div>
        </div>
        <div class="project" id="project2" onclick="showDetails('project2')">
            <div class="project-content">Project 2</div>
        </div>
        <div class="project" id="project3" onclick="showDetails('project3')">
            <div class="project-content">Project 3</div>
        </div>
        <!-- Add more projects here as needed -->
    </div>

    <div class="details-section" id="details-section">
        <div class="details" id="details-project1">
            <img src="https://via.placeholder.com/600" alt="Project 1 Image">
            <h2>Project 1 Details</h2>
            <p>This is a detailed description of Project 1...</p>
        </div>
        <div class="details" id="details-project2">
            <img src="https://via.placeholder.com/600" alt="Project 2 Image">
            <h2>Project 2 Details</h2>
            <p>This is a detailed description of Project 2...</p>
        </div>
        <div class="details" id="details-project3">
            <img src="https://via.placeholder.com/600" alt="Project 3 Image">
            <h2>Project 3 Details</h2>
            <p>This is a detailed description of Project 3...</p>
        </div>
        <!-- Add more detailed sections as needed -->
    </div>

    <footer class="footer">
        <p>&copy; 2025 Your Company</p>
    </footer>

    <script>
        function showDetails(projectId) {
            const projects = document.querySelectorAll('.project');
            const detailsSection = document.getElementById('details-section');
            const project = document.getElementById(projectId);
            const projectDetails = document.getElementById(`details-${projectId}`);

            // Reset previous active project
            projects.forEach(p => p.classList.remove('active'));
            document.querySelectorAll('.details').forEach(detail => {
                detail.style.display = 'none';
            });

            // Zoom in and show details for the clicked project
            project.classList.add('active');
            projectDetails.style.display = 'block';

            // Smooth horizontal scrolling for details
            detailsSection.scrollTo({
                left: projectDetails.offsetLeft,
                behavior: 'smooth'
            });
        }
    </script>

</body>
</html>
