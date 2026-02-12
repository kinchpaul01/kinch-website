# Kinch Website Design

## Overview

Kinch is a one-person AI and Data Strategy consultancy. The website serves two purposes: present the consultancy to potential clients (executives at large and mid-market companies) and host a blog that demonstrates expertise and builds an audience over time.

## Architecture

- **Main site (kinch.ai):** Static HTML/CSS, hosted on Netlify or Cloudflare Pages. Four pages: Home, Engagements, About, Contact.
- **Blog (kinch.ai/blog or blog.kinch.ai):** Existing WordPress installation, repointed to the kinch.ai domain, restyled with a custom theme matching the main site.
- **Shared navigation:** Both the static site and WordPress blog share the same header nav (Home, Engagements, About, Blog, Contact) and footer so visitors experience one seamless site.
- **Domain:** kinch.ai
- **Repository:** Git-backed, auto-deploys on push.

## Visual Design

Two versions will be built for comparison (one will be chosen):

### Shared Principles

- **Font:** Inter (free, modern, highly legible sans-serif). Bold for headings, regular for body. Generous line height.
- **Language:** Short, direct statements. Headlines of 5-8 words. Supporting text of 1-2 sentences per block. No jargon. Scannable by a busy executive in seconds.
- **Layout:** Content in a centered narrow column (~900px max width). Generous white space. Sections separated by space, not lines or boxes.
- **Navigation:** Simple horizontal nav bar with text links: Home, Engagements, About, Blog, Contact.

### Light Version

- Off-white background
- Near-black text
- One accent color for links and CTA buttons
- Open, airy feel (Anthropic-like)

### Dark Version

- Dark charcoal background (not pure black)
- Off-white text
- One accent color for links and CTA buttons
- Bold, modern feel (IDEO-like)

## Pages

### Home

- **Hero:** Headline (~8 words, core value proposition), one supporting sentence, one CTA button ("Let's talk" -> Contact page).
- **What I Do:** 2-3 short blocks previewing engagement types (strategy consulting, training/workshops). Each has a headline and 1-2 sentences, linking to Engagements page.
- **Why Kinch:** 2-3 bullet-style statements signaling credibility and unique perspective. Not a bio.
- **Blog Teaser:** "Latest from the blog" showing 2-3 most recent post titles with links.
- **Footer:** Minimal - copyright, LinkedIn link or email.

### Engagements

- **Page headline:** Short and direct (e.g., "How I work with clients").
- **Strategy Consulting:** Headline, 2-3 sentences on what it is and who it's for, bullet points on typical engagement shape, tangible outcomes.
- **Training & Workshops:** Same structure. Emphasis on practical, decision-oriented learning for leaders, not a technical bootcamp.
- **How to Get Started:** CTA section ("Every engagement starts with a conversation") with link to Contact page or Calendly.

### About

- **Your Story:** First-person narrative. Who you are, career arc, why you started Kinch. A few short paragraphs. Conveys your unique perspective on data strategy fueling AI.
- **Experience Highlights:** 3-5 short bullets - notable companies, roles, outcomes. Not a CV.
- **Your Point of View:** What you believe most people get wrong about AI/data strategy. What matters most. A taste of your counsel that seeds interest in the blog.
- **Photo:** Professional headshot.
- **CTA:** Link to Contact page or Calendly.

### Contact

- **Headline:** Direct (e.g., "Get in touch").
- **Calendly Embed:** Embedded widget or prominent button. "Book a conversation" with one supporting sentence.
- **Contact Form:** Three fields (Name, Email, Message). Hidden honeypot field for spam defense. Basic validation (valid email, non-empty message, reject link-heavy messages). Sends to email on submit. Shows "Thanks, I'll be in touch" confirmation.
- **Nothing else.** No address, phone, or social media grid.

## WordPress Blog Theme

A custom WordPress theme that matches the chosen main site design:
- Same header navigation and footer
- Same font (Inter), color palette, and spacing
- Same accent color for links
- Clean post layout: title, date, body text, minimal chrome
- Slightly more personal/handmade feel than the main site pages - simpler layout, content-focused, but visually connected

## Target Audience

Business executives (not IT) at large enterprises and mid-market companies who need to make well-informed strategic decisions about AI and data. They care about potential and realistic limits of the technology, not how it works under the hood.

## Content Principles

- Write for scanners first, readers second
- Every heading should make sense on its own
- Prefer bullets over paragraphs where possible
- One idea per section
- Direct, confident tone - trusted advisor, not salesperson
