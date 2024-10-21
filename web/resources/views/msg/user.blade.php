{{-- Modal de Mensagens de Sistema --}}
<div id="messageModal" class="modal fade notification-modal">
    <div class="modal-dialog modal-bottom">
        <div class="modal-content">
            <div class="modal-body">
                {{-- Mensagem de Erro --}}
                @if(session('error'))
                    <div class="alert alert-danger">
                        <i class="icon ion-ios-alert"></i>
                        <div class="text">
                            <p>Sistema: <span>{{ session('error') }}</span></p>
                        </div>
                        <div class="separator-large"></div>
                    </div>
                @endif

                {{-- Mensagem de Sucesso --}}
                @if(session('success'))
                    <div class="alert alert-success">
                        <i class="fa fa-check-circle"></i>
                        <div class="text">
                            <p>Sistema: <span>{{ session('success') }}</span></p>
                        </div>
                        <div class="separator-large"></div>
                    </div>
                @endif

                {{-- Mensagem de Aviso --}}
                @if(session('warning'))
                    <div class="alert alert-warning">
                        <i class="fa fa-exclamation-triangle"></i>
                        <div class="text">
                            <p>Sistema: <span>{{ session('warning') }}</span></p>
                        </div>
                        <div class="separator-large"></div>
                    </div>
                @endif

                {{-- Mensagem de Informação --}}
                @if(session('info'))
                    <div class="alert alert-info">
                        <i class="fa fa-info-circle"></i>
                        <div class="text">
                            <p>Sistema: <span>{{ session('info') }}</span></p>
                        </div>
                        <div class="separator-large"></div>
                    </div>
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
