<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', '') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS para o modal -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <!-- Barra Lateral -->
        <nav class="sidebar">
            <h2>Menu</h2>
            <ul>
                <li><a href="{{ url('/home') }}">Início</a></li>
                <li><a href="#" data-bs-toggle="modal" data-bs-target="#salasModal">Nova Sala</a></li>
                <li><a href="#" data-bs-toggle="modal" data-bs-target="#salaFormModal">Nova Sala2</a></li>
                <li><a href="#" data-bs-toggle="modal" data-bs-target="#gerenciarSolicitacoesModal">Gerenciar Solicitações</a></li>
                <li><a href="#">Configurações</a></li>
            </ul>
        </nav>

<!-- Conteúdo Principal -->
<div class="main-content">
    <header>
        <h2>Agenda</h2>
    </header>
    <main class="content-area">
        <div class="rooms-grid">
            <!-- Sala Aquário -->
            <div class="room">
                <h3>Sala Aquário</h3>
                <ul>
                    <li>Tauato</li>
                    <li>DAF/Ditec</li>
                    <li>Aquário</li>
                </ul>
                <img src="{{ asset('img/1.jpg') }}" alt="Imagem Sala Aquário" style="width:104px;height:142px;">
            </div>

            <!-- Sala Daf/Ditec -->
            <div class="room">
                <h3>Sala DAF/Ditec</h3>
                <ul>
                    <li>Tauato</li>
                    <li>DAF/Ditec</li>
                    <li>Aquário</li>
                </ul>
                <img src="{{ asset('img/1.jpg') }}" alt="Imagem Sala DAF/Ditec" style="width:104px;height:142px;">
            </div>

            <!-- Sala Daf/Ditec -->
            <div class="room">
                <h3>Auditório Tauató</h3>
                <ul>
                    <li>Tauato</li>
                    <li>DAF/Ditec</li>
                    <li>Aquário</li>
                </ul>
                <img src="{{ asset('img/1.jpg') }}" alt="Imagem Sala DAF/Ditec" style="width:104px;height:142px;">
            </div>

            <!-- Sala Daf/Ditec -->
            <div class="room">
                <h3>Presidência</h3>
                <ul>
                    <li>Tauato</li>
                    <li>DAF/Ditec</li>
                    <li>Aquário</li>
                </ul>
                <img src="{{ asset('img/1.jpg') }}" alt="Imagem Sala DAF/Ditec" style="width:104px;height:142px;">
            </div>

        </div>
    </main>
</div>
       
          <!-- nova modal -->

          <!-- Botão para abrir a Modal de Salas de Reunião -->
 <!-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#salasModal">
    Salas de Reunião
 </button> -->


<!-- Modal de Salas de Reunião -->
<div class="modal fade" id="salasModal" tabindex="-1" aria-labelledby="salasModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="salasModalLabel">Gerenciar Salas de Reunião</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                
                <!-- Lista de Salas Cadastradas -->
                <div id="sala-list" class="sala-list">
                    <!-- Exemplo de Sala Cadastrada (pode ser gerado dinamicamente) -->
                    <div class="sala-item border p-3 mb-2">
                        <p><strong>Nome:</strong> Sala Aquário</p>
                        <p><strong>Descrição:</strong> Sala de reuniões, primeiro andar.</p>
                        <p><strong>Situação:</strong> Ativa</p>
                        <button class="btn btn-secondary" onclick="editarSala('Sala Aquário')">Editar</button>
                    </div>
                    <!-- Mais salas podem ser adicionadas dinamicamente -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Formulário de Nova Sala e Edição -->
