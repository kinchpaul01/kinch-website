# Kinch.ai Deployment Guide

## Overview

- **kinch.ai** — static site on Cloudflare Pages
- **kinch.ai/blog** — WordPress on separate host, proxied via Cloudflare Worker

---

## Step 1: Push the repo to GitHub

If not already on GitHub:

```bash
cd work/Kinch_website
git remote add origin https://github.com/YOUR_USERNAME/kinch-website.git
git push -u origin main
```

---

## Step 2: Deploy static site to Cloudflare Pages

1. Log into [cloudflare.com](https://cloudflare.com) → **Pages** → **Create a project**
2. Connect your GitHub account and select the `kinch-website` repo
3. Build settings:
   - Build command: *(leave blank)*
   - Build output directory: `/`
4. Click **Save and Deploy**

### Point kinch.ai to Cloudflare Pages

In Cloudflare DNS for kinch.ai:

1. Delete any existing A or CNAME record for `@` (the root domain)
2. Add a new CNAME: `@` → your Pages project URL (e.g. `kinch-website.pages.dev`)
3. Set proxy status to **Proxied** (orange cloud)

The static site is now live at kinch.ai. Takes 1-2 minutes to propagate.

---

## Step 3: Set up WordPress hosting

Recommended: [SiteGround](https://siteground.com) GrowBig plan (~$6/mo).

1. Sign up and choose **WordPress** as the application
2. During setup, set the domain to a temporary SiteGround subdomain (e.g. `kinch.sg-host.com`) — you'll connect kinch.ai/blog later
3. Note the host URL — you'll need it for the Worker

### Configure WordPress

In WordPress admin (wp-admin):

1. **Settings → General**:
   - WordPress Address (URL): `https://kinch.sg-host.com` (or whatever your host URL is)
   - Site Address (URL): `https://kinch.ai/blog`
2. **Settings → Permalinks**: Set to **Post name** (`/blog/%postname%/`)
3. **Appearance → Themes → Add New**: Upload `wordpress-theme/kinch/` as a zip file, then activate it
4. Copy the logo image from `images/Kinch logo cropped.png` into `wordpress-theme/kinch/assets/kinch-logo.png` before zipping

---

## Step 4: Deploy the Cloudflare Worker

1. In `worker.js`, replace `YOUR_WORDPRESS_HOST_HERE` with your SiteGround host URL (e.g. `https://kinch.sg-host.com`)
2. In Cloudflare dashboard → **Workers & Pages** → **Create Worker**
3. Paste the contents of `worker.js` into the editor, click **Deploy**
4. Go to **Settings → Triggers → Add Route**:
   - Route: `kinch.ai/blog*`
   - Zone: `kinch.ai`

kinch.ai/blog now proxies to your WordPress install.

---

## Step 5: Zip and upload the WordPress theme

```bash
cd work/Kinch_website/wordpress-theme
cp ../images/Kinch\ logo\ cropped.png kinch/assets/kinch-logo.png
zip -r kinch-theme.zip kinch/
```

Upload `kinch-theme.zip` via WordPress admin → Appearance → Themes → Add New → Upload Theme.

---

## Done

- kinch.ai — static site live
- kinch.ai/blog — WordPress blog live with matching theme
- Blog nav link on main site points to /blog
