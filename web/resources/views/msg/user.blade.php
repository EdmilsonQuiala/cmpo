{{-- Modal de Mensagens de Sistema --}}
<div id="messageModal" class="modal fade notification-modal">
    <div class="modal-dialog modal-bottom">
        <div class="modal-content">
            <div class="modal-body">
                {{-- Mensagem de Erro --}}
                @if(session('error'))
                    <i class="icon ion-ios-alert color-danger"></i>
                    <div class="text">
                        <p>App: <span>{{ session('error') }}</span></p>
                    </div>
                    <div class="separator-large"></div>
                @endif

                {{-- Mensagem de Sucesso --}}
                @if(session('success'))
                    <i class="icon ion-ios-checkmark color-succes"></i>
                    <div class="text">
                        <p>App: <span>{{ session('success') }}</span></p>
                    </div>
                    <div class="separator-large"></div>
                @endif

                {{-- Mensagem de Aviso --}}
                @if(session('warning'))
                    <i class="icon ion-android-warning color-yellow"></i>
                    <div class="text">
                        <p>App: <span>{{ session('warning') }}</span></p>
                    </div>
                    <div class="separator-large"></div>
                @endif

                {{-- Mensagem de Informação --}}
                @if(session('info'))
                    <i class="icon ion-ios-information color-blue"></i>
                    <div class="text">
                        <p>App: <span>{{ session('info') }}</span></p>
                    </div>
                    <div class="separator-large"></div>
                @endif
            </div>
        </div>
    </div>
</div>

{{-- Script para exibir o modal automaticamente --}}
<script>
    window.addEventListener('DOMContentLoaded', function () {
        @if(session('error') || session('success') || session('warning') || session('info'))
            var myModal = new bootstrap.Modal(document.getElementById('messageModal'));
            myModal.show();
        @endif
    });
</script>
