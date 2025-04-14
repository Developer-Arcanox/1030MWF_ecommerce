document.addEventListener('DOMContentLoaded', function() {
    // Password visibility toggle
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');
    const toggleConfirmPassword = document.querySelector('#toggleConfirmPassword');
    const confirmPassword = document.querySelector('#confirmPassword');
    
    togglePassword.addEventListener('click', function() {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        this.innerHTML = type === 'password' ? '<i class="far fa-eye"></i>' : '<i class="far fa-eye-slash"></i>';
    });
    
    toggleConfirmPassword.addEventListener('click', function() {
        const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
        confirmPassword.setAttribute('type', type);
        this.innerHTML = type === 'password' ? '<i class="far fa-eye"></i>' : '<i class="far fa-eye-slash"></i>';
    });
    
    // Password strength checker
    password.addEventListener('input', function() {
        const value = this.value;
        const strengthBar = document.getElementById('passwordStrengthBar');
        const requirements = {
            length: value.length >= 8,
            number: /\d/.test(value),
            upper: /[A-Z]/.test(value),
            special: /[!@#$%^&*(),.?":{}|<>]/.test(value)
        };
        
        // Update requirement indicators
        document.getElementById('lengthReq').className = requirements.length ? 
            'fas fa-check-circle requirement-met' : 'fas fa-circle requirement-not-met';
        document.getElementById('numberReq').className = requirements.number ? 
            'fas fa-check-circle requirement-met' : 'fas fa-circle requirement-not-met';
        document.getElementById('upperReq').className = requirements.upper ? 
            'fas fa-check-circle requirement-met' : 'fas fa-circle requirement-not-met';
        document.getElementById('specialReq').className = requirements.special ? 
            'fas fa-check-circle requirement-met' : 'fas fa-circle requirement-not-met';
        
        // Calculate strength score (0-4)
        const strength = Object.values(requirements).filter(Boolean).length;
        
        // Update strength bar
        const width = (strength / 4) * 100;
        strengthBar.style.width = width + '%';
        strengthBar.style.backgroundColor = 
            strength === 4 ? 'var(--success-color)' : 
            strength >= 2 ? '#ffc107' : 'var(--error-color)';
        
        // Validate password
        validatePassword();
    });
    
    // Confirm password validation
    confirmPassword.addEventListener('input', validatePassword);
    
    function validatePassword() {
        const passwordValue = password.value;
        const confirmValue = confirmPassword.value;
        const passwordGroup = password.closest('.form-group');
        const confirmGroup = confirmPassword.closest('.form-group');
        
        // Reset validation
        password.classList.remove('is-invalid', 'is-valid');
        confirmPassword.classList.remove('is-invalid', 'is-valid');
        passwordGroup.querySelector('.invalid-feedback').style.display = 'none';
        confirmGroup.querySelector('.invalid-feedback').style.display = 'none';
        
        // Validate password requirements
        const requirements = {
            length: passwordValue.length >= 8,
            number: /\d/.test(passwordValue),
            upper: /[A-Z]/.test(passwordValue),
            special: /[!@#$%^&*(),.?":{}|<>]/.test(passwordValue)
        };
        
        const allRequirementsMet = Object.values(requirements).every(Boolean);
        
        if (passwordValue && !allRequirementsMet) {
            password.classList.add('is-invalid');
            passwordGroup.querySelector('.invalid-feedback').style.display = 'block';
        } else if (passwordValue) {
            password.classList.add('is-valid');
        }
        
        // Validate password match
        if (confirmValue && passwordValue !== confirmValue) {
            confirmPassword.classList.add('is-invalid');
            confirmGroup.querySelector('.invalid-feedback').style.display = 'block';
        } else if (confirmValue) {
            confirmPassword.classList.add('is-valid');
        }
    }
    
    // Form validation
    const form = document.getElementById('registrationForm');
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Validate all fields
        let isValid = true;
        const requiredFields = form.querySelectorAll('[required]');
        
        requiredFields.forEach(field => {
            const group = field.closest('.form-group') || field.closest('.form-check');
            const feedback = group.querySelector('.invalid-feedback');
            
            // Reset validation
            field.classList.remove('is-invalid');
            if (feedback) feedback.style.display = 'none';
            
            // Check if field is empty
            if (!field.value) {
                field.classList.add('is-invalid');
                if (feedback) feedback.style.display = 'block';
                isValid = false;
                return;
            }
            
            // Special validation for email
            if (field.type === 'email' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(field.value)) {
                field.classList.add('is-invalid');
                if (feedback) feedback.style.display = 'block';
                isValid = false;
                return;
            }
            
            // Special validation for password
            if (field.id === 'password') {
                const requirements = {
                    length: field.value.length >= 8,
                    number: /\d/.test(field.value),
                    upper: /[A-Z]/.test(field.value),
                    special: /[!@#$%^&*(),.?":{}|<>]/.test(field.value)
                };
                
                if (!Object.values(requirements).every(Boolean)) {
                    field.classList.add('is-invalid');
                    if (feedback) feedback.style.display = 'block';
                    isValid = false;
                    return;
                }
            }
            
            // Special validation for confirm password
            if (field.id === 'confirmPassword' && field.value !== password.value) {
                field.classList.add('is-invalid');
                if (feedback) feedback.style.display = 'block';
                isValid = false;
                return;
            }
            
            // Special validation for terms checkbox
            if (field.id === 'termsCheck' && !field.checked) {
                field.classList.add('is-invalid');
                if (feedback) feedback.style.display = 'block';
                isValid = false;
                return;
            }
        });
    });
});