import { resolve } from "path";
import MiniCssExtractPlugin from 'mini-css-extract-plugin';
import removeEmptyScriptsPlugin, { STAGE_AFTER_PROCESS_PLUGINS } from "webpack-remove-empty-scripts";
import webpackConfig, { plugins as _plugins } from "@wordpress/scripts/config/webpack.config";

export default {
  ...webpackConfig,
  mode: "production",
  context: resolve(__dirname, "assets"),
  entry: ["./main.js", "./main.scss"],
  output: {
    path: resolve(__dirname, 'assets/css'),
    filename: 'main.js', // or whatever you want to name the output file
  },
  plugins: [
    ..._plugins,
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