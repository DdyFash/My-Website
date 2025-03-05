// Mobile menu toggle
document.querySelector('.menu-toggle').addEventListener('click', function() {
    this.classList.toggle('active');
    document.querySelector('.nav-links').classList.toggle('active');
    
    // Animate hamburger icon
    const hamburger = this.querySelector('.hamburger');
    if (this.classList.contains('active')) {
        hamburger.style.transform = 'rotate(45deg)';
        hamburger.style.backgroundColor = 'var(--primary)';
        hamburger::before.style.transform = 'rotate(90deg) translateX(8px)';
        hamburger::after.style.transform = 'rotate(-90deg) translateX(-8px)';
    } else {
        hamburger.style.transform = 'rotate(0)';
        hamburger.style.backgroundColor = 'white';
        hamburger::before.style.transform = 'none';
        hamburger::after.style.transform = 'none';
    }
});

// Form input animations
document.querySelectorAll('.modern-form input, .modern-form textarea').forEach(input => {
    input.addEventListener('input', function() {
        if (this.value !== '') {
            this.parentNode.querySelector('label').classList.add('active');
        } else {
            this.parentNode.querySelector('label').classList.remove('active');
        }
    });
});