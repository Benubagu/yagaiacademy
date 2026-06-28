<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="description" content="Yagai Academy — A premier boarding secondary school in Jalingo, Taraba State offering Nursery, Primary and Secondary education. Perseverance, A Key to Success."/>
  <meta name="keywords" content="Yagai Academy, Jalingo, Taraba State, boarding school, secondary school, primary school, nursery school, Nigeria"/>
  <title>Yagai Academy – Perseverance, A Key to Success</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Inter:wght@300;400;500;600&family=Cinzel:wght@700&display=swap" rel="stylesheet"/>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <!-- School Stylesheet -->
  <link rel="stylesheet" href="css/style.css"/>
</head>
<body>

<!-- ════════════════════════════════════════
     ANNOUNCEMENT BAR
════════════════════════════════════════ -->
<div class="announce">
  📢 2025/2026 Admissions Now Open! &nbsp;<a href="#admissions">Apply Today →</a>
</div>

<!-- ════════════════════════════════════════
     TOP BAR
════════════════════════════════════════ -->
<div class="topbar">
  <div>
    <i class="fas fa-envelope"></i>&nbsp;
    <a href="mailto:info@yagaiacademy.com">info@yagaiacademy.com</a>
    &nbsp;&nbsp;|&nbsp;&nbsp;
    <i class="fas fa-map-marker-alt"></i>&nbsp;
    P.M.B. 1180, Jalingo, Taraba State
  </div>
  <div class="socials">
    <a href="https://facebook.com/yagaiacademy" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
    <a href="https://twitter.com/yagaiacademy"  target="_blank" aria-label="Twitter/X"><i class="fab fa-x-twitter"></i></a>
    <a href="https://instagram.com/yagaiacademy" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
    <a href="https://wa.me/234XXXXXXXXXX"       target="_blank" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
    <a href="https://youtube.com/@yagaiacademy" target="_blank" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
  </div>
</div>

<!-- ════════════════════════════════════════
     HEADER & NAVIGATION
════════════════════════════════════════ -->
<header>
  <div class="header-inner">
    <a href="#" class="logo-wrap">
      <img src="images/yagai-logo.png" alt="Yagai Academy Logo"/>
      <div class="logo-text">
        <h1>Yagai Academy</h1>
        <span>Perseverance, A Key to Success</span>
      </div>
    </a>
    <span class="hamburger" onclick="toggleNav()"><i class="fas fa-bars"></i></span>
    <nav id="main-nav">
      <ul>
        <li><a href="#home" class="active">Home</a></li>
        <li><a href="#about">About</a></li>
        <li class="has-drop">
          <a href="#schools">Schools ▾</a>
          <ul class="dropdown">
            <li><a href="#schools">Nursery School</a></li>
            <li><a href="#schools">Primary School</a></li>
            <li><a href="#schools">Secondary School</a></li>
            <li><a href="#boarding">Boarding Facility</a></li>
          </ul>
        </li>
        <li class="has-drop">
          <a href="#academics">Academics ▾</a>
          <ul class="dropdown">
            <li><a href="#academics">Curriculum</a></li>
            <li><a href="#academics">Subjects Offered</a></li>
            <li><a href="#academics">Extracurriculars</a></li>
            <li><a href="#academics">Examinations</a></li>
          </ul>
        </li>
        <li><a href="#admissions">Admissions</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#" class="btn-apply" onclick="openModal(); return false;">Apply Now</a></li>
      </ul>
    </nav>
  </div>
</header>

<!-- ════════════════════════════════════════
     HERO
