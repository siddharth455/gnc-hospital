<?php require "common/header.php"; ?>
    <style>
        /* Base Styles and Custom Definitions */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
        /* Custom Tailwind-equivalent colors/classes */
        .text-primary-blue { color: #007bff; }
        .bg-primary-blue { background-color: #1d2a4d; }
        .text-accent-green { color: #28a745; }
        .border-accent-green { border-color: #28a745; }

        /* Custom Styles for Hero Section (Original Tailwind Look) */
        .hero-pattern {
            background-image: linear-gradient(to right, rgba(0, 123, 255, 0.9), rgba(40, 167, 69, 0.8));
            background-size: cover;
            height: 400px;
            background-position: center;
            display: flex;
            justify-content: center;    /* centers vertically */
            align-items: center;        /* centers horizontally */
            min-height: 60vh;           /* adjust height as needed */
            flex-direction: column;
        }

        /* Custom Styles for Job Cards (Original Tailwind Look) */
        .job-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 0.75rem; /* rounded-xl equivalent */
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1);
            display: flex; 
            flex-direction: column;
            justify-content: space-between;
        }
        .job-container {
             max-width: 1400px; 
             width: 100%;
             margin-left: auto;
             margin-right: auto;
             padding-left: 1rem;
             padding-right: 1rem;
        }
        .job-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 1.5rem;
        }
        @media (min-width: 768px) {
            .md\:grid-cols-2 { grid-template-columns: repeat(2, 1fr); }
            .md\:grid-cols-3 { grid-template-columns: repeat(3, 1fr); }
            .md\:grid-cols-4 { grid-template-columns: repeat(4, 1fr); }
        }

        /* SIMULATED HEADER/NAV BAR STYLES (To ensure this part is NOT affected by Tailwind) */
        .simulated-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
            padding: 1rem 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .simulated-header a {
            color: #007bff;
            text-decoration: none;
            margin-left: 1rem;
            font-weight: 500;
        }

        /* Modal overrides (simple) */
        #apply-modal-backdrop { display: none; }
    </style>
<section id="hospital-careers" class="py-1" style="padding-top: 0.25rem; padding-bottom: 5rem;">

    <!-- Header/Hero Section -->
    <header class="hero-pattern text-white shadow-xl"
        style="display: flex; justify-content: center; align-items: center; min-height: 60vh; flex-direction: column;">
        <div class="job-container text-center">
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight animate-fadeIn text-white" style="font-size: 3rem; font-weight: 800;">
                Careers at SJS Joshi Multispeciality Hospital
            </h1>
            <p class="text-xl sm:text-2xl font-light max-w-3xl mx-auto  opacity-90" style="font-size: 1.25rem; font-weight: 300; max-width: 48rem; margin: 0 auto 2rem;">
                Join a team dedicated to healing, innovation, and compassion. Your purpose starts here.
            </p>
            <a href="#open-positions" 
                style="display: inline-block; background-color: white; color: #007bff; font-weight: bold; padding: 0.75rem 2rem; border-radius: 9999px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); transition: all 0.3s ease-in-out; text-decoration: none;">
               Work With Us
            </a>
        </div>
    </header>

    <div class="job-container">

        <!-- Core Values Section -->
        <div style="margin-bottom: 4rem;">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-10 mt-4 mb-4 text-primary-blue" style="font-size: 2.25rem; font-weight: 700; text-align: center; margin-bottom: 2.5rem;">
                Our Values: The Heart of Our Work
            </h2>
            <div class="grid-container md:grid-cols-3">
                <!-- Value Card 1 -->
                <div class="p-6 bg-white job-card border-t-4 border-accent-green" style="padding: 1.5rem; background-color: white; text-align: center; border-top-width: 4px;">
                    <div class="text-4xl text-accent-green mb-3" style="font-size: 2.25rem; margin-bottom: 0.75rem;">⚕️</div>
                    <h3 class="text-xl font-semibold mb-2" style="font-size: 1.25rem; font-weight: 600; margin-bottom: 0.5rem;">Patient-First Compassion</h3>
                    <p class="text-gray-600 text-sm" style="color: #4b5563; font-size: 0.875rem;">We treat every individual with empathy, respect, and dignity, ensuring their well-being is our highest priority.</p>
                </div>
                <!-- Value Card 2 -->
                <div class="p-6 bg-white job-card border-t-4 border-accent-green" style="padding: 1.5rem; background-color: white; text-align: center; border-top-width: 4px;">
                    <div class="text-4xl text-accent-green mb-3" style="font-size: 2.25rem; margin-bottom: 0.75rem;">💡</div>
                    <h3 class="text-xl font-semibold mb-2" style="font-size: 1.25rem; font-weight: 600; margin-bottom: 0.5rem;">Driven by Innovation</h3>
                    <p class="text-gray-600 text-sm" style="color: #4b5563; font-size: 0.875rem;">We embrace continuous learning and leverage the latest medical technology to provide superior care and outcomes.</p>
                </div>
                <!-- Value Card 3 -->
                <div class="p-6 bg-white job-card border-t-4 border-accent-green" style="padding: 1.5rem; background-color: white; text-align: center; border-top-width: 4px;">
                    <div class="text-4xl text-accent-green mb-3" style="font-size: 2.25rem; margin-bottom: 0.75rem;">🤝</div>
                    <h3 class="text-xl font-semibold mb-2" style="font-size: 1.25rem; font-weight: 600; margin-bottom: 0.5rem;">Collaborative Excellence</h3>
                    <p class="text-gray-600 text-sm" style="color: #4b5563; font-size: 0.875rem;">We foster a supportive environment where multidisciplinary teams work together to achieve common goals.</p>
                </div>
            </div>
        </div>

        <!-- Job Search & Filter Section -->
        <div id="open-positions" style="margin-bottom: 4rem; padding: 1.5rem; background-color: white;" class="job-card shadow-xl">
            <h2 class="text-3xl font-bold mb-6 text-primary-blue" style="font-size: 1.875rem; font-weight: 700; margin-bottom: 1.5rem;">Find Your Opportunity</h2>

            <form action="career_page.php" method="GET" class="grid-container md:grid-cols-3">
                <div style="grid-column: span 1;">
                    <input type="text" name="keyword" id="keyword" placeholder="Search by Keyword (e.g., Nurse, IT)" style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 0.5rem; outline: none;" oninput="filterJobs()">
                </div>
                <div style="grid-column: span 1;">
                    <select name="department" id="department" style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 0.5rem; outline: none;" onchange="filterJobs()">
                        <option value="">All Departments</option>
                        <option value="Nursing">Nursing Services</option>
                        <option value="Admin">Administration</option>
                        <option value="IT">Information Technology</option>
                        <option value="Physician">Physician Roles</option>
                        <option value="Allied">Allied Health</option>
                    </select>
                </div>
                <div style="grid-column: span 1;">
                    <button type="submit" style="width: 100%; padding: 0.75rem; border-radius: 0.5rem; color: white; background-color: #1d2a4d; font-weight: 600; transition: background-color 0.3s ease; border: none;">
                        Search Positions
                    </button>
                </div>
            </form>

        </div>

        <!-- Featured Job Listings Section -->
        <div style="margin-bottom: 4rem;">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-10 text-primary-blue" style="font-size: 2.25rem; font-weight: 700; text-align: center; margin-bottom: 2.5rem;">
                Featured Opportunities
            </h2>
            
            <div id="job-listings" class="grid-container md:grid-cols-2">
                <!-- Job Card 1: Registered Nurse -->
                <div class="job-card bg-white p-6 border-t-4 border-accent-green" data-keyword="nurse registered icu" data-department="Nursing" style="padding: 1.5rem; background-color: white; border-top-width: 4px;">
                    <div>
                        <h3 class="text-2xl font-bold text-primary-blue mb-2" style="font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem;">Registered Nurse - ICU</h3>
                        <p class="text-sm text-gray-500 mb-3" style="font-size: 0.875rem; color: #6b7280; margin-bottom: 0.75rem;">Department: Nursing Services | Job ID: RN-ICU-001</p>
                        <ul style="list-style: none; padding-left: 0; margin-top: 0.5rem; margin-bottom: 0; font-size: 0.875rem; color: #374151;">
                            <li style="margin-bottom: 0.25rem;"><strong>Location:</strong> Main Campus, Night Shift</li>
                            <li><strong>Required Experience:</strong> 2+ Years in Critical Care</li>
                        </ul>
                    </div>
                    <div style="margin-top: 1rem; display: flex; justify-content: flex-end;">
                        <a href="apply.php?job_id=RN-ICU-001" style="background-color: #1d2a4d; color: white; padding: 0.5rem 1.25rem; border-radius: 0.5rem; transition: background-color 0.3s ease; text-decoration: none; font-size: 0.875rem;">Apply Now</a>
                    </div>
                </div>

                <!-- Job Card 2: Senior Software Engineer (IT) -->
                <div class="job-card bg-white p-6 border-t-4 border-accent-green" data-keyword="software engineer IT developer" data-department="IT" style="padding: 1.5rem; background-color: white; border-top-width: 4px;">
                    <div>
                        <h3 class="text-2xl font-bold text-primary-blue mb-2" style="font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem;">Senior EMR Software Engineer</h3>
                        <p class="text-sm text-gray-500 mb-3" style="font-size: 0.875rem; color: #6b7280; margin-bottom: 0.75rem;">Department: Information Technology | Job ID: IT-SE-005</p>
                        <ul style="list-style: none; padding-left: 0; margin-top: 0.5rem; margin-bottom: 0; font-size: 0.875rem; color: #374151;">
                            <li style="margin-bottom: 0.25rem;"><strong>Location:</strong> Remote/Hybrid, Full-time</li>
                            <li><strong>Required Experience:</strong> 5+ Years in Healthcare Systems</li>
                        </ul>
                    </div>
                    <div style="margin-top: 1rem; display: flex; justify-content: flex-end;">
                        <a href="apply.php?job_id=IT-SE-005" style="background-color: #1d2a4d; color: white; padding: 0.5rem 1.25rem; border-radius: 0.5rem; transition: background-color 0.3s ease; text-decoration: none; font-size: 0.875rem;">Apply Now</a>
                    </div>
                </div>

                <!-- Job Card 3: Administrative Assistant -->
                <div class="job-card bg-white p-6 border-t-4 border-accent-green" data-keyword="admin assistant clerical" data-department="Admin" style="padding: 1.5rem; background-color: white; border-top-width: 4px;">
                    <div>
                        <h3 class="text-2xl font-bold text-primary-blue mb-2" style="font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem;">Administrative Support Specialist</h3>
                        <p class="text-sm text-gray-500 mb-3" style="font-size: 0.875rem; color: #6b7280; margin-bottom: 0.75rem;">Department: Administration | Job ID: ADM-SS-002</p>
                        <ul style="list-style: none; padding-left: 0; margin-top: 0.5rem; margin-bottom: 0; font-size: 0.875rem; color: #374151;">
                            <li style="margin-bottom: 0.25rem;"><strong>Location:</strong> Outpatient Clinic, Day Shift</li>
                            <li><strong>Required Experience:</strong> 1+ Year in Office Management</li>
                        </ul>
                    </div>
                    <div style="margin-top: 1rem; display: flex; justify-content: flex-end;">
                        <a href="apply.php?job_id=ADM-SS-002" style="background-color: #1d2a4d; color: white; padding: 0.5rem 1.25rem; border-radius: 0.5rem; transition: background-color 0.3s ease; text-decoration: none; font-size: 0.875rem;">Apply Now</a>
                    </div>
                </div>
                
                <!-- Job Card 4: Cardiologist -->
                <div class="job-card bg-white p-6 border-t-4 border-accent-green" data-keyword="physician doctor cardiologist" data-department="Physician" style="padding: 1.5rem; background-color: white; border-top-width: 4px;">
                    <div>
                        <h3 class="text-2xl font-bold text-primary-blue mb-2" style="font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem;">Staff Cardiologist</h3>
                        <p class="text-sm text-gray-500 mb-3" style="font-size: 0.875rem; color: #6b7280; margin-bottom: 0.75rem;">Department: Physician Roles | Job ID: PHY-CARD-001</p>
                        <ul style="list-style: none; padding-left: 0; margin-top: 0.5rem; margin-bottom: 0; font-size: 0.875rem; color: #374151;">
                            <li style="margin-bottom: 0.25rem;"><strong>Location:</strong> Main Campus, On-Call Rotation</li>
                            <li><strong>Required Experience:</strong> Board Certified/Eligible</li>
                        </ul>
                    </div>
                    <div style="margin-top: 1rem; display: flex; justify-content: flex-end;">
                        <a href="apply.php?job_id=PHY-CARD-001" style="background-color: #1d2a4d; color: white; padding: 0.5rem 1.25rem; border-radius: 0.5rem; transition: background-color 0.3s ease; text-decoration: none; font-size: 0.875rem;">Apply Now</a>
                    </div>
                </div>
                
                <!-- No Results Message (initially hidden) -->
                <div id="no-jobs-message" style="display: none; grid-column: 1 / -1; text-align: center; padding: 2rem; background-color: #fffbeb; color: #92400e; border: 1px solid #fcd34d; border-radius: 0.5rem;">
                    <p class="font-semibold text-lg" style="font-weight: 600; font-size: 1.125rem;">No positions match your current search criteria.</p>
                    <p class="text-sm" style="font-size: 0.875rem;">Please try a different keyword or select "All Departments."</p>
                </div>
            </div>
        </div>

        <!-- Recruitment Process Call to Action -->
        <div class="text-white p-8 md:p-10 job-card shadow-2xl text-center" style="background-color: #21cdc0; color: white; padding: 2.5rem;">
            <h3 class="text-3xl font-bold mb-4 text-white" style="font-size: 1.875rem; font-weight: 700; margin-bottom: 1rem;">Ready to Make a Difference?</h3>
            <p class="text-lg opacity-90 mb-6 max-w-2xl mx-auto" style="font-size: 1.125rem; margin: 0 auto 1.5rem; opacity: 0.9;">Our streamlined recruitment process ensures a quick and transparent experience.</p>
            
            <div class="grid-container md:grid-cols-4 text-left mt-8">
                <div style="display: flex; align-items: flex-start;">
                    <span class="flex-shrink-0 text-3xl font-bold mr-3" style="font-size: 1.875rem; font-weight: 700; margin-right: 0.75rem;">1</span>
                    <div><strong style="display: block;">Submit Application</strong><span class="text-sm opacity-80" style="font-size: 0.875rem; opacity: 0.8;">Upload CV & cover letter.</span></div>
                </div>
                <div style="display: flex; align-items: flex-start;">
                    <span class="flex-shrink-0 text-3xl font-bold mr-3" style="font-size: 1.875rem; font-weight: 700; margin-right: 0.75rem;">2</span>
                    <div><strong style="display: block;">HR Review</strong><span class="text-sm opacity-80" style="font-size: 0.875rem; opacity: 0.8;">Our team evaluates your skills.</span></div>
                </div>
                <div style="display: flex; align-items: flex-start;">
                    <span class="flex-shrink-0 text-3xl font-bold mr-3" style="font-size: 1.875rem; font-weight: 700; margin-right: 0.75rem;">3</span>
                    <div><strong style="display: block;">Interview Stage</strong><span class="text-sm opacity-80" style="font-size: 0.875rem; opacity: 0.8;">Meet the hiring manager/team.</span></div>
                </div>
                <div style="display: flex; align-items: flex-start;">
                    <span class="flex-shrink-0 text-3xl font-bold mr-3" style="font-size: 1.875rem; font-weight: 700; margin-right: 0.75rem;">4</span>
                    <div><strong style="display: block;">Offer & Onboarding</strong><span class="text-sm opacity-80" style="font-size: 0.875rem; opacity: 0.8;">Welcome to the Genesis family!</span></div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- APPLICATION MODAL (paste before footer) -->
<div id="apply-modal" aria-hidden="true" style="display:none;">
  <div id="apply-modal-backdrop" style="position:fixed;inset:0;background:rgba(0,0,0,0.45);z-index:9998;display:flex;align-items:center;justify-content:center;">
    <div role="dialog" aria-modal="true" aria-labelledby="apply-modal-title"
         style="width:95%;max-width:700px;background:#fff;border-radius:12px;padding:1.25rem;box-shadow:0 12px 40px rgba(0,0,0,0.3);z-index:9999;position:relative;">
      
      <button id="apply-modal-close" style="position:absolute;right:12px;top:12px;border:none;background:transparent;font-size:1.25rem;cursor:pointer;">
        &times;
      </button>

      <h2 id="apply-modal-title" style="font-size:1.25rem;margin:0 0 0.5rem;">Apply for Position</h2>
      <p id="apply-modal-sub" style="margin:0 0 1rem;color:#374151;font-size:0.95rem;">Complete the form below and upload your resume.</p>

      <!-- Form: submits to apply_handler.php (create next) -->
      <form id="apply-form" action="apply_handler.php" method="post" enctype="multipart/form-data" style="display:grid;gap:0.75rem;">
        <input type="hidden" name="job_id" id="form-job-id" value="">
        <label style="font-size:0.85rem;">
          Name *
          <input name="name" id="form-name" required style="width:100%;padding:0.5rem;border:1px solid #d1d5db;border-radius:6px;">
        </label>

        <label style="font-size:0.85rem;">
          Email ID *
          <input type="email" name="email" id="form-email" required style="width:100%;padding:0.5rem;border:1px solid #d1d5db;border-radius:6px;">
        </label>

        <label style="font-size:0.85rem;">
          Phone number *
          <input type="tel" name="phone" id="form-phone" required pattern="[\d\+\-\s\(\)]{7,}" title="Enter phone number" style="width:100%;padding:0.5rem;border:1px solid #d1d5db;border-radius:6px;">
        </label>

        <label style="font-size:0.85rem;">
          Position applying for *
          <input name="position" id="form-position" readonly required style="width:100%;padding:0.5rem;border:1px solid #e5e7eb;border-radius:6px;background:#f9fafb;">
        </label>

        <label style="font-size:0.85rem;">
          Experience (years)
          <input name="experience" id="form-experience" type="number" min="0" step="0.1" style="width:100%;padding:0.5rem;border:1px solid #d1d5db;border-radius:6px;">
        </label>

        <label style="font-size:0.85rem;">
          Describe yourself
          <textarea name="about" id="form-about" rows="4" style="width:100%;padding:0.5rem;border:1px solid #d1d5db;border-radius:6px;"></textarea>
        </label>

        <label style="font-size:0.85rem;">
          Upload resume * (PDF, DOC, DOCX; max 4MB)
          <input type="file" name="resume" id="form-resume" accept=".pdf,.doc,.docx" required style="display:block;margin-top:0.35rem;">
        </label>

        <div style="display:flex;gap:0.5rem;justify-content:flex-end;margin-top:0.5rem;">
          <button type="button" id="apply-cancel" style="padding:0.5rem 1rem;border-radius:6px;background:#e5e7eb;border:none;cursor:pointer;">Cancel</button>
          <button type="submit" style="padding:0.55rem 1rem;border-radius:6px;background:#1d2a4d;color:#fff;border:none;cursor:pointer;">Submit Application</button>
        </div>
      </form>

    </div>
  </div>
</div>

<!-- Simple JavaScript for client-side filtering (Your original script logic) + modal attachment -->
<script>
    function filterJobs() {
        const keywordInput = document.getElementById('keyword').value.toLowerCase().trim();
        const departmentSelect = document.getElementById('department').value;
        const jobListingsContainer = document.getElementById('job-listings');
        const jobCards = jobListingsContainer.querySelectorAll('.job-card');
        const noJobsMessage = document.getElementById('no-jobs-message');
        let visibleJobsCount = 0;

        jobCards.forEach(card => {
            const cardKeywords = (card.getAttribute('data-keyword') || '').toLowerCase();
            const cardDepartment = card.getAttribute('data-department') || '';

            const keywordMatch = keywordInput === '' || cardKeywords.includes(keywordInput);
            const departmentMatch = departmentSelect === '' || cardDepartment === departmentSelect;

            if (keywordMatch && departmentMatch) {
                card.style.display = 'flex';
                visibleJobsCount++;
            } else {
                card.style.display = 'none';
            }
        });

        // Show/hide "No Jobs Found" message
        if (visibleJobsCount === 0) {
            noJobsMessage.style.display = 'block';
        } else {
            noJobsMessage.style.display = 'none';
        }
    }
    
    // Initial run on load
    window.onload = function() {
      filterJobs();
      attachApplyModal(); // attach modal behaviors after DOM ready
    };

    /* ---------- Modal code: attaches to all links that start with apply.php ---------- */
    function attachApplyModal() {
      const modalRoot = document.getElementById('apply-modal');
      const backdrop = document.getElementById('apply-modal-backdrop');
      const closeBtn = document.getElementById('apply-modal-close');
      const cancelBtn = document.getElementById('apply-cancel');
      const form = document.getElementById('apply-form');

      function openModal(prefill) {
        document.getElementById('form-position').value = prefill.title || '';
        document.getElementById('form-job-id').value = prefill.jobId || '';
        modalRoot.style.display = 'block';
        backdrop.style.display = 'flex';
        // focus first input for UX
        setTimeout(()=> document.getElementById('form-name').focus(), 50);
        document.body.style.overflow = 'hidden';
      }

      function closeModal() {
        modalRoot.style.display = 'none';
        backdrop.style.display = 'none';
        document.body.style.overflow = '';
        form.reset();
      }

      // Attach to all links that start with apply.php
      document.querySelectorAll('a[href^="apply.php"]').forEach(link => {
        link.addEventListener('click', function(e){
          e.preventDefault();
          // try to get job id from query string in href (if present)
          let jobId = '';
          try {
            const href = link.getAttribute('href');
            const params = new URLSearchParams(href.split('?')[1] || '');
            jobId = params.get('job_id') || '';
          } catch(err){ jobId = ''; }

          // Try to find nearest job title within parent .job-card (fallback to jobId)
          let card = link.closest('.job-card');
          let title = '';
          if (card) {
            const h3 = card.querySelector('h3');
            if (h3) title = h3.innerText.trim();
          }

          // fallback if title empty
          if (!title && jobId) title = jobId;

          openModal({ title, jobId });
        });
      });

      // Close handlers
      if (closeBtn) closeBtn.addEventListener('click', closeModal);
      if (cancelBtn) cancelBtn.addEventListener('click', closeModal);
      if (backdrop) backdrop.addEventListener('click', function(e){
        // only close when clicking backdrop (not the modal content)
        if (e.target === backdrop) closeModal();
      });

      // Escape key closes modal
      document.addEventListener('keydown', function(e){
        if (e.key === 'Escape' && modalRoot.style.display === 'block') closeModal();
      });

      // Optional: client-side file size check (4MB)
      const resumeInput = document.getElementById('form-resume');
      form.addEventListener('submit', function(e){
        if (resumeInput.files.length === 0) {
          e.preventDefault();
          alert('Please attach your resume.');
          return;
        }
        const file = resumeInput.files[0];
        const maxBytes = 4 * 1024 * 1024; // 4MB
        if (file.size > maxBytes) {
          e.preventDefault();
          alert('Resume must be 4MB or smaller.');
          return;
        }
        // allow form to submit to server
      });
    }
</script>

<?php require "common/footer.php"; ?>
