$('#AddUser').validate({
    rules: {
        name: {
            required: true,
            minlength: 6,  // You can define the minimum length if necessary
        },
        email: {
            required: true,
            email: true,  // Ensures a valid email format
        },
        phone: {
            required: true,
            minlength: 10,  // Assuming phone number should have at least 10 digits
        },
        password: {
            required: true,
            minlength: 8,  // Minimum length for password
        },
    },
    messages: {
        name: {
            required: "Enter your name",
            minlength: "Name should be at least 6 characters long",
        },
        email: {
            required: "Enter your email",
            email: "Please enter a valid email address",
        },
        phone: {
            required: "Enter your phone number",
            minlength: "Phone number should be at least 10 characters long",
        },
        password: {
            required: "Enter your password",
            minlength: "Password should be at least 8 characters long",
        },
    }
});
