<div class="card"> 
    <div class="card__header">
    </div>
    <div class="card__body">
        <span class="tag tag-blue"><?= htmlspecialchars($resultat['NomPil']); ?></span>
        <h4><?= htmlspecialchars($resultat['NoPil']); ?>  </h4>
    </div>
    <div class="card__footer">
        <div class="user">
            <div class="user__info">
                <h5>Run City : <?= htmlspecialchars($resultat['NoGP']); ?>  </h5>
                <p>Ranking :   <?= htmlspecialchars($resultat['Place']); ?>  </p>
                <p>Points :    <?= htmlspecialchars($resultat['PtObt']); ?>  </p>
            </div>
        </div>
    </div>
</div>