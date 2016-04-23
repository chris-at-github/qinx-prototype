var webpack = require('webpack');

// webpack.config.js
module.exports = {
	entry:  './source/js/a4.js',
	output: {
		filename: 'a4.package.js'
	},
	plugins: [
		new webpack.ProvidePlugin({
			$:      'jquery',
			jQuery: 'jquery'
		})
	]
};