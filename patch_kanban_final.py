import re

with open("templates/tache/index.html.twig", "r") as f:
    text = f.read()

# 1. Update styles
new_style = """
        .kan-page { max-width: 1120px; margin: 0 auto; }
        
        .kan-top {
            display: flex; flex-wrap: wrap; align-items: center;
            justify-content: space-between; gap: 16px; margin-bottom: 20px;
        }
        .kan-advice {
            font-size: 13px; color: var(--text-muted, #9590B8); font-style: italic; max-width: 40%;
            line-height: 1.5; margin: 0;
        }
        .kan-advice strong { color: #6b7280; font-weight: 500; }
        
        .kan-filters { display: flex; gap: 10px; flex: 1; align-items: center; justify-content: flex-end; }
        .kan-search-input, .kan-priority-select {
            padding: 8px 12px; border: 1px solid #e5e7eb; border-radius: 10px; font-size: 13px;
            background: #fff; outline: none; transition: border-color 0.2s;
        }
        .kan-search-input:focus, .kan-priority-select:focus { border-color: #6A5ACD; }
        
        .kan-export-wrap { position: relative; }
        .kan-export-summary {
            list-style: none; cursor: pointer;
            padding: 8px 16px; border-radius: 10px;
            border: 1px solid #e5e7eb;
            background: linear-gradient(180deg, #fafafa, #f3f4f6);
            font-size: 13px; font-weight: 500; color: var(--text-mid, #4A4570);
        }
        .kan-export-summary::-webkit-details-marker { display: none; }
        .kan-export-menu {
            position: absolute; right: 0; top: calc(100% + 6px);
            background: var(--white, #fff); border: 1px solid var(--border, rgba(106,90,205,.12));
            border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,.08);
            min-width: 200px; padding: 6px; z-index: 50;
        }
        .kan-export-menu a {
            display: block; padding: 10px 12px; border-radius: 8px;
            color: var(--text, #1C1733); text-decoration: none; font-size: 14px;
        }
        .kan-export-menu a:hover { background: var(--purple-pale, #EDE8FA); color: var(--purple, #6A5ACD); }
        .kan-settings-btn {
            list-style: none; cursor: pointer;
            padding: 8px 16px; border-radius: 10px;
            border: 1px solid #e5e7eb;
            background: linear-gradient(180deg, #fafafa, #f3f4f6);
            font-size: 13px; font-weight: 500; color: var(--text-mid, #4A4570);
        }
        
        .kan-progress-wrap { margin-bottom: 24px; position: relative; }
        .kan-progress-text { font-size: 13px; color: #4b5563; margin-bottom: 6px; font-weight: 500; }
        .kan-progress-bar-bg { background: #e5e7eb; border-radius: 10px; height: 8px; width: 100%; overflow: hidden; }
        .kan-progress-bar-fill { background: #6A5ACD; height: 100%; border-radius: 10px; transition: width 0.4s ease; }

        .kan-settings-modal {
            position: fixed; inset: 0; background: rgba(17, 24, 39, .35);
            display: none; align-items: center; justify-content: center; z-index: 999;
        }
        .kan-settings-modal.is-open { display: flex; }
        .kan-settings-card {
            width: min(94vw, 460px); background: #fff; border-radius: 14px;
            border: 1px solid rgba(106,90,205,.12); box-shadow: 0 15px 40px rgba(0,0,0,.15); padding: 16px;
        }
        .kan-settings-card h3 { margin: 0 0 10px; font-size: 16px; color: #1f1b3a; }
        .kan-settings-row { margin-bottom: 10px; }
        .kan-settings-row label { display: block; font-size: 12px; color: #6b7280; margin-bottom: 4px; }
        .kan-settings-row input {
            width: 100%; border: 1px solid #d1d5db; border-radius: 10px;
            padding: 8px 10px; font-size: 13px;
        }
        .kan-settings-actions { display: flex; justify-content: flex-end; gap: 8px; margin-top: 12px; }
        .kan-settings-actions button { border: 1px solid #d1d5db; background: #fff; border-radius: 10px; padding: 8px 12px; cursor: pointer; }
        .kan-settings-actions .is-primary { background: #6A5ACD; border-color: #6A5ACD; color: #fff; }
        .kan-settings-status { font-size: 12px; margin-top: 8px; color: #4b5563; min-height: 16px; }

        .kan-board {
            display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; align-items: stretch;
        }
        @media (max-width: 960px) { .kan-board { grid-template-columns: 1fr; } }

        .kan-col {
            background: rgba(255,255,255,.7); border: 1px solid var(--border, rgba(106,90,205,.12));
            border-radius: 18px; position: relative; box-shadow: 0 2px 16px rgba(106,90,205,.06);
            display: flex; flex-direction: column; overflow: hidden;
            min-height: 280px;
        }
        
        .kan-col-header { padding: 16px 14px 10px; display: flex; align-items: center; justify-content: space-between; border-top: 4px solid #ccc; background: rgba(255,255,255, 0.9); }
        .kan-col[data-statut="A_FAIRE"] .kan-col-header { border-top-color: #9ca3af; }
        .kan-col[data-statut="EN_COURS"] .kan-col-header { border-top-color: #3b82f6; }
        .kan-col[data-statut="TERMINEE"] .kan-col-header { border-top-color: #10b981; }
        
        .kan-col-title {
            font-family: var(--font-head, 'Syne', sans-serif); font-weight: 800; font-size: 13px;
            letter-spacing: 0.06em; text-transform: uppercase; display: flex; align-items: center; gap: 6px;
            margin: 0; color: #4b5563;
        }
        .kan-col[data-statut="A_FAIRE"] .kan-col-title { color: #6b7280; }
        .kan-col[data-statut="EN_COURS"] .kan-col-title { color: #2563eb; }
        .kan-col[data-statut="TERMINEE"] .kan-col-title { color: #059669; }
        
        .kan-col-count { background: rgba(0,0,0,0.06); padding: 2px 8px; border-radius: 12px; font-size: 11px; }
        .kan-col-add-btn { background: none; border: none; cursor: pointer; color: #9ca3af; font-size: 18px; padding: 0 4px; transition: color 0.2s; }
        .kan-col-add-btn:hover { color: #1f2937; }

        .kan-col-body {
            flex: 1; display: flex; flex-direction: column;
            padding: 0 8px 12px; transition: background 0.2s ease;
        }
        .kan-col-body.is-dragover { background: rgba(106, 90, 205, 0.05); }

        .kan-col-list { list-style: none; margin: 0; padding: 0; flex: 1; min-height: 140px; display: flex; flex-direction: column; gap: 12px; }
        
        .kan-empty-state { display: flex; flex-direction: column; align-items: center; justify-content: center; opacity: 0.5; font-size: 13px; min-height: 120px; pointer-events: none; }
        .kan-empty-state svg { width: 32px; height: 32px; margin-bottom: 8px; color: #9ca3af; }

        .kan-card {
            background: var(--white, #fff); border-radius: 12px; padding: 14px;
            box-shadow: 0 2px 8px rgba(0,0,0,.04); border: 1px solid rgba(124,58,237,.1);
            cursor: grab; position: relative; transition: box-shadow 0.2s, transform 0.2s, opacity 0.3s;
            border-left: 4px solid #ccc;
            animation: fadeIn 0.3s ease;
        }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
        
        .kan-col[data-statut="A_FAIRE"] .kan-card { border-left-color: #9ca3af; }
        .kan-col[data-statut="EN_COURS"] .kan-card { border-left-color: #3b82f6; }
        .kan-col[data-statut="TERMINEE"] .kan-card { border-left-color: #10b981; }
        
        .kan-card:hover { box-shadow: 0 8px 20px rgba(0,0,0,.08); transform: translateY(-2px); }
        .kan-card:active { cursor: grabbing; }
        
        .kan-card-top-info { display: flex; justify-content: flex-end; margin-bottom: 6px; }
        .kan-priority-badge { font-size: 10px; padding: 2px 6px; border-radius: 4px; font-weight: bold; text-transform: uppercase; }
        .kan-prio-haute { background: #fee2e2; color: #991b1b; }
        .kan-prio-moyenne { background: #ffedd5; color: #9a3412; }
        .kan-prio-basse { background: #d1fae5; color: #065f46; }
        
        .kan-card-title { font-weight: 800; font-size: 15px; color: var(--text, #1C1733); margin: 0 0 10px; line-height: 1.3; }
        .kan-card-title-text { cursor: pointer; }
        .kan-card-title-text:hover { color: var(--purple, #6A5ACD); }
        
        .kan-card-meta { display: flex; align-items: center; gap: 6px; font-size: 13px; color: #6b7280; font-weight: 500; margin-bottom: 6px; }
        .kan-card-meta.overdue { color: #dc2626; font-weight: 600; }
        .kan-card-meta.late { color: #ea580c; font-weight: 600; }
        
        .kan-card-notes { font-size: 13px; color: var(--text-muted, #9590B8); line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
        
        .kan-card-actions { margin-top: 10px; display: flex; align-items: center; gap: 8px; }
        .kan-card-icon-link { display: inline-flex; align-items: center; justify-content: center; padding: 6px; border-radius: 8px; color: #6b7280; text-decoration: none; transition: background 0.15s, color 0.15s; }
        .kan-card-icon-link:hover { background: var(--purple-pale, #EDE8FA); color: var(--purple, #6A5ACD); }

        .kan-issue-badge {
            position: absolute; right: 14px; bottom: 12px; font-size: 11px; padding: 4px 8px; border-radius: 6px;
            color: #4c1d95; background: #e0e7ff; font-weight: bold; text-decoration: none; transition: background 0.2s;
        }
        .kan-issue-badge:hover { background: #c7d2fe; }

        .kan-col-list.sortable-drag { min-height: 40px; }
        .kan-card.sortable-ghost { opacity: 0.3; background: #f3f4f6; }
"""

