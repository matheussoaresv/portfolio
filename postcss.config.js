import purgecss from '@fullhuman/postcss-purgecss'

export default {
  plugins: [
    purgecss.default({
      content: ['./**/*.php', './assets/js/**/*.js'],
      safelist: [/^btn/, /^navbar/, /^row/, /^col/, /^fa-/],
      defaultExtractor: content => content.match(/[\w-/:]+(?<!:)/g) || []
    })
  ]
}
