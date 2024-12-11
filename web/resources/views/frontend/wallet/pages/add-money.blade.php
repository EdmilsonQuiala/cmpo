<div id="tab-AddMoney" class="@if($CurrentPage == 'AddMoney') tab tab-active tab-AddMoney @else page-content tab @endif">

    <div class="navbar navbar-page">
        <div class="navbar-inner">
            <div class="left"></div>
            <div class="title">
                Adicionar Dinheiro
            </div>
            <div class="right">
                <a id="redirectToHome">
                    <i class="fas fa-times"></i>
                </a>
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const redirectLink = document.getElementById('redirectToHome');
                        redirectLink.addEventListener('click', function () {
                            window.location.href = "{{ route('home') }}";
                        });
                    });
                </script>
            </div>
        </div>
    </div>

    <div class="account-buyer segments">
        <div class="container segments">
            <div class="info-balance content-shadow">
                <div class="row">
                    <div class="col-50">
                        <div class="content-text">
                            <p>Saldo Atual</p>
                            <h5>AOA <span class="hide_money">{{ number_format($balance, 2, ',', '.') }}</span></h5>
                        </div>
                    </div>
                    <div class="col-50">
                        <div class="content-button">
                            <button id="toggleHideMoney" class="button primary-button">
                                <i class="fas fa-eye"></i> Ocultar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const toggleButton = document.getElementById('toggleHideMoney');
                    const moneyElements = document.querySelectorAll('.hide_money');
                    let isHidden = {{ $preference && $preference->hide_money === 'yes' ? 'true' : 'false' }};

                    // Função para atualizar o estado da interface
                    function updateInterface() {
                        if (isHidden) {
                            moneyElements.forEach(element => {
                                element.setAttribute('data-original-value', element.textContent);
                                element.textContent = '***';
                            });
                            toggleButton.innerHTML = '<i class="fas fa-eye-slash"></i> Mostrar';
                        } else {
                            moneyElements.forEach(element => {
                                element.textContent = element.getAttribute('data-original-value') || '{{ number_format($balance, 2, ',', '.') }}';
                            });
                            toggleButton.innerHTML = '<i class="fas fa-eye"></i> Ocultar';
                        }
                    }

                    // Inicializar interface com base na preferência salva
                    updateInterface();

                    toggleButton.addEventListener('click', function () {
                        isHidden = !isHidden;
                        updateInterface();

                        // Enviar solicitação para salvar a preferência
                        fetch("{{ route('toggleHideMoney') }}", {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            },
                            body: JSON.stringify({ hide_money: isHidden })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.status === 'success') {
                                console.log('Preferência salva com sucesso!');
                            } else {
                                console.error('Erro ao salvar preferência:', data.message);
                            }
                        })
                        .catch(error => {
                            console.error('Erro:', error);
                        });
                    });
                });
            </script>
        </div>
        <div class="account-menu">
            <form class="list" id="addMoneyForm">
                <ul>
                    <li class="item-content item-input">
                        <div class="item-inner">
                            <div class="item-input-wrap">
                                <input type="text" placeholder="Nome Completo" name="name" id="name" value="{{ $user->name }}" disabled />
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-inner">
                            <div class="item-input-wrap">
                                <input type="email" placeholder="Seu Email" name="email" id="email" value="{{ $user->email }}" disabled />
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-inner">
                            <div class="item-input-wrap">
                                <input type="number" placeholder="Quantidade" name="qtd" id="qtd" />
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-inner">
                            <div class="item-input-wrap">
                                <select name="coin" id="coin">
                                    <option value="">Selecione a moeda</option>
                                    <option value="USD">Dólar Americano</option>
                                    <option value="BRL">Real Brasileiro</option>
                                    <option value="EUR">Euro</option>
                                    <option value="GBP">Libra Esterlina</option>
                                    <option value="AOA">Kwanza</option>
                                </select>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="content-button">
                    <button type="button" class="button primary-button" name="btn_solicitar" id="btn_solicitar">Solicitar</button>
                </div>
            </form>

            <div id="messageContainer"></div>
            <div id="errorContainer"></div>

            <script>
                document.getElementById('btn_solicitar').addEventListener('click', function() {
                    const formData = new FormData();
                    formData.append('qtd', document.getElementById('qtd').value);
                    formData.append('coin', document.getElementById('coin').value);

                    const btnSolicitar = document.getElementById('btn_solicitar');
                    btnSolicitar.disabled = true;
                    btnSolicitar.style.backgroundColor = '#7a7a7a';
                    btnSolicitar.innerText = 'Aguarde...';

                    fetch("{{ route('AddMoneyProcess') }}", {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById('messageContainer').innerHTML = `<div class="alert alert-success">${data.message}</div>`;
                        btnSolicitar.disabled = false;
                        btnSolicitar.style.backgroundColor = '';
                        btnSolicitar.innerText = 'Solicitar';
                    })
                    .catch(error => {
                        document.getElementById('errorContainer').innerHTML = `<div class="alert alert-danger">Erro ao processar a solicitação.</div>`;
                        btnSolicitar.disabled = false;
                        btnSolicitar.style.backgroundColor = '';
                        btnSolicitar.innerText = 'Solicitar';
                    });
                });
            </script>

        </div>
    </div>

</div>

