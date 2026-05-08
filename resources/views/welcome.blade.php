<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Mahadi hassan | Technical Support & Developer Portfolio</title>
    <!-- Google Fonts & Simple Icons -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,600;14..32,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f4f7fc;
            color: #1a2c3e;
            line-height: 1.5;
            scroll-behavior: smooth;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* header / nav */
        header {
            background: #014672;
            color: white;
            padding: 18px 0;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .nav-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .logo {
            font-size: 1.6rem;
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        .logo span {
            color: #7ad0ff;
        }

        .nav-links {
            display: flex;
            gap: 28px;
            list-style: none;
        }

        .nav-links a {
            color: #f0f9ff;
            text-decoration: none;
            font-weight: 500;
            transition: 0.2s;
            font-size: 1rem;
        }

        .nav-links a:hover {
            color: #7ad0ff;
        }

        /* hero section */
        .hero {
            background: linear-gradient(135deg, #e9f2f7 0%, #ffffff 100%);
            padding: 64px 0 56px;
            border-bottom: 1px solid #dce7ef;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .hero-grid {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
        }

        .hero-content {
            flex: 1.2;
        }

        .hero-content .badge {
            background: #0f2b3d20;
            display: inline-block;
            padding: 6px 14px;
            border-radius: 40px;
            font-size: 0.8rem;
            font-weight: 600;
            color: #34167b;
            margin-bottom: 20px;
        }

        .hero-content h1 {
            font-size: 2.8rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 16px;
            color: #11212e;
        }

        .hero-role {
            font-size: 1.3rem;
            font-weight: 500;
            color: #2c5a74;
            margin-bottom: 16px;
        }

        .hero-desc {
            font-size: 1rem;
            color: #2c4b66;
            max-width: 550px;
            margin-bottom: 28px;
        }

        .work-link {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: #0f2b3d;
            color: white;
            padding: 12px 26px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.25s;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.05);
        }

        .work-link i {
            font-size: 1rem;
        }

        .work-link:hover {
            background: #1b4b6e;
            transform: translateY(-2px);
        }



        .hero-img i {
            font-size: 100px;
            color: #1f5777;
        }

        /* section style */
        section {
            padding: 68px 0;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 48px;
            position: relative;
            display: inline-block;
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: -12px;
            left: 0;
            width: 70px;
            height: 4px;
            background: #1f7b9e;
            border-radius: 4px;
        }

        /* projects cards */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 32px;
        }

        .project-card {
            background: white;
            border-radius: 28px;
            overflow: hidden;
            box-shadow: 0 12px 24px -12px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: 1px solid #e2edf5;
        }

        .project-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 24px 36px -16px rgba(0, 0, 0, 0.18);
            border-color: #cbdde9;
        }

        .card-icon {
            background: #eef4fa;
            padding: 28px 0 16px 28px;
            font-size: 2.8rem;
            color: #1f5777;
        }

        .card-content {
            padding: 16px 24px 28px;
        }

        .card-content h3 {
            font-size: 1.5rem;
            margin-bottom: 12px;
            font-weight: 700;
        }

        .card-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin: 16px 0 14px;
        }

        .tech-tag {
            background: #e3f0f9;
            color: #1c5a7a;
            font-size: 0.7rem;
            font-weight: 600;
            padding: 4px 12px;
            border-radius: 20px;
        }

        .card-desc {
            color: #2c4e6e;
            font-size: 0.9rem;
            margin-bottom: 18px;
        }

        /* current job highlight */
        .job-highlight {
            background: linear-gradient(120deg, #eef2f6, #ffffff);
            border-radius: 40px;
            padding: 32px 36px;
            margin-top: 20px;
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.03);
            border: 1px solid #cfe0eb;
        }

        .job-flex {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 32px;
        }

        .job-icon {
            font-size: 70px;
            color: #236b8e;
            background: #d6e9f3;
            width: 120px;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 60px;
        }

        .job-details h3 {
            font-size: 1.7rem;
            font-weight: 700;
        }

        .job-details h4 {
            font-size: 1.2rem;
            font-weight: 600;
            color: #0f5c7a;
            margin: 8px 0 12px;
        }

        .job-details p {
            max-width: 550px;
            color: #2b4d66;
        }

        /* Skills & tools */
        .skills-flex {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            margin-top: 20px;
        }

        .skill-badge {
            background: white;
            padding: 10px 22px;
            border-radius: 50px;
            font-weight: 500;
            color: #1b4b6e;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.03);
            border: 1px solid #cde1ed;
            transition: 0.1s;
        }

        .contact-area {
            background: #014672;
            color: white;
            border-radius: 32px;
            text-align: center;

        }

        .contact-area .section-title {
            color: white;
        }

        .contact-area .section-title:after {
            background: #7ad0ff;
        }

        .contact-icons {
            display: flex;
            justify-content: center;
            gap: 36px;
            flex-wrap: wrap;

        }

        .contact-icons a {
            color: white;
            font-size: 1.1rem;
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: #1d4f6e;
            padding: 12px 28px;
            border-radius: 60px;
            text-decoration: none;
            transition: 0.2s;
        }

        .contact-icons a i {
            font-size: 1.3rem;
        }

        .contact-icons a:hover {
            background: #307197;
            transform: scale(1.02);
        }

        footer {
            text-align: center;

            font-size: 0.85rem;
            color: #5e7f97;
            border-top: 1px solid #d1e2ed;
        }

        @media (max-width: 760px) {
            .nav-bar {
                flex-direction: column;
                gap: 12px;
            }

            .hero-content h1 {
                font-size: 2rem;
            }

            .section-title {
                font-size: 1.7rem;
            }

            .job-flex {
                flex-direction: column;
                text-align: center;
            }

            .job-details p {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-grid {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <header>
        <div class="container nav-bar">
            <div class="logo">Mahadi Hassan's <span>Portfolio</span></div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#contact">Connect</a></li>
            </ul>
        </div>
    </header>

    <main>
        <!-- Hero / Home section -->
        <section id="home" class="hero">
            <div class="hero-img">
                <img style="width: 300px; height: 300px; border-radius: 50%;" src="{{ asset('pics/image.png') }}"
                    alt="Image">
            </div>
            <div class="container hero-grid">
                <div class="hero-content">

                    <h1>Hi, I’m Mahadi Hassan<br> a Full-Stack Developer, Technical Supporter & Project Builder</h1>
                    <div class="hero-role">⚙️ Technical Support @ jobs.kiu.ac.bd</div>
                    <p class="hero-desc">Building robust internal tools, API integrations & support systems. Passionate
                        about solving real-world inefficiencies with clean code and user-first mindset.</p>
                    <a href="#projects" class="work-link"><i class="fas fa-arrow-down"></i> Explore my work</a>
                </div>

            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects">
            <div class="container">
                <h2 class="section-title">Featured Projects</h2>
                <div class="projects-grid">
                    <div class="project-card">
                        <div class="card-icon">
                            <i class="fas fa-blog"></i>
                        </div>

                        <div class="card-content">
                            <h3>Blog Site</h3>

                            <div class="card-tech">
                                <span class="tech-tag">Laravel</span>
                                <span class="tech-tag">MySQL</span>
                                <span class="tech-tag">Tailwind</span>
                            </div>

                            <p class="card-desc">
                                Modern blog platform with post management, categories, comments,
                                authentication, and responsive UI. Includes admin dashboard for
                                content publishing and SEO-friendly article structure.
                            </p>

                            <div style="font-size: 0.8rem; color:#2c7969;">
                               
                                <a href="https://blog-mahadi.Infinityfreeapp.com" style="color:white; background: rgb(47, 47, 245); padding: 10px; border-radius: 10px; shape-outside: margin-box;" target="_blank">Click Here</a>
                            </div>
                        </div>
                    </div>
                    <!-- Library Management System -->
                    <div class="project-card">
                        <div class="card-icon"><i class="fas fa-book-open"></i></div>
                        <div class="card-content">
                            <h3>📚 Library Management System</h3>
                            <div class="card-tech">
                                <span class="tech-tag">Laravel</span>
                                <span class="tech-tag">MySQL</span>
                                <span class="tech-tag">Tailwind</span>
                            </div>
                            <p class="card-desc">Complete solution for managing books, members, borrowing/return flows,
                                and late fee automation. Role-based dashboards for librarians & students, real-time
                                availability tracking.</p>
                            <div style="font-size: 0.8rem; color:#2c7969;">
                                <a href="https://smart.librarymh.xyz">Go to</a>
                            </div>
                        </div>
                    </div>
                    <!-- Male Hall Meal Management -->
                    <div class="project-card">
                        <div class="card-icon"><i class="fas fa-utensils"></i></div>
                        <div class="card-content">
                            <h3>🍛 Male Hall Meal Management</h3>
                            <div class="card-tech">
                                <span class="tech-tag">PHP / Laravel</span>
                                <span class="tech-tag">MySQL</span>
                                <span class="tech-tag">Tailwind CSS</span>
                            </div>
                            <p class="card-desc">Digitized meal tracking for university residential halls. Features meal
                                count, monthly billing, menu scheduling, and dynamic reporting. Reduced manual errors by
                                80% for hall admins.</p>
                            <a href="https://hall.librarymh.xyz" target="_blank">See more</a>
                        </div>
                    </div>
                    <!-- Weather API Integration -->
                    <div class="project-card">
                        <div class="card-icon"><i class="fas fa-cloud-sun-rain"></i></div>
                        <div class="card-content">
                            <h3>🌦️ Weather API Integration</h3>
                            <div class="card-tech">
                                <span class="tech-tag">JavaScript / Fetch API</span>
                                <span class="tech-tag">OpenWeatherMap</span>
                                <span class="tech-tag">HTML/CSS</span>
                            </div>
                            <p class="card-desc">Real-time weather web app with location detection, 5-day forecast, and
                                dynamic icons. Integrated RESTful API, error handling, and responsive UI. Showcases API
                                consumption skills.</p>
                            <div style="font-size: 0.8rem; color:#2c7969;">
                                <a href="https://weather.librarymh.xyz" target="_blank">Visit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Current Work Experience (Technical Support @ jobs.kiu.ac.bd) -->
        <section id="experience">
            <div class="container">
                <h2 class="section-title">Current Role & Impact</h2>
                <div class="job-highlight">
                    <div class="job-flex">
                        <div class="job-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div class="job-details">
                            <h3>Technical Support Engineer</h3>
                            <h4><i class="fas fa-building"></i> <a href="https://jobs.kiu.ac.bd">jobs.kiu.ac.bd</a> jobs.kiu.ac.bd — Kihsoreganj University Job Portal
                                University</h4>
                            <p>Work on some form and backend logic</p>
                           <p>Making pdf , admit card auto generation </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills & Tech Stack -->
        <section id="skills">
            <div class="container">
                <h2 class="section-title">Technical Toolkit</h2>
                <div class="skills-flex">
                    
                    <span class="skill-badge"><i class="fab fa-php"></i> PHP</span>
                    <span class="skill-badge"><i class="fab fa-js"></i> JavaScript </span>
                    <span class="skill-badge"><i class="fas fa-database"></i> MySQL </span>
                    <span class="skill-badge"><i class="fab fa-laravel"></i> Laravel</span>
                    
                    <span class="skill-badge"><i class="fas fa-cloud-upload-alt"></i> REST APIs</span>
                    <span class="skill-badge"><i class="fab fa-git-alt"></i> Git/GitHub</span>
                    <span class="skill-badge"><i class="fas fa-server"></i> Linux / Apache</span>
  
                </div>
                <div style="margin-top: 32px; background: #eef3f8; border-radius: 28px; padding: 20px 28px;">
                    <p style="font-weight: 600;"><i class="fas fa-lightbulb"></i> Support + Dev mindset:</p>
                    <p style="margin-top: 8px;">I blend hands-on development with systematic technical support — from
                        writing clean modular code to troubleshooting production issues. My projects reflect real needs
                        of academic and institutional environments.</p>
                </div>
            </div>
        </section>

        <!-- Contact / Connect section -->
        <section id="contact">
            <div class="container">
                <div class="contact-area">
                    <h2 class="section-title" style="color: white;">Let’s Connect</h2>
                    <p style="margin-bottom: 24px; opacity: 0.9;">Open to collaboration, freelance projects, or just
                        tech discussions.</p>
                    <div class="contact-icons">
                        <a href="mailto:Mahadi Hassan's @kiu.ac.bd" target="_blank"><i class="fas fa-envelope"></i>
                            mahadi.cse.21@gmail.com</a>
                        <a href="https://www.linkedin.com/in/mahadi-hassan-695b9426a" target="_blank"><i class="fab fa-linkedin"></i> LinkedIn</a>
                        <a href="https://github.com/mahad-cse-21" target="_blank"><i class="fab fa-github"></i> GitHub</a>
                        
                    </div>
                    <p style="margin-top: 32px; font-size: 0.85rem;"><i class="fas fa-map-marker-alt"></i> Kishoreganj,
                        Bangladesh | Technical Support @ jobs.kiu.ac.bd</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>© 2026 Mahadi hassan — Built with <i class="fas fa-heart" style="color: #ff8c8c;"></i> for portfolio |
            </p>
            <p style="margin-top: 8px; font-size:0.75rem;">“Solve real problems with code & empathy”</p>
        </div>
    </footer>

    <!-- simple smooth scroll behaviour -->
    <script>
        document.querySelectorAll('.nav-links a, .work-link').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href && href.startsWith('#')) {
                    e.preventDefault();
                    const targetId = href.substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                }
            });
        });
        // add an interactive badge
        console.log("Portfolio ready — Library, Meal, Weather, and Technical Support at jobs.kiu.ac.bd");
    </script>
</body>

</html>