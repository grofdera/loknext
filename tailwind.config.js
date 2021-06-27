module.exports = {
    //darkMode: 'class',
    purge: [
        './*.php',
        './blocks/*.php',
        './template-parts/*.php'
    ],
    theme: {
        extend: {}
    },
    variants: {},
    plugins: [
        require('@tailwindcss/typography')
    ]
}