════════════════════════════════════════ -->
<section class="hero" id="home">
  <div class="hero-bg"></div>
  <div class="hero-content">
    <div class="hero-left">
      <span class="hero-badge">Boarding Secondary School · Jalingo, Taraba State</span>
      <h2>Where <span>Perseverance</span> Unlocks Every Future</h2>
      <p>Yagai Academy nurtures curious minds from Nursery through Secondary level, blending academic excellence with strong moral values in a safe boarding environment.</p>
      <div class="hero-cta">
        <a href="#admissions" class="btn-primary">Apply for Admission</a>
        <a href="#about" class="btn-outline">Learn More</a>
      </div>
    </div>
    <div class="hero-right">
      <div class="stat-card">
        <div class="stat-icon"><i class="fas fa-user-graduate"></i></div>
        <div><h3>500+</h3><p>Students Enrolled Across All Levels</p></div>
      </div>
      <div class="stat-card">
        <div class="stat-icon"><i class="fas fa-chalkboard-teacher"></i></div>
        <div><h3>40+</h3><p>Qualified & Experienced Educators</p></div>
      </div>
      <div class="stat-card">
        <div class="stat-icon"><i class="fas fa-trophy"></i></div>
        <div><h3>95%</h3><p>WAEC/NECO Pass Rate</p></div>
      </div>
      <div class="stat-card">
        <div class="stat-icon"><i class="fas fa-home"></i></div>
        <div><h3>3</h3><p>Schools in One Campus — Nursery, Primary, Secondary</p></div>
      </div>
    </div>
  </div>
  <a href="#about" class="hero-scroll"><span>Scroll</span><i class="fas fa-chevron-down"></i></a>
</section>

<!-- ════════════════════════════════════════
     ABOUT
════════════════════════════════════════ -->
<section id="about">
  <div class="section-inner">
    <div class="about-grid">
      <div class="about-img-wrap">
        <!-- Replace this image with an actual school campus photo -->
        <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=800&q=80" alt="Yagai Academy Campus"/>
        <div class="about-badge">
          <span class="big">Est.</span>
          <small>Jalingo, Taraba</small>
        </div>
      </div>
      <div>
        <p class="section-label">About Us</p>
        <h2 class="section-title">A Legacy of Academic Excellence in Taraba State</h2>
        <div class="divider"></div>
        <p style="color:var(--muted);line-height:1.75;font-size:.93rem;">
          Yagai Academy is a premier boarding institution located opposite the College of Nursing and Midwifery in Jalingo, Taraba State. Founded on the belief that perseverance is truly the key to success, we provide world-class education from Nursery through Secondary school in a safe, nurturing, and disciplined environment.
        </p>
        <ul class="about-list">
          <li><i class="fas fa-check-circle"></i> Fully equipped science and computer laboratories</li>
          <li><i class="fas fa-check-circle"></i> Modern boarding facilities for boys and girls</li>
          <li><i class="fas fa-check-circle"></i> Dedicated, qualified, and passionate teaching staff</li>
          <li><i class="fas fa-check-circle"></i> Strong WAEC, NECO, and Common Entrance track record</li>
          <li><i class="fas fa-check-circle"></i> Active sports, cultural, and debate clubs</li>
          <li><i class="fas fa-check-circle"></i> Safe, green campus with a serene learning atmosphere</li>
        </ul>
        <div style="margin-top:2rem;display:flex;gap:1rem;flex-wrap:wrap;">
          <a href="#schools" class="btn-primary" style="color:var(--navy);">Our Schools</a>
          <a href="#contact" class="btn-outline" style="color:var(--navy);border-color:var(--navy);">Get in Touch</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════
     SCHOOLS
════════════════════════════════════════ -->
<section id="schools">
  <div class="section-inner">
    <p class="section-label" style="text-align:center;">Our Schools</p>
    <h2 class="section-title" style="text-align:center;">Three Schools, One Vision</h2>
    <div class="divider center"></div>
    <p class="section-sub" style="text-align:center;margin:auto;">From your child's very first school day through to their secondary certificate, Yagai Academy walks every step of the journey with them.</p>
    <div class="schools-grid">
      <div class="school-card">
        <div class="school-card-img nursery">🎨</div>
        <div class="school-card-body">
          <h3>Nursery School</h3>
          <p>Our early childhood programme builds a love of learning through play, creativity, and foundational literacy and numeracy skills in a warm, welcoming environment.</p>
          <a href="#admissions">Enrol a Child →</a>
        </div>
      </div>
      <div class="school-card">
        <div class="school-card-img primary">📚</div>
        <div class="school-card-body">
          <h3>Primary School</h3>
          <p>Primary education at Yagai instils discipline, critical thinking, and a broad knowledge base in English, Mathematics, Basic Science, Social Studies, and more.</p>
          <a href="#admissions">Enrol a Child →</a>
        </div>
      </div>
      <div class="school-card">
        <div class="school-card-img secondary">🎓</div>
        <div class="school-card-body">
          <h3>Secondary School</h3>
          <p>Our Secondary programme prepares students for WAEC, NECO, and university entrance examinations with a rich curriculum and excellent teacher-to-student ratios.</p>
          <a href="#admissions">Enrol a Child →</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════
     BOARDING
