<main class="col">

    <!-- Karten -->
    <div class="row">

        <!-- Karte 1 -->
        <div class="col-lg p-3">
            <div class="card">
                <div class="card-header">ToDo:</div>
                <ul class="list-group list-group-flush">
                    <?php if(isset($todo)): foreach ($todo as $item): ?>
                        <li class="list-group-item"><?= isset($item['bezeichnung']) && isset($item['zustaendig']) ? $item['bezeichnung'].' ('.$item['zustaendig'].')' : (isset($item['bezeichnung']) ? $item['bezeichnung'] : '') ?></li>
                    <?php endforeach; endif; ?>
                </ul>
            </div>
        </div>

        <!-- Karte 2 -->
        <div class="col-lg p-3">
            <div class="card">
                <div class="card-header">Erledigt:</div>
                <ul class="list-group list-group-flush">
                    <?php if(isset($erledigt)): foreach ($erledigt as $item): ?>
                        <li class="list-group-item"><?= isset($item['bezeichnung']) && isset($item['zustaendig']) ? $item['bezeichnung'].' ('.$item['zustaendig'].')' : (isset($item['bezeichnung']) ? $item['bezeichnung'] : '') ?></li>
                    <?php endforeach; endif; ?>
                </ul>
            </div>
        </div>

        <!-- Karte 3 -->
        <div class="col-lg p-3">
            <div class="card">
                <div class="card-header">Verschoben:</div>
                <ul class="list-group list-group-flush">
                    <?php if(isset($verschoben)): foreach ($verschoben as $item): ?>
                        <li class="list-group-item"><?= isset($item['bezeichnung']) && isset($item['zustaendig']) ? $item['bezeichnung'].' ('.$item['zustaendig'].')' : (isset($item['bezeichnung']) ? $item['bezeichnung'] : '') ?></li>
                    <?php endforeach; endif; ?>
                </ul>
            </div>
        </div>

    </div>
</main>

<div class="col-lg-2">