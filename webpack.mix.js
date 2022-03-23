let theme = process.env.npm_config_theme;

if(theme) {
	require(`${__dirname}/resources/themes/${theme}/webpack.mix.js`);
} else {
	require(`${__dirname}/resources/themes/default/webpack.mix.js`);
}
