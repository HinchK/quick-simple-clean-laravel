
module.exports = {
    purge: [
        './resources/views/**/*.blade.php',
        './resources/sass/**/*.css',
        './resources/js/**/*.js'
    ],
    theme: {
        extend: {},
        fontFamily: {
            'sans': ['Nunito', 'Helvetica, Arial, sans-serif']
        }
    },
    variants: {},
    plugins: [
        require('@tailwindcss/forms')
    ]
}
