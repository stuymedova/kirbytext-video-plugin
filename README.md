# Kirbytext Video Plugin

Sets the width of each video added with a [`(video: …)`](https://getkirby.com/docs/reference/text/kirbytags/video) tag to 100% while maintaining the height. 

Overrides the default `(video: …)` KirbyTag located in `kirby/config/tags.php`. More info on overriding the default tags: [getkirby.com/docs/reference/plugins/extensions/kirbytags#overriding-default-kirbytags](https://getkirby.com/docs/reference/plugins/extensions/kirbytags#overriding-default-kirbytags).

## Output

```html
<figure>
  <div class="video-wrapper">
    <iframe allowfullscreen="" src="https://youtube.com/embed/…"></iframe>
  </div>
  <figcaption><p>Caption goes here.</p></figcaption>
</figure>
```

## Setup
1. Download and copy this repository to `/site/plugins`
2. Add the following CSS to the project:
```css
.video-wrapper {
  position: relative;
  width: 100%;
  height: 0;
  padding-bottom: 56.25%; /* 16:9 ratio */
}

.video-wrapper iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
```
