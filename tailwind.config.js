/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ["./public/**/*.{html,js,php}"],
	theme: {
		screens: {
			phone: { max: "600px" },
			// => @media (max-width: 600px) { ... }

			tablet: "640px",
			// => @media (min-width: 640px) { ... }

			laptop: "1024px",
			// => @media (min-width: 1024px) { ... }

			desktop: "1200px",
			// => @media (min-width: 1280px) { ... }
		},
		extend: {},
	},
	plugins: [],
};