════════════════════════════════════════ -->
<section id="boarding">
  <div class="section-inner">
    <div class="boarding-grid">
      <div>
        <p class="section-label" style="color:var(--gold);">Boarding Facility</p>
        <h2 class="section-title" style="color:var(--white);">A Home Away From Home</h2>
        <div class="divider"></div>
        <p style="color:rgba(255,255,255,.75);font-size:.93rem;line-height:1.75;max-width:480px;">
          Our fully residential boarding programme provides a structured, secure, and stimulating environment where students grow academically, socially, and in character.
        </p>
        <div class="boarding-features">
          <div class="bf-item"><i class="fas fa-bed"></i><div><strong>Comfortable Dormitories</strong><p>Separate, well-maintained hostels for boys and girls.</p></div></div>
          <div class="bf-item"><i class="fas fa-utensils"></i><div><strong>Balanced Nutrition</strong><p>Three nutritious meals and snacks daily.</p></div></div>
          <div class="bf-item"><i class="fas fa-shield-alt"></i><div><strong>24/7 Security</strong><p>Round-the-clock supervision and security personnel.</p></div></div>
          <div class="bf-item"><i class="fas fa-book-open"></i><div><strong>Evening Prep</strong><p>Structured supervised study hours every evening.</p></div></div>
          <div class="bf-item"><i class="fas fa-medkit"></i><div><strong>Medical Care</strong><p>On-site health clinic and first-aid support.</p></div></div>
          <div class="bf-item"><i class="fas fa-futbol"></i><div><strong>Sports & Recreation</strong><p>Football, volleyball, athletics, and leisure activities.</p></div></div>
        </div>
      </div>
      <div class="boarding-visual">
        <i class="fas fa-building"></i>
        <h4>Boarding Secondary School</h4>
        <p>Opposite College of Nursing and Midwifery,<br/>P.M.B. 1180, Jalingo, Taraba State.</p>
        <a href="#contact" style="display:inline-block;margin-top:1.5rem;background:var(--gold);color:var(--navy);padding:.7rem 1.8rem;border-radius:30px;font-weight:700;text-decoration:none;font-size:.88rem;">Enquire About Boarding</a>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════
     ACADEMICS
════════════════════════════════════════ -->
<section id="academics">
  <div class="section-inner">
    <p class="section-label">Academics</p>
    <h2 class="section-title">Curriculum & Subjects Offered</h2>
    <div class="divider"></div>
    <p class="section-sub">Our broad and balanced curriculum is designed to challenge every student, develop their talents, and prepare them for examinations and life beyond school.</p>
    <div class="subjects-grid">
      <div class="subj-chip"><i class="fas fa-calculator"></i> Mathematics</div>
      <div class="subj-chip"><i class="fas fa-book"></i> English Language</div>
      <div class="subj-chip"><i class="fas fa-flask"></i> Basic Science</div>
      <div class="subj-chip"><i class="fas fa-globe-africa"></i> Social Studies</div>
      <div class="subj-chip"><i class="fas fa-atom"></i> Physics</div>
      <div class="subj-chip"><i class="fas fa-vial"></i> Chemistry</div>
      <div class="subj-chip"><i class="fas fa-leaf"></i> Biology</div>
      <div class="subj-chip"><i class="fas fa-landmark"></i> Government</div>
      <div class="subj-chip"><i class="fas fa-chart-line"></i> Economics</div>
      <div class="subj-chip"><i class="fas fa-pen-nib"></i> Literature in English</div>
      <div class="subj-chip"><i class="fas fa-laptop-code"></i> Computer Studies</div>
      <div class="subj-chip"><i class="fas fa-cross"></i> Christian Religious Studies</div>
      <div class="subj-chip"><i class="fas fa-star-and-crescent"></i> Islamic Studies</div>
      <div class="subj-chip"><i class="fas fa-paint-brush"></i> Fine Arts</div>
      <div class="subj-chip"><i class="fas fa-language"></i> Hausa Language</div>
      <div class="subj-chip"><i class="fas fa-music"></i> Music & Cultural Arts</div>
    </div>
    <div style="margin-top:3rem;background:var(--cream);border-radius:14px;padding:2rem;display:flex;gap:2rem;flex-wrap:wrap;align-items:center;">
      <div style="flex:1;min-width:200px;">
        <h3 style="font-family:'Playfair Display',serif;color:var(--navy);margin-bottom:.5rem;">External Examinations</h3>
        <p style="color:var(--muted);font-size:.88rem;line-height:1.6;">We prepare students for WAEC, NECO, NABTEB, and Junior WAEC, achieving consistently excellent results.</p>
      </div>
      <div style="display:flex;gap:1.2rem;flex-wrap:wrap;">
        <?php foreach (['WAEC','NECO','Junior WAEC','Common Entrance'] as $exam): ?>
        <div style="text-align:center;background:var(--white);border-radius:10px;padding:.9rem 1.3rem;border:1px solid #e0ddd5;">
          <div style="font-size:1.5rem;">📜</div>
          <div style="font-size:.75rem;font-weight:700;color:var(--navy);margin-top:.3rem;"><?= $exam ?></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════
     ADMISSIONS
