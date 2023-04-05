const micromatch = require('micromatch')

module.exports = {
  '*.php': (files) => ['./vendor/bin/phpstan analyse --memory-limit=2G'],
  'composer.json': () => 'composer validate --no-check-publish --strict',
  'resources/**/*': (files) => {
    const match = micromatch(files, ['**/*.{css,js,ts,vue,yaml,html}'], {})

    if (!match.length) {
      return 'true'
    }

    return `npx prettier --write ${match.join(' ')}`
  },
}
