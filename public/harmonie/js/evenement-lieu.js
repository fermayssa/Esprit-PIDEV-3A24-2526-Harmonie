/**
 * Lieu : segmented Présentiel / En ligne, zone présentiel avec fade-in,
 * mode « esprit » → masque l’input texte, affiche le select salles.
 */
(function () {
    var TYPE_ICONS = {
        cours: '📘',
        reunion: '👥',
        loisir: '🎮',
        autre: '📌'
    };

    function isPresentiel(form) {
        var on = form.querySelector('input[name="evenement[lieuType]"]:checked');
        return on && on.value === 'presentiel';
    }

    function updateTypeIcon(form) {
        var sel = form.querySelector('.js-evenement-event-type');
        var iconEl = form.querySelector('.js-event-type-icon');
        if (!iconEl) return;
        var v = sel && sel.value ? sel.value : '';
        iconEl.textContent = TYPE_ICONS[v] || '✨';
    }

    function setPresentielZoneVisible(form, visible) {
        var zone = form.querySelector('.js-evenement-presentiel-zone');
        if (!zone) return;
        if (visible) {
            zone.style.display = '';
            zone.setAttribute('aria-hidden', 'false');
            requestAnimationFrame(function () {
                zone.classList.add('is-visible');
            });
        } else {
            zone.classList.remove('is-visible');
            zone.setAttribute('aria-hidden', 'true');
            var addr = form.querySelector('.js-evenement-lieu-adresse');
            var salle = form.querySelector('.js-evenement-salle-select');
            if (addr) addr.value = '';
            if (salle) salle.selectedIndex = 0;
            setTimeout(function () {
                if (!isPresentiel(form)) zone.style.display = 'none';
            }, 200);
        }
    }

    function updateEspritMode(form) {
        if (!isPresentiel(form)) return;
        var addrRow = form.querySelector('.js-evenement-lieu-adresse-row');
        var salleRow = form.querySelector('.js-evenement-salle-row');
        var addr = form.querySelector('.js-evenement-lieu-adresse');
        var salle = form.querySelector('.js-evenement-salle-select');
        if (!addrRow || !salleRow || !addr) return;
        var v = (addr.value || '').toLowerCase();
        var isEsprit = v.indexOf('esprit') !== -1;
        var hasSalle = !!(salle && salle.value);
        if (hasSalle) {
            addrRow.style.display = 'none';
            salleRow.style.display = '';
            return;
        }
        if (isEsprit) {
            addrRow.style.display = 'none';
            salleRow.style.display = '';
            return;
        }
        addrRow.style.display = '';
        salleRow.style.display = 'none';
        if (salle) salle.selectedIndex = 0;
    }

    function syncPresentiel(form) {
        var show = isPresentiel(form);
        setPresentielZoneVisible(form, show);
        if (show) {
            updateEspritMode(form);
        }
    }

    function bindForm(form) {
        if (!form || form.dataset.harmonyEvenementLieuBound) return;
        form.dataset.harmonyEvenementLieuBound = '1';

        form.querySelectorAll('input[name="evenement[lieuType]"]').forEach(function (r) {
            r.addEventListener('change', function () {
                syncPresentiel(form);
            });
        });

        var addr = form.querySelector('.js-evenement-lieu-adresse');
        if (addr) {
            addr.addEventListener('input', function () {
                updateEspritMode(form);
            });
            addr.addEventListener('change', function () {
                updateEspritMode(form);
            });
        }
        var salleSel = form.querySelector('.js-evenement-salle-select');
        if (salleSel) {
            salleSel.addEventListener('change', function () {
                updateEspritMode(form);
            });
        }

        var typeSel = form.querySelector('.js-evenement-event-type');
        if (typeSel) {
            typeSel.addEventListener('change', function () {
                updateTypeIcon(form);
            });
        }

        syncPresentiel(form);
        updateTypeIcon(form);
        /* Après rendu (panel AJAX / thème choice) : re-sync pour que Présentiel / zone lieu s’affichent. */
        requestAnimationFrame(function () {
            syncPresentiel(form);
        });
        setTimeout(function () {
            syncPresentiel(form);
        }, 50);
    }

    function scan(root) {
        (root || document).querySelectorAll('form').forEach(function (form) {
            if (form.querySelector('.js-evenement-presentiel-zone')) {
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
