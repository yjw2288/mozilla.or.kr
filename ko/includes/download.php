<?
// 다운로드 버튼 만들기 

function download_button_desktop($button, $fx_version) {
?>
<aside id="download" class="download-button download-button-<?=$button?>">
    <noscript>
<div class="download download-dumb">
  <h4>Firefox 무료 다운로드- 한국어</h4>
  <ul>
          <li><a href="https://download.mozilla.org/?product=firefox-<?=$fx_version?>&amp;os=win&amp;lang=ko" class="button-white">윈도</a></li>
          <li><a href="https://download.mozilla.org/?product=firefox-<?=$fx_version?>&amp;os=linux&amp;lang=ko" class="button-white">리눅스</a></li>
          <li><a href="https://download.mozilla.org/?product=firefox-<?=$fx_version?>&amp;os=osx&amp;lang=ko" class="button-white">맥 OS X</a></li>
          <li><a href="https://market.android.com/details?id=org.mozilla.firefox" class="button-white">안드로이드</a></li>
      </ul>
</div>  </noscript>
  
    <div class="unrecognized-download">
    
<div class="download download-dumb">
  <h4>Firefox 무료 다운로드- 한국어</h4>
  <ul>
          <li><a href="https://download.mozilla.org/?product=firefox-<?=$fx_version?>&amp;os=win&amp;lang=ko" class="button-white">윈도</a></li>
          <li><a href="https://download.mozilla.org/?product=firefox-<?=$fx_version?>&amp;os=linux&amp;lang=ko" class="button-white">리눅스</a></li>
          <li><a href="https://download.mozilla.org/?product=firefox-<?=$fx_version?>&amp;os=osx&amp;lang=ko" class="button-white">맥 OS X</a></li>
          <li><a href="https://market.android.com/details?id=org.mozilla.firefox" class="button-white">안드로이드</a></li>
   </ul>
</div>  </div>
  
    <ul class="download-list">
        <li class="os_windows">
      <a class="download-link download-firefox"
         href="/ko/products/download.html?product=firefox-<?=$fx_version?>&amp;os=win&amp;lang=ko"         data-direct-link="https://download.mozilla.org/?product=firefox-<?=$fx_version?>&amp;os=win&amp;lang=ko">
                  <span class="download-content">
            <span class="download-title">Firefox</span>
            무료 다운로드                      </span>
              </a>
    </li>
        <li class="os_linux">
      <a class="download-link download-firefox"
         href="/ko/products/download.html?product=firefox-<?=$fx_version?>&amp;os=linux&amp;lang=ko"         data-direct-link="https://download.mozilla.org/?product=firefox-<?=$fx_version?>&amp;os=linux&amp;lang=ko">
                  <span class="download-content">
            <span class="download-title">Firefox</span>
            무료 다운로드                      </span>
              </a>
    </li>
        <li class="os_osx">
      <a class="download-link download-firefox"
         href="/ko/products/download.html?product=firefox-<?=$fx_version?>&amp;os=osx&amp;lang=ko"         data-direct-link="https://download.mozilla.org/?product=firefox-<?=$fx_version?>&amp;os=osx&amp;lang=ko">
                  <span class="download-content">
            <span class="download-title">Firefox</span>
            무료 다운로드                      </span>
              </a>
    </li>
        <li class="os_android">
      <a class="download-link download-firefox"
         href="https://market.android.com/details?id=org.mozilla.firefox">
                  <span class="download-content">
            <span class="download-title">Firefox</span>
            무료 다운로드                      </span>
              </a>
    </li>
      </ul>
  
          <p class="unsupported-download">
      Firefox 설치 <a href="/ko/firefox/<?=$fx_version?>/requirements">요구 사항</a>에 맞지 않습니다.
    </p>
  
    <small class="download-other">
    <a href="/ko/firefox/all.html">언어별 버전</a> |
    <a href="/ko/firefox/notes">기능 소개</a> |
    <a href="/ko/legal/privacy/firefox.html">개인 정보 보호</a>
  </small>
  
</aside>
<? }

function download_button_mobile($button) { 
?>
<aside id="primary-download-mobile" class="download-button download-button-mobile-button">
    <noscript>
    
<div class="download download-dumb">
  <h4>Firefox 다운로드 - 한국어 버전</h4>
  <ul>
          <li><a href="https://market.android.com/details?id=org.mozilla.firefox" class="button-white">Android용</a></li>
      </ul>
</div>  </noscript>
  
    <div class="unrecognized-download">
    
<div class="download download-dumb">
  <h4>Firefox 다운로드 - 한국어 버전</h4>
  <ul>
          <li><a href="https://market.android.com/details?id=org.mozilla.firefox" class="button-white">Android용</a></li>
      </ul>
</div>  </div>
  
    <ul class="download-list">
        <li class="">
      <a class="download-link download-firefox-mobile"
         href="https://market.android.com/details?id=org.mozilla.firefox">
          <span class="download-content-wrapper">          <span class="download-content">
            <span class="download-title">Firefox Android용</span>
            무료 다운로드              <span class="download-info">
    Google Play 스토어로 이동
  </span>
          </span>
        </span>
      </a>
    </li>
      </ul>
  
  
  <small class="download-other">
  <a href="/ko/firefox/mobile/platforms">지원 단말기</a> |
  <a href="/ko/mobile/notes">기능 소개</a> |
  <a href="/ko/legal/privacy/firefox.html">개인 정보 정책</a>
</small>

</aside>
<? } ?>