text = re.sub(r"<style>.*?</style>", f"<style>\n{new_style}\n</style>", text, flags=re.DOTALL)

# 2. Update macro
macro_code = """
{% macro kan_card(tache, today) %}
    {% set dl = tache.deadline %}
    {% set is_overdue = dl and dl|date('Y-m-d') < today|date('Y-m-d') and tache.statutTache != 'TERMINEE' %}
    {% set is_late = dl and dl|date('Y-m-d') >= today|date('Y-m-d') and dl|date('Y-m-d') <= today|date_modify('+3 days')|date('Y-m-d') and tache.statutTache != 'TERMINEE' %}
    <li class="kan-card priority-{{ tache.priorite|default('moyenne')|lower }}" data-tache-id="{{ tache.id }}" data-priority="{{ tache.priorite|default('moyenne')|lower }}" data-title="{{ tache.nom|lower|escape('html_attr') }}">
        <div class="kan-card-top-info">
            <span class="kan-priority-badge kan-prio-{{ tache.priorite|default('moyenne')|lower }}">{{ tache.priorite|default('Moyenne') }}</span>
        </div>
        <h3 class="kan-card-title"><span class="kan-card-title-text">{{ tache.nom }}</span></h3>
        {% if dl %}
            <div class="kan-card-meta{% if is_overdue %} overdue{% elseif is_late %} late{% endif %}">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
                <span>{{ dl|date('d/m/Y') }}</span>
            </div>
        {% endif %}
        {% if tache.notes %}
            <p class="kan-card-notes">{{ tache.notes }}</p>
        {% endif %}
        <div class="kan-card-actions">
            <a href="{{ path('app_tache_show', {id: tache.id}) }}" class="kan-card-icon-link" title="Voir"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></a>
            <a href="{{ path('app_tache_edit', {id: tache.id}) }}" class="kan-card-icon-link" title="Modifier"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg></a>
        </div>
        {% if tache.githubIssueNumber and tache.githubRepo %}
            <a class="kan-issue-badge" href="https://github.com/{{ tache.githubRepo }}/issues/{{ tache.githubIssueNumber }}" target="_blank" rel="noopener noreferrer">#{{ tache.githubIssueNumber }}</a>
        {% endif %}
    </li>
{% endmacro %}
"""

