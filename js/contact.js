// Contact form validation with honeypot spam defense
(function () {
  'use strict';

  var form = document.getElementById('contact-form');
  if (!form) return;

  form.addEventListener('submit', function (e) {
    e.preventDefault();

    // Honeypot check - if filled, a bot submitted this
    var honeypot = document.getElementById('website');
    if (honeypot && honeypot.value) {
      // Silently pretend it worked
      showSuccess();
      return;
    }

    // Clear previous errors
    clearErrors();

    var valid = true;

    // Validate name
    var name = document.getElementById('name');
    if (!name.value.trim()) {
      showError('name-error');
      valid = false;
    }

    // Validate email
    var email = document.getElementById('email');
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email.value.trim() || !emailRegex.test(email.value.trim())) {
      showError('email-error');
      valid = false;
    }

    // Validate message
    var message = document.getElementById('message');
    if (!message.value.trim()) {
      showError('message-error');
      valid = false;
    }

    // Reject link-heavy messages (likely spam)
    var urlPattern = /https?:\/\//gi;
    var urlMatches = message.value.match(urlPattern);
    if (urlMatches && urlMatches.length >= 5) {
      showError('message-error');
      valid = false;
    }

    if (!valid) return;

    // If valid, submit the form
    // For now, show success message (replace with actual form submission)
    // When using Netlify Forms or Formspree, uncomment: form.submit();
    showSuccess();
  });

  function showError(id) {
    var el = document.getElementById(id);
    if (el) el.classList.add('visible');
  }

  function clearErrors() {
    var errors = document.querySelectorAll('.field-error');
    for (var i = 0; i < errors.length; i++) {
      errors[i].classList.remove('visible');
    }
  }

  function showSuccess() {
    form.style.display = 'none';
    var msg = document.getElementById('success-message');
    if (msg) msg.classList.add('visible');
  }
})();
