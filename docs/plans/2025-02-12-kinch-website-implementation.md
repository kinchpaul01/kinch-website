# Kinch Website Implementation Plan

> **For Claude:** REQUIRED SUB-SKILL: Use superpowers:executing-plans to implement this plan task-by-task.

**Goal:** Build the static HTML/CSS main site for kinch.ai in both light and dark variants, ready for hosting deployment.

**Architecture:** Plain static HTML/CSS site. Four pages (Home, Engagements, About, Contact) sharing a common header nav and footer. No build tools, no JavaScript frameworks. Inter font from Google Fonts. Minimal vanilla JS for the contact form honeypot validation. Two CSS files for the two theme variants (light and dark) so Paul can compare them side by side.

**Tech Stack:** HTML5, CSS3, vanilla JavaScript (contact form only), Inter font via Google Fonts.

---

### Task 1: Project Structure & Shared CSS Foundation

**Files:**
- Create: `css/shared.css`
- Create: `css/light.css`
- Create: `css/dark.css`
- Create: `index.html` (minimal skeleton to test styles)

**Step 1: Create project directories**

```bash
mkdir -p /Users/paulsonderegger/projects/Kinch_website/css
mkdir -p /Users/paulsonderegger/projects/Kinch_website/images
mkdir -p /Users/paulsonderegger/projects/Kinch_website/js
```

**Step 2: Create shared.css with reset, typography, layout, nav, and footer**

Create `css/shared.css` with:
- CSS reset (minimal: box-sizing, margin/padding reset)
- Inter font import from Google Fonts (weights 400, 600, 700)
- CSS custom properties for spacing scale (--space-xs through --space-xxl)
- Base typography: body font-size 18px, line-height 1.6, Inter font stack
- Headings: h1 (2.5rem, 700), h2 (1.8rem, 700), h3 (1.3rem, 600)
- `.container` class: max-width 900px, centered with auto margins, padding 0 24px
- `.nav` styles: horizontal flex layout, links spaced evenly, no underlines, font-weight 600, padding 24px 0
- `.nav` logo/brand: "Kinch" text on the left, nav links on the right
- `.footer` styles: minimal, centered text, small font, generous top margin (--space-xxl)
- `.hero` section: large heading, subtext, generous vertical padding (120px top, 80px bottom)
- `.section` class: vertical padding (80px)
- `.cta-button` class: inline-block, padding 14px 32px, border-radius 6px, font-weight 600, no underline, transition on background
- Utility class `.visually-hidden` for honeypot field

Spacing scale:
- --space-xs: 8px
- --space-sm: 16px
- --space-md: 24px
- --space-lg: 40px
- --space-xl: 64px
- --space-xxl: 96px

**Step 3: Create light.css theme**

Create `css/light.css` with CSS custom properties:
- --bg: #f8f7f4 (warm off-white)
- --text: #1a1a1a (near-black)
- --text-secondary: #555555
- --accent: #2563eb (a clean blue - good contrast on off-white)
- --accent-hover: #1d4ed8
- --nav-bg: #f8f7f4
- --footer-text: #888888
- --border: #e5e5e5
- --cta-bg: var(--accent)
- --cta-text: #ffffff
- --cta-hover: var(--accent-hover)

Apply these to body background, color, links, nav, footer, buttons.

**Step 4: Create dark.css theme**

Create `css/dark.css` with CSS custom properties:
- --bg: #1c1c1e (dark charcoal)
- --text: #f0efe9 (warm off-white)
- --text-secondary: #a0a0a0
- --accent: #60a5fa (lighter blue for dark bg contrast)
- --accent-hover: #93c5fd
- --nav-bg: #1c1c1e
- --footer-text: #666666
- --border: #333333
- --cta-bg: var(--accent)
- --cta-text: #1c1c1e
- --cta-hover: var(--accent-hover)

Apply these to body background, color, links, nav, footer, buttons.

**Step 5: Create minimal index.html skeleton to verify styles**