text = re.sub(r"(?s){% macro kan_card.*?{% endmacro %}", macro_code.strip(), text)

# 3. Update top section
page_content_pattern = r"(<div class=\"kan-top\">.*?)<div class=\"kan-board\" id=\"kan-board-root\">"

page_content = """
    {% set total_tasks = columns.A_FAIRE|length + columns.EN_COURS|length + columns.TERMINEE|length %}
    {% set done_tasks = columns.TERMINEE|length %}
    {% set percent = total_tasks > 0 ? (done_tasks / total_tasks * 100)|round : 0 %}
    <div class="kan-progress-wrap">
        <div class="kan-progress-text" id="kan-progress-text">Progression : {{ percent }}% — {{ done_tasks }} tâches sur {{ total_tasks }} complétées</div>
        <div class="kan-progress-bar-bg"><div class="kan-progress-bar-fill" id="kan-progress-fill" style="width: {{ percent }}%;"></div></div>
    </div>

    <div class="kan-top">
        <p class="kan-advice"><strong>Conseil du jour :</strong> {{ advice }}</p>
        <div class="kan-filters">
            <input type="text" class="kan-search-input" id="kan-search" placeholder="Rechercher...">
            <select class="kan-priority-select" id="kan-priority-filter">
                <option value="all">Toutes</option>
                <option value="haute">Haute</option>
                <option value="moyenne">Moyenne</option>
                <option value="basse">Basse</option>
            </select>
            <details class="kan-export-wrap">
                <summary class="kan-export-summary">Exporter ▾</summary>
                <div class="kan-export-menu">
                    <a href="#" class="js-kanban-export-pdf" data-type="pdf">Exporter en PDF</a>
                    <a href="#" class="js-kanban-export-excel" data-type="excel">Exporter en Excel</a>
                    <a href="{{ path('app_tache_export_csv') }}">Télécharger CSV (legacy)</a>
                </div>
            </details>
            <button type="button" id="kan-github-settings-open" class="kan-settings-btn">GitHub ⚙</button>
        </div>
    </div>

    <div class="kan-board" id="kan-board-root">
"""

