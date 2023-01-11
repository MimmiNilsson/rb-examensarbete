let mix = require("laravel-mix");
let path = require("path");

mix.setPublicPath(path.resolve("./"));

mix.js(["resources/js/app.js"], "js");

mix.postCss("resources/css/app.css", "css");

mix.postCss("resources/css/editor-style.css", "./");

mix.copyDirectory("resources/images", "images");

mix.setResourceRoot("../");

mix.options({
  postCss: [
    require("postcss-nested-ancestors"),
    require("postcss-nested"),
    require("postcss-import"),
    require("tailwindcss"),
    require("autoprefixer"),
  ],
});

mix.browserSync({
  proxy: "localhost:8888",
  host: "localhost",
  // open: 'external',
  port: 3000,
  files: ["*.php", "**/*.php", "css/*.css", "editor-style.css", "js/*.js"],
  injectChanges: false,
});

mix.version();