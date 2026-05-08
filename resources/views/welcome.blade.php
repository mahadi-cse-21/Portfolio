<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="description" content="Mahadi Hassan - Technical Support Engineer & Full-Stack Developer Portfolio. Laravel, API integrations, support systems, and real-world projects.">
    <title>Mahadi Hassan | Technical Support & Full-Stack Developer</title>
    <!-- Google Fonts & Font Awesome -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f4f9fe;
            color: #0a2a3b;
            line-height: 1.5;
            scroll-behavior: smooth;
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 28px;
        }

        /* header / nav */
        header {
            background: #013e60;
            color: white;
            padding: 16px 0;
            position: sticky;
            top: 0;
            z-index: 100;
            backdrop-filter: blur(2px);
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.05);
        }

        .nav-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .logo {
            font-size: 1.65rem;
            font-weight: 800;
            letter-spacing: -0.4px;
            background: linear-gradient(135deg, #ffffff, #c4e6ff);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }

        .logo span {
            color: #ffdd99;
            background: none;
            -webkit-background-clip: unset;
            background-clip: unset;
        }

        .nav-links {
            display: flex;
            gap: 32px;
            list-style: none;
        }

        .nav-links a {
            color: #f0fcff;
            text-decoration: none;
            font-weight: 500;
            transition: 0.2s;
            font-size: 1rem;
        }

        .nav-links a:hover {
            color: #f9c96b;
            transform: translateY(-1px);
        }

        /* hero section */
        .hero {
            background: linear-gradient(105deg, #eef5fa 0%, #ffffff 100%);
            padding: 48px 0 56px;
            border-bottom: 1px solid #d4e3ef;
        }

        .hero-grid {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 48px;
        }

        .hero-content {
            flex: 1.2;
        }

        .hero-content .badge {
            background: #d9ecf5;
            display: inline-block;
            padding: 6px 18px;
            border-radius: 40px;
            font-size: 0.75rem;
            font-weight: 700;
            color: #015c83;
            margin-bottom: 20px;
            letter-spacing: 0.3px;
        }

        .hero-content h1 {
            font-size: 2.9rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
            color: #0a3144;
        }

        .hero-role {
            font-size: 1.25rem;
            font-weight: 600;
            color: #1d6f96;
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .hero-desc {
            font-size: 1rem;
            color: #2b5777;
            max-width: 560px;
            margin-bottom: 32px;
        }

        .work-link {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: #0e3f58;
            color: white;
            padding: 12px 30px;
            border-radius: 44px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.25s;
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.07);
        }

        .work-link i {
            font-size: 1rem;
        }

        .work-link:hover {
            background: #1c668b;
            transform: translateY(-3px);
            box-shadow: 0 14px 22px rgba(0, 0, 0, 0.1);
        }

        .hero-img img {
            width: 280px;
            height: 280px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid white;
            box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.2);
            background: #f3faff;
        }

        /* section style */
        section {
            padding: 72px 0;
        }

        .section-title {
            font-size: 2.1rem;
            font-weight: 700;
            margin-bottom: 48px;
            position: relative;
            display: inline-block;
            color: #023753;
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: -12px;
            left: 0;
            width: 70px;
            height: 4px;
            background: #2d8bb0;
            border-radius: 6px;
        }

        /* projects cards */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(310px, 1fr));
            gap: 34px;
        }

        .project-card {
            background: white;
            border-radius: 32px;
            overflow: hidden;
            box-shadow: 0 15px 28px -12px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 1px solid #e2edf5;
            display: flex;
            flex-direction: column;
        }

        .project-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 28px 40px -16px rgba(0, 0, 0, 0.18);
            border-color: #c2d9e8;
        }

        .card-icon {
            background: #e8f2f9;
            padding: 28px 0 16px 28px;
            font-size: 2.6rem;
            color: #1f6e91;
        }

        .card-content {
            padding: 16px 26px 28px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .card-content h3 {
            font-size: 1.45rem;
            margin-bottom: 12px;
            font-weight: 700;
        }

        .card-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin: 14px 0 14px;
        }

        .tech-tag {
            background: #e2f0f8;
            color: #115f82;
            font-size: 0.7rem;
            font-weight: 700;
            padding: 4px 12px;
            border-radius: 24px;
        }

        .card-desc {
            color: #2c5b78;
            font-size: 0.88rem;
            margin-bottom: 20px;
            line-height: 1.45;
        }

        .project-link {
            margin-top: auto;
            font-weight: 600;
            font-size: 0.85rem;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #eef4fc;
            width: fit-content;
            padding: 8px 20px;
            border-radius: 60px;
            text-decoration: none;
            color: #015d83;
            transition: 0.2s;
        }

        .project-link i {
            font-size: 0.8rem;
        }

        .project-link:hover {
            background: #d9eaf3;
            color: #023753;
            gap: 12px;
        }

        /* current job highlight */
        .job-highlight {
            background: linear-gradient(115deg, #ffffff, #f6fbfe);
            border-radius: 44px;
            padding: 38px 42px;
            margin-top: 18px;
            box-shadow: 0 16px 28px rgba(0, 0, 0, 0.04);
            border: 1px solid #cbe2ef;
        }

        .job-flex {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 42px;
        }

        .job-icon {
            font-size: 68px;
            color: #1f7c9e;
            background: #e1f0f8;
            width: 130px;
            height: 130px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 70px;
            box-shadow: 0 10px 18px rgba(0, 0, 0, 0.05);
        }

        .job-details h3 {
            font-size: 1.9rem;
            font-weight: 800;
            color: #013e58;
        }

        .job-details h4 {
            font-size: 1.25rem;
            font-weight: 600;
            color: #0f698b;
            margin: 12px 0 16px;
        }

        .job-details h4 a {
            color: #0f698b;
            text-decoration: none;
            border-bottom: 2px solid #bdddec;
        }

        .job-details p {
            max-width: 580px;
            color: #2a5f7a;
            margin-bottom: 8px;
        }

        /* Skills & tools */
        .skills-flex {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            margin-top: 16px;
        }

        .skill-badge {
            background: white;
            padding: 10px 26px;
            border-radius: 60px;
            font-weight: 600;
            font-size: 0.9rem;
            color: #1a6283;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.02);
            border: 1px solid #c8dfed;
            transition: all 0.2s;
        }

        .skill-badge i {
            margin-right: 8px;
        }

        .skill-badge:hover {
            background: #eef5fa;
            transform: scale(0.98);
        }

        .insight-card {
            margin-top: 38px;
            background: #eef5fa;
            border-radius: 32px;
            padding: 28px 34px;
            border-left: 6px solid #1f7c9e;
        }

        /* contact area */
        .contact-area {
            background: #013e60;
            color: white;
            border-radius: 42px;
            text-align: center;
            padding: 48px 32px;
        }

        .contact-area .section-title {
            color: white;
        }

        .contact-area .section-title:after {
            background: #f9c96b;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
        }

        .contact-icons {
            display: flex;
            justify-content: center;
            gap: 28px;
            flex-wrap: wrap;
            margin: 32px 0 20px;
        }

        .contact-icons a {
            color: white;
            font-size: 1rem;
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: #1b5e81;
            padding: 12px 28px;
            border-radius: 60px;
            text-decoration: none;
            transition: 0.2s;
            font-weight: 500;
        }

        .contact-icons a i {
            font-size: 1.25rem;
        }

        .contact-icons a:hover {
            background: #307a9e;
            transform: translateY(-3px);
        }

        footer {
            text-align: center;
            padding: 28px 0 32px;
            font-size: 0.85rem;
            color: #4e7f9c;
            border-top: 1px solid #d7e6f0;
            margin-top: 20px;
        }

        @media (max-width: 780px) {
            .nav-bar {
                flex-direction: column;
                gap: 14px;
            }

            .hero-content h1 {
                font-size: 2rem;
            }

            .section-title {
                font-size: 1.8rem;
            }

            .job-flex {
                flex-direction: column;
                text-align: center;
            }

            .hero-grid {
                flex-direction: column-reverse;
                text-align: center;
            }

            .hero-content .work-link {
                margin: 0 auto;
            }

            .hero-img img {
                width: 220px;
                height: 220px;
            }

            .job-details p {
                margin-left: auto;
                margin-right: auto;
            }

            .container {
                padding: 0 20px;
            }
        }
    </style>
</head>

<body>

    <header>
        <div class="container nav-bar">
            <div class="logo">Mahadi <span>Hassan</span></div>
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
        <!-- Hero Section -->
        <section id="home" class="hero">
            <div class="container hero-grid">
                <div class="hero-content">
                    <div class="badge"><i class="fas fa-code"></i> Available for freelance & collaboration</div>
                    <h1>Hi, I’m Mahadi Hassan <br> Full‑Stack Dev & Technical Support Engineer</h1>
                    <div class="hero-role">
                        <i class="fas fa-headset"></i> Technical Support @ jobs.kiu.ac.bd
                        <span style="font-size:0.9rem;">|</span> <i class="fas fa-laptop-code"></i> Laravel Specialist
                    </div>
                    <p class="hero-desc">Building robust internal tools, seamless APIs, and support systems that empower institutions. I solve real-world inefficiencies with clean code, empathy, and a user-first mindset.</p>
                    <a href="#projects" class="work-link"><i class="fas fa-arrow-down"></i> Explore my work</a>
                </div>
                <div class="hero-img">
                    <img src="https://placehold.co/400x400/eef5fa/1f6e91?text=Mahadi+Hassan" alt="Mahadi Hassan Portrait">
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects">
            <div class="container">
                <h2 class="section-title">Featured Projects</h2>
                <div class="projects-grid">
                    <!-- Blog Site Project -->
                    <div class="project-card">
                        <div class="card-icon"><i class="fas fa-blog"></i></div>
                        <div class="card-content">
                            <h3>Modern Blog Platform</h3>
                            <div class="card-tech">
                                <span class="tech-tag">Laravel 11</span>
                                <span class="tech-tag">MySQL</span>
                                <span class="tech-tag">Tailwind CSS</span>
                            </div>
                            <p class="card-desc">Full-featured blog with post management, category/tag system, nested comments, user authentication, and admin dashboard. SEO optimized with dynamic meta tags.</p>
                            <a href="https://blog-mahadi.Infinityfreeapp.com" class="project-link" target="_blank" rel="noopener noreferrer"><i class="fas fa-external-link-alt"></i> Live Demo →</a>
                        </div>
                    </div>
                    <!-- Library Management System -->
                    <div class="project-card">
                        <div class="card-icon"><i class="fas fa-book-open"></i></div>
                        <div class="card-content">
                            <h3>Library Management System</h3>
                            <div class="card-tech">
                                <span class="tech-tag">Laravel</span>
                                <span class="tech-tag">MySQL</span>
                                <span class="tech-tag">Tailwind</span>
                                <span class="tech-tag">Livewire</span>
                            </div>
                            <p class="card-desc">Complete library automation: book catalog, member management, borrowing/return flows, automated fine calculation, and role-based dashboards (admin/librarian/student). Real-time availability.</p>
                            <a href="https://smart.librarymh.xyz" class="project-link" target="_blank" rel="noopener noreferrer"><i class="fas fa-external-link-alt"></i> Explore →</a>
                        </div>
                    </div>
                    <!-- Male Hall Meal Management -->
                    <div class="project-card">
                        <div class="card-icon"><i class="fas fa-utensils"></i></div>
                        <div class="card-content">
                            <h3>Male Hall Meal Management</h3>
                            <div class="card-tech">
                                <span class="tech-tag">PHP/Laravel</span>
                                <span class="tech-tag">MySQL</span>
                                <span class="tech-tag">Tailwind</span>
                            </div>
                            <p class="card-desc">Digitized meal tracking for university residential halls. Meal counting, monthly billing, menu scheduling, and dynamic reporting. Reduced manual errors by 80% for hall admins.</p>
                            <a href="https://hall.librarymh.xyz" class="project-link" target="_blank" rel="noopener noreferrer"><i class="fas fa-external-link-alt"></i> See project →</a>
                        </div>
                    </div>
                    <!-- Weather API Integration -->
                    <div class="project-card">
                        <div class="card-icon"><i class="fas fa-cloud-sun-rain"></i></div>
                        <div class="card-content">
                            <h3>Weather API Integration</h3>
                            <div class="card-tech">
                                <span class="tech-tag">JavaScript/Fetch</span>
                                <span class="tech-tag">OpenWeatherMap</span>
                                <span class="tech-tag">HTML/CSS</span>
                            </div>
                            <p class="card-desc">Real‑time weather web app with geolocation, 5‑day forecast, dynamic icons, and error handling. Demonstrates API consumption, async JS, and responsive UI.</p>
                            <a href="https://weather.librarymh.xyz" class="project-link" target="_blank" rel="noopener noreferrer"><i class="fas fa-external-link-alt"></i> Try live →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Experience & Current Impact -->
        <section id="experience">
            <div class="container">
                <h2 class="section-title">Current Role & Impact</h2>
                <div class="job-highlight">
                    <div class="job-flex">
                        <div class="job-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="job-details">
                            <h3>Technical Support Engineer</h3>
                            <h4><i class="fas fa-briefcase"></i> <a href="https://jobs.kiu.ac.bd" target="_blank">jobs.kiu.ac.bd</a> — Kishoreganj University Job Portal</h4>
                            <p><i class="fas fa-check-circle" style="color:#197faa;"></i> Spearheading backend logic & form automation for university recruitment portal.</p>
                            <p><i class="fas fa-file-pdf"></i> Developed auto PDF generation (admit cards, application summaries) reducing manual workload by 60%.</p>
                            <p><i class="fas fa-database"></i> Maintaining MySQL databases, resolving API integration issues, and improving system reliability.</p>
                            <p><i class="fas fa-tools"></i> Bridging gap between development and end-users by providing rapid technical support & documentation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technical Toolkit (Skills) -->
        <section id="skills">
            <div class="container">
                <h2 class="section-title">Technical Arsenal</h2>
                <div class="skills-flex">
                    <span class="skill-badge"><i class="fab fa-php"></i> PHP 8+</span>
                    <span class="skill-badge"><i class="fab fa-laravel"></i> Laravel</span>
                    <span class="skill-badge"><i class="fab fa-js"></i> JavaScript (ES6)</span>
                    <span class="skill-badge"><i class="fas fa-database"></i> MySQL / PostgreSQL</span>
                    <span class="skill-badge"><i class="fab fa-vuejs"></i> Vue.js (basic)</span>
                    <span class="skill-badge"><i class="fas fa-cloud-upload-alt"></i> RESTful APIs</span>
                    <span class="skill-badge"><i class="fab fa-git-alt"></i> Git & GitHub</span>
                    <span class="skill-badge"><i class="fas fa-server"></i> Linux / Apache / cPanel</span>
                    <span class="skill-badge"><i class="fas fa-mobile-alt"></i> Responsive Design</span>
                    <span class="skill-badge"><i class="fas fa-shield-alt"></i> Debugging & Troubleshooting</span>
                </div>
                <div class="insight-card">
                    <p style="font-weight: 700; font-size: 1.1rem;"><i class="fas fa-brain"></i> Support + Dev synergy</p>
                    <p style="margin-top: 12px;">I don't just write code — I ensure it runs reliably in production. With a background in technical support, I bring systematic debugging, user empathy, and clear documentation to every project. My solutions are built to solve real-world academic & institutional challenges.</p>
                </div>
            </div>
        </section>

        <!-- Connect & Contact -->
        <section id="contact">
            <div class="container">
                <div class="contact-area">
                    <h2 class="section-title" style="color: white;">Let’s Connect</h2>
                    <p style="margin-bottom: 20px; opacity: 0.92; max-width: 500px; margin-left: auto; margin-right: auto;">Open to development collaborations, freelance opportunities, or just a tech chat.</p>
                    <div class="contact-icons">
                        <a href="mailto:mahadi.cse.21@gmail.com" target="_blank"><i class="fas fa-envelope"></i> mahadi.cse.21@gmail.com</a>
                        <a href="https://www.linkedin.com/in/mahadi-hassan-695b9426a" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i> LinkedIn</a>
                        <a href="https://github.com/mahad-cse-21" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i> GitHub</a>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i> X (Twitter)</a>
                    </div>
                    <p style="margin-top: 36px; font-size: 0.9rem;"><i class="fas fa-map-marker-alt"></i> Kishoreganj, Bangladesh | Technical Support @ jobs.kiu.ac.bd</p>
                    <p style="margin-top: 12px; font-size: 0.75rem; opacity: 0.8;"><i class="fas fa-clock"></i> Response within 24 hours</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>© 2026 Mahadi Hassan — Built with <i class="fas fa-heart" style="color: #f9a26c;"></i> for solving real problems</p>
            <p style="margin-top: 10px; font-size:0.75rem;">“Write code that serves people, and support that builds trust”</p>
        </div>
    </footer>

    <script>
        (function() {
            // Smooth scroll for all internal anchor links
            const allLinks = document.querySelectorAll('a[href^="#"]');
            allLinks.forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');
                    if (href === "#" || href === "") return;
                    const targetId = href.substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        e.preventDefault();
                        targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
                        // update URL hash without jumping
                        history.pushState(null, null, href);
                    }
                });
            });
            // small console greeting
            console.log("🔥 Mahadi Hassan Portfolio | Technical Support + Developer | projects: Blog, Library, MealMgmt, WeatherAPI");
            // optional: dynamic year for footer
            const yearSpan = document.querySelector('footer .container p:first-child');
            if (yearSpan) {
                const currentYear = new Date().getFullYear();
                if (yearSpan.innerHTML.includes('2026')) {
                    yearSpan.innerHTML = yearSpan.innerHTML.replace('2026', currentYear);
                }
            }
        })();
    </script>
</body>

</html>