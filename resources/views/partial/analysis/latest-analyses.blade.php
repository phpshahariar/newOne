<ul class="profile-list">
    @foreach($analyses as $analysis)
        <li>
            <div class="analysis-icon">
                <img src="{{ $analysis->feature_image }}" alt="..." class="pro-img">
            </div>
            <div class="analysis-discription">
                <div class="right-info-container">
                    <h4 class="profile-name conurl"><a href="analysis-detail.html" target="_blank">Forex Research</a></h4>
                    <p class="discription">{{ $analysis->title }}</p>
                    <p class="vc-num">
                      <span class="bp-view">
                      <i class="fa fa-comments mr10"></i>
                      <span id="ip_view">{{ $analysis->comments_count }}</span>
                      </span>
                        <span class="bp-view">
                      <i class="fa fa-eye mr10"></i>
                      <span id="ip_view"> 2453</span>
                      </span>
                        <span class="bp-view">
                        <i class="fa fa-thumbs-up mr10"></i>
                        <span id="ip_view">{{ $analysis->likes_count }}</span>
                        </span>
                        <span class="bp-view">
                        <i class="fa fa-star mr10"></i>
                        <span id="ip_view"> 5</span>
                        </span>
                    </p>
                </div>
            </div>
        </li>
    @endforeach
</ul>