Create `index.html` with:
- DOCTYPE, html lang="en"
- Head: meta charset, viewport, title "Kinch - AI & Data Strategy"
- Link to shared.css and light.css (dark.css can be swapped to preview)
- Body with: nav (brand "Kinch" + links), a hero section with placeholder heading, a paragraph, a CTA button, and a footer
- This is a test skeleton - it will be replaced with full content in Task 2

**Step 6: Open in browser and visually verify**

Open `index.html` in a browser. Verify:
- Inter font loads
- Off-white background, near-black text
- Nav is horizontal with Kinch on left, links on right
- Hero heading is large and bold
- CTA button is blue with white text
- Footer is small and centered
- Swap `light.css` for `dark.css` in the HTML and verify the dark theme looks correct

**Step 7: Commit**

```bash
git add css/ index.html images/ js/
git commit -m "feat: add project structure, shared CSS foundation, and light/dark themes"
```

---

### Task 2: Home Page (Light Version)

**Files:**
- Modify: `index.html` (replace skeleton with full home page)

**Step 1: Build the full Home page HTML**

Replace the skeleton `index.html` with the complete Home page structure:

**Nav:**
- Left: "Kinch" as text link to index.html
- Right: Home, Engagements, About, Blog, Contact links
- Blog link points to "#" for now (will be WordPress URL)
- Contact link points to contact.html

**Hero section:**
- h1: "Make AI work for your business" (placeholder - Paul will refine)
- p: "Strategic guidance for executives who want to make smart, well-informed decisions about AI and data." (placeholder)
- CTA button: "Let's talk" linking to contact.html

**What I Do section:**
- h2: "What I do"
- Two blocks side by side (using CSS flex/grid):
  - Block 1: h3 "Strategy Consulting", 1-2 sentence description, "Learn more ->" link to engagements.html
  - Block 2: h3 "Training & Workshops", 1-2 sentence description, "Learn more ->" link to engagements.html

**Why Kinch section:**
- h2: "Why Kinch"
- 3 short statements as a simple list (not bullet points - styled as clean text blocks)
- Placeholder text that Paul will replace

**Blog Teaser section:**
- h2: "Latest from the blog"
- 3 placeholder post titles with dates, each as a link
- These will eventually link to the WordPress blog

**Footer:**
- "&copy; 2025 Kinch" centered
- Optional: LinkedIn icon/link

**Step 2: Add any additional CSS needed for the home page layout**

In `css/shared.css`, add:
- `.services-grid`: CSS grid or flex layout, 2 columns on desktop, 1 on mobile
- `.service-block`: styling for the engagement preview blocks
- `.blog-teaser`: styling for blog post list items (title + date)
- `.why-list`: styling for the Why Kinch statements
- Basic responsive breakpoint at 768px: stack nav vertically, single column for services grid

**Step 3: Open in browser and verify**

Verify the full Home page:
- All sections visible and properly spaced
- Services blocks side by side on desktop
- CTA button prominent in hero
- Clean, scannable layout
- Test at narrow width (mobile) - everything stacks properly

**Step 4: Commit**

```bash
git add index.html css/shared.css
git commit -m "feat: build complete Home page with all sections"
```

---

### Task 3: Engagements Page

**Files:**
- Create: `engagements.html`

**Step 1: Build the Engagements page HTML**

Create `engagements.html` with same nav and footer as Home page.

**Page header:**
- h1: "How I work with clients"

**Strategy Consulting section:**
- h2: "Strategy Consulting"
- 2-3 sentences: what it is, who it's for (executives who need a clear AI/data strategy connected to business outcomes)
- Bullet list of what a typical engagement involves (discovery, assessment, roadmap - placeholder text)
- Short "What you get" paragraph describing tangible outcomes

**Training & Workshops section:**
- h2: "Training & Workshops"
- Same structure as above
- Emphasis: practical, decision-oriented, not a technical bootcamp
- Bullet list of workshop topics/formats
- "What you get" paragraph

**How to Get Started section:**
- h2: "Ready to get started?"
- p: "Every engagement starts with a conversation."
- CTA button: "Book a conversation" linking to contact.html

