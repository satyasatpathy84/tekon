import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const contactForm = document.getElementById('contact-form');

    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();

            const formData = new FormData(contactForm);

            axios.post('/contact', {
                name: formData.get('name'),
                email: formData.get('email'),
                message: formData.get('message'),
            })
            .then((response) => {
                alert('Message sent successfully!');
                contactForm.reset();
            })
            .catch((error) => {
                alert('There was an error sending your message. Please try again later.');
            });
        });
    }
});
