<?php

namespace inquid\howlerjs;

/**
 * This is just an example.
 */
class HowlerJs extends \yii\base\Widget
{
    public function init()
    {
        HowlerJsAssets::register($this->view);
    }

    public function run()
    {
        return '<!-- Top Info -->
  <div id="title">
    <span id="track"></span>
    <div id="timer">0:00</div>
    <div id="duration">0:00</div>
  </div>

  <!-- Controls -->
  <div class="controlsOuter">
    <div class="controlsInner">
      <div id="loading"></div>
      <div class="btn" id="playBtn"></div>
      <div class="btn" id="pauseBtn"></div>
      <div class="btn" id="prevBtn"></div>
      <div class="btn" id="nextBtn"></div>
    </div>
    <div class="btn" id="playlistBtn"></div>
    <div class="btn" id="volumeBtn"></div>
  </div>

  <!-- Progress -->
  <div id="waveform"></div>
  <div id="bar"></div>
  <div id="progress"></div>

  <!-- Playlist -->
  <div id="playlist">
    <div id="list"></div>
  </div>

  <!-- Volume -->
  <div id="volume" class="fadeout">
    <div id="barFull" class="bar"></div>
    <div id="barEmpty" class="bar"></div>
    <div id="sliderBtn"></div>
  </div>';
    }
}