text = re.sub(page_content_pattern, page_content.lstrip('\n'), text, flags=re.DOTALL)

# 4. Update columns
cols_pattern = r"(?s)<div class=\"kan-col\" data-statut=\"A_FAIRE\">.*?</div>\n        </div>\n    </div>"

cols_content = """
        <div class="kan-col" data-statut="A_FAIRE">
            <div class="kan-col-header">
                <h2 class="kan-col-title">TODO <span class="kan-col-count" id="count-todo">{{ columns.A_FAIRE|length }}</span></h2>
                <button class="kan-col-add-btn js-kan-col-add" data-statut="A_FAIRE" title="Ajouter une tâche">+</button>
            </div>
            <div class="kan-col-body js-kan-col-zone" tabindex="0">
                <ul class="kan-col-list" data-statut="A_FAIRE">
                    {% for tache in columns.A_FAIRE %}
                        {{ kan.kan_card(tache, today) }}
                    {% endfor %}
                </ul>
                <div class="kan-empty-state" style="display:{% if columns.A_FAIRE|length > 0 %}none{% else %}flex{% endif %};">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                    Aucune tâche ici
                </div>
            </div>
        </div>

        <div class="kan-col kan-col--doing" data-statut="EN_COURS">
            <div class="kan-col-header">
                <h2 class="kan-col-title">DOING <span class="kan-col-count" id="count-doing">{{ columns.EN_COURS|length }}</span></h2>
                <button class="kan-col-add-btn js-kan-col-add" data-statut="EN_COURS" title="Ajouter une tâche">+</button>
            </div>
            <div class="kan-col-body js-kan-col-zone" tabindex="0">
                <ul class="kan-col-list kan-col-list--doing" data-statut="EN_COURS">
                    {% for tache in columns.EN_COURS %}
                        {{ kan.kan_card(tache, today) }}
                    {% endfor %}
                </ul>
                <div class="kan-empty-state" style="display:{% if columns.EN_COURS|length > 0 %}none{% else %}flex{% endif %};">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                    Aucune tâche ici
                </div>
            </div>
        </div>

        <div class="kan-col" data-statut="TERMINEE">
            <div class="kan-col-header">
                <h2 class="kan-col-title">DONE <span class="kan-col-count" id="count-done">{{ columns.TERMINEE|length }}</span></h2>
                <button class="kan-col-add-btn js-kan-col-add" data-statut="TERMINEE" title="Ajouter une tâche">+</button>
            </div>
            <div class="kan-col-body js-kan-col-zone" tabindex="0">
                <ul class="kan-col-list" data-statut="TERMINEE">
                    {% for tache in columns.TERMINEE %}
                        {{ kan.kan_card(tache, today) }}
                    {% endfor %}
                </ul>
                <div class="kan-empty-state" style="display:{% if columns.TERMINEE|length > 0 %}none{% else %}flex{% endif %};">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                    Aucune tâche ici
                </div>
            </div>
        </div>
    </div>
"""

