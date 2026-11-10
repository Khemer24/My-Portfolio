(() => {
    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const nav = document.querySelector('.site-nav');
    const progress = document.querySelector('#scroll-progress');
    const revealElements = document.querySelectorAll('.reveal');

    if (!reducedMotion && 'IntersectionObserver' in window) {
        document.body.classList.add('motion-ready');
        revealElements.forEach((element, index) => {
            element.style.setProperty('--reveal-delay', `${(index % 4) * 75}ms`);
        });

        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -36px 0px' });

        revealElements.forEach((element) => revealObserver.observe(element));
    }

    const updateScrollEffects = () => {
        const scrollableHeight = document.documentElement.scrollHeight - window.innerHeight;
        const scrollProgress = scrollableHeight > 0 ? window.scrollY / scrollableHeight : 0;

        if (progress) {
            progress.style.width = `${Math.min(scrollProgress * 100, 100)}%`;
        }

        if (nav) {
            nav.classList.toggle('nav-scrolled', window.scrollY > 24);
        }
    };

    let scrollFrame = 0;
    window.addEventListener('scroll', () => {
        if (scrollFrame) {
            return;
        }

        scrollFrame = window.requestAnimationFrame(() => {
            updateScrollEffects();
            scrollFrame = 0;
        });
    }, { passive: true });
    updateScrollEffects();

    const navLinks = document.querySelectorAll('.site-nav .nav-link');
    if ('IntersectionObserver' in window && navLinks.length) {
        const sectionObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) {
                    return;
                }

                navLinks.forEach((link) => {
                    const isCurrentSection = link.getAttribute('href') === `#${entry.target.id}`;
                    link.classList.toggle('active', isCurrentSection);
                    if (isCurrentSection) {
                        link.setAttribute('aria-current', 'location');
                    } else {
                        link.removeAttribute('aria-current');
                    }
                });
            });
        }, { rootMargin: '-30% 0px -60% 0px' });

        document.querySelectorAll('main section[id]').forEach((section) => sectionObserver.observe(section));
    }

    const navMenu = document.querySelector('#portfolioNav');
    const navToggler = document.querySelector('.navbar-toggler');
    if (navMenu && navToggler) {
        navMenu.querySelectorAll('a[href^="#"]').forEach((link) => {
            link.addEventListener('click', () => {
                if (window.matchMedia('(max-width: 991.98px)').matches && navToggler.getAttribute('aria-expanded') === 'true') {
                    navToggler.click();
                }
            });
        });
    }

    const typedRole = document.querySelector('#typed-role');
    if (typedRole && !reducedMotion) {
        const roles = ['Laravel & WordPress', 'Laravel', 'WordPress', 'Vibe coding with Claude'];
        let roleIndex = 0;
        let characterIndex = roles[0].length;
        let deleting = true;

        const typeNextCharacter = () => {
            const role = roles[roleIndex];

            if (deleting) {
                characterIndex -= 1;
                typedRole.textContent = role.slice(0, characterIndex);
                if (characterIndex === 0) {
                    deleting = false;
                    roleIndex = (roleIndex + 1) % roles.length;
                    window.setTimeout(typeNextCharacter, 350);
                    return;
                }
            } else {
                const nextRole = roles[roleIndex];
                characterIndex += 1;
                typedRole.textContent = nextRole.slice(0, characterIndex);
                if (characterIndex === nextRole.length) {
                    deleting = true;
                    window.setTimeout(typeNextCharacter, 1700);
                    return;
                }
            }

            window.setTimeout(typeNextCharacter, deleting ? 38 : 72);
        };

        window.setTimeout(typeNextCharacter, 1900);
    }

    if (!reducedMotion && window.matchMedia('(pointer: fine)').matches) {
        document.querySelectorAll('.project-card').forEach((card) => {
            card.addEventListener('pointermove', (event) => {
                const bounds = card.getBoundingClientRect();
                card.style.setProperty('--pointer-x', `${event.clientX - bounds.left}px`);
                card.style.setProperty('--pointer-y', `${event.clientY - bounds.top}px`);
            });
        });
    }
})();
