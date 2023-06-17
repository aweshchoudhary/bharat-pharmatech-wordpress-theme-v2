/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}", "!./node_modules", "!./vendor/**/*"],
  theme: {
    extend: {
      colors: {
        primary: "var(--primary)",
        primaryHover: "var(--primary-hover)",
        borderColor: "var(--border)",
        textColor: "var(--text-color)",
      },
    },
  },
  plugins: [],
};
