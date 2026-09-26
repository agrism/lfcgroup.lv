import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    // Mobile Navigation Toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });
    }

    // Service selector helper
    window.selectService = function(serviceName) {
        const subjectSelect = document.getElementById('subject');
        const contactSection = document.getElementById('contact');
        
        if (subjectSelect) {
            for (let i = 0; i < subjectSelect.options.length; i++) {
                if (subjectSelect.options[i].value === serviceName || subjectSelect.options[i].text.includes(serviceName)) {
                    subjectSelect.selectedIndex = i;
                    break;
                }
            }
        }
        
        if (contactSection) {
            contactSection.scrollIntoView({ behavior: 'smooth' });
            const nameInput = document.getElementById('name');
            if (nameInput) {
                setTimeout(() => nameInput.focus(), 500);
            }
        }
    };

    // Language Dropdown Toggle (Desktop & Mobile)
    const initDropdown = (btnId, menuId) => {
        const btn = document.getElementById(btnId);
        const menu = document.getElementById(menuId);
        if (btn && menu) {
            btn.addEventListener('click', (e) => {
                e.stopPropagation();
                menu.classList.toggle('hidden');
            });
            document.addEventListener('click', (e) => {
                if (!btn.contains(e.target) && !menu.contains(e.target)) {
                    menu.classList.add('hidden');
                }
            });
        }
    };

    initDropdown('lang-dropdown-btn', 'lang-dropdown-menu');
    initDropdown('lang-mobile-dropdown-btn', 'lang-mobile-dropdown-menu');
});



