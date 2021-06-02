# Kirby Video Plugin

Sets the width of each video to 100% while maintaining the height. Overrides the default `(video: …)` KirbyTag located in `kirby/config/tags.php`. 

More info on overriding the default tags: [getkirby.com/docs/reference/plugins/extensions/kirbytags#overriding-default-kirbytags](https://getkirby.com/docs/reference/plugins/extensions/kirbytags#overriding-default-kirbytags).

## Output

```html
<figure>
  <div class="video-wrapper">
    <iframe allowfullscreen="" src="https://youtube.com/embed/qwerty"></iframe>
  </div>
  <figcaption><p>Caption goes here.</p></figcaption>
</figure>
```

## Setup
1. Put the `video` folder in `site/plugins`, such as:
```
site
└── plugins
    └── video
        └── index.php
```

2. Add the following CSS to your project:
```
.video-wrapper {
  position: relative;
  width: 100%;
  height: 0;
  padding-bottom: 56.25%;
}

.video-wrapper iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
```
