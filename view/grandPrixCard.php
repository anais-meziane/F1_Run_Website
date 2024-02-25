<div class="card"> 
    <div class="card__header">
    </div>
    <div class="card__body">
        <span class="tag tag-red"><?= htmlspecialchars($grandprix['NomPil']); ?></span>
        <h4><?= htmlspecialchars($grandprix['NoTV']); ?>  </h4>
        <p><?= htmlspecialchars($grandprix['NatPil']); ?> </p>
    </div>
    <div class="card__footer">
        <div class="user">
            <div class="user__info">
                <h5><?= htmlspecialchars($grandprix['NomGP']); ?>  </h5>
                <p><?= htmlspecialchars($grandprix['DateGP']); ?>  </p>
                <p><?= htmlspecialchars($grandprix['LieuCirc']); ?></p>
                <p><?= htmlspecialchars($grandprix['RecTour']); ?> </p>
            </div>
        </div>
    </div>
</div>