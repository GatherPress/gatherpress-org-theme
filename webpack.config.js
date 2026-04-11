const defaultConfig = require( '@wordpress/scripts/config/webpack.config' );
const RemoveEmptyScriptsPlugin = require( 'webpack-remove-empty-scripts' );
const path = require( 'path' );

module.exports = {
	...defaultConfig,
	entry: {
		'js/custom-comment-form': path.resolve( __dirname, 'src/js/custom-comment-form.js' ),
		'js/event-search': path.resolve( __dirname, 'src/js/event-search.js' ),
		style: path.resolve( __dirname, 'src/scss/style.scss' ),
	},
	plugins: [
		...defaultConfig.plugins,
		new RemoveEmptyScriptsPlugin(),
	],
};