════════════════════════════════════════ -->
<section id="admissions">
  <div class="section-inner">
    <p class="section-label">Admissions</p>
    <h2 class="section-title">Join the Yagai Family</h2>
    <div class="divider"></div>
    <div class="admission-grid">
      <div>
        <p class="section-sub">We welcome applications from pupils and students of all backgrounds. Our admissions process is straightforward and merit-based.</p>
        <div class="steps">
          <?php
          $steps = [
            ['Complete Application Form',    'Fill out the online form on this page or collect a physical form from our school office in Jalingo.'],
            ['Submit Required Documents',    'Birth certificate, last school result/report card, passport photographs, and parent/guardian ID.'],
            ['Entrance Assessment',          'Candidates write a brief entrance assessment in English and Mathematics relevant to their level.'],
            ['Offer Letter & Acceptance',    'Successful candidates receive an admission letter and pay the required fees to confirm their place.'],
            ['Resumption & Orientation',     'New students attend a two-day orientation programme before the start of term.'],
          ];
          foreach ($steps as $i => $step): ?>
          <div class="step">
            <div class="step-num"><?= $i + 1 ?></div>
            <div class="step-body">
              <h4><?= $step[0] ?></h4>
              <p><?= $step[1] ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="form-card">
        <h3>Apply for Admission</h3>
        <form id="admissions-form" novalidate>
          <div class="form-row">
            <div class="form-group">
              <label>Child's First Name *</label>
              <input type="text" name="child_first" placeholder="First name" required/>
            </div>
            <div class="form-group">
              <label>Child's Surname *</label>
              <input type="text" name="child_last" placeholder="Surname" required/>
            </div>
          </div>
          <div class="form-group">
            <label>Applying For *</label>
            <select name="level" required>
              <option value="">Select school level</option>
              <option>Nursery School</option>
              <option>Primary School</option>
              <option>Secondary School (Day)</option>
              <option>Secondary School (Boarding)</option>
            </select>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label>Class / Year Applying For</label>
              <input type="text" name="class_year" placeholder="e.g. JSS 1, Primary 4"/>
            </div>
            <div class="form-group">
              <label>Child's Date of Birth</label>
              <input type="date" name="dob"/>
            </div>
          </div>
          <div class="form-group">
            <label>Parent / Guardian Name *</label>
            <input type="text" name="parent_name" placeholder="Full name" required/>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label>Phone Number *</label>
              <input type="tel" name="phone" placeholder="08X XXX XXXXX" required/>
            </div>
            <div class="form-group">
              <label>Email Address</label>
              <input type="email" name="email" placeholder="email@example.com"/>
            </div>
          </div>
          <div class="form-group">
            <label>Additional Information</label>
            <textarea name="notes" rows="3" placeholder="Any special needs, questions, or notes..."></textarea>
          </div>
          <button type="submit" class="btn-submit" id="admissions-btn">Submit Application</button>
          <div class="success-msg" id="admissions-success">✅ Application received! We will contact you within 2–3 working days.</div>
          <div class="error-msg"   id="admissions-error"></div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════
     NEWS