**Step 2: Open in browser and verify**

Verify layout, spacing, readability. All sections scannable. CTA prominent at bottom.

**Step 3: Commit**

```bash
git add engagements.html
git commit -m "feat: add Engagements page with strategy consulting and training sections"
```

---

### Task 4: About Page

**Files:**
- Create: `about.html`

**Step 1: Build the About page HTML**

Create `about.html` with same nav and footer.

**Your Story section:**
- h1: "About" or "About Kinch"
- 2-3 short paragraphs, first person, placeholder text. Career arc, why Kinch exists, unique perspective on data strategy fueling AI.

**Experience Highlights section:**
- h2: "Experience"
- 3-5 short bullet points - placeholder for notable companies, roles, outcomes

**Point of View section:**
- h2: "My perspective" or "How I think about AI and data"
- 2-3 short paragraphs. What most people get wrong. What matters most. Placeholder text Paul will replace.

**Photo placeholder:**
- An img tag with alt text pointing to `images/headshot.jpg` (placeholder - Paul will add the real image)
- Style: reasonable size (200-250px), maybe rounded or slight border-radius

**CTA at bottom:**
- "Let's talk" or "Book a conversation" button linking to contact.html

**Step 2: Add photo styling to shared.css**

Add `.headshot` class: max-width 250px, border-radius 8px (or 50% for circle), positioned within the story section.

**Step 3: Open in browser and verify**

Verify layout. Photo placeholder shows broken image gracefully (or add a placeholder image).

**Step 4: Commit**

```bash
git add about.html css/shared.css
git commit -m "feat: add About page with story, experience, and point of view sections"
```

---

### Task 5: Contact Page with Form

**Files:**
- Create: `contact.html`
- Create: `js/contact.js`

**Step 1: Build the Contact page HTML**

Create `contact.html` with same nav and footer.

**Page header:**
- h1: "Get in touch"

**Two-column layout (flex/grid, stacks on mobile):**

