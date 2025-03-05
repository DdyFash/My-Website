<?php 
// PHP form handling code remains here
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Keep existing head content -->
    <style>
    /* General Background */
    body {
        background-color: #0a0a0a; /* Dark background for the whole page */
        color: #fff; /* White text for contrast */
        font-family: 'Poppins', sans-serif; /* Modern font */
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .contact-section {
        padding: 8rem 0;
        background: radial-gradient(circle at 10% 20%, rgba(0,0,0,0.9) 0%, transparent 50%); /* Darker background */
    }

    .contact-grid { 
        display: grid;
        grid-template-columns: 1fr 1.5fr; /* Adjusting the column ratio for better proportion */
        gap: 3rem; /* Adding more space between cards */
        max-width: 1200px;
        margin: 0 auto;
        align-items: flex-start; /* Align items at the top for more symmetry */
    }

    .social-card, .form-card {
        background: rgba(0,0,0,0.7); /* Darker background for the cards */
        border: 1px solid rgba(255,255,255,0.2); /* Light border for visibility */
        border-radius: 12px; /* Rounded corners for a softer look */
        padding: 2.5rem;
        backdrop-filter: blur(12px); /* Slightly stronger blur */
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); /* Soft shadow to add depth */
        transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transitions for hover effects */
    }

    .social-card:hover, .form-card:hover {
        transform: translateY(-5px); /* Subtle lift on hover */
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3); /* Deeper shadow on hover */
    }

    .social-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem; /* More space between social items */
        margin-top: 2rem;
    }

    .social-item {
        display: flex;
        align-items: center;
        padding: 1.5rem;
        background: rgba(0,255,157,0.1); /* Slight color accent */
        border: 1px solid rgba(255,255,255,0.2); /* Light border */
        border-radius: 12px; /* Rounded corners */
        transition: all 0.3s ease;
        color: #fff;
        text-decoration: none;
        font-weight: 500;
    }

    .social-item:hover {
        transform: translateY(-4px); /* Smooth lift on hover */
        background: rgba(0,255,157,0.2); /* Slightly brighter on hover */
        box-shadow: 0 8px 20px rgba(0,255,157,0.3);
    }

    .social-item i {
        font-size: 1.6rem; /* Slightly bigger icons */
        margin-right: 1.2rem; /* More spacing between icon and text */
        color: #00ff9d;
    }

    .modern-form .form-group {
        position: relative;
        margin-bottom: 2rem; /* Added more space between inputs */
    }

    .modern-form input,
    .modern-form textarea {
        width: 91%;
        padding: 1.2rem;
        background: rgba(255,255,255,0.1); /* Darker input fields */
        border: 2px solid rgba(255,255,255,0.3); /* Lighter border */
        border-radius: 8px; /* Rounded edges */
        color: #fff;
        font-size: 1.1rem; /* Slightly bigger text */
        transition: all 0.3s ease;
    }

    .modern-form input:focus,
    .modern-form textarea:focus {
        border-color: #00ff9d;
        box-shadow: 0 0 15px rgba(0,255,157,0.2); /* Subtle glow effect */
    }

    .modern-form label {
        position: absolute;
        left: 1.2rem;
        top: 1.2rem;
        color: rgba(255,255,255,0.6);
        pointer-events: none;
        transition: all 0.3s ease;
        background: var(--dark-bg);
        padding: 0 0.6rem;
    }

    .modern-form input:focus ~ label,
    .modern-form input:valid ~ label,
    .modern-form textarea:focus ~ label,
    .modern-form textarea:valid ~ label {
        top: -0.8rem;
        left: 1rem;
        font-size: 1rem;
        color: #00ff9d;
    }

    .glow-button {
        width: 100%;
        padding: 1.2rem;
        background: linear-gradient(45deg, #00ff9d, #00ccff);
        border: none;
        border-radius: 8px;
        color: #0a0a0a;
        font-weight: 600;
        cursor: pointer;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        font-size: 1.1rem; /* Bigger font for buttons */
    }

    .glow-button:hover {
        transform: translateY(-4px); /* More pronounced lift on hover */
        box-shadow: 0 10px 30px rgba(0,255,157,0.4); /* Larger shadow effect */
    }
    .glow-button-home {
    width: 100%;
    padding: 1rem;
    background: linear-gradient(45deg, #ff6347, #ff8c00); /* Gradient from red to orange */
    border: none;
    border-radius: 8px;
    color: #fff;
    font-weight: 600;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    font-size: 1.1rem; /* Button font size */
    margin-top: 2rem; /* Adds space above the button */
}

.glow-button-home:hover {
    transform: translateY(-4px); /* Slight lift on hover */
    box-shadow: 0 10px 30px rgba(255, 99, 71, 0.4); /* Larger shadow effect */
}
/* General Responsiveness */

@media (max-width: 480px) {
    /* For very small screens (e.g., mobile portrait) */
    .social-item {
        padding: 0.8rem;
    }

    .social-item i {
        font-size: 1.2rem; /* Adjust icon size for mobile */
    }

    .section-title {
        font-size: 1.5rem; /* Smaller font size for mobile screens */
    }

    .modern-form .form-group {
        margin-bottom: 1rem; /* Less space between input fields */
    }

    .modern-form input,
    .modern-form textarea {
        font-size: 1rem; /* Reduce font size for small screens */
    }
}


</style>


</head>
<body>
    <!-- Navigation remains the same -->

    <section class="contact-section">
        <div class="container">
            <div class="contact-grid">
                <!-- Social Links Section - Still Present! -->
                <div class="social-card">
                    <h2 class="section-title">Connect With Me</h2>
                    <div class="social-grid">
                        <a href="https://github.com/DdyFash?tab=repositories" class="social-item">
                            <i class="fab fa-github"></i>
                            <span>GitHub</span>
                        </a>
                        
                        <a href="https://public.tableau.com/app/profile/dolapo.fashakin/vizzes" class="social-item">
                            <i class="fas fa-chart-bar"></i>
                            <span>Tableau</span>
                        </a>

                        <a href="https://linkedin.com/in/yourprofile" class="social-item">
                            <i class="fab fa-linkedin"></i>
                            <span>LinkedIn</span>
                        </a>

                        <a href="mailto:davidfashakin0@yahoo.com" class="social-item">
                            <i class="fas fa-envelope"></i>
                            <span>Email</span>
                        </a>
                    </div>
                </div>

                <!-- Contact Form - Still Present! -->
                <div class="form-card">
                    <h2 class="section-title">Send a Message</h2>
                    <form method="POST" action="form-handler.php" class="modern-form">
                        <div class="form-group">
                            <input type="text" name="name" required>
                            <label>Your Name</label>
                        </div>
                        
                        <div class="form-group">
                            <input type="email" name="email" required>
                            <label>Your Email</label>
                        </div>
                        
                        <div class="form-group">
                            <textarea name="message" required></textarea>
                            <label>Your Message</label>
                        </div>
                        
                        <button type="submit" class="glow-button">
                            Send Message <i class="fas fa-paper-plane"></i>
                        </button>
                        <button type="button" class="glow-button-home" onclick="window.location.href='index.html';">
    Go Home <i class="fas fa-home"></i>
</button>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer remains the same -->
</body>
</html>