<div class="card">
    <div class="card__header">
    </div>
    <div class="card__body">
        <span class="tag tag-brown"><?= htmlspecialchars($pilote['NomPil']); ?></span>
        <h4><?= htmlspecialchars($pilote['NoTV']); ?>  </h4>
        <p> <?= htmlspecialchars($pilote['NatPil']); ?></p>
    </div>
    <div class="card__footer">
        <div class="user">
            <div class="user__info">
                <h5><?= htmlspecialchars($pilote['NomTV']); ?>  </h5>
                <p> <?= htmlspecialchars($pilote['Moteur']); ?></p>
            </div>
        </div>
    </div>
</div>