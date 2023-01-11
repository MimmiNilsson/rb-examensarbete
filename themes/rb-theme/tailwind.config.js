const plugin = require("tailwindcss/plugin");
const _ = require("lodash");
const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
  mode: "jit",
  purge: {
    content: [
      "./template-parts/*.php",
      "./template-parts/blocks/*.php",
      "./template-parts/base/*.php",
      "./template-parts/components/*.php",
      "./resources/css/*.css",
      "./resources/js/*.js",
      "./comments.php",
      "./header.php",
      "./footer.php",
      "./single.php",
      "./index.php",
      "./404.php",
      "./archive.php",
      "./search.php",
      "./safelist.txt",
    ],
  },
  variants: {
    extend: {
      animation: ["hover", "focus"],
      transform: ["hover", "group-hover", "focus"],
      flexDirection: ["odd", "even", "group-odd", "group-even"],
      margin: ["odd", "group-odd", "group-even", "last"],
      opacity: ["group-hover", "hover"],
      backgroundColor: ["label-checked"],
    },
  },
  theme: {
    container: {
      center: true,
      screens: {
        sm: "100%",
        md: "100%",
        lg: "1024px",
        xl: "1320px",
      },
      padding: {
        DEFAULT: "1rem",
        sm: "2rem",
        lg: "2rem",
      },
    },
    extend: {
      colors: {
        black: "#0A0808",
        red: "#812222",
        white: "#F1F1F1",
        beige: "#D1CCC4",
        grey: "#BDBDBD",
        darkGrey: "#4F4F4F",
        darkerGrey: "#828282",
      },
      fontFamily: {},
      screens: { xs: "480px" },
      // backgroundImage: {
      //   close: "url('/wp-content/themes/amoba-theme/images/close.svg')",
      // },
    },
    fontFamily: {
      // sans: ["Futura"],
      // serif: ["Quiosco"],
    },
  },
  plugins: [
    require("tailwind-group-even-odd"),
    require("@tailwindcss/line-clamp"),
    plugin(function ({
      addUtilities,
      addComponents,
      e,
      prefix,
      config,
      theme,
    }) {
      const colors = theme("colors");
      const margin = theme("margin");
      const screens = theme("screens");
      const fontSize = theme("fontSize");

      const editorColorText = _.map(
        // config("amoba.colors", {}),
        (value, key) => {
          return {
            [`.has-${key}-text-color`]: {
              color: value,
            },
          };
        }
      );

      const editorColorBackground = _.map(
        // config("amoba.colors", {}),
        (value, key) => {
          return {
            [`.has-${key}-background-color`]: {
              backgroundColor: value,
            },
          };
        }
      );

      const editorFontSizes = _.map(
        // config("amoba.fontSizes", {}),
        (value, key) => {
          return {
            [`.has-${key}-font-size`]: {
              fontSize: value[0],
              fontWeight: `${value[1] || "normal"}`,
            },
          };
        }
      );

      const alignmentUtilities = {
        ".alignfull": {
          margin: `${margin[2] || "0.5rem"} calc(50% - 50vw)`,
          maxWidth: "100vw",
          "@apply w-screen": {},
        },
        ".alignwide": {
          "@apply -mx-16 my-2 max-w-screen-xl": {},
        },
        ".alignnone": {
          "@apply h-auto max-w-full mx-0": {},
        },
        ".aligncenter": {
          margin: `${margin[2] || "0.5rem"} auto`,
          "@apply block": {},
        },
        [`@media (min-width: ${screens.sm || "640px"})`]: {
          ".alignleft:not(.wp-block-button)": {
            marginRight: margin[2] || "0.5rem",
            "@apply float-left": {},
          },
          ".alignright:not(.wp-block-button)": {
            marginLeft: margin[2] || "0.5rem",
            "@apply float-right": {},
          },
          ".wp-block-button.alignleft a": {
            "@apply float-left mr-4": {},
          },
          ".wp-block-button.alignright a": {
            "@apply float-right ml-4": {},
          },
        },
      };

      const imageCaptions = {
        ".wp-caption": {
          "@apply inline-block": {},
          "& img": {
            marginBottom: margin[2] || "0.5rem",
            "@apply leading-none": {},
          },
        },
        ".wp-caption-text": {
          fontSize: (fontSize.sm && fontSize.sm[0]) || "0.9rem",
          color: (colors.gray && colors.gray[600]) || "#718096",
        },
      };

      addUtilities(
        [
          editorColorText,
          editorColorBackground,
          alignmentUtilities,
          editorFontSizes,
          imageCaptions,
        ],
        {
          respectPrefix: false,
          respectImportant: false,
        }
      );
    }),
  ],
};
