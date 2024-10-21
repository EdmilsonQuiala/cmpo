<div id="NotiM" class="modal fade notification-modal">
    <div class="modal-dialog modal-bottom">
        <div class="modal-content">
            <div class="modal-body">
                @foreach ($errors->all() as $error)
                    <i class="icon ion-ios-alert"></i>
                    <div class="text">
                        <p>Sistema: <span>{{ $error }}</span></p>
                    </div>
                    <div class="separator-large"></div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script>
    @if ($errors->any())
        window.addEventListener('DOMContentLoaded', function () {
            var myModal = new bootstrap.Modal(document.getElementById('NotiM'));
            myModal.show();
        });
    @endif
</script>
