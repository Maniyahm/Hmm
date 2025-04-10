@extends('components.layout')

@section('content')

<section class="hero-section">
    <div class="container">
        <h1 class="main-heading ml-0">Let's Transform Your Vision into Reality</h1>
        
        <div class="content-grid">
            <!-- Left side - Company Info -->
            <div class="company-info">
                <h3 class="gradient-text">Global customer footprint</h3>
                <h2 class="company-name">HM² Infotech</h2>
                
                <div class="office-info">
                    <p class="office-title">Registered Office ( IN )</p>
                    <p class="office-address">602, Silver Business Points, Near VIP cir,Digital Valley Surat, Gujarat, INDIA - 395010</p>
                </div>
                
                <div class="contact-section">
                    <p class="contact-title">Hm² Sales Enquiry:</p>
                    <p class="contact-phone">(+91) 9662922884</p>
                    <p class="contact-email">contact@hm.com</p>
                </div>
                
                <div class="contact-section">
                    <p class="contact-title">HR/Corporate Enquiry:</p>
                    <p class="contact-phone">(+91) 7984737571</p>
                    <p class="contact-email">maniyahiren154@gmail.com</p>
                </div>
                
                <div class="social-icons">
                    <a href="#" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon linkedin"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-icon twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon youtube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            
            <!-- Right side - Enquiry Form -->
            <div class="form-wrapper">
                <div class="form-container">
                    <h2 class="form-title">Project Enquiry</h2>
                    
                    <form method="POST" action="{{ route('contact') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName">First Name <span class="required">*</span></label>
                                <input type="text" id="firstName" name="first_name" placeholder="First Name*" required>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name <span class="required">*</span></label>
                                <input type="text" id="lastName" name="last_name" placeholder="Last Name*" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email ID <span class="required">*</span></label>
                                <input type="email" id="email" name="email" placeholder="Email*" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Mobile Phone <span class="required">*</span></label>
                                <div class="phone-input">
                                    <div class="country-code">
                                        <img src="https://flagcdn.com/w20/de.png" alt="Germany" class="flag">
                                        <span class="dropdown-arrow">▼</span>
                                    </div>
                                    <input type="tel" id="phone" name="phone" placeholder="Phone Number" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="service">Select a Service <span class="required">*</span></label>
                            <select id="service" name="service" required>
                                <option value="" selected>Select the service</option>
                                <option value="web">Web Development</option>
                                <option value="mobile">Mobile App Development</option>
                                <option value="ecommerce">E-commerce Solutions</option>
                            </select>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="budget">Budget <span class="required">*</span></label>
                                <select id="budget" name="budget" required>
                                    <option value="" selected>Select budget</option>
                                    <option value="5k">Under $5,000</option>
                                    <option value="10k">$5,000 - $10,000</option>
                                    <option value="25k">$10,000 - $25,000</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="timeline">How soon you want to start?</label>
                                <select id="timeline" name="timeline">
                                    <option value="" selected>Select timeline</option>
                                    <option value="immediate">Immediately</option>
                                    <option value="month">Within a month</option>
                                    <option value="quarter">Next quarter</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="requirement">Requirement <span class="required">*</span></label>
                            <select id="requirement" name="requirement" required>
                                <option value="" selected>Select the requirement</option>
                                <option value="new">New Project</option>
                                <option value="upgrade">Upgrade Existing Project</option>
                                <option value="maintenance">Maintenance & Support</option>
                            </select>
                        </div>
                        
                        
                        <div class="form-group submit-group">
                            <button type="submit" class="submit-btn">Submit Enquiry</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* General Styles */
    body, html {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', Arial, sans-serif;
        color: #333;
    }
    
    .hero-section {
        width: 100%;
        padding: 60px 0;
        background-color: #fff;
    }
    
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .main-heading {
        text-align: center;
        font-size: 42px;
        font-weight: 600;
        color: #444;
        margin-bottom: 60px;
    }
    
    .content-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
    }
    
    /* Company Info Styles */
    .company-info {
        padding-right: 20px;
    }
    
    .gradient-text {
        background: linear-gradient(to right, #3a7bd5, #00d2ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 22px;
        margin: 0 0 10px 0;
        font-weight: 400;
    }
    
    .company-name {
        font-size: 26px;
        margin: 0 0 30px 0;
        font-weight: 600;
    }
    
    .office-title {
        font-weight: 600;
        margin: 0 0 5px 0;
    }
    
    .office-address {
        margin: 0 0 30px 0;
        line-height: 1.5;
    }
    
    .contact-section {
        margin-bottom: 25px;
    }
    
    .contact-title {
        font-weight: 600;
        margin: 0 0 5px 0;
    }
    
    .contact-phone, .contact-email {
        margin: 0;
        line-height: 1.5;
    }
    
    .social-icons {
        display: flex;
        gap: 15px;
        margin-top: 30px;
    }
    
    .social-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 5px;
        color: white;
        text-decoration: none;
        font-size: 18px;
    }
    
    .facebook {
        background-color: #3b5998;
    }
    
    .instagram {
        background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);
    }
    
    .linkedin {
        background-color: #0077b5;
    }
    
    .twitter {
        background-color: #1da1f2;
    }
    
    .youtube {
        background-color: #ff0000;
    }
    
    /* Form Styles */
    .form-wrapper {
        padding-left: 20px;
    }
    
    .form-container {
        background: #fff;
        border-radius: 5px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        border: 1px solid #e0e0e0;
        padding: 30px;
    }
    
    .form-title {
        text-align: center;
        color: #2C9CB8;
        margin: 0 0 30px 0;
        font-size: 24px;
        font-weight: 500;
    }
    
    .form-row {
        display: flex;
        gap: 20px;
        margin-bottom: 0;
    }
    
    .form-group {
        flex: 1;
        margin-bottom: 20px;
    }
    
    label {
        display: block;
        margin-bottom: 8px;
        font-size: 14px;
        color: #333;
        font-weight: 500;
    }
    
    .required {
        color: #ff0000;
    }
    
    input, select, textarea {
        width: 100%;
        padding: 8px 2px;
        border: none;
        border-bottom: 1px solid #ddd;
        font-family: inherit;
        font-size: 14px;
        outline: none;
        background-color: transparent;
    }
    
    input::placeholder, textarea::placeholder {
        color: #888;
    }
    
    select {
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='6' fill='none'%3E%3Cpath fill='%23666' d='M6 6L0 0h12z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 15px center;
        cursor: pointer;
    }
    
    .phone-input {
        display: flex;
        align-items: center;
        border-bottom: 1px solid #ddd;
    }
    
    .phone-input input {
        border-bottom: none;
    }
    
    .country-code {
        display: flex;
        align-items: center;
        gap: 5px;
        padding: 8px 10px 8px 2px;
    }
    
    .country-code img {
        width: 20px;
    }
    
    .dropdown-arrow {
        color: #888;
        font-size: 10px;
    }
    
    textarea {
        resize: vertical;
        min-height: 100px;
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 10px;
        margin-top: 5px;
    }
    
    .documents-input {
        border: 1px dashed #ccc;
        border-radius: 4px;
        padding: 10px;
        margin-top: 5px;
    }
    
    .submit-group {
        margin-top: 30px;
    }
    
    .submit-btn {
        width: 100%;
        background: linear-gradient(to right, #1a76d2, #3a98ee);
        color: white;
        border: none;
        border-radius: 5px;
        padding: 12px;
        font-size: 16px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .submit-btn:hover {
        background: linear-gradient(to right, #155fa8, #2978c3);
    }
    
    @media (max-width: 992px) {
        .content-grid {
            grid-template-columns: 1fr;
        }
        
        .company-info, .form-wrapper {
            padding: 0;
        }
    }
    
    @media (max-width: 768px) {
        .main-heading {
            font-size: 32px;
        }
        
        .form-row {
            flex-direction: column;
            gap: 0;
        }
    }
</style>

@endsection