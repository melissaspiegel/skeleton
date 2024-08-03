import { fileURLToPath } from 'url';
import { dirname, resolve } from 'path';
import MiniCssExtractPlugin from 'mini-css-extract-plugin';
import pkg from 'webpack-remove-empty-scripts';

const removeEmptyScriptsPlugin = pkg.default || pkg;  // Ensure compatibility
const { STAGE_AFTER_PROCESS_PLUGINS } = pkg;

const __filename = fileURLToPath(import.meta.url);
const __dirname = dirname(__filename);

const isDevelopment = process.env.NODE_ENV === 'development';

export default {
  mode: isDevelopment ? 'development' : 'production',
  context: resolve(__dirname, 'assets'),
  entry: ['./main.js', './main.scss'],
  output: {
    path: resolve(__dirname, 'assets/css'),
    filename: 'main.js', // or whatever you want to name the output file
  },
  plugins: [
    new removeEmptyScriptsPlugin({
      stage: STAGE_AFTER_PROCESS_PLUGINS,
    }),
    new MiniCssExtractPlugin({
      filename: 'css/[name].css',
    }),
  ],
  module: {
    rules: [
      {
        test: /\.scss$/,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'postcss-loader',
          'sass-loader',
        ],
      },
    ],
  },
};