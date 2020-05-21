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

exports.css = css;
exports.watchCode = watchCode;