<div class="modal fade" id="salaFormModal" tabindex="-1" aria-labelledby="salaFormModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="salaFormModalLabel">Cadastrar/Editar Sala</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="salaForm">
                    <div class="mb-3">
                        <label for="nomeSala" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nomeSala" required>
                    </div>
                    <div class="mb-3">
                        <label for="descricaoSala" class="form-label">Descrição/Localização</label>
                        <input type="text" class="form-control" id="descricaoSala" required>
                    </div>
                    <div class="mb-3">
                        <label for="situacaoSala" class="form-label">Situação</label>
                        <select id="situacaoSala" class="form-select" required>
                            <option value="Ativa">Ativa</option>
                            <option value="Inativa">Inativa</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>




    <!-- Modal Gerenciar Salas -->
    <!-- <div class="modal fade" id="gerenciarSalasModal" tabindex="-1" aria-labelledby="gerenciarSalasLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="gerenciarSalasLabel">Gerenciar Salas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <button class="btn btn-primary" onclick="novaSala()">Nova Sala</button>
                    <div class="sala-list mt-3">
                        Lista de salas cadastradas (Exemplo estático) -->
                        <!-- <div class="sala-item border p-2 mb-2">
                            <p><strong>Nome:</strong> Sala 01</p>
                            <p><strong>Descrição:</strong> Primeiro andar, sala de reuniões.</p>
                            <p><strong>Situação:</strong> Ativa</p>
                            <button class="btn btn-secondary" onclick="editarSala()">Editar</button>
                        </div> --> 
                        <!-- Mais salas podem ser adicionadas dinamicamente -->
                    <!-- </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Modal Gerenciar Solicitações -->
    <div class="modal fade" id="gerenciarSolicitacoesModal" tabindex="-1" aria-labelledby="gerenciarSolicitacoesLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="gerenciarSolicitacoesLabel">Gerenciar Solicitações</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="solicitacao-list mt-3">
                        <!-- Lista de solicitações de reservas (Exemplo estático) -->
                        <div class="solicitacao-item border p-2 mb-2">
                            <p><strong>Data:</strong> 10/11/2023</p>
                            <p><strong>Horário:</strong> 09:00 - 11:00</p>
                            <p><strong>Sala:</strong> Sala 01</p>
                            <button class="btn btn-primary" onclick="visualizarReserva()">Visualizar</button>
                            <button class="btn btn-secondary" onclick="editarReserva()">Editar</button>
                            <button class="btn btn-danger" onclick="cancelarReserva()">Cancelar</button>
                        </div>
                        <!-- Mais solicitações podem ser adicionadas dinamicamente -->
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- Footer -->
   <footer class="footer">
        <div class="container">
            <p>&copy;Agenda Todos os direitos reservados.</p>   
        </div>
    </footer>

    <script>
    function novaSala() {
    // Limpa os campos do formulário para nova sala
    document.getElementById('salaForm').reset();
    document.getElementById('salaFormModalLabel').innerText = 'Cadastrar Nova Sala';
    // Mostra a modal de formulário para cadastro
    new bootstrap.Modal(document.getElementById('salaFormModal')).show();
}

function editarSala(nomeSala) {
    // Preenche o formulário com os dados da sala selecionada
    document.getElementById('salaFormModalLabel').innerText = 'Editar Sala';
    document.getElementById('nomeSala').value = nomeSala;
    document.getElementById('descricaoSala').value = 'Descrição da sala';  // Aqui você preenche com a descrição atual
    document.getElementById('situacaoSala').value = 'Ativa';  // Situação atual da sala
    
    // Mostra a modal de formulário para edição
    new bootstrap.Modal(document.getElementById('salaFormModal')).show();
}

// Submissão do formulário
document.getElementById('salaForm').onsubmit = function (event) {
    event.preventDefault(); // Evita o reload da página
    const nome = document.getElementById('nomeSala').value;
    const descricao = document.getElementById('descricaoSala').value;
    const situacao = document.getElementById('situacaoSala').value;

    // Exemplo de lógica para salvar os dados (pode ser adaptado para salvar no backend)
    console.log('Sala salva:', { nome, descricao, situacao });
    
    // Fecha a modal de formulário após salvar
    bootstrap.Modal.getInstance(document.getElementById('salaFormModal')).hide();

    // Atualiza a lista de salas (aqui você adicionaria dinamicamente a nova sala na lista)
};
</script>


    <!-- Bootstrap JavaScript (para o funcionamento dos modais) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
