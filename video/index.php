<?php

Kirby::plugin('stuymedova/video', [
  'tags' => [
    'video' => [
      'attr' => [
        'class',
        'caption',
        'height',
        'width'
      ],
      'html' => function ($tag) {
        $html = 
          '<figure>
            <div class="video-wrapper">' . $video = Html::video($tag->value, $tag->kirby()->option('kirbytext.video.options', [])) . '</div>
            <figcaption>'. kt($tag->caption) . '</figcaption>
          </figure>';

        $html = str_replace(array('\r', '\n'), '', $html);
        return $html;
      },
    ],
  ],
]);