════════════════════════════════════════ -->
<section id="news">
  <div class="section-inner">
    <p class="section-label">Latest Updates</p>
    <h2 class="section-title">News & Announcements</h2>
    <div class="divider"></div>
    <div class="news-grid">
      <?php
      $news = [
        ['nc-1','🏆','June 2025','Outstanding WAEC Results for 2024/2025 Set','Over 95% of our SS3 candidates achieved credit passes in five or more subjects in the 2025 WAEC examination.'],
        ['nc-2','📚','May 2025', 'New Science Laboratory Equipment Installed',   'Yagai Academy has upgraded its Physics and Chemistry laboratories with modern equipment for practical learning.'],
        ['nc-3','⚽','April 2025','Yagai Academy Wins Taraba Inter-School Football Cup','Our under-16 football team clinched the Taraba State Inter-School Football Championship trophy for the second year running!'],
      ];
      foreach ($news as $n): ?>
      <div class="news-card">
        <div class="news-img <?= $n[0] ?>"><?= $n[1] ?></div>
        <div class="news-body">
          <p class="news-date"><?= $n[2] ?></p>
          <h4><?= $n[3] ?></h4>
          <p><?= $n[4] ?></p>
          <a href="#" class="news-link">Read More →</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <div style="text-align:center;margin-top:2.5rem;">
      <a href="#" style="color:var(--navy);font-weight:600;font-size:.9rem;border:2px solid var(--navy);padding:.7rem 1.8rem;border-radius:30px;text-decoration:none;display:inline-block;">View All News &amp; Events</a>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════
     GALLERY
     NOTE: Replace emoji placeholders with
     <img src="images/photo.jpg"> tags
     once real school photos are available.
════════════════════════════════════════ -->
<section id="gallery">
  <div class="section-inner">
    <p class="section-label" style="text-align:center;">Gallery</p>
    <h2 class="section-title" style="text-align:center;">Life at Yagai Academy</h2>
    <div class="divider center"></div>
    <div class="gallery-grid">
      <div class="gallery-item gi-1">🎓</div>
      <div class="gallery-item gi-2">🎭</div>
      <div class="gallery-item gi-3">⚽</div>
      <div class="gallery-item gi-4">🔬</div>
      <div class="gallery-item gi-5">📖</div>
      <div class="gallery-item gi-6">🎵</div>
      <div class="gallery-item gi-7">🏅</div>
      <div class="gallery-item gi-8">🌿</div>
    </div>
    <div style="text-align:center;margin-top:2rem;">
      <a href="#" style="color:var(--crimson);font-weight:600;font-size:.88rem;text-decoration:none;">View Full Photo Gallery →</a>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════
     TESTIMONIALS
════════════════════════════════════════ -->
<section id="testimonials">
  <div class="section-inner">
    <p class="section-label" style="color:var(--gold);text-align:center;">What People Say</p>
    <h2 class="section-title" style="color:var(--white);text-align:center;">Voices of Our Community</h2>
    <div class="divider center"></div>
    <div class="testi-grid">
      <?php
      $testimonials = [
        ['FK','Mrs. Fatima Kefas','Parent — SS3 Graduate','Yagai Academy gave my daughter the discipline and confidence she needed. She scored distinctions in her WAEC and is now studying Medicine at university.','5'],
        ['AU','Abdullahi Umar','Alumni — Class of 2022','The boarding experience at Yagai was transformative. I made lifelong friends, grew in character, and left fully prepared for university life.','5'],
        ['BJ','Mr. Barnabas Jalingo','Parent — Primary School','The teachers here genuinely care. My son struggled in primary school elsewhere, but Yagai\'s patient staff brought out the best in him.','4.5'],
      ];
      foreach ($testimonials as $t): ?>
      <div class="testi-card">
        <div class="testi-stars">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          <?= $t[3] === '5' ? '<i class="fas fa-star"></i>' : '<i class="fas fa-star-half-alt"></i>' ?>
        </div>
        <p>"<?= $t[2] ?>"</p>
        <div class="testi-author">
          <div class="testi-avatar"><?= $t[0] ?></div>
          <div class="testi-info">
            <strong><?= $t[1] ?></strong>
            <span><?= $t[3] ?></span>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════
     CONTACT
