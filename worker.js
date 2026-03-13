// Cloudflare Worker: proxy kinch.ai/blog/* to WordPress host
// Deploy this worker with route: kinch.ai/blog*
// Set the WORDPRESS_HOST variable to your WordPress hosting URL (e.g. https://wp.yoursiteground.com)

const WORDPRESS_HOST = 'https://YOUR_WORDPRESS_HOST_HERE';

export default {
  async fetch(request) {
    const url = new URL(request.url);

    // Only proxy /blog paths
    if (!url.pathname.startsWith('/blog')) {
      return new Response('Not found', { status: 404 });
    }

    // Build the upstream URL: map kinch.ai/blog/foo -> WORDPRESS_HOST/blog/foo
    const upstreamURL = new URL(url.pathname + url.search, WORDPRESS_HOST);

    const upstreamRequest = new Request(upstreamURL, {
      method: request.method,
      headers: request.headers,
      body: request.method !== 'GET' && request.method !== 'HEAD' ? request.body : null,
      redirect: 'follow',
    });

    const response = await fetch(upstreamRequest);

    // Pass through non-HTML responses (images, CSS, JS, fonts) unchanged
    const contentType = response.headers.get('content-type') || '';
    if (!contentType.includes('text/html')) {
      return response;
    }

    // Rewrite any absolute WordPress host URLs in HTML back to kinch.ai
    const html = await response.text();
    const rewritten = html.replaceAll(WORDPRESS_HOST, 'https://kinch.ai');

    return new Response(rewritten, {
      status: response.status,
      headers: response.headers,
    });
  },
};
