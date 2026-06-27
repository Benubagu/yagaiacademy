# YAGAI ACADEMY — Website Package
## Developer Handover Notes
**Website:** www.yagaiacademy.sch.ng
**Motto:** Perseverance, A Key to Success

---

## FILE STRUCTURE

```
yagai-academy/
├── index.php           ← Main website page
├── css/
│   └── style.css       ← All styles and layout
├── js/
│   └── main.js         ← Navigation, forms, modals
├── php/
│   └── mailer.php      ← Backend email handler
├── images/
│   └── yagai-logo.png  ← School logo (upload here)
└── README.md           ← This file
```

---

## HOSTING REQUIREMENTS

- Any standard **PHP shared hosting** (cPanel)
- PHP version: 5.6 or higher (PHP 7+ recommended)
- PHP `mail()` function must be enabled (enabled by default on most Nigerian hosts)
- No database required
- No frameworks or dependencies required

**Recommended Nigerian Hosts:**
- Whogohost
- QServers
- Smartweb Nigeria
- DomainKing

---

## DEPLOYMENT STEPS

1. Purchase hosting and point domain `yagaiacademy.sch.ng` to it
2. Log in to cPanel → File Manager
3. Navigate to `public_html` folder
4. Upload all files maintaining the folder structure above
5. Create custom email addresses in cPanel (see below)
6. Visit www.yagaiacademy.sch.ng — the site is live

---

## EMAIL SETUP (cPanel Webmail)

Create these email addresses in cPanel → Email Accounts:

| Address                              | Purpose                  |
|--------------------------------------|--------------------------|
| info@yagaiacademy.sch.ng             | General enquiries form   |
| admissions@yagaiacademy.sch.ng       | Admissions form          |
| principal@yagaiacademy.sch.ng        | Principal's office       |
| boarding@yagaiacademy.sch.ng         | Boarding enquiries       |
| noreply@yagaiacademy.sch.ng          | Outgoing system emails   |

These are already configured in `php/mailer.php`.

---

## WHAT NEEDS UPDATING BEFORE LAUNCH

### 1. School Logo
- Place `yagai-logo.png` in the `images/` folder

### 2. Gallery Photos
- Replace emoji placeholders in `index.php` gallery section with:
  ```html
  <div class="gallery-item">
    <img src="images/photo-name.jpg" alt="Description"/>
  </div>
  ```
- Upload photos to the `images/` folder

### 3. Social Media Handles
- In `index.php` and footer, replace placeholder URLs with real handles:
  - `https://facebook.com/yagaiacademy`
  - `https://instagram.com/yagaiacademy`
  - `https://wa.me/234XXXXXXXXXX` ← replace with real WhatsApp number

### 4. WhatsApp Number
- Search for `234XXXXXXXXXX` in `index.php` and replace with the school's actual number
- Format: country code + number without leading zero (e.g. 2348012345678)

### 5. About Section Photo
- Replace the Unsplash placeholder image URL with a real campus photo
- Upload photo to `images/` and update the `src` in `index.php`

### 6. Year Established
- Search for `Est.` in `index.php` and add the founding year

### 7. Testimonials
- Replace the placeholder testimonials with real quotes from parents/alumni

---

## HOW FORMS WORK

All three forms (Admissions, Contact, Modal) submit via AJAX to `php/mailer.php`.

**Admissions form** → sends to: `admissions@yagaiacademy.sch.ng`
**Contact form**    → sends to: `info@yagaiacademy.sch.ng`

The mailer also sends an **automatic acknowledgement email** to the person who submitted the form (if they provided an email address).

---

## LOCAL PREVIEW (Before Hosting)

To preview `index.php` on your computer before uploading:
1. Download and install **XAMPP** (free): https://www.apachefriends.org
2. Copy the project folder into `C:\xampp\htdocs\yagai-academy\`
3. Start XAMPP → click Start on Apache
4. Open browser → go to: `http://localhost/yagai-academy/`

Note: The forms will not send real emails locally unless you configure a local mail server, but everything else will work and be previewable.

---

## FUTURE ENHANCEMENTS (Optional)

- PHP + MySQL **Admin Panel** for gallery management and testimonial moderation
- **Blog/News** system with database
- **Google Photos** or **Facebook album** embed for auto-updating gallery
- **Fee payment integration** (Paystack or Flutterwave)
- **Student/Parent portal** login

---

*Built with HTML5, CSS3, JavaScript, and PHP. No external frameworks or libraries required beyond Google Fonts and Font Awesome (loaded from CDN).*