════════════════════════════════════════ -->
<section id="contact">
  <div class="section-inner">
    <p class="section-label">Get In Touch</p>
    <h2 class="section-title">Contact Yagai Academy</h2>
    <div class="divider"></div>
    <div class="contact-grid">
      <div>
        <p class="section-sub">We'd love to hear from you. Reach out with any questions about admissions, boarding, or school life.</p>
        <div class="contact-info-items">
          <div class="ci-item">
            <div class="ci-icon"><i class="fas fa-map-marker-alt"></i></div>
            <div>
              <h4>Our Address</h4>
              <p>Opposite College of Nursing and Midwifery,<br/>P.M.B. 1180, Jalingo, Taraba State, Nigeria.</p>
            </div>
          </div>
          <div class="ci-item">
            <div class="ci-icon"><i class="fas fa-envelope"></i></div>
            <div>
              <h4>General Enquiries</h4>
              <a href="mailto:info@yagaiacademy.com">info@yagaiacademy.com</a>
            </div>
          </div>
          <div class="ci-item">
            <div class="ci-icon"><i class="fas fa-user-graduate"></i></div>
            <div>
              <h4>Admissions</h4>
              <a href="mailto:admissions@yagaiacademy.com">admissions@yagaiacademy.com</a>
            </div>
          </div>
          <div class="ci-item">
            <div class="ci-icon"><i class="fas fa-globe"></i></div>
            <div>
              <h4>Website</h4>
              <a href="http://www.yagaiacademy.com" target="_blank">www.yagaiacademy.com</a>
            </div>
          </div>
          <div class="ci-item">
            <div class="ci-icon"><i class="fab fa-whatsapp"></i></div>
            <div>
              <h4>WhatsApp Enquiries</h4>
              <a href="https://wa.me/234XXXXXXXXXX" target="_blank">Chat with us on WhatsApp</a>
            </div>
          </div>
        </div>
        <a href="https://maps.google.com/?q=Jalingo+Taraba+State+Nigeria" target="_blank" class="map-placeholder">
          <i class="fas fa-map-marked-alt"></i>
          <p>View on Google Maps</p>
          <small style="font-size:.74rem;color:var(--muted);">Jalingo, Taraba State</small>
        </a>
      </div>
      <div class="form-card">
        <h3>Send Us a Message</h3>
        <form id="contact-form" novalidate>
          <div class="form-row">
            <div class="form-group">
              <label>First Name *</label>
              <input type="text" name="first_name" placeholder="First name" required/>
            </div>
            <div class="form-group">
              <label>Surname *</label>
              <input type="text" name="last_name" placeholder="Surname" required/>
            </div>
          </div>
          <div class="form-group">
            <label>Email Address</label>
            <input type="email" name="email" placeholder="your@email.com"/>
          </div>
          <div class="form-group">
            <label>Phone Number</label>
            <input type="tel" name="phone" placeholder="08X XXX XXXXX"/>
          </div>
          <div class="form-group">
            <label>Subject</label>
            <select name="subject">
              <option>General Enquiry</option>
              <option>Admissions</option>
              <option>Boarding Facility</option>
              <option>Academic Programmes</option>
              <option>Fees & Payments</option>
              <option>Other</option>
            </select>
          </div>
          <div class="form-group">
            <label>Message *</label>
            <textarea name="message" rows="4" placeholder="Type your message here..." required></textarea>
          </div>
          <button type="submit" class="btn-submit" id="contact-btn">Send Message</button>
          <div class="success-msg" id="contact-success">✅ Message sent! We will respond within 24–48 hours.</div>
          <div class="error-msg"   id="contact-error"></div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════
     FOOTER
