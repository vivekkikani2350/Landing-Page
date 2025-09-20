// =======================================
// MAGNIFICO ANIMATION SCRIPT
// =======================================

document.addEventListener('DOMContentLoaded', function () {

  // =======================================
  // SCROLL REVEAL ANIMATIONS
  // =======================================

  // Intersection Observer for scroll animations
  const observerOptions = {
    root: null,
    rootMargin: '0px 0px -100px 0px',
    threshold: 0.1
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate-in');
      }
    });
  }, observerOptions);

  // Observe elements for scroll animations
  const animateElements = document.querySelectorAll('.section-animate, .content-animate, .images-container');
  animateElements.forEach(element => {
    observer.observe(element);
  });

  // Special handling for mag-init images
  const magImages = document.querySelectorAll('.mag-init');
  const imageObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        setTimeout(() => {
          entry.target.classList.add('mag-in');
          entry.target.classList.remove('mag-init');

          // Add floating animation after reveal
          setTimeout(() => {
            entry.target.classList.add('mag-float');
          }, 600);
        }, 200);
      }
    });
  }, {
    threshold: 0.3,
    rootMargin: '0px 0px -50px 0px'
  });

  magImages.forEach(img => {
    imageObserver.observe(img);
  });

  // =======================================
  // HEADER SCROLL EFFECT
  // =======================================

  const header = document.querySelector('.site-header');
  let lastScrollTop = 0;

  window.addEventListener('scroll', () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }

    lastScrollTop = scrollTop;
  });

  // =======================================
  // MOBILE MENU TOGGLE
  // =======================================

  const hamburger = document.querySelector('.hamburger');
  const primaryNav = document.querySelector('.primary-nav');
  const siteOverlay = document.querySelector('.site-overlay');
  const body = document.body;

  function toggleMobileMenu() {
    hamburger.classList.toggle('active');
    header.classList.toggle('open');
    siteOverlay.classList.toggle('visible');
    body.classList.toggle('no-scroll');
  }

  function closeMobileMenu() {
    hamburger.classList.remove('active');
    header.classList.remove('open');
    siteOverlay.classList.remove('visible');
    body.classList.remove('no-scroll');
  }

  if (hamburger) {
    hamburger.addEventListener('click', toggleMobileMenu);
  }

  if (siteOverlay) {
    siteOverlay.addEventListener('click', closeMobileMenu);
  }

  // Close menu on window resize
  window.addEventListener('resize', () => {
    if (window.innerWidth > 980) {
      closeMobileMenu();
    }
  });

  // =======================================
  // TAB FUNCTIONALITY
  // =======================================

  window.showContent = function (tabName) {
    // Hide all tab contents
    const tabContents = document.querySelectorAll('.tab-content');
    tabContents.forEach(content => {
      content.classList.remove('active');
    });

    // Remove active class from all tabs
    const tabs = document.querySelectorAll('.tab');
    tabs.forEach(tab => {
      tab.classList.remove('active');
    });

    // Show selected tab content
    const selectedContent = document.getElementById(tabName);
    if (selectedContent) {
      selectedContent.classList.add('active');
    }

    // Add active class to clicked tab
    event.target.classList.add('active');
  };

  // =======================================
  // SMOOTH SCROLLING FOR ANCHOR LINKS
  // =======================================

  const anchorLinks = document.querySelectorAll('a[href^="#"]');
  anchorLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      const href = link.getAttribute('href');
      if (href !== '#' && href.length > 1) {
        const target = document.querySelector(href);
        if (target) {
          e.preventDefault();
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
          closeMobileMenu(); // Close mobile menu if open
        }
      }
    });
  });

  // =======================================
  // ENHANCED BUTTON INTERACTIONS
  // =======================================

  // Add ripple effect to buttons
  const buttons = document.querySelectorAll('.magnifico-submit, .btn, .join_community-link_button a');
  buttons.forEach(button => {
    button.addEventListener('click', function (e) {
      const ripple = document.createElement('span');
      const rect = this.getBoundingClientRect();
      const size = Math.max(rect.width, rect.height);
      const x = e.clientX - rect.left - size / 2;
      const y = e.clientY - rect.top - size / 2;

      ripple.style.width = ripple.style.height = size + 'px';
      ripple.style.left = x + 'px';
      ripple.style.top = y + 'px';
      ripple.classList.add('ripple-effect');

      this.appendChild(ripple);

      setTimeout(() => {
        ripple.remove();
      }, 600);
    });
  });

  // =======================================
  // PARALLAX EFFECT FOR ICONS
  // =======================================

  const parallaxElements = document.querySelectorAll('.magnifico_icon_1, .magnifico_icon_2');

  window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const rate = scrolled * -0.5;

    parallaxElements.forEach(element => {
      element.style.transform = `translateY(${rate}px)`;
    });
  });

  // =======================================
  // EMAIL FORM ENHANCEMENT
  // =======================================

  const emailForm = document.querySelector('.magnifico-email');
  const emailInput = document.querySelector('.magnifico-email input[type="email"]');
  const submitButton = document.querySelector('.magnifico-submit');

  if (emailForm && emailInput && submitButton) {
    // Email validation
    emailInput.addEventListener('input', function () {
      const email = this.value;
      const isValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);

      if (email.length > 0) {
        if (isValid) {
          this.style.borderColor = '#10b981';
          submitButton.style.opacity = '1';
          submitButton.style.pointerEvents = 'auto';
        } else {
          this.style.borderColor = '#ef4444';
          submitButton.style.opacity = '0.5';
          submitButton.style.pointerEvents = 'none';
        }
      } else {
        this.style.borderColor = '#d1d5db';
        submitButton.style.opacity = '1';
        submitButton.style.pointerEvents = 'auto';
      }
    });

    // Form submission
    submitButton.addEventListener('click', function (e) {
      e.preventDefault();
      const email = emailInput.value;

      if (email && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        // Simulate form submission
        this.innerHTML = '<span style="display: inline-flex; align-items: center; gap: 8px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> Success!</span>';
        this.style.background = '#10b981';

        setTimeout(() => {
          this.innerHTML = 'Sign Up Free <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="14" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g transform="matrix(1.4,0,0,1.4,-102.40012817382842,-102.3999206542972)"><path d="M398.5 281h-298c-13.81 0-25-11.19-25-25s11.19-25 25-25h298c13.81 0 25 11.19 25 25s-11.19 25-25 25z" fill="#000000" opacity="1" data-original="#000000"></path><path d="M284.01 399.25a24.96 24.96 0 0 1-18.34-8c-9.39-10.12-8.79-25.94 1.33-35.33l107.47-99.67-110.72-99.94c-10.25-9.25-11.06-25.06-1.81-35.31s25.06-11.06 35.31-1.81l131 118.25c5.21 4.7 8.2 11.37 8.25 18.39s-2.85 13.73-8 18.5L301 392.58a24.917 24.917 0 0 1-16.99 6.67z" fill="#000000" opacity="1" data-original="#000000"></path></g></svg>';
          this.style.background = 'var(--blur-color)';
          emailInput.value = '';
        }, 2000);
      }
    });
  }

  // =======================================
  // PERFORMANCE OPTIMIZATION
  // =======================================

  // Throttle scroll events
  function throttle(func, wait) {
    let timeout;
    return function executedFunction(...args) {
      const later = () => {
        clearTimeout(timeout);
        func(...args);
      };
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
    };
  }

  // Apply throttling to scroll events
  const throttledScroll = throttle(() => {
    // Any additional scroll handling can go here
  }, 16); // ~60fps

  window.addEventListener('scroll', throttledScroll);

  // =======================================
  // ACCESSIBILITY ENHANCEMENTS
  // =======================================

  // Add focus visibility for keyboard navigation
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Tab') {
      document.body.classList.add('using-keyboard');
    }
  });

  document.addEventListener('mousedown', () => {
    document.body.classList.remove('using-keyboard');
  });

  // Skip to main content functionality
  const skipLink = document.createElement('a');
  skipLink.href = '#main';
  skipLink.textContent = 'Skip to main content';
  skipLink.className = 'skip-link';
  skipLink.style.cssText = `
        position: absolute;
        top: -40px;
        left: 6px;
        background: var(--blur-color);
        color: white;
        padding: 8px;
        text-decoration: none;
        border-radius: 4px;
        z-index: 1000;
        transition: top 0.3s;
    `;

  skipLink.addEventListener('focus', () => {
    skipLink.style.top = '6px';
  });

  skipLink.addEventListener('blur', () => {
    skipLink.style.top = '-40px';
  });

  document.body.insertBefore(skipLink, document.body.firstChild);

  // =======================================
  // INITIALIZATION COMPLETE
  // =======================================

  console.log('🚀 Magnifico animations initialized successfully!');
});

// =======================================
// CSS FOR DYNAMIC EFFECTS
// =======================================

// Add dynamic CSS for ripple effect
const style = document.createElement('style');
style.textContent = `
    .ripple-effect {
        position: absolute;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.6);
        transform: scale(0);
        animation: ripple-animation 0.6s linear;
        pointer-events: none;
    }

    @keyframes ripple-animation {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }

    .using-keyboard *:focus {
        outline: 2px solid var(--blur-color) !important;
        outline-offset: 2px !important;
    }

    .skip-link:focus {
        top: 6px !important;
    }
`;

document.head.appendChild(style);