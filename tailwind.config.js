const defaultTheme = require('tailwindcss/defaultTheme');

const plugin = require("tailwindcss/plugin");

const focusedSiblingPlugin = plugin(function ({ addVariant, e }) {
    addVariant("focused-sibling", ({ container }) => {
      container.walkRules((rule) => {
        rule.selector = `:focus + .focused-sibling\\:${rule.selector.slice(1)}`;
      });
    });
  });

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: 'class', // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                mont: ['Montserrat'],
                robo: ['Roboto'],
            },
            spacing: {
                '18': '4.5rem',
            },
            backgroundColor: theme => ({
                'primary': '#3490dc',
                'secondary': '#ffed4a',
                'danger': '#e3342f',

                'light': '#ededed',
                'lighter': '#f0f0f0',
                'lightest': '#f9f9f9',

                'dark': '#3b3b40',
                'darker': '#2f2f33',
                'darkest': '#232326',
            }),
            borderColor: theme => ({
                'light': '#b5b5b5',
                'lighter': '#dbdbdb',
                'lightest': '#f5f5f5',

                'dark': '#4f4f56',
                'darker': '#404046',
                'darkest': '#3b3b40',
            }),
            textColor: theme => ({
                'primary': '#3490dc',

                'light': '#a2a5b9',
                'lighter': '#aaaab3',
                'lightest': '#fcfcfc',

                'dark': '#a2a5b9',
                'darker': '#a2a5b9',
                'darkest': '#283252',
            }),
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
            textColor: ["focused-sibling"],

        },
    },

    plugins: [
        require('@tailwindcss/forms'), 
        require('@tailwindcss/aspect-ratio'), 
        require('@tailwindcss/typography'),
        focusedSiblingPlugin,
    ],
};