**Left/Top - Calendly:**
- h2: "Book a conversation"
- p: "Pick a time that works and we'll talk about what you're working on."
- Calendly embed div (placeholder - will need Paul's Calendly URL) or a prominent button linking to Calendly externally

**Right/Bottom - Contact Form:**
- h2: "Send a message"
- form element with:
  - Name field: label + text input, required
  - Email field: label + email input, required
  - Message field: label + textarea, required
  - Honeypot field: text input with class `visually-hidden`, name="website", tabindex="-1", autocomplete="off"
  - Submit button: "Send message"
- Form action: will need a form endpoint (Formspree, Netlify Forms, or similar)

**Step 2: Create contact.js for client-side validation**

Create `js/contact.js` with:
- On form submit, check:
  - Honeypot field is empty (if filled, silently do nothing)
  - Name is not empty
  - Email matches basic email regex
  - Message is not empty and has fewer than 5 URLs (reject link-heavy spam)
- If validation fails, show inline error messages
- If validation passes, submit the form
- Add script tag to contact.html

**Step 3: Add form styles to shared.css**

Add to `css/shared.css`:
- `.contact-grid`: 2-column layout on desktop, stacks on mobile
- `form` styles: clean, minimal
- `input, textarea` styles: full width, padding 12px, border 1px solid var(--border), border-radius 4px, font-family inherit, font-size inherit, background transparent, color inherit
- `label` styles: display block, margin-bottom 4px, font-weight 600
- `.form-group` styles: margin-bottom var(--space-md)
- `.error` message styles: small red text below fields
- `.success-message`: confirmation text, hidden by default

**Step 4: Open in browser and verify**

Test form:
- Fill out and try to submit (will fail without backend, but validation should run)
- Test honeypot: manually fill the hidden field, submit should silently fail
- Test validation: empty fields show errors
- Test responsive: two columns collapse to one on mobile

**Step 5: Commit**

```bash
git add contact.html js/contact.js css/shared.css
git commit -m "feat: add Contact page with form, honeypot spam defense, and Calendly placeholder"
```

---

### Task 6: Dark Version

**Files:**
- Create: `index-dark.html`
- Create: `engagements-dark.html`
- Create: `about-dark.html`
- Create: `contact-dark.html`

**Step 1: Create dark copies of all pages**

Copy each HTML file to a `-dark` variant. In each copy, change the CSS link from `css/light.css` to `css/dark.css`. That's the only change - shared.css and all HTML structure stay identical.

```bash
cp index.html index-dark.html
cp engagements.html engagements-dark.html
cp about.html about-dark.html
cp contact.html contact-dark.html
```

Then in each `-dark.html` file, replace `css/light.css` with `css/dark.css`.

**Step 2: Open dark versions in browser and verify**

Check all four dark pages:
- Charcoal background, off-white text
- Links and buttons use the light blue accent
- CTA buttons are legible
- Form inputs look good on dark background
- Overall feel is bold and modern

**Step 3: Adjust dark.css if needed**

Common issues to watch for:
- Form input backgrounds may need explicit dark background
- Placeholder text color may need adjustment
- Focus states on inputs should be visible

**Step 4: Commit**

```bash
git add *-dark.html css/dark.css
git commit -m "feat: add dark theme variant of all pages for comparison"
```

---

### Task 7: Mobile Responsive Polish

**Files:**
- Modify: `css/shared.css`

**Step 1: Add mobile navigation**

In `css/shared.css`, add:
- At 768px breakpoint: nav switches to stacked layout or add a simple hamburger toggle
- For simplicity, start with stacking: brand on top, nav links below in a row, smaller font
- If that looks cluttered, add a minimal JS hamburger menu (create `js/nav.js`)

**Step 2: Verify all responsive breakpoints**

Check all pages at:
- Desktop (1200px+): full layout
- Tablet (768px-1200px): content still centered, services may go single column
- Mobile (< 768px): everything stacked, nav stacked or hamburger, touch-friendly button sizes

Fix any issues:
- Hero text size should scale down on mobile
- CTA buttons should be full width on mobile
- Contact grid should stack
- Adequate touch targets (min 44px height on interactive elements)

**Step 3: Commit**

```bash
git add css/shared.css js/
git commit -m "feat: add mobile responsive styles and navigation"
```

---

### Task 8: Final Review & Cleanup

**Files:**
- All HTML and CSS files

**Step 1: HTML validation**

Check all HTML files for:
- Proper meta tags (charset, viewport, description, title)
- Alt text on all images
- Semantic HTML (header, main, section, footer, nav)
- Consistent structure across all pages

**Step 2: Add meta tags for SEO and social sharing**

In each HTML file, add:
- `<meta name="description" content="...">` with page-specific descriptions
- `<meta property="og:title">`, `og:description`, `og:type` for social sharing
- Favicon link (placeholder - Paul will provide)

**Step 3: Performance check**

Verify:
- No unused CSS
- Images optimized (when real images are added)
- Inter font loaded efficiently (swap display strategy)

**Step 4: Commit**

```bash
git add .
git commit -m "chore: final cleanup - meta tags, SEO, HTML validation, and polish"
```

---

## Post-Implementation Notes

After Paul chooses light or dark:
- Delete the unchosen `-dark.html` files (or the light ones)
- Rename chosen files to be the canonical ones
- Set up hosting (Netlify or Cloudflare Pages)
- Point kinch.ai domain to host
- Set up form submission backend (Netlify Forms or Formspree)
- Connect Paul's Calendly URL
- WordPress theme build is a separate project after the main site is finalized

## File Tree (Final State)

```
Kinch_website/
  index.html
  engagements.html
  about.html
  contact.html
  index-dark.html
  engagements-dark.html
  about-dark.html
  contact-dark.html
  css/
    shared.css
    light.css
    dark.css
  js/
    contact.js
  images/
    (headshot.jpg - to be provided by Paul)
  docs/
    plans/
      2025-02-12-kinch-website-design.md
      2025-02-12-kinch-website-implementation.md
```
