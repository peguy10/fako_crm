<div>
    <h1>Créer une nouvelle police d'assurance</h1>

    <form wire:submit.prevent="create">
        <div class="form-group">
            <label for="policy_number">Numéro de police</label>
            <input type="text" id="policy_number" wire:model.lazy="policy_number" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="client_id">Client</label>
            <select id="client_id" wire:model.lazy="client_id" class="form-control" required>
                <option value="">Sélectionnez un client</option>
                @foreach ($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="coverage">Couverture</label>
            <input type="text" id="coverage" wire:model.lazy="coverage" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="amount_insured">Montant assuré</label>
            <input type="number" id="amount_insured" wire:model.lazy="amount_insured" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="premium">Premium</label>
            <input type="number" id="premium" wire:model.lazy="premium" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="start_date">Date de début</label>
            <input type="date" id="start_date" wire:model.lazy="start_date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="end_date">Date de fin</label>
            <input type="date" id="end_date" wire:model.lazy="end_date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="deductible">Deductible</label>
            <input type="number" id="deductible" wire:model.lazy="deductible" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
</div>
