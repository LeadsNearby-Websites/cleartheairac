import gulp from 'gulp';
import cleancss from 'gulp-clean-css';
import postcss from 'gulp-postcss';
import rename from 'gulp-rename';
import sass from 'gulp-sass';
import bulkSass from 'gulp-sass-bulk-import';
import autoprefixer from 'gulp-autoprefixer';
import errorHandler from 'gulp-error-handle';

const autoprefixerOptions = {
  grid: true,
};

const sassOptions = {
  errLogToConsole: true,
  outputStyle: 'nested',
};

const inputdir = './src/scss/**/*.scss';
const input = './src/scss/style.scss';
const output = './';

const log = error => console.log(error.message);

const compileMyCss = () => {
  return (
    gulp
      .src(input)
      // .pipe( setTimeout( () => { return }, 500 ) )
      .pipe(errorHandler(log))
      .pipe(bulkSass())
      .pipe(sass(sassOptions))
      .pipe(postcss([require('autoprefixer')]))
      .pipe(gulp.dest(output))
  );
};

const cleanMyCss = () => {
  return gulp
    .src('./style.css')
    .pipe(errorHandler(log))
    .pipe(autoprefixer(autoprefixerOptions))
    .pipe(
      cleancss({
        format: {
          breaks: {
            afterAtRule: true,
            afterBlockBegins: true,
            afterBlockEnds: true,
            afterComment: true,
            afterProperty: true,
            afterRuleBegins: true,
            afterRuleEnds: true,
            beforeBlockEnds: true,
            betweenSelectors: true,
          },
          indentBy: 2,
          indentWith: 'space',
          spaces: {
            aroundSelectorRelation: true,
            beforeBlockBegins: true,
            beforeValue: false,
          },
          wrapAt: false,
        },
        level: 2,
      })
    )
    .pipe(gulp.dest('./'));
};

const minifyMyCss = () => {
  return gulp
    .src('./style.css')
    .pipe(errorHandler(log))
    .pipe(
      cleancss({
        level: {
          1: {
            all: true,
            specialComments: 0,
          },
        },
      })
    )
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('./'));
};

const watchCss = () => {
  const watcher = gulp.watch(
    [input, inputdir],
    gulp.series(compileMyCss, cleanMyCss, minifyMyCss)
  );
  watcher.on('change', function(file) {
    console.log('File ' + file + ' was changed, running tasks...');
  });
};

const buildCss = gulp.series(compileMyCss, cleanMyCss, minifyMyCss);
const buildWatch = gulp.series(watchCss);

export { buildCss, buildWatch };
export default buildWatch;