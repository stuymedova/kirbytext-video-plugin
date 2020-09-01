# kirby3-kirbytext-video

Makes sure that width of each video added through "video" tag is set to 100% while height is being maintained. Overrides the original video tag (path: `kirby/config/tags.php`)

## Output

```
<figure>
  <div class="video-wrapper">
    <iframe allowfullscreen="" src="https://youtube.com/embed/qwerty"></iframe>
  </div>
  <figcaption><p>Caption goes here.</p></figcaption>
</figure>
```

## Installation
```
plugins
  video
    index.php
```

Along with CSS:
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
