<div class="list media-list">
    <ul>
        @foreach ($errors->all() as $error)
        <li>
            <a href="#" class="item-link item-content">
                <div class="item-media"><i class="fas fa-info-circle" style="color: #39673d"></i></div>
                <div class="item-inner">
                    <div class="item-title-row">
                        <div class="item-title">Sistema: <span style="font-weight: lighter"> {{ $error }} </span></div>
                    </div>
                </div>
            </a>
        </li>
        @endforeach
    </ul>
</div>
