// JavaScript untuk Web Portfolio Putri Intan Abdillah Fattah
document.addEventListener('DOMContentLoaded', function() {
    console.log('Web Portfolio berhasil dimuat!');
    
    // ===== FUNGSI UMUM =====
    
    // Update tahun copyright di footer
    function updateCopyrightYear() {
        const currentYear = new Date().getFullYear();
        const copyrightElements = document.querySelectorAll('.footer-center p');
        
        copyrightElements.forEach(element => {
            if (element.textContent.includes('Copyright')) {
                element.innerHTML = '<i class=\"fas fa-copyright\"></i> Copyright ' + currentYear + ' putriintan. all right reserved';
            }
        });
    }
    
    // Animasi elemen saat halaman dimuat
    function animatePageElements() {
        const elements = document.querySelectorAll('.content-section, .story-section, .education-gallery');
        
        elements.forEach((element, index) => {
            setTimeout(() => {
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }, index * 200);
        });
        
        // Set initial state
        elements.forEach(element => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(20px)';
            element.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        });
    }
    
    // ===== FUNGSI UNTUK HOME PAGE =====
    
    // Interaksi kartu pendidikan di sidebar
    function setupEducationCards() {
        const eduCards = document.querySelectorAll('.edu-card');
        const storyContent = document.querySelector('.story-content');
        
        if (eduCards.length > 0 && storyContent) {
            // Data cerita untuk setiap jenjang
            const educationStories = {
                sd: '<strong>Kisah Sekolahku :</strong> Disini saya mulai menceritakan perjalanan pendidikan saya dimulai dari saya SD, saya bersekolah di SDIT AL-FURQON MAOSPATI. Selama menempuh pendidikan 6 tahun disana, pada saat saya kelas 4 dan 5 saya mewakili sekolah saya untuk mengikuti pertandingan CATUR tingkan Kecamatan dan memperoleh juara harapan1 dan saya lulus ditahun 2017.',
                
                smp: '<strong>Jenjang SMP:</strong> Selanjutnya masuk ke jenjang pendidikan SMP, saya melanjutkan pendidikan di MTSn 2 MAGETAN, disana saya lulus tes untuk masuk di kelas unggulan di sekolah itu, dan di kelas 8 saya mengikuti organisasi pramuka menjadi bendahara DKP(Dewan KePramukaan), di kelas 8 itu juga saya kembali mengikuti pertandingan Catur kali ini tingkat Kabupaten Magetan dan mendapatkan juara 2, kemudian saya juga mewakili sekolah saya untuk maju ke PORSENI MTS SE-JAWA TIMUR di tahun 2019, dan saya lulus ditahun 2020.',
                
                sma: '<strong>Jenjang SMA:</strong> Selanjutnya masuk ke jenjang pendidikan SMA, saya melanjutkan pendidikan di MAN 2 KOTA MADIUN, disana saya juga lulus tes untuk masuk di kelas unggulan di sekolah itu, saya masuk kelas MIPA MODEL 2. Di SMA tahun pertama dan kedua tidak terlalu banyak cerita dan saya juga belum memiliki teman, namun ditahun ketiga saya sudah memiliki 6 teman dekat saya yang sekarang juga sudah melanjutkan pendidikan di perguruan tinggi dengan berbagai jurusan, dan saya lulus darisana ditahun 2023.',
                
                s1: '<strong>Jenjang Perkuliahan:</strong> Selanjutnya masuk ke jenjang Perkuliahan, saya melanjutkan pendidikan di UNIVERSITAS PGRI MADIUN, dan saya mengambil jurusan TEKNIK INFORMATIKA, dan saat ini saya berada di semester 5.'
            };
            
            // Tambahkan event listener untuk setiap kartu
            eduCards.forEach(card => {
                card.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Hapus kelas active dari semua kartu
                    eduCards.forEach(c => c.classList.remove('active'));
                    
                    // Tambahkan kelas active ke kartu yang diklik
                    this.classList.add('active');
                    
                    // Ambil level pendidikan dari atribut data
                    const level = this.getAttribute('data-level');
                    
                    // Update konten cerita
                    if (educationStories[level]) {
                        storyContent.innerHTML = '<p>' + educationStories[level] + '</p>';
                        
                        // Animasi perubahan
                        storyContent.style.opacity = '0';
                        setTimeout(() => {
                            storyContent.style.transition = 'opacity 0.5s ease';
                            storyContent.style.opacity = '1';
                        }, 100);
                        
                        console.log('Menampilkan cerita untuk jenjang: ' + level.toUpperCase());
                    }
                });
            });
        }
    }
    
    // Filter gallery berdasarkan jenjang
    function setupGalleryFilter() {
        const galleryItems = document.querySelectorAll('.gallery-item');
        const eduCards = document.querySelectorAll('.edu-card');
        
        if (galleryItems.length > 0 && eduCards.length > 0) {
            eduCards.forEach(card => {
                card.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const level = this.getAttribute('data-level');
                    
                    // Sembunyikan semua gallery items
                    galleryItems.forEach(item => {
                        item.style.opacity = '0.3';
                        item.style.transform = 'scale(0.95)';
                    });
                    
                    // Tampilkan hanya gallery item yang sesuai
                    const targetItems = document.querySelectorAll('.gallery-item[data-level=\"' + level + '\"]');
                    
                    setTimeout(() => {
                        targetItems.forEach(item => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        });
                    }, 300);
                });
            });
        }
    }
    
    // ===== FUNGSI UNTUK PROFIL PAGE =====
    
    // Animasi skill bars
    function animateSkillBars() {
        const skillBars = document.querySelectorAll('.skill-level');
        
        if (skillBars.length > 0) {
            // Reset width untuk animasi
            skillBars.forEach(bar => {
                const originalWidth = bar.style.width;
                bar.style.width = '0%';
                
                setTimeout(() => {
                    bar.style.width = originalWidth;
                }, 300);
            });
        }
    }
    
    // Smooth scroll untuk quick links
    function setupQuickLinks() {
        const quickLinks = document.querySelectorAll('.quick-links-sidebar a');
        
        quickLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }
    
    // ===== FUNGSI UNTUK CONTACT PAGE =====
    
    // Handle form submission
    function setupContactForm() {
        const contactForm = document.getElementById('contactForm');
        const successModal = document.getElementById('successModal');
        
        if (contactForm && successModal) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Validasi form
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const subject = document.getElementById('subject').value;
                const message = document.getElementById('message').value;
                
                if (!name || !email || !subject || !message) {
                    alert('Harap lengkapi semua field!');
                    return;
                }
                
                // Tampilkan modal sukses
                successModal.style.display = 'flex';
                
                // Reset form
                contactForm.reset();
                
                // Log data ke console (simulasi pengiriman)
                console.log('Pesan terkirim:');
                console.log('Nama:', name);
                console.log('Email:', email);
                console.log('Subjek:', subject);
                console.log('Pesan:', message);
            });
            
            // Handle modal close
            const closeModal = document.querySelector('.close-modal');
            const btnOk = document.querySelector('.btn-ok');
            
            if (closeModal) {
                closeModal.addEventListener('click', function() {
                    successModal.style.display = 'none';
                });
            }
            
            if (btnOk) {
                btnOk.addEventListener('click', function() {
                    successModal.style.display = 'none';
                });
            }
            
            // Close modal ketika klik di luar modal
            window.addEventListener('click', function(e) {
                if (e.target === successModal) {
                    successModal.style.display = 'none';
                }
            });
        }
    }
    
    // ===== FUNGSI UNTUK SEMUA HALAMAN =====
    
    // Highlight menu aktif berdasarkan halaman
    function highlightActiveMenu() {
        const currentPage = window.location.pathname.split('/').pop();
        const navLinks = document.querySelectorAll('.top-nav a');
        
        navLinks.forEach(link => {
            const linkPage = link.getAttribute('href');
            
            if (linkPage === currentPage || (currentPage === '' && linkPage === 'index.html')) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    }
    
    // Load gambar dengan fallback
    function setupImageFallbacks() {
        const images = document.querySelectorAll('img');
        
        images.forEach(img => {
            img.addEventListener('error', function() {
                const level = this.closest('.gallery-item') ? this.closest('.gallery-item').getAttribute('data-level') : null;
                let color = '3498db';
                let text = 'GAMBAR SAYA';
                
                switch(level) {
                    case 'sd': color = '3498db'; text = 'SD GAMBAR SAYA'; break;
                    case 'smp': color = '2ecc71'; text = 'SMP GAMBAR SAYA'; break;
                    case 'sma': color = 'e74c3c'; text = 'SMA GAMBAR SAYA'; break;
                    case 's1': color = '9b59b6'; text = 'S1 GAMBAR SAYA'; break;
                }
                
                this.src = 'https://via.placeholder.com/300x200/' + color + '/FFFFFF?text=' + encodeURIComponent(text);
            });
        });
    }
    
    // ===== INISIALISASI =====
    
    // Jalankan fungsi yang sesuai berdasarkan halaman
    const currentPage = window.location.pathname.split('/').pop();
    
    // Fungsi yang dijalankan di semua halaman
    updateCopyrightYear();
    highlightActiveMenu();
    setupImageFallbacks();
    animatePageElements();
    
    // Fungsi spesifik per halaman
    if (currentPage === 'index.html' || currentPage === '') {
        setupEducationCards();
        setupGalleryFilter();
    } else if (currentPage === 'profil.html') {
        animateSkillBars();
        setupQuickLinks();
    } else if (currentPage === 'contact.html') {
        setupContactForm();
    }
    
    // Pesan sambutan di console
    console.log('====================================');
    console.log('WEB PORTOFOLIO PUTRI INTAN ABDILLAH FATTAH');
    console.log('Mahasiswa Teknik Informatika - Semester 5');
    console.log('Universitas PGRI Madiun');
    console.log('====================================');
});

// Efek hover untuk card dan button
document.addEventListener('mouseover', function(e) {
    const card = e.target.closest('.feature, .gallery-item, .social-card, .info-card');
    
    if (card) {
        card.style.transition = 'all 0.3s ease';
    }
});

// Update tahun di footer secara real-time
setInterval(() => {
    const yearElement = document.querySelector('.footer-center p:first-child');
    if (yearElement && !yearElement.textContent.includes(new Date().getFullYear())) {
        yearElement.innerHTML = '<i class=\"fas fa-copyright\"></i> Copyright ' + new Date().getFullYear() + ' putriintan. all right reserved';
    }
}, 60000); // Update setiap menit
