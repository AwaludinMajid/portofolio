<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M. Awaludin Majid - Resume</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: #f5f5f5;
            padding: 20px;
        }
        
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        
        header {
            text-align: center;
            border-bottom: 3px solid #FFD700;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        
        h1 {
            font-size: 32px;
            color: #0b1326;
            margin-bottom: 5px;
        }
        
        .contact-info {
            font-size: 13px;
            color: #666;
        }
        
        .contact-info a {
            color: #FFD700;
            text-decoration: none;
        }
        
        section {
            margin-bottom: 25px;
        }
        
        h2 {
            font-size: 16px;
            color: #0b1326;
            border-bottom: 2px solid #FFD700;
            padding-bottom: 8px;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .section-content {
            margin-left: 0;
        }
        
        .entry {
            margin-bottom: 15px;
        }
        
        .entry-title {
            font-weight: 600;
            color: #0b1326;
            font-size: 14px;
        }
        
        .entry-subtitle {
            color: #FFD700;
            font-size: 12px;
            font-weight: 500;
            margin-top: 2px;
        }
        
        .entry-date {
            color: #999;
            font-size: 12px;
            margin-top: 2px;
        }
        
        .entry-description {
            font-size: 12px;
            color: #555;
            margin-top: 5px;
            line-height: 1.5;
        }
        
        ul {
            margin-left: 20px;
            font-size: 12px;
            color: #555;
        }
        
        li {
            margin-bottom: 5px;
        }
        
        .skills-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }
        
        .skill-category {
            font-size: 12px;
        }
        
        .skill-category strong {
            color: #0b1326;
            display: block;
            margin-bottom: 5px;
        }
        
        .skill-items {
            color: #555;
            font-size: 11px;
            line-height: 1.6;
        }
        
        .print-button {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .print-button button {
            background: #FFD700;
            color: #0b1326;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            font-size: 14px;
        }
        
        @media print {
            body {
                background: white;
                padding: 0;
            }
            
            .print-button {
                display: none;
            }
            
            .container {
                box-shadow: none;
                max-width: 100%;
            }
        }
        
        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }
            
            h1 {
                font-size: 24px;
            }
            
            .skills-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="print-button">
        <button onclick="window.print()">Print / Save as PDF</button>
    </div>
    
    <div class="container">
        <header>
            <h1>M. AWALUDIN MAJID</h1>
            <div class="contact-info">
                <div>Tanggal Lahir: 09 Mei 2004 | Bogor, Indonesia</div>
                <div>📧 m.awaludinmajid@gmail.com | 📱 +62-852-1732-7220</div>
                <div>🔗 <a href="https://github.com/AwaludinMajid">GitHub Profile</a> | 🌐 <a href="http://127.0.0.1:8000">Portfolio Website</a></div>
            </div>
        </header>
        
        <!-- Professional Summary -->
        <section>
            <h2>Professional Summary</h2>
            <div class="section-content">
                <p style="font-size: 12px; color: #555; line-height: 1.6;">
                    Final-year Computer Science student (Semester 8) at Universitas Pancasakti Bekasi with hands-on experience in fullstack web development, mobile development (Flutter/Dart), and IT support. Currently completing thesis on POS application development using Firebase and Agile Kanban methodology. Proficient in Laravel, Flutter, MySQL, and Firebase. Strong problem-solving skills with quick adaptation to new technologies and team collaboration abilities.
                </p>
            </div>
        </section>
        
        <!-- Education -->
        <section>
            <h2>Education</h2>
            <div class="section-content">
                <div class="entry">
                    <div class="entry-title">Bachelor of Science in Computer Science</div>
                    <div class="entry-subtitle">Universitas Pancasakti Bekasi</div>
                    <div class="entry-date">2022 - Present (Semester 8 — Final Year)</div>
                    <div class="entry-description">
                        <strong>Focus:</strong> Web Development (Laravel, REST API), Mobile Development (Flutter/Dart), Database Management (MySQL, Firebase), Software Engineering, Agile Kanban Methodology
                    </div>
                </div>
                
                <div class="entry">
                    <div class="entry-title">Vocational Diploma in Network & Computer Engineering</div>
                    <div class="entry-subtitle">SMK Sumber Daya Bekasi</div>
                    <div class="entry-date">2019 - 2022</div>
                    <div class="entry-description">Focus on computer maintenance, network configuration, and system troubleshooting</div>
                </div>
            </div>
        </section>
        
        <!-- Experience -->
        <section>
            <h2>Professional Experience</h2>
            <div class="section-content">
                <div class="entry">
                    <div class="entry-title">Administrative Staff & IT Support Internship</div>
                    <div class="entry-subtitle">PT Pusat Bekam Internasional</div>
                    <div class="entry-date">April - June 2025</div>
                    <ul>
                        <li>Managed administrative documentation (scanning, laminating, digital uploads to internal systems)</li>
                        <li>Processed employee data and training records using Microsoft Excel</li>
                        <li>Performed software installation and computer maintenance for office network</li>
                        <li>Troubleshot network connectivity and device issues</li>
                        <li>Supported digitalization of company archives and records management</li>
                    </ul>
                </div>
                
                <div class="entry">
                    <div class="entry-title">Administrative Staff Internship</div>
                    <div class="entry-subtitle">Kelurahan Jatiasih (Government Office)</div>
                    <ul>
                        <li>Compiled and updated administrative reports and documentation</li>
                        <li>Supported daily administrative operations and public services</li>
                        <li>Provided basic technical support for office computers and network</li>
                        <li>Managed citizen data and population administration system</li>
                    </ul>
                </div>
            </div>
        </section>
        
        <!-- Skills -->
        <section>
            <h2>Technical Skills</h2>
            <div class="skills-grid">
                <div class="skill-category">
                    <strong>Mobile Development</strong>
                    <div class="skill-items">Flutter, Dart, Firebase Auth, Cloud Firestore, Firebase Storage</div>
                </div>
                
                <div class="skill-category">
                    <strong>Frontend Development</strong>
                    <div class="skill-items">HTML5, CSS3, JavaScript ES6+, Tailwind CSS, Blade Templating, Responsive Design</div>
                </div>
                
                <div class="skill-category">
                    <strong>Backend Development</strong>
                    <div class="skill-items">Laravel, PHP, REST API, Express.js, Node.js, Authentication (Sanctum/JWT)</div>
                </div>
                
                <div class="skill-category">
                    <strong>Database</strong>
                    <div class="skill-items">MySQL (Relational), Firebase Firestore (NoSQL), Database Design & Optimization</div>
                </div>
                
                <div class="skill-category">
                    <strong>Development Tools</strong>
                    <div class="skill-items">Git/GitHub, VS Code, Postman, Laragon, Docker Basics, Android Emulator</div>
                </div>
                
                <div class="skill-category">
                    <strong>IT Support & Administration</strong>
                    <div class="skill-items">OS Installation, Network Troubleshooting, Hardware Maintenance, Excel, Word</div>
                </div>
            </div>
        </section>
        
        <!-- Featured Projects -->
        <section>
            <h2>Featured Projects</h2>
            <div class="section-content">
                <div class="entry">
                    <div class="entry-title">POS Warung Es Kelapa Mobile Application</div>
                    <div class="entry-subtitle">Flutter, Dart, Firebase Firestore, Firebase Auth | Thesis Project</div>
                    <div class="entry-date">2024 - 2025</div>
                    <div class="entry-description">
                        Android mobile POS application designed for micro-retail warung business. Features include real-time transaction recording, inventory management, daily financial reports, and Agile Kanban-based workflow. Utilizes Firebase for cloud-based authentication and data synchronization.
                    </div>
                </div>
                
                <div class="entry">
                    <div class="entry-title">Pantau Cuaca - Weather Monitoring Platform</div>
                    <div class="entry-subtitle">Laravel, Weather API, Tailwind CSS, MySQL</div>
                    <div class="entry-description">
                        Real-time weather monitoring web application providing multi-province support across Indonesia. Displays detailed meteorological metrics, weather conditions, and live updates. Deployed on Railway cloud platform for production access.
                    </div>
                </div>
                
                <div class="entry">
                    <div class="entry-title">Personal Portfolio Website</div>
                    <div class="entry-subtitle">Laravel, Node.js, MySQL, Tailwind CSS, JavaScript | In Development</div>
                    <div class="entry-description">
                        Fullstack hybrid portfolio website showcasing projects, skills, and professional profile. Implements Laravel backend with REST API, MySQL database, and Node.js real-time features. Responsive design with dark theme and modern UI/UX.
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Strengths & Additional Info -->
        <section>
            <h2>Professional Strengths</h2>
            <div class="section-content">
                <ul style="margin-left: 0;">
                    <li><strong>Technical Expertise:</strong> Fullstack development with modern frameworks and cloud technologies</li>
                    <li><strong>Problem-Solving:</strong> Analytical approach to debugging, troubleshooting, and system optimization</li>
                    <li><strong>Adaptability:</strong> Quick learner who readily adopts new tools, frameworks, and methodologies</li>
                    <li><strong>Team Collaboration:</strong> Effective communicator and team player with experience in both individual and group projects</li>
                    <li><strong>Project Management:</strong> Experience with Agile Kanban methodology and iterative development</li>
                    <li><strong>Documentation:</strong> Attention to detail in code comments, technical documentation, and knowledge sharing</li>
                </ul>
            </div>
        </section>
        
        <!-- Additional Info -->
        <section>
            <h2>Additional Information</h2>
            <div class="section-content">
                <div class="entry">
                    <div class="entry-description">
                        <strong>Languages:</strong> Indonesian (Native), English (Intermediate - Technical proficiency)<br>
                        <strong>Certifications:</strong> Currently pursuing completion of Bachelor's degree with Thesis project<br>
                        <strong>Interests:</strong> Full-stack web development, mobile app development, cloud technologies, AI integration, system architecture<br>
                        <strong>Hobbies:</strong> Swimming, cycling, gaming
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
