# Image optimizer by Wenprise
Contributors: iwillhappy1314
Donate link: https://www.paypal.me/wenprise
Tags: widget, image optimizer, PageSpeed, pagespeed, 图片压缩, 网站加速, 速度优化
Requires at least: 3.7
Tested up to: 5.4
Stable tag: 1.0.1
Requires PHP: 7.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Plugin description

## Description

上传时自动压缩优化图片，以通过 PageSpeed Insights 测试。

1. 压缩方式为有损压缩，jpeg 质量为 85%，png 质量为 80%。
2. 原图会被重命名为 filename.png.orig 的格式

**需要在服务器上安装对应的压缩组件才能实现压缩。**

### CentOS

`
sudo yum install epel-release jpegoptim optipng pngquant gifsicle libwebp-tools
sudo npm install -g svgo
`

### debian

`
sudo apt-get install jpegoptim optipng pngquant gifsicle webp
sudo npm install -g svgo
`

## Installation

1. 上传插件到`/wp-content/plugins/` 目录
2. 在插件管理菜单激活插件
3. 在服务器上安装所需组件

## Frequently Asked Questions

### 为什么需要这个插件？

- 压缩后的图片可以以更快的速度加载，用户体验更好
- 更小的图片可以节省存储空间和下载时所用能源，更环保

## Upgrade Notice

更新之前请在测试环境中进行测试。

## Screenshots

1. 图片压缩前后的对比

## Changelog


### 1.0

* The first released

