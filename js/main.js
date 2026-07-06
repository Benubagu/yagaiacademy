/* ============================================================
   YAGAI ACADEMY — Main JavaScript File
   Website: www.yagaiacademy.sch.ng
   ============================================================ */

/* ── MOBILE NAV TOGGLE ── */
function toggleNav() {
  const nav = document.getElementById('main-nav');
  nav.classList.toggle('open');
}

/* ── APPLY MODAL ── */
function openModal() {
  document.getElementById('apply-modal').classList.add('open');
  document.body.style.overflow = 'hidden';
}
function closeModal() {
  document.getElementById('apply-modal').classList.remove('open');
  document.body.style.overflow = '';
}
// Close modal when clicking outside
document.addEventListener('DOMContentLoaded', function () {
  const overlay = document.getElementById('apply-modal');
  if (overlay) {
    overlay.addEventListener('click', function (e) {
      if (e.target === this) closeModal();
    });
  }

  /* ── ACTIVE NAV LINK ON SCROLL ── */
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('nav ul > li > a');

  window.addEventListener('scroll', function () {
    let current = '';
    sections.forEach(function (s) {
      if (window.scrollY >= s.offsetTop - 120) current = s.id;
    });
    navLinks.forEach(function (a) {
      a.classList.remove('active');
      if (a.getAttribute('href') === '#' + current) a.classList.add('active');
    });
  });

  /* ── FORM: ADMISSIONS ── */
  const admissionsForm = document.getElementById('admissions-form');
  if (admissionsForm) {
    admissionsForm.addEventListener('submit', function (e) {
      e.preventDefault();
      submitFormAjax(
        this,
        'php/mailer.php',
        'admissions',
        'admissions-success',
        'admissions-error',
        'admissions-btn'
      );
    });
  }

  /* ── FORM: CONTACT ── */
  const contactForm = document.getElementById('contact-form');
  if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();
      submitFormAjax(
        this,
        'php/mailer.php',
        'contact',
        'contact-success',
        'contact-error',
        'contact-btn'
      );
    });
  }

  /* ── FORM: MODAL (Quick Apply) ── */
  const modalForm = document.getElementById('modal-form');
  if (modalForm) {
    modalForm.addEventListener('submit', function (e) {
      e.preventDefault();
      submitFormAjax(
        this,
        'php/mailer.php',
        'admissions',
        'modal-success',
        'modal-error',
        'modal-btn'
      );
    });
  }
});

/* ── AJAX FORM SUBMISSION ── */
function submitFormAjax(form, action, formType, successId, errorId, btnId) {
  const btn     = document.getElementById(btnId);
  const success = document.getElementById(successId);
  const error   = document.getElementById(errorId);

  // Reset messages
  if (success) success.style.display = 'none';
  if (error)   error.style.display   = 'none';

  // Button loading state
  const originalText = btn.textContent;
  btn.textContent = 'Sending…';
  btn.disabled = true;

  // Collect form data
  const data = new FormData(form);
  data.append('form_type', formType);

  fetch(action, {
    method: 'POST',
    body: data
  })
    .then(function (res) { return res.json(); })
    .then(function (json) {
      btn.textContent = originalText;
      btn.disabled = false;
      if (json.status === 'success') {
        if (success) success.style.display = 'block';
        form.reset();
        // Auto-close modal after success
        if (formType === 'admissions' && document.getElementById('apply-modal').classList.contains('open')) {
          setTimeout(closeModal, 2500);
        }
      } else {
        if (error) {
          error.textContent = json.message || 'Something went wrong. Please try again.';
          error.style.display = 'block';
        }
      }
    })
    .catch(function () {
      btn.textContent = originalText;
      btn.disabled = false;
      if (error) {
        error.textContent = 'Network error. Please check your connection and try again.';
        error.style.display = 'block';
      }
    });
}
