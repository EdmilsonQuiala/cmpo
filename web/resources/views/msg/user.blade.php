<div class="list media-list">
    <ul>
        @if(session('error'))
            <li>
                <a href="#" class="item-link item-content">
                    <div class="item-media"><i class="fas fa-info-circle" style="color: #39673d"></i></div>
                    <div class="item-inner">
                        <div class="item-title-row">
                            <div class="item-title">App: <span style="font-weight: lighter"> {{ session('error') }} </span></div>
                        </div>
                    </div>
                </a>
            </li>
        @endif
        @if(session('success'))
            <li>
                <a href="#" class="item-link item-content">
                    <div class="item-media"><i class="fas fa-info-circle" style="color: #39673d"></i></div>
                    <div class="item-inner">
                        <div class="item-title-row">
                            <div class="item-title">App: <span style="font-weight: lighter"> {{ session('success') }} </span></div>
                        </div>
                    </div>
                </a>
            </li>
        @endif
        @if(session('warning'))
            <li>
                <a href="#" class="item-link item-content">
                    <div class="item-media"><i class="fas fa-info-circle" style="color: #39673d"></i></div>
                    <div class="item-inner">
                        <div class="item-title-row">
                            <div class="item-title">App: <span style="font-weight: lighter"> {{ session('warning') }} </span></div>
                        </div>
                    </div>
                </a>
            </li>
        @endif
        @if(session('info'))
            <li>
                <a href="#" class="item-link item-content">
                    <div class="item-media"><i class="fas fa-info-circle" style="color: #39673d"></i></div>
                    <div class="item-inner">
                        <div class="item-title-row">
                            <div class="item-title">App: <span style="font-weight: lighter"> {{ session('info') }} </span></div>
                        </div>
                    </div>
                </a>
            </li>
        @endif
    </ul>
</div>
