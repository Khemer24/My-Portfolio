<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#080b12">
    <meta name="description" content="Khemer Jay Deguinion — Backend Developer specializing in Laravel and WordPress.">
    <title>Khemer Jay Deguinion | Backend Developer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/css/portfolio.css">
</head>
<body>
    <div class="scroll-progress" aria-hidden="true"><span id="scroll-progress"></span></div>

    <nav class="navbar navbar-expand-lg navbar-dark site-nav" aria-label="Main navigation">
        <div class="container">
            <a class="navbar-brand brand-mark" href="#home" aria-label="Khemer Jay Deguinion, home">
                <span class="brand-icon">&lt;/&gt;</span><span>Khemer<span class="brand-dot">.</span></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#portfolioNav" aria-controls="portfolioNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="portfolioNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item ms-lg-3"><a class="nav-contact" href="#contact">Let's talk <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section class="hero" id="home">
            <div class="hero-grid" aria-hidden="true"></div>
            <div class="hero-orb hero-orb-one" aria-hidden="true"></div>
            <div class="hero-orb hero-orb-two" aria-hidden="true"></div>
            <div class="container hero-layout">
                <div class="hero-copy">
                    <div class="eyebrow hero-eyebrow"><span class="status-dot"></span> Backend development · Carmen, Davao del Norte, Philippines</div>
                    <p class="hero-intro">Hello, I'm</p>
                    <h1>Khemer Jay<br><span class="name-accent">Deguinion</span></h1>
                    <div class="hero-role">
                        <span class="role-prompt">&gt;</span>
                        <span class="sr-only">Backend Developer — Laravel &amp; WordPress</span>
                        <span class="role-title" aria-hidden="true">Backend Developer — </span><span id="typed-role" aria-hidden="true">Laravel &amp; WordPress</span><span class="typing-caret" aria-hidden="true"></span>
                    </div>
                    <p class="hero-summary">I build dependable server-side applications, integrations, and WordPress experiences—with a focus on clean code and lasting performance.</p>
                    <div class="hero-actions">
                        <a class="button button-primary" href="#projects">Explore my work <i class="fa-solid fa-arrow-down" aria-hidden="true"></i></a>
                        <a class="button button-quiet" href="/media/my-portfolio/Khemer_Jay_Deguinion_Resume.pdf" download>Download resume <i class="fa-solid fa-download" aria-hidden="true"></i></a>
                    </div>
                    <div class="hero-stack">
                        <span>Laravel</span><span>PHP</span><span>WordPress</span><span>REST APIs</span><span>Claude Code / Vibe coding</span>
                    </div>
                </div>
                <div class="hero-portrait-wrap">
                    <div class="portrait-glow" aria-hidden="true"></div>
                    <div class="portrait-frame">
                        <img src="/media/my-portfolio/khemer-jay-deguinion.jpeg" alt="Khemer Jay Deguinion" class="hero-portrait">
                        <div class="portrait-shade" aria-hidden="true"></div>
                        <div class="portrait-caption">
                            <span class="caption-mark">&lt;/&gt;</span>
                            <span><strong>Backend developer</strong><small>Laravel · WordPress</small></span>
                        </div>
                    </div>
                    <div class="float-chip chip-api"><i class="fa-solid fa-code" aria-hidden="true"></i> RESTful APIs</div>
                    <div class="float-chip chip-php"><i class="fa-brands fa-php" aria-hidden="true"></i> PHP</div>
                    <span class="orbit orbit-one" aria-hidden="true"></span>
                    <span class="orbit orbit-two" aria-hidden="true"></span>
                </div>
            </div>
            <a href="#about" class="scroll-cue"><span>Scroll to explore</span><i class="fa-solid fa-arrow-down" aria-hidden="true"></i></a>
        </section>

        <section class="section about-section" id="about">
            <div class="container">
                <div class="section-heading reveal">
                    <p class="eyebrow"><span>01</span> A little about me</p>
                    <h2>Building useful things,<br><span class="text-gradient">one thoughtful detail at a time.</span></h2>
                </div>
                <div class="about-layout">
                    <div class="about-copy reveal">
                        <p class="lead-copy">I'm a backend developer with <strong>5 years of experience</strong> building and maintaining server-side applications with Laravel (PHP) and custom WordPress.</p>
                        <p>My work spans RESTful API development, database design, third-party integrations, and theme customization. I care about making applications faster and more reliable, securing authentication flows, and working closely with QA and stakeholders to ship dependable software.</p>
                        <p>From Laravel applications and API integrations to custom WordPress builds, I bring a practical, detail-oriented approach to the whole development lifecycle.</p>
                        <a class="text-link" href="#experience">More about my experience <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="about-facts">
                        <article class="fact-card reveal"><span class="fact-icon"><i class="fa-solid fa-layer-group" aria-hidden="true"></i></span><div><h3>Backend first</h3><p>Laravel, PHP, APIs, and MySQL</p></div></article>
                        <article class="fact-card reveal"><span class="fact-icon"><i class="fa-brands fa-wordpress" aria-hidden="true"></i></span><div><h3>WordPress builder</h3><p>Custom themes, plugins, and WooCommerce</p></div></article>
                        <article class="fact-card reveal"><span class="fact-icon"><i class="fa-solid fa-gauge-high" aria-hidden="true"></i></span><div><h3>Performance minded</h3><p>Optimization, reliability, and security</p></div></article>
                        <article class="fact-card reveal"><span class="fact-icon"><i class="fa-solid fa-people-group" aria-hidden="true"></i></span><div><h3>Collaborative</h3><p>Works closely with QA and stakeholders</p></div></article>
                    </div>
                </div>
                <div class="experience-strip reveal">
                    <div><strong>5<span>+</span></strong><small>Years in development</small></div>
                    <div><strong>Laravel</strong><small>Backend framework</small></div>
                    <div><strong>WordPress</strong><small>CMS &amp; custom builds</small></div>
                    <div><strong>REST APIs</strong><small>Design &amp; integrations</small></div>
                </div>
            </div>
        </section>

        <section class="section skills-section" id="skills">
            <div class="container">
                <div class="section-heading reveal">
                    <p class="eyebrow"><span>02</span> Tools of the trade</p>
                    <h2>Technical <span class="text-gradient">skills</span></h2>
                    <p class="section-subtitle">A practical toolkit built through hands-on development and production work.</p>
                </div>
                <div class="skills-grid">
                    <article class="skill-card reveal">
                        <span class="skill-card-icon"><i class="fa-solid fa-code" aria-hidden="true"></i></span>
                        <p class="eyebrow">01 / Languages</p><h3>Web development</h3>
                        <div class="skill-tags"><span>PHP</span><span>JavaScript</span><span>SQL</span><span>HTML5</span><span>CSS3</span></div>
                    </article>
                    <article class="skill-card reveal">
                        <span class="skill-card-icon"><i class="fa-solid fa-cubes" aria-hidden="true"></i></span>
                        <p class="eyebrow">02 / Frameworks &amp; CMS</p><h3>Application development</h3>
                        <div class="skill-tags"><span>Laravel</span><span>React.js</span><span>Blade templating</span><span>WordPress</span><span>Custom themes &amp; plugins</span></div>
                    </article>
                    <article class="skill-card reveal">
                        <span class="skill-card-icon"><i class="fa-solid fa-plug" aria-hidden="true"></i></span>
                        <p class="eyebrow">03 / APIs &amp; integration</p><h3>Connected services</h3>
                        <div class="skill-tags"><span>RESTful API design</span><span>Third-party API integration</span></div>
                    </article>
                    <article class="skill-card reveal">
                        <span class="skill-card-icon"><i class="fa-solid fa-database" aria-hidden="true"></i></span>
                        <p class="eyebrow">04 / Databases</p><h3>Data &amp; development environment</h3>
                        <div class="skill-tags"><span>MySQL</span><span>Laragon</span></div>
                    </article>
                    <article class="skill-card reveal">
                        <span class="skill-card-icon"><i class="fa-solid fa-screwdriver-wrench" aria-hidden="true"></i></span>
                        <p class="eyebrow">05 / Workflow &amp; tools</p><h3>Development toolkit</h3>
                        <div class="skill-tags"><span>Git</span><span>GitHub</span><span>Postman</span><span>Visual Studio</span><span>Nintex Form</span><span>Elementor</span></div>
                    </article>
                    <article class="skill-card reveal">
                        <span class="skill-card-icon"><i class="fa-solid fa-wand-magic-sparkles" aria-hidden="true"></i></span>
                        <p class="eyebrow">06 / AI-assisted development</p><h3>AI development tools</h3>
                        <div class="skill-tags"><span>Vibe coding</span><span>Claude Code</span><span>Codex</span><span>Gemini</span></div>
                    </article>
                </div>
            </div>
        </section>

        <section class="section experience-section" id="experience">
            <div class="container">
                <div class="section-heading reveal">
                    <p class="eyebrow"><span>03</span> The journey so far</p>
                    <h2>Professional <span class="text-gradient">experience</span></h2>
                </div>
                <div class="timeline">
                    <article class="timeline-item reveal">
                        <div class="timeline-marker"><span></span></div>
                        <div class="timeline-card">
                            <div class="timeline-meta"><span>Feb 2025 — Nov 2026</span><span class="timeline-type">Professional experience</span></div>
                            <h3>Backend Developer</h3><h4>Born Digital LTD</h4>
                            <ul>
                                <li>Developed and maintained Laravel backend applications and designed RESTful APIs.</li>
                                <li>Worked with MySQL databases and complex SQL queries; fixed production bugs and optimized performance.</li>
                                <li>Implemented blockchain document validation and API integrations.</li>
                                <li>Improved reliability through logging, caching, and error handling; collaborated with QA and stakeholders during testing and deployment.</li>
                            </ul>
                            <div class="skill-tags"><span>Laravel</span><span>PHP</span><span>MySQL</span><span>REST APIs</span><span>Vibe coding with Claude</span></div>
                        </div>
                    </article>
                    <article class="timeline-item reveal">
                        <div class="timeline-marker"><span></span></div>
                        <div class="timeline-card">
                            <div class="timeline-meta"><span>Jun 2022 — Feb 2025</span><span class="timeline-type">Professional experience</span></div>
                            <h3>WordPress Developer</h3><h4>Born Digital LTD</h4>
                            <ul>
                                <li>Developed responsive WordPress sites and custom themes and plugins for client requirements.</li>
                                <li>Customized WooCommerce stores and payment integrations; built Elementor widgets and reusable components.</li>
                                <li>Integrated third-party services and worked on website speed, SEO, and security.</li>
                                <li>Handled website maintenance, migrations, backups, and bug fixes.</li>
                            </ul>
                            <div class="skill-tags"><span>WordPress</span><span>WooCommerce</span><span>Elementor</span><span>APIs</span></div>
                        </div>
                    </article>
                    <article class="timeline-item reveal">
                        <div class="timeline-marker"><span></span></div>
                        <div class="timeline-card">
                            <div class="timeline-meta"><span>Feb 2022 — May 2022</span><span class="timeline-type">Internship</span></div>
                            <h3>WordPress Developer Intern</h3><h4>WSAP</h4>
                            <ul>
                                <li>Assisted with WordPress site development, theme and plugin customization, and responsive pages using Elementor, HTML, CSS, and JavaScript.</li>
                                <li>Fixed bugs, maintained website content, and collaborated with senior developers on features and performance.</li>
                                <li>Used Git for version control and participated in testing and debugging.</li>
                            </ul>
                            <div class="skill-tags"><span>WordPress</span><span>PHP</span><span>MySQL</span><span>Git</span></div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="section education-section" id="education">
            <div class="container">
                <div class="section-heading reveal">
                    <p class="eyebrow"><span>04</span> The learning behind the work</p>
                    <h2>Education &amp; <span class="text-gradient">foundations</span></h2>
                </div>
                <div class="education-grid">
                    <article class="education-card reveal">
                        <span class="education-icon"><i class="fa-solid fa-graduation-cap" aria-hidden="true"></i></span>
                        <div class="education-meta"><span>August 2018 — June 2023</span><span class="education-level">Bachelor's degree</span></div>
                        <h3>Bachelor of Science in Information Technology (BSIT)</h3>
                        <p class="education-school">Davao del Norte State College</p>
                        <div class="skill-tags"><span>Web Developer</span><span>Networking</span></div>
                    </article>
                    <article class="education-card reveal">
                        <span class="education-icon"><i class="fa-solid fa-school" aria-hidden="true"></i></span>
                        <div class="education-meta"><span>June 2012 — April 2018</span><span class="education-level">Junior &amp; senior high</span></div>
                        <h3>Junior &amp; Senior High School Graduate</h3>
                        <p class="education-school">La Paz National High School</p>
                    </article>
                </div>
            </div>
        </section>

        @php
            $projects = [
                ['name' => 'Recruitment Website', 'description' => 'Recruitment website focused on understanding employers’ needs and connecting them with screened, work-ready candidates.', 'url' => 'https://1276382.us18.myftpupload.com/', 'icon' => 'fa-briefcase', 'type' => 'Recruitment', 'stack' => ['WordPress'], 'languages' => ['PHP']],
                ['name' => 'MyIP Blockchain', 'description' => 'Backend for a blockchain identity platform with sign-in for work or citizen accounts.', 'url' => 'https://ipdlt-lwe-0003-wa-qa.azurewebsites.net/login', 'icon' => 'fa-link', 'type' => 'Blockchain', 'stack' => ['Laravel'], 'languages' => ['PHP']],
                ['name' => 'NicheAve', 'description' => 'Real estate website with a custom WordPress theme, property listings, and search functionality.', 'url' => 'https://nicheave.com/', 'icon' => 'fa-house', 'type' => 'Real estate', 'stack' => ['WordPress'], 'languages' => ['PHP']],
                ['name' => 'Excel Homes', 'description' => 'Real estate website with responsive design, a property showcase, and lead generation features.', 'url' => 'https://www.excel.com.mt/', 'icon' => 'fa-building', 'type' => 'Real estate', 'stack' => ['WordPress'], 'languages' => ['PHP']],
                ['name' => 'Memo', 'description' => 'E-commerce website with a product catalog and shopping cart.', 'url' => 'https://memolocks.com/', 'icon' => 'fa-cart-shopping', 'type' => 'E-commerce', 'stack' => ['WordPress'], 'languages' => ['PHP']],
                ['name' => 'Ben Estates', 'description' => 'Real estate listing platform with property details and filtering.', 'url' => 'https://benestates.com/', 'icon' => 'fa-landmark', 'type' => 'Real estate', 'stack' => ['WordPress'], 'languages' => ['PHP']],
                ['name' => 'Fit Fuel', 'description' => 'Health and fitness products store with subscription options.', 'url' => 'https://fitfuelmalta.com/', 'icon' => 'fa-dumbbell', 'type' => 'E-commerce', 'stack' => ['WordPress'], 'languages' => ['PHP']],
                ['name' => 'Agriculture Gov', 'description' => 'Government of Malta website with a custom theme.', 'url' => 'https://agriculture.gov.mt/', 'icon' => 'fa-leaf', 'type' => 'Government', 'stack' => ['WordPress'], 'languages' => ['PHP']],
                ['name' => 'Curriculum', 'description' => 'Government education website for curriculum resources and public information.', 'url' => 'https://curriculum.gov.mt/', 'icon' => 'fa-book-open', 'type' => 'Education', 'stack' => ['WordPress'], 'languages' => ['PHP']],
                ['name' => 'Pixel for the Soul', 'description' => 'Creative website showcasing visual content with a responsive user experience.', 'url' => 'https://pixelsforthesoul.com/', 'icon' => 'fa-palette', 'type' => 'Creative', 'stack' => ['WordPress'], 'languages' => ['PHP']],
                ['name' => 'Bason Aluminium', 'description' => 'Business website presenting aluminium products and company details.', 'url' => 'https://basonaluminium.com/', 'icon' => 'fa-industry', 'type' => 'Business', 'stack' => ['WordPress'], 'languages' => ['PHP']],
                ['name' => 'OPM', 'description' => 'Government website for public updates, institutional information, and services.', 'url' => 'https://opm.gov.mt/', 'icon' => 'fa-landmark', 'type' => 'Government', 'stack' => ['WordPress'], 'languages' => ['PHP']],
                ['name' => 'Public Service', 'description' => 'Government service portal for public information and public-sector communication.', 'url' => 'https://publicservice.gov.mt/', 'icon' => 'fa-users', 'type' => 'Government', 'stack' => ['WordPress'], 'languages' => ['PHP']],
                ['name' => 'Lifelong Learning', 'description' => 'Education website for learning programs, course information, and public resources.', 'url' => 'https://lifelonglearning.gov.mt/', 'icon' => 'fa-graduation-cap', 'type' => 'Education', 'stack' => ['WordPress'], 'languages' => ['PHP']],
                ['name' => 'NTG', 'description' => 'Government platform for organizing key information and public content.', 'url' => 'https://ntg.gov.mt/', 'icon' => 'fa-network-wired', 'type' => 'Government', 'stack' => ['WordPress'], 'languages' => ['PHP']],
                ['name' => 'Non State School', 'description' => 'Laravel project for education services and non-state school information management.', 'url' => 'https://education-ips.gov.mt/', 'icon' => 'fa-school', 'type' => 'Laravel', 'stack' => ['Laravel'], 'languages' => ['PHP']],
                ['name' => 'CE Malta', 'description' => 'Laravel project for CE Malta.', 'url' => 'https://cemalta.gov.mt/', 'icon' => 'fa-landmark', 'type' => 'Laravel', 'stack' => ['Laravel'], 'languages' => ['PHP']],
                ['name' => 'Classification State School', 'description' => 'Laravel project for school classification.', 'url' => 'https://classificationedu-0002-lwe-was-qa.azurewebsites.net/', 'icon' => 'fa-school', 'type' => 'Laravel', 'stack' => ['Laravel'], 'languages' => ['PHP']],
            ];
        @endphp
        <section class="section projects-section" id="projects">
            <div class="container">
                <div class="section-heading reveal">
                    <p class="eyebrow"><span>05</span> Selected work</p>
                    <h2>Projects I've <span class="text-gradient">worked on</span></h2>
                    <p class="section-subtitle">A selection of live websites and applications from my portfolio.</p>
                </div>
                <div class="projects-grid">
                    @foreach ($projects as $project)
                        <article class="project-card reveal">
                            <div class="project-topline"><span class="project-icon"><i class="fa-solid {{ $project['icon'] }}" aria-hidden="true"></i></span><span class="project-type">{{ $project['type'] }}</span></div>
                            <h3>{{ $project['name'] }}</h3>
                            <p>{{ $project['description'] }}</p>
                            @if (!empty($project['stack']) || !empty($project['languages']))
                                <div class="project-details">
                                    @if (!empty($project['stack']))
                                        <div class="project-detail"><span class="project-detail-label">Tech stack</span><div class="project-tags">@foreach ($project['stack'] as $technology)<span>{{ $technology }}</span>@endforeach</div></div>
                                    @endif
                                    @if (!empty($project['languages']))
                                        <div class="project-detail"><span class="project-detail-label">Languages</span><div class="project-tags">@foreach ($project['languages'] as $language)<span>{{ $language }}</span>@endforeach</div></div>
                                    @endif
                                </div>
                            @endif
                            <a href="{{ $project['url'] }}" target="_blank" rel="noopener noreferrer" aria-label="Visit {{ $project['name'] }} website">View project <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></a>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="section contact-section" id="contact">
            <div class="contact-glow" aria-hidden="true"></div>
            <div class="container contact-layout">
                <div class="contact-copy reveal">
                    <p class="eyebrow"><span>06</span> Have a project in mind?</p>
                    <h2>Let's build something<br><span class="text-gradient">that works.</span></h2>
                    <p>For opportunities, collaborations, or a good conversation about your next project, get in touch.</p>
                    <a class="button button-primary" href="mailto:khemer.deguinion24@gmail.com">Start a conversation <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                </div>
                <div class="contact-links reveal">
                    <a class="contact-link" href="mailto:khemer.deguinion24@gmail.com"><span class="contact-link-icon"><i class="fa-regular fa-envelope" aria-hidden="true"></i></span><span><small>Email</small><strong>khemer.deguinion24@gmail.com</strong></span><i class="fa-solid fa-arrow-up-right-from-square contact-external" aria-hidden="true"></i></a>
                    <a class="contact-link" href="tel:+639665631269"><span class="contact-link-icon"><i class="fa-solid fa-phone" aria-hidden="true"></i></span><span><small>Phone</small><strong>+63 966 563 1269</strong></span><i class="fa-solid fa-arrow-up-right-from-square contact-external" aria-hidden="true"></i></a>
                    <a class="contact-link" href="https://www.linkedin.com/in/khemer-jay-deguinion-a73a55227/" target="_blank" rel="noopener noreferrer"><span class="contact-link-icon"><i class="fa-brands fa-linkedin-in" aria-hidden="true"></i></span><span><small>LinkedIn</small><strong>Connect with me</strong></span><i class="fa-solid fa-arrow-up-right-from-square contact-external" aria-hidden="true"></i></a>
                    <div class="contact-link location-link"><span class="contact-link-icon"><i class="fa-solid fa-location-dot" aria-hidden="true"></i></span><span><small>Location</small><strong>Carmen, Davao del Norte, Philippines</strong></span></div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container footer-inner">
            <a class="navbar-brand brand-mark" href="#home"><span class="brand-icon">&lt;/&gt;</span><span>Khemer<span class="brand-dot">.</span></span></a>
            <p>Backend Developer — Laravel &amp; WordPress</p>
            <a href="/media/my-portfolio/Khemer_Jay_Deguinion_Resume.pdf" download class="footer-resume">Resume <i class="fa-solid fa-download" aria-hidden="true"></i></a>
            <small>&copy; {{ date('Y') }} Khemer Jay Deguinion</small>
        </div>
    </footer>

    <script src="/js/portfolio-animations.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
</body>
</html>
