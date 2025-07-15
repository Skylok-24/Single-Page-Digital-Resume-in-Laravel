<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahmed Hassan - Digital CV</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .card-shadow {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .skill-bar {
            background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
            height: 6px;
            border-radius: 3px;
            transition: width 0.8s ease-in-out;
        }
        
        .print-hidden {
            display: block;
        }
        
        @media print {
            .print-hidden {
                display: none !important;
            }
            
            .page-break {
                page-break-before: always;
            }
        }
        
        .floating-action {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }
        
        .social-icon {
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            transform: translateY(-2px);
        }
        
        .fade-in {
            animation: fadeIn 0.6s ease-in-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .loading {
            display: none;
        }
        
        .loading.show {
            display: flex;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- Loading Spinner -->
    <div id="loading" class="loading fixed inset-0 bg-white bg-opacity-90 items-center justify-center z-50">
        <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-blue-600"></div>
    </div>

    <!-- Floating Action Button -->
    <div class="floating-action print-hidden">
        <button id="exportPDF" class="bg-red-600 hover:bg-red-700 text-white p-3 rounded-full shadow-lg transition-colors">
            <i class="fas fa-file-pdf text-xl"></i>
        </button>
    </div>

    <!-- CV Container -->
    <div id="cv-container" class="max-w-4xl mx-auto bg-white shadow-xl">
        <!-- Header Section -->
        <header class="gradient-bg text-white p-8 md:p-12">
            <div class="flex flex-col md:flex-row items-center gap-6">
                <div class="w-32 h-32 rounded-full bg-white p-1 shadow-lg">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=150&h=150&fit=crop&crop=face" 
                         alt="Profile Photo" 
                         class="w-full h-full rounded-full object-cover">
                </div>
                <div class="text-center md:text-left flex-1">
                    <h1 class="text-4xl md:text-5xl font-bold mb-2">Ahmed Hassan</h1>
                    <p class="text-xl md:text-2xl mb-4 opacity-90">Full Stack Developer</p>
                    <div class="flex flex-wrap justify-center md:justify-start gap-4 text-sm">
                        <span class="flex items-center gap-1">
                            <i class="fas fa-envelope"></i>
                            ahmed.hassan@email.com
                        </span>
                        <span class="flex items-center gap-1">
                            <i class="fas fa-phone"></i>
                            +213 555 123 456
                        </span>
                        <span class="flex items-center gap-1">
                            <i class="fas fa-map-marker-alt"></i>
                            Annaba, Algeria
                        </span>
                    </div>
                </div>
            </div>
        </header>

        <!-- Social Media Links -->
        <div class="bg-gray-100 p-4 print-hidden">
            <div class="flex justify-center gap-4">
                <a href="https://linkedin.com/in/ahmedhassan" target="_blank" class="social-icon bg-blue-600 text-white p-3 rounded-full hover:bg-blue-700">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="https://github.com/ahmedhassan" target="_blank" class="social-icon bg-gray-800 text-white p-3 rounded-full hover:bg-gray-900">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://twitter.com/ahmedhassan" target="_blank" class="social-icon bg-blue-400 text-white p-3 rounded-full hover:bg-blue-500">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://ahmedhassan.dev" target="_blank" class="social-icon bg-green-600 text-white p-3 rounded-full hover:bg-green-700">
                    <i class="fas fa-globe"></i>
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <main class="p-8 md:p-12">
            <!-- Professional Summary -->
            <section class="mb-12 fade-in">
                <h2 class="text-3xl font-bold mb-6 text-gray-800 border-b-2 border-blue-600 pb-2">Professional Summary</h2>
                <p class="text-lg leading-relaxed text-gray-700">
                    Passionate Full Stack Developer with 5+ years of experience building scalable web applications using modern technologies. 
                    Specialized in Laravel, React, and Vue.js with a strong focus on clean code, performance optimization, and user experience. 
                    Proven track record of delivering high-quality solutions for startups and enterprise clients.
                </p>
            </section>

            <!-- Experience -->
            <section class="mb-12 fade-in">
                <h2 class="text-3xl font-bold mb-6 text-gray-800 border-b-2 border-blue-600 pb-2">Experience</h2>
                
                <div class="space-y-8">
                    <div class="border-l-4 border-blue-600 pl-6">
                        <h3 class="text-xl font-semibold text-gray-800">Senior Full Stack Developer</h3>
                        <p class="text-blue-600 font-medium">TechCorp Solutions • 2022 - Present</p>
                        <ul class="mt-3 space-y-2 text-gray-700">
                            <li>• Led development of 3 major web applications serving 10,000+ users</li>
                            <li>• Implemented microservices architecture reducing system load by 40%</li>
                            <li>• Mentored junior developers and conducted code reviews</li>
                            <li>• Technologies: Laravel, React, PostgreSQL, Docker, AWS</li>
                        </ul>
                    </div>

                    <div class="border-l-4 border-blue-600 pl-6">
                        <h3 class="text-xl font-semibold text-gray-800">Full Stack Developer</h3>
                        <p class="text-blue-600 font-medium">Digital Agency Pro • 2020 - 2022</p>
                        <ul class="mt-3 space-y-2 text-gray-700">
                            <li>• Developed and maintained 15+ client websites and web applications</li>
                            <li>• Optimized database queries improving performance by 60%</li>
                            <li>• Integrated third-party APIs and payment gateways</li>
                            <li>• Technologies: PHP, Laravel, Vue.js, MySQL, Redis</li>
                        </ul>
                    </div>

                    <div class="border-l-4 border-blue-600 pl-6">
                        <h3 class="text-xl font-semibold text-gray-800">Junior Web Developer</h3>
                        <p class="text-blue-600 font-medium">StartupHub • 2019 - 2020</p>
                        <ul class="mt-3 space-y-2 text-gray-700">
                            <li>• Built responsive websites using HTML, CSS, and JavaScript</li>
                            <li>• Collaborated with design team to implement pixel-perfect UIs</li>
                            <li>• Learned Laravel and contributed to team projects</li>
                            <li>• Technologies: HTML, CSS, JavaScript, Bootstrap, Laravel</li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Skills -->
            <section class="mb-12 fade-in">
                <h2 class="text-3xl font-bold mb-6 text-gray-800 border-b-2 border-blue-600 pb-2">Skills</h2>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-xl font-semibold mb-4 text-gray-800">Backend Development</h3>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium">Laravel</span>
                                    <span class="text-sm text-gray-600">95%</span>
                                </div>
                                <div class="bg-gray-200 rounded-full h-2">
                                    <div class="skill-bar rounded-full" style="width: 95%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium">PHP</span>
                                    <span class="text-sm text-gray-600">90%</span>
                                </div>
                                <div class="bg-gray-200 rounded-full h-2">
                                    <div class="skill-bar rounded-full" style="width: 90%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium">Node.js</span>
                                    <span class="text-sm text-gray-600">80%</span>
                                </div>
                                <div class="bg-gray-200 rounded-full h-2">
                                    <div class="skill-bar rounded-full" style="width: 80%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold mb-4 text-gray-800">Frontend Development</h3>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium">React</span>
                                    <span class="text-sm text-gray-600">85%</span>
                                </div>
                                <div class="bg-gray-200 rounded-full h-2">
                                    <div class="skill-bar rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium">Vue.js</span>
                                    <span class="text-sm text-gray-600">88%</span>
                                </div>
                                <div class="bg-gray-200 rounded-full h-2">
                                    <div class="skill-bar rounded-full" style="width: 88%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium">Tailwind CSS</span>
                                    <span class="text-sm text-gray-600">92%</span>
                                </div>
                                <div class="bg-gray-200 rounded-full h-2">
                                    <div class="skill-bar rounded-full" style="width: 92%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <h3 class="text-xl font-semibold mb-4 text-gray-800">Tools & Technologies</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Git</span>
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Docker</span>
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">AWS</span>
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">MySQL</span>
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">PostgreSQL</span>
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Redis</span>
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Nginx</span>
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Linux</span>
                    </div>
                </div>
            </section>

            <!-- Education -->
            <section class="mb-12 fade-in">
                <h2 class="text-3xl font-bold mb-6 text-gray-800 border-b-2 border-blue-600 pb-2">Education</h2>
                
                <div class="border-l-4 border-blue-600 pl-6">
                    <h3 class="text-xl font-semibold text-gray-800">Bachelor's Degree in Computer Science</h3>
                    <p class="text-blue-600 font-medium">University of Annaba • 2015 - 2019</p>
                    <p class="mt-2 text-gray-700">
                        Graduated with honors. Specialized in Software Engineering and Web Development. 
                        Completed final project on "E-commerce Platform Development using Laravel".
                    </p>
                </div>
            </section>

            <!-- Projects -->
            <section class="mb-12 fade-in">
                <h2 class="text-3xl font-bold mb-6 text-gray-800 border-b-2 border-blue-600 pb-2">Featured Projects</h2>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="card-shadow bg-white p-6 rounded-lg border">
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">E-Commerce Platform</h3>
                        <p class="text-gray-600 mb-4">
                            Full-featured e-commerce platform with admin dashboard, payment integration, and inventory management.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-red-100 text-red-800 px-2 py-1 rounded text-xs">Laravel</span>
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Vue.js</span>
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">MySQL</span>
                        </div>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">View Project →</a>
                    </div>

                    <div class="card-shadow bg-white p-6 rounded-lg border">
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Task Management System</h3>
                        <p class="text-gray-600 mb-4">
                            Collaborative task management tool with real-time updates, team collaboration features, and reporting.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-red-100 text-red-800 px-2 py-1 rounded text-xs">Laravel</span>
                            <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs">React</span>
                            <span class="bg-orange-100 text-orange-800 px-2 py-1 rounded text-xs">PostgreSQL</span>
                        </div>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">View Project →</a>
                    </div>
                </div>
            </section>

            <!-- Languages -->
            <section class="mb-12 fade-in">
                <h2 class="text-3xl font-bold mb-6 text-gray-800 border-b-2 border-blue-600 pb-2">Languages</h2>
                
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="text-center">
                        <h3 class="text-lg font-semibold text-gray-800">Arabic</h3>
                        <p class="text-gray-600">Native</p>
                    </div>
                    <div class="text-center">
                        <h3 class="text-lg font-semibold text-gray-800">English</h3>
                        <p class="text-gray-600">Advanced</p>
                    </div>
                    <div class="text-center">
                        <h3 class="text-lg font-semibold text-gray-800">French</h3>
                        <p class="text-gray-600">Intermediate</p>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white p-6 text-center">
            <p>&copy; 2025 Ahmed Hassan. All rights reserved.</p>
        </footer>
    </div>

    <script>
        // Sample CV data (this would come from Laravel in the real implementation)
        const cvData = {
            name: "Ahmed Hassan",
            title: "Full Stack Developer",
            email: "ahmed.hassan@email.com",
            phone: "+213 555 123 456",
            location: "Annaba, Algeria",
            summary: "Passionate Full Stack Developer with 5+ years of experience...",
            experience: [
                {
                    title: "Senior Full Stack Developer",
                    company: "TechCorp Solutions",
                    period: "2022 - Present",
                    description: "Led development of 3 major web applications..."
                }
            ],
            skills: {
                backend: [
                    { name: "Laravel", level: 95 },
                    { name: "PHP", level: 90 },
                    { name: "Node.js", level: 80 }
                ],
                frontend: [
                    { name: "React", level: 85 },
                    { name: "Vue.js", level: 88 },
                    { name: "Tailwind CSS", level: 92 }
                ]
            }
        };

        // Initialize animations
        document.addEventListener('DOMContentLoaded', function() {
            // Animate skill bars
            const skillBars = document.querySelectorAll('.skill-bar');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const bar = entry.target;
                        const width = bar.style.width;
                        bar.style.width = '0%';
                        setTimeout(() => {
                            bar.style.width = width;
                        }, 300);
                    }
                });
            });

            skillBars.forEach(bar => observer.observe(bar));

            // Animate sections on scroll
            const sections = document.querySelectorAll('.fade-in');
            
            const sectionObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            });

            sections.forEach(section => {
                section.style.opacity = '0';
                section.style.transform = 'translateY(20px)';
                section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                sectionObserver.observe(section);
            });
        });

        // PDF Export functionality
        document.getElementById('exportPDF').addEventListener('click', function() {
            const button = this;
            const loading = document.getElementById('loading');
            
            // Show loading
            loading.classList.add('show');
            button.disabled = true;

            // Hide elements that shouldn't be in PDF
            const elementsToHide = document.querySelectorAll('.print-hidden');
            elementsToHide.forEach(el => el.style.display = 'none');

            // Get the CV container
            const cvContainer = document.getElementById('cv-container');
            
            // Use html2canvas to capture the CV
            html2canvas(cvContainer, {
                scale: 2,
                useCORS: true,
                allowTaint: true,
                backgroundColor: '#ffffff'
            }).then(function(canvas) {
                // Create PDF
                const { jsPDF } = window.jspdf;
                const pdf = new jsPDF({
                    orientation: 'portrait',
                    unit: 'mm',
                    format: 'a4'
                });

                // Calculate dimensions
                const imgWidth = 210; // A4 width in mm
                const pageHeight = 297; // A4 height in mm
                const imgHeight = (canvas.height * imgWidth) / canvas.width;
                let heightLeft = imgHeight;

                let position = 0;

                // Add first page
                pdf.addImage(canvas.toDataURL('image/png'), 'PNG', 0, position, imgWidth, imgHeight);
                heightLeft -= pageHeight;

                // Add additional pages if needed
                while (heightLeft >= 0) {
                    position = heightLeft - imgHeight;
                    pdf.addPage();
                    pdf.addImage(canvas.toDataURL('image/png'), 'PNG', 0, position, imgWidth, imgHeight);
                    heightLeft -= pageHeight;
                }

                // Save the PDF
                pdf.save('Ahmed_Hassan_CV.pdf');

                // Show hidden elements again
                elementsToHide.forEach(el => el.style.display = '');
                
                // Hide loading
                loading.classList.remove('show');
                button.disabled = false;
            }).catch(function(error) {
                console.error('Error generating PDF:', error);
                alert('Error generating PDF. Please try again.');
                
                // Show hidden elements again
                elementsToHide.forEach(el => el.style.display = '');
                
                // Hide loading
                loading.classList.remove('show');
                button.disabled = false;
            });
        });

        // Social media link tracking (for analytics)
        document.querySelectorAll('.social-icon').forEach(link => {
            link.addEventListener('click', function(e) {
                const platform = this.href.includes('linkedin') ? 'LinkedIn' : 
                               this.href.includes('github') ? 'GitHub' : 
                               this.href.includes('twitter') ? 'Twitter' : 'Website';
                
                // In a real Laravel app, you might send this to analytics
                console.log(`Clicked on ${platform} link`);
            });
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add subtle parallax effect to header
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            const scrolled = window.pageYOffset;
            header.style.transform = `translateY(${scrolled * 0.5}px)`;
        });
    </script>
</body>
</html>