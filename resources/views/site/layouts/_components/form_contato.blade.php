{{ $slot }}

<form class="{{ $dark }}" action="{{ route('site.contato') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome Completo</label>
        <input type="text" id="nome" class="form-control" name="nome">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="text" id="email" class="form-control" name="email">
    </div>

    <div class="mb-3">
        <label for="mensagem" class="form-label">Mensagem</label>
        <input type="text" id="mensagem" class="form-control" name="mensagem">
    </div>

    <div class="mb-3">
        <select name="motivo" id="motivo" class="form-select">
            <option selected disabled>Qual o motivo do contato?</option>
            <option value="1">Reclamação</option>
            <option value="2">Dúvida</option>
            <option value="3">Elegios</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>