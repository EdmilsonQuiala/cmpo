# Afercon Pay - Carteira Móvel de Pagamentos Online

## Descrição
O **Afercon Pay (Carteira Móvel de Pagamentos Online)** é um aplicativo inovador projetado para facilitar transações financeiras digitais, oferecendo uma experiência segura, rápida e acessível. O sistema permite que usuários adicionem fundos, gerenciem saldos, personalizem preferências e realizem pagamentos em diferentes moedas. Além disso, o Afercon Pay traz um conjunto robusto de funcionalidades que tornam as transações online convenientes para indivíduos e negócios.

---

## Funcionalidades Implementadas

### Autenticação e Controle de Acesso
- **Login e Redirecionamento Automático:** Usuários só acessam a rota `home` após autenticação bem-sucedida.
- **Logout Dinâmico:** Logout com implementação via JavaScript para uma experiência mais fluida.

### Gerenciamento de Saldo
- **Exibição Personalizada:** Funções `hide_money` e `show_money` permitem ocultar e revelar saldos na interface do usuário.
- **Preferências de Usuário:** As preferências de exibição são salvas no banco de dados.

### Adição de Fundos
- **Formulário Interativo:** Usuários podem solicitar adição de dinheiro selecionando valores e moedas.
- **Requisição de Processamento:** Notificação enviada ao usuário confirmando a solicitação de adição de fundos.

### Notificações por E-mail
- **Confirmação de Operações:** E-mails automáticos para notificar o usuário sobre pedidos realizados e transações pendentes.

### Configurações de Preferências
- **Ocultar e Mostrar Saldo:** Configurações que ajustam automaticamente a exibição de valores conforme a preferência do usuário.

---

## Funcionalidades a Serem Implementadas

1. **Histórico de Transações:** Registro detalhado de todas as transações realizadas pelo usuário.
2. **Pagamentos a Terceiros:** Envio direto de pagamentos para outros usuários do sistema.
3. **Integração com Gateways de Pagamento:** Processamento automatizado via provedores externos.
4. **Conversão de Moeda:** Cálculo automático para transações em diferentes moedas.
5. **Sistema de Cashback:** Retorno de um percentual de valores gastos em transações.
6. **Autenticação de Dois Fatores (2FA):** Camada extra de segurança para login.
7. **Relatórios Financeiros:** Gráficos e relatórios detalhados do uso do sistema.
8. **Notificações Push:** Alertas em tempo real no dispositivo do usuário.
9. **Modo Offline:** Operação limitada mesmo sem conexão à internet.

---

## Como Clonar e Executar o Projeto

### Requisitos
- PHP >= 8.0
- Composer
- MySQL
- Node.js

### Passos para Clonar e Configurar

1. **Clone o repositório:**
   ```bash
   git clone https://github.com/seu-usuario/cmpo.git
   ```
2. **Acesse o diretório do projeto:**
   ```bash
   cd cmpo
   ```
3. **Instale as dependências do backend:**
   ```bash
   composer install
   ```
4. **Instale as dependências do frontend:**
   ```bash
   npm install && npm run dev
   ```
5. **Configure o arquivo `.env`:**
   - Copie o arquivo de exemplo:
     ```bash
     cp .env.example .env
     ```
   - Atualize as configurações de banco de dados e outras variáveis necessárias.
6. **Gere a chave da aplicação:**
   ```bash
   php artisan key:generate
   ```
7. **Execute as migrações e seeds:**
   ```bash
   php artisan migrate --seed
   ```
8. **Inicie o servidor local:**
   ```bash
   php artisan serve
   ```
9. **Acesse a aplicação no navegador:**
   ```
   http://localhost:8000
   ```

---

## Contato
Para mais informações ou suporte, entre em contato:
- **E-mail:** [geral@aferconpay.com](mailto:geral@aferconpay.com)
- **Site:** [www.aferconpay.com](https://aferconpay.com)

Agradecemos seu interesse no Afercon Pay!
