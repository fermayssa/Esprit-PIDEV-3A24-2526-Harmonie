/**
 * Lieu présentiel / en ligne, détection « esprit » pour afficher le choix de salle, icône type.
 */
(function () {
    var TYPE_ICONS = {
        cours: '📘',
        reunion: '👥',
        loisir: '🎮',
        autre: '📌'
    };

    function closestForm(el) {
        return el && el.closest ? el.closest('form') : null;
    }

    function updateTypeIcon(form) {
        if (!form) return;
        var sel = form.querySelector('.js-evenement-event-type');
        var iconEl = form.querySelector('.js-event-type-icon');
        if (!iconEl) return;
        var v = sel && sel.value ? sel.value : '';
        iconEl.textContent = TYPE_ICONS[v] || '✨';
    }

    function isPresentiel(form) {
        var on = form.querySelector('input[name="evenement[lieuType]"]:checked');
        return on && on.value === 'presentiel';
    }

    function togglePresentielBlock(form) {
        var blocks = form.querySelectorAll('.js-evenement-lieu-presentiel, .js-evenement-salle-row');
        var show = isPresentiel(form);
        blocks.forEach(function (b) {
            b.style.display = show ? '' : 'none';
        });
        if (!show) {
            var addr = form.querySelector('.js-evenement-lieu-adresse');
            var salle = form.querySelector('.js-evenement-salle-select');
            if (addr) addr.value = '';
            if (salle) salle.selectedIndex = 0;
        } else {
            updateEspritSalle(form);
        }
    }

    function updateEspritSalle(form) {
        if (!isPresentiel(form)) return;
        var addr = form.querySelector('.js-evenement-lieu-adresse');
        var row = form.querySelector('.js-evenement-salle-row');
        if (!addr || !row) return;
        var v = (addr.value || '').toLowerCase().trim();
        var isEsprit = v.indexOf('esprit') !== -1;
        row.style.display = isEsprit ? '' : 'none';
        if (!isEsprit) {
            var salle = form.querySelector('.js-evenement-salle-select');
            if (salle) salle.selectedIndex = 0;
        }
    }

    function bindForm(form) {
        if (!form || form.dataset.harmonyEvenementLieuBound) return;
        form.dataset.harmonyEvenementLieuBound = '1';

        form.querySelectorAll('input[name="evenement[lieuType]"]').forEach(function (r) {
            r.addEventListener('change', function () {
                togglePresentielBlock(form);
            });
        });

        var addr = form.querySelector('.js-evenement-lieu-adresse');
        if (addr) {
            addr.addEventListener('input', function () {
                updateEspritSalle(form);
            });
            addr.addEventListener('change', function () {
                updateEspritSalle(form);
            });
        }

        var typeSel = form.querySelector('.js-evenement-event-type');
        if (typeSel) {
            typeSel.addEventListener('change', function () {
                updateTypeIcon(form);
            });
        }

        togglePresentielBlock(form);
        updateEspritSalle(form);
        updateTypeIcon(form);
    }

    function scan(root) {
        (root || document).querySelectorAll('form').forEach(function (form) {
            if (form.querySelector('.js-evenement-event-type')) {
                bindForm(form);
            }
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function () {
            scan(document);
        });
    } else {
        scan(document);
    }

    document.addEventListener('harmony:evenement-form-mounted', function (e) {
        var root = e.detail && e.detail.root;
        scan(root || document);
    });
})();