text = re.sub(cols_pattern, cols_content.strip(), text)

# 5. Fix JS
js_filter = """
        function updateCountsAndProgress() {
            var total = document.querySelectorAll('.kan-card').length;
            var done = document.querySelectorAll('.kan-col[data-statut="TERMINEE"] .kan-card').length;
            
            var todoCountEl = document.getElementById('count-todo');
            if (todoCountEl) todoCountEl.textContent = document.querySelectorAll('.kan-col[data-statut="A_FAIRE"] .kan-card').length;
            
            var doingCountEl = document.getElementById('count-doing');
            if (doingCountEl) doingCountEl.textContent = document.querySelectorAll('.kan-col[data-statut="EN_COURS"] .kan-card').length;
            
            var doneCountEl = document.getElementById('count-done');
            if (doneCountEl) doneCountEl.textContent = done;
            
            var pct = total > 0 ? Math.round((done / total) * 100) : 0;
            var fill = document.getElementById('kan-progress-fill');
            if (fill) fill.style.width = pct + '%';
            
            var txt = document.getElementById('kan-progress-text');
            if (txt) txt.textContent = 'Progression : ' + pct + '% — ' + done + ' tâches sur ' + total + ' complétées';
            
            document.querySelectorAll('.kan-col').forEach(function(col) {
                var len = col.querySelectorAll('.kan-card').length;
                var empty = col.querySelector('.kan-empty-state');
                if (empty) empty.style.display = len > 0 ? 'none' : 'flex';
            });
        }

        var searchInput = document.getElementById('kan-search');
        var prioFilter = document.getElementById('kan-priority-filter');
        function filterCards() {
            var txt = (searchInput ? searchInput.value : '').toLowerCase();
            var prio = prioFilter ? prioFilter.value : 'all';
            document.querySelectorAll('.kan-card').forEach(function(card) {
                var cTitle = card.getAttribute('data-title') || '';
                var cPrio = card.getAttribute('data-priority') || '';
                var matchTxt = !txt || cTitle.indexOf(txt) !== -1;
                var matchPrio = prio === 'all' || cPrio === prio;
                card.style.display = (matchTxt && matchPrio) ? '' : 'none';
            });
            updateCountsAndProgress();
        }
        if (searchInput) searchInput.addEventListener('input', filterCards);
        if (prioFilter) prioFilter.addEventListener('change', filterCards);
"""

text = text.replace("bindBoardEvents();\n\n        document.addEventListener", f"bindBoardEvents();\n\n{js_filter}\n\n        document.addEventListener")

# Add the plus button logic
js_add_btn = """
            board.querySelectorAll('.js-kan-col-add').forEach(function(btn) {
                btn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    var st = btn.getAttribute('data-statut');
                    if (st) openNew(st);
                });
            });
"""
text = text.replace("bindBoardEvents();\n\n", f"bindBoardEvents();\n{js_add_btn}\n")


# Change SortableJs options
js_sortable_mods = """
                    onChoose: function (evt) { evt.item.classList.add('sortable-ghost'); },
                    onUnchoose: function (evt) { evt.item.classList.remove('sortable-ghost'); updateCountsAndProgress(); },
                    onChange: function(evt) { updateCountsAndProgress(); },
"""
text = text.replace("emptyInsertThreshold: 40,\n                    fallbackTolerance: 4,", "emptyInsertThreshold: 40,\n                    fallbackTolerance: 4,\n" + js_sortable_mods)

js_onEnd_mod = """
                            updateCountsAndProgress();
                        }).catch(function () {
"""
text = text.replace("}).catch(function () {", js_onEnd_mod)

with open("templates/tache/index.html.twig", "w") as f:
    f.write(text)
