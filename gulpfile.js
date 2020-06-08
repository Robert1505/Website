const {src,dest,watch} = require('gulp');
const sass = require('gulp-sass');

function css(){
    return src("./scss/style.scss")
    .pipe(sass())
    .pipe(dest("./css"));
}

function watchCode(){
    watch("./scss/style.scss" , css);
}

function getJs(){
    return src(["node_modules/bootstrap/dist/js/bootstrap.min.js","node_modules/jquery/dist/jquery.min.js","node_modules/@srexi/purecounterjs/dist/purecounter_vanilla.js","node_modules/progressbar.js/dist/progressbar.min.js"])
    .pipe(dest('js/'));
}

function getCss(){
    return src("node_modules/bootstrap/dist/css/bootstrap.min.css","node_modules/font-awesome/css/font-awesome.min.css","node_modules/hover.css/css/hover-min.css")
    .pipe(dest('css/'));
}

exports.css = css;
exports.watchCode = watchCode;
exports.getJs = getJs;
exports.getCss = getCss;