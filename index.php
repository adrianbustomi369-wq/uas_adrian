<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adrian Hadi Bustomi - Web Developer Portfolio</title>
    
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            color: #333;
            background-color: #fff;
        }

        /* Navbar */
        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 1rem 2rem;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 700;
            font-size: 18px;
            color: #333 !important;
        }

        .logo-circle {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #0066ff, #0052cc);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            font-size: 14px;
        }

        .navbar-nav .nav-link {
            margin: 0 15px;
            color: #666 !important;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #0066ff !important;
        }

        /* Hero Section */
        .hero-section {
            padding: 80px 2rem;
            background: linear-gradient(135deg, #f8f9ff 0%, #fff 100%);
            display: flex;
            align-items: center;
        }

        .hero-content {
            flex: 1;
            padding-right: 40px;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
            color: #000;
            margin-bottom: 15px;
            line-height: 1.2;
        }

        .hero-content .subtitle {
            font-size: 1.5rem;
            color: #0066ff;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .hero-content p {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }

        .btn-primary-custom {
            background: linear-gradient(135deg, #0066ff, #0052cc);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 102, 255, 0.3);
            color: white;
        }

        .social-icons {
            display: flex;
            gap: 20px;
            margin-top: 30px;
        }

        .social-icons a {
            width: 45px;
            height: 45px;
            background: linear-gradient(135deg, #0066ff, #0052cc);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: all 0.3s ease;
            text-decoration: none;
            font-size: 18px;
        }

        .social-icons a:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 102, 255, 0.3);
        }

        .hero-image {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .profile-circle {
            width: 350px;
            height: 350px;
            background: linear-gradient(135deg, #0066ff, #0052cc);
            border-radius: 50%;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: white;
            overflow: hidden;
        }

        .profile-image {
            width: 350px;
            height: 350px;
            border-radius: 50%;
            object-fit: cover;
            position: relative;
            z-index: 2;
        }

        .dot-ornament {
            position: absolute;
            width: 10px;
            height: 10px;
            background: #0066ff;
            border-radius: 50%;
        }

        .dot-ornament:nth-child(1) { top: -20px; left: 50%; transform: translateX(-50%); }
        .dot-ornament:nth-child(2) { top: 20px; right: -30px; }
        .dot-ornament:nth-child(3) { bottom: 30px; right: -40px; }
        .dot-ornament:nth-child(4) { bottom: -20px; left: 50%; transform: translateX(-50%); }
        .dot-ornament:nth-child(5) { top: 50%; left: -40px; transform: translateY(-50%); }

        /* About & Skills Section */
        .about-skills-section {
            padding: 80px 2rem;
            background-color: #fff;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #000;
            margin-bottom: 50px;
            text-align: center;
        }

        .about-content {
            background: #f5f5f5;
            border-radius: 15px;
            padding: 40px;
            height: 100%;
        }

        .about-image-placeholder {
            width: 100%;
            height: 250px;
            background: #d9d9d9;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .about-image {
            width: 100%;
            height: 250px;
            background: #d9d9d9;
            border-radius: 10px;
            margin-bottom: 20px;
            object-fit: cover;
            display: block;
        }

        .upload-form-group {
            margin-bottom: 20px;
        }

        .upload-form-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            color: #333;
        }

        .upload-form-group input[type="file"] {
            display: block;
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        .upload-form-group button {
            background: linear-gradient(135deg, #0066ff, #0052cc);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
        }

        .upload-form-group button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 102, 255, 0.3);
        }

        .about-content h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #000;
            margin-bottom: 15px;
        }

        .about-content p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .btn-secondary-custom {
            background: transparent;
            color: #0066ff;
            border: 2px solid #0066ff;
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-secondary-custom:hover {
            background: #0066ff;
            color: white;
        }

        .skills-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .skill-card {
            background: #f5f5f5;
            border-radius: 15px;
            padding: 40px 30px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .skill-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 102, 255, 0.1);
        }

        .skill-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #0066ff, #0052cc);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2.5rem;
            color: white;
        }

        .skill-card h4 {
            font-size: 1.3rem;
            font-weight: 600;
            color: #000;
        }

        /* Portfolio Section */
        .portfolio-section {
            padding: 80px 2rem;
            background: #f8f9ff;
        }

        .portfolio-container {
            background: white;
            border-radius: 15px;
            padding: 50px 40px;
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .portfolio-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .portfolio-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 102, 255, 0.15);
        }

        .portfolio-image {
            width: 100%;
            height: 200px;
            background: #d9d9d9;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: #999;
        }

        .portfolio-card-content {
            padding: 25px;
        }

        .portfolio-card h5 {
            font-size: 1.2rem;
            font-weight: 600;
            color: #000;
            margin-bottom: 8px;
        }

        .portfolio-card p {
            color: #999;
            font-size: 0.95rem;
        }

        .portfolio-button-container {
            display: flex;
            justify-content: center;
        }

        /* Contact Section */
        .contact-section {
            padding: 80px 2rem;
            background: white;
        }

        .contact-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .contact-card {
            background: linear-gradient(135deg, #0066ff, #0052cc);
            border-radius: 15px;
            padding: 40px 30px;
            text-align: center;
            color: white;
            transition: all 0.3s ease;
        }

        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 102, 255, 0.3);
        }

        .contact-icon {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .contact-card h4 {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .contact-card p {
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.9);
        }

        /* Footer */
        footer {
            background: #222;
            color: white;
            text-align: center;
            padding: 30px 2rem;
            font-size: 0.95rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-section {
                flex-direction: column;
                padding: 50px 2rem;
            }

            .hero-content {
                padding-right: 0;
                margin-bottom: 40px;
            }

            .hero-content h1 {
                font-size: 2.2rem;
            }

            .hero-content .subtitle {
                font-size: 1.2rem;
            }

            .profile-circle {
                width: 250px;
                height: 250px;
            }

            .hero-buttons {
                flex-direction: column;
                gap: 15px;
            }

            .btn-primary-custom {
                width: 100%;
                text-align: center;
            }

            .social-icons {
                justify-content: center;
            }

            .about-skills-section {
                padding: 50px 2rem;
            }

            .skills-content {
                grid-template-columns: 1fr;
            }

            .portfolio-grid {
                grid-template-columns: 1fr;
            }

            .contact-cards {
                grid-template-columns: 1fr;
            }

            .navbar-nav {
                margin-top: 20px;
            }

            .navbar-nav .nav-link {
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    <?php
        // Buat folder uploads jika belum ada
        if (!is_dir('uploads')) {
            mkdir('uploads', 0755, true);
        }

        // Handle upload foto
        $pesan_upload = '';
        $foto_profile = 'uploads/profile.jpg'; // Default

        // Cek apakah ada file yang diupload
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['foto'])) {
            $file = $_FILES['foto'];
            $nama_file = $file['name'];
            $ukuran_file = $file['size'];
            $error = $file['error'];
            $tmp_file = $file['tmp_name'];

            // Validasi file
            $tipe_diizinkan = ['jpg', 'jpeg', 'png', 'gif'];
            $ekstensi = strtolower(pathinfo($nama_file, PATHINFO_EXTENSION));

            if ($error === 0) {
                if ($ukuran_file <= 2000000) { // Max 2MB
                    if (in_array($ekstensi, $tipe_diizinkan)) {
                        // Simpan dengan nama tetap
                        $nama_file_baru = 'uploads/profile.' . $ekstensi;
                        move_uploaded_file($tmp_file, $nama_file_baru);
                        $pesan_upload = '<div class="alert alert-success">Foto berhasil diupload!</div>';
                        $foto_profile = $nama_file_baru;
                    } else {
                        $pesan_upload = '<div class="alert alert-danger">Format file tidak didukung. Gunakan JPG, PNG, atau GIF.</div>';
                    }
                } else {
                    $pesan_upload = '<div class="alert alert-danger">Ukuran file terlalu besar. Maksimal 2MB.</div>';
                }
            }
        }

        // Cek file foto yang ada
        if (file_exists('uploads/profile.jpg')) {
            $foto_profile = 'uploads/profile.jpg';
        } elseif (file_exists('uploads/profile.png')) {
            $foto_profile = 'uploads/profile.png';
        } elseif (file_exists('uploads/profile.gif')) {
            $foto_profile = 'uploads/profile.gif';
        } elseif (file_exists('uploads/profile.jpeg')) {
            $foto_profile = 'uploads/profile.jpeg';
        }

        // Data Portfolio
        $projects = [
            [
                'title' => 'E-Commerce Platform',
                'category' => 'Web Development'
            ],
            [
                'title' => 'Social Media App',
                'category' => 'Web Development'
            ],
            [
                'title' => 'Dashboard Analytics',
                'category' => 'Web Development'
            ],
            [
                'title' => 'Blog Management System',
                'category' => 'Web Development'
            ]
        ];

        // Data Skills
        $skills = [
            ['name' => 'HTML', 'icon' => 'fab fa-html5'],
            ['name' => 'CSS', 'icon' => 'fab fa-css3-alt'],
            ['name' => 'JavaScript', 'icon' => 'fab fa-js-square'],
            ['name' => 'Bootstrap', 'icon' => 'fab fa-bootstrap']
        ];

        // Data Contact
        $contacts = [
            [
                'title' => 'WhatsApp',
                'value' => '08xxxxxxxx',
                'icon' => 'fab fa-whatsapp'
            ],
            [
                'title' => 'Instagram',
                'value' => '@adrianhadi.dev',
                'icon' => 'fab fa-instagram'
            ],
            [
                'title' => 'Email',
                'value' => 'adrianhadibustomi21@gmail.com',
                'icon' => 'fas fa-envelope'
            ]
        ];
    ?>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <div class="logo-circle">AHB</div>
                <span>ADRIAN HADI BUSTOMI</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content">
                    <h1>Hi, I'm ADRIAN HADI BUSTOMI</h1>
                    <p class="subtitle">Web Developer</p>
                    <p>Saya adalah seorang web developer yang berpengalaman dalam mengembangkan website modern dan responsif menggunakan HTML, CSS, JavaScript, dan Bootstrap. Saya berkomitmen untuk membuat desain yang menarik dan fungsionalitas yang optimal.</p>
                    <div class="hero-buttons">
                        <a href="#contact" class="btn-primary-custom">Contact Me</a>
                    </div>
                    <div class="social-icons">
                        <a href="https://github.com" target="_blank" title="GitHub"><i class="fab fa-github"></i></a>
                        <a href="https://instagram.com" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/628xxxxxxxx" target="_blank" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                        <a href="mailto:adrianhadibustomi21@gmail.com" title="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 hero-image">
                    <div class="profile-circle">
                        <?php 
                            if (file_exists($foto_profile)) {
                                echo '<img src="' . $foto_profile . '" alt="Adrian Hadi Bustomi" class="profile-image">';
                            } else {
                                echo '<i class="fas fa-user"></i>';
                            }
                        ?>
                        <div class="dot-ornament"></div>
                        <div class="dot-ornament"></div>
                        <div class="dot-ornament"></div>
                        <div class="dot-ornament"></div>
                        <div class="dot-ornament"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About & Skills Section -->
    <section class="about-skills-section" id="about">
        <div class="container">
            <h2 class="section-title">TENTANG SAYA & SKILLS</h2>
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-content">
                        <?php 
                            if (file_exists($foto_profile)) {
                                echo '<img src="' . $foto_profile . '" alt="Foto Profile" class="about-image">';
                            } else {
                                echo '<div class="about-image-placeholder"></div>';
                            }
                        ?>
                        
                        <!-- Form Upload Foto -->
                        <form method="POST" enctype="multipart/form-data" class="upload-form-group">
                            <label for="foto">Unggah Foto Profil:</label>
                            <input type="file" id="foto" name="foto" accept="image/*" required>
                            <button type="submit">Upload Foto</button>
                        </form>

                        <?php echo $pesan_upload; ?>

                        <h3>Tentang Saya</h3>
                        <p>Halo! Saya Adrian Hadi Bustomi, seorang web developer yang passionate dan berdedikasi dalam menciptakan solusi digital yang inovatif. Dengan pengalaman dalam mengembangkan berbagai jenis website, saya selalu siap menghadirkan hasil terbaik untuk setiap project.</p>
                        <a href="#" class="btn-secondary-custom">Read More</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="skills-content">
                        <?php foreach ($skills as $skill): ?>
                        <div class="skill-card">
                            <div class="skill-icon">
                                <i class="<?php echo $skill['icon']; ?>"></i>
                            </div>
                            <h4><?php echo $skill['name']; ?></h4>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio-section" id="portfolio">
        <div class="container">
            <h2 class="section-title">PORTFOLIO / PROJECT</h2>
            <div class="portfolio-container">
                <div class="portfolio-grid">
                    <?php foreach ($projects as $project): ?>
                    <div class="portfolio-card">
                        <div class="portfolio-image">
                            <i class="fas fa-image"></i>
                        </div>
                        <div class="portfolio-card-content">
                            <h5><?php echo $project['title']; ?></h5>
                            <p><?php echo $project['category']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="portfolio-button-container">
                    <a href="#" class="btn-primary-custom">View More Projects</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="container">
            <h2 class="section-title">CONTACT ME</h2>
            <div class="contact-cards">
                <?php foreach ($contacts as $contact): ?>
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="<?php echo $contact['icon']; ?>"></i>
                    </div>
                    <h4><?php echo $contact['title']; ?></h4>
                    <p><?php echo $contact['value']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Adrian Hadi Bustomi. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Smooth scroll untuk navigasi
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
    </script>
</body>
</html>