════════════════════════════════════════ -->
<footer>
  <div class="footer-grid">
    <div class="footer-brand">
      <img src="images/yagai-logo.png" alt="Yagai Academy Logo"/>
      <p>Yagai Academy is a boarding secondary school in Jalingo, Taraba State, Nigeria, dedicated to nurturing excellence from Nursery to Secondary level.</p>
      <p style="margin-top:.5rem;font-size:.78rem;color:rgba(255,255,255,.45);"><em>"Perseverance, A Key to Success"</em></p>
      <div class="footer-socials">
        <a href="https://facebook.com/yagaiacademy"  target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com/yagaiacademy"   target="_blank" aria-label="Twitter/X"><i class="fab fa-x-twitter"></i></a>
        <a href="https://instagram.com/yagaiacademy" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="https://wa.me/234XXXXXXXXXX"        target="_blank" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
        <a href="https://youtube.com/@yagaiacademy"  target="_blank" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
        <a href="https://tiktok.com/@yagaiacademy"   target="_blank" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
      </div>
    </div>
    <div class="footer-col">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#schools">Our Schools</a></li>
        <li><a href="#boarding">Boarding</a></li>
        <li><a href="#academics">Academics</a></li>
        <li><a href="#admissions">Admissions</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Schools</h4>
      <ul>
        <li><a href="#schools">Nursery School</a></li>
        <li><a href="#schools">Primary School</a></li>
        <li><a href="#schools">Secondary School</a></li>
        <li><a href="#boarding">Boarding Facility</a></li>
        <li><a href="#academics">Subjects Offered</a></li>
        <li><a href="#academics">Examinations</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Contact</h4>
      <ul>
        <li><a href="mailto:info@yagaiacademy.com">info@yagaiacademy.com</a></li>
        <li><a href="mailto:admissions@yagaiacademy.com">admissions@yagaiacademy.com</a></li>
        <li><a href="http://www.yagaiacademy.com">www.yagaiacademy.com</a></li>
        <li><a href="#">P.M.B. 1180, Jalingo</a></li>
        <li><a href="#">Taraba State, Nigeria</a></li>
        <li><a href="#">Opp. College of Nursing & Midwifery</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <span>© <?= date('Y') ?> Yagai Academy. All Rights Reserved.</span>
    <span>
      <a href="#">Privacy Policy</a> &nbsp;·&nbsp;
      <a href="#">Terms of Use</a> &nbsp;·&nbsp;
      <a href="http://www.yagaiacademy.com">www.yagaiacademy.com</a>
    </span>
  </div>
</footer>

<!-- ════════════════════════════════════════
     QUICK APPLY MODAL
════════════════════════════════════════ -->
<div class="modal-overlay" id="apply-modal">
  <div class="modal">
    <button class="modal-close" onclick="closeModal()">✕</button>
    <h3>Apply to Yagai Academy</h3>
    <form id="modal-form" novalidate>
      <div class="form-group">
        <label>Child's Full Name *</label>
        <input type="text" name="child_first" placeholder="First and surname" required/>
        <input type="hidden" name="child_last" value="-"/>
      </div>
      <div class="form-group">
        <label>School Level Applying For *</label>
        <select name="level" required>
          <option value="">Select level</option>
          <option>Nursery School</option>
          <option>Primary School</option>
          <option>Secondary School (Day)</option>
          <option>Secondary School (Boarding)</option>
        </select>
      </div>
      <div class="form-group">
        <label>Parent / Guardian Name *</label>
        <input type="text" name="parent_name" placeholder="Full name" required/>
      </div>
      <div class="form-group">
        <label>Phone Number *</label>
        <input type="tel" name="phone" placeholder="08X XXX XXXXX" required/>
      </div>
      <div class="form-group">
        <label>Email Address</label>
        <input type="email" name="email" placeholder="email@example.com"/>
      </div>
      <button type="submit" class="btn-submit" id="modal-btn">Submit Application</button>
      <div class="success-msg" id="modal-success">✅ Application received! We'll contact you soon.</div>
      <div class="error-msg"   id="modal-error"></div>
    </form>
  </div>
</div>

<!-- Main JavaScript -->
<script src="js/main.js"></script>
</body>
</html